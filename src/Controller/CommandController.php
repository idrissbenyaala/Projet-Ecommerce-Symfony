<?php

namespace App\Controller;

use App\Entity\Command;
use App\Form\CommandType;
use App\Repository\ProductRepository;
use App\Repository\CommandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/command', name: 'app_command_')]
class CommandController extends AbstractController
{
    #[Route('/add', name: 'add', methods: ['GET', 'POST'])]
    public function add(Request $request, SessionInterface $session, ProductRepository $productRepository, EntityManagerInterface $entityManager): Response
    {
        $panier = $session->get('panier', []);

        if ($panier === []) {
            $this->addFlash('message', 'Your cart is empty');
            return $this->redirectToRoute('app_client_index');
        }

        $command = new Command();

        $cartProduct = [];
        foreach ($panier as $productId => $quantity) {
            $product = $productRepository->find($productId);
            if ($product) {
                $cartProduct[] = [
                    'id' => $productId,
                    'name' => $product->getName(),
                    'quantity' => $quantity,
                ];
            }
        }

        $form = $this->createForm(CommandType::class, $command, [
            'product' => $cartProduct,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $command->setProduct($cartProduct);

            $entityManager->persist($command);
            $entityManager->flush();

            $session->set('panier', []);

            return $this->redirectToRoute('app_client_index');
        }

        return $this->render('command/index.html.twig', [
            'controller_name' => 'CommandController',
            'form' => $form->createView(),
            'cartProduct' => $cartProduct,
            'quantity' => count($panier),
        ]);
    }

    #[Route('/', name: 'index')]
    public function index(CommandRepository $commandRepository): Response
    {
        return $this->render('command/list.html.twig', [
            'commands' => $commandRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_command_delete', methods: ['POST'])]
    public function delete(Request $request, Command $command, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$command->getId(), $request->request->get('_token'))) {
            $entityManager->remove($command);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_command_index', [], Response::HTTP_SEE_OTHER);
    }
}
