<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;


#[Route('/product' , name:'app_product')]
class ProductController extends AbstractController
{
    #[Route('/', name: 'app_product_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_product_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
     $product = new Product();
    $form = $this->createForm(ProductType::class, $product);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imagefile = $form->get('image')->getData();
        $multi = $form->get('multiplesImage')->getData() ;
        if ($imagefile) {
            $originalFilename = pathinfo($imagefile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imagefile->guessExtension();
            try {
                $imagefile->move(
                    $this->getParameter('product_directory'),
                    $newFilename
                );
            } catch (FileException $e) {
                return $this->redirectToRoute('app_product_new');
            }

            $product->setImage($newFilename);
        }

        if ($multi) {
            $filenameArray = [];
        
            foreach ($multi as $key => $multifile) {
                $originalFilename2 = pathinfo($multifile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename2 = $slugger->slug($originalFilename2);
                $newFilename2 = $safeFilename2 . '-' . uniqid() . '.' . $multifile->guessExtension();
                array_push($filenameArray, $newFilename2);
                try {
                    $multifile->move(
                        $this->getParameter('multi_directory'),
                        $newFilename2
                    );
                } catch (FileException $e) {
                    return $this->redirectToRoute('app_product_new');
                }
     // Use $newFilename instead of $image
            }
        
            $product->setMultiplesImage($filenameArray);
        }
        // Persist the entity after handling the file upload
        $entityManager->persist($product);
        $entityManager->flush();

        return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('product/new.html.twig', [
        'product' => $product,
        'form' => $form,
    ]); 
}

    #[Route('/{id}', name: 'app_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_product_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
    
            // Check if a new image was uploaded
            if ($imageFile instanceof UploadedFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
    
                try {
                    $imageFile->move(
                        $this->getParameter('product_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Error uploading the image file');
                }
    
                $product->setImage($newFilename);
            }
            $multiFiles = $form->get('multiplesImage')->getData();

            if ($multiFiles) {
                $filenameArray = [];
    
                foreach ($multiFiles as $key => $multifile) {
                    $originalFilename2 = pathinfo($multifile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename2 = $slugger->slug($originalFilename2);
                    $newFilename2 = $safeFilename2 . '-' . uniqid() . '.' . $multifile->guessExtension();
                    array_push($filenameArray, $newFilename2);
    
                    try {
                        $multifile->move(
                            $this->getParameter('multi_directory'),
                            $newFilename2
                        );
                    } catch (FileException $e) {
                        throw new \Exception('Error uploading multiple image file');
                    }
                }
    
                $product->setMultiplesImage($filenameArray);
            }
    
            $entityManager->flush();
    
            return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
    }
}
