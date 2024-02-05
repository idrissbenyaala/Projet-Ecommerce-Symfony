<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;
use App\Entity\Category;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Component\HttpFoundation\Session\SessionInterface;


#[Route('/client', name: 'app_client')]
class ClientController extends AbstractController
{
    private $entityManager; // Declare the EntityManager

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_client_index')]
    public function index(SessionInterface $session): Response
    {
        $productRepository = $this->entityManager->getRepository(Product::class);
        $products = $productRepository->findAll();
        $quantity = $session->get('panier', []);

        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
            'products' => $products,
            'quantity' => count($quantity),
        ]);
    }

    #[Route('/details{id}', name: 'app_client_details')]
    public function details(SessionInterface $session): Response
    {
        $productRepository = $this->entityManager->getRepository(Product::class);
        $products = $productRepository->findAll();
        $categoryRepository = $this->entityManager->getRepository(Category::class);
        $categories = $categoryRepository->findAll();
        $quantity = $session->get('panier', []);


        return $this->render('client/details.html.twig', [
            'controller_name' => 'ClientController',
            'products' => $products,
            'categories'=>$categories ,
            'quantity' => count($quantity),

        ]);
    }
}
