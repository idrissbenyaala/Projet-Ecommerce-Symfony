<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product ;
use App\Repository\ProductRepository;


#[Route('/cart', name: 'cart_')]
class CartController extends AbstractController
{
     #[Route('/', name: 'index')]
    public function index(SessionInterface $session, ProductRepository $productRepository): Response
    {
        $panier = $session->get('panier',[]) ;
        $data=[];
        $total=0 ;
        
        foreach($panier as $id=>$quantity){
            $product=$productRepository->find($id) ;

            $data[]=[
                'product'=>$product ,
                'quantity'=>$quantity
            ] ;
            $total += $product->getPrice()*$quantity ;
        }

        // dd($data) ;


        return $this->render('cart/index.html.twig', [
            'data' => $data,
            'total' => $total,
            'quantity' => count($panier), // Assuming you want to return the total quantity in the cart
        ]);        //, [
        //     'controller_name' => 'CartController',
        // ]);
    }


    #[Route('/add{id}', name: 'add')]
    public function add(Product $product , SessionInterface $session): Response
    {
        $id=$product->getId() ;
        $panier=$session-> get('panier', []) ;

        if(empty($panier[$id])){
            $panier[$id]=1 ;
        }else{
            $panier[$id]++ ;
        }

        $session->set('panier',$panier) ;
        return $this->redirectToRoute('cart_index') ;
    }

    #[Route('/remove{id}', name: 'remove')]
    public function remove(Product $product , SessionInterface $session): Response
    {
        $id=$product->getId() ;
        $panier=$session-> get('panier', []) ;

        if(!empty($panier[$id])){
            if($panier[$id]>1)
            {
                $panier[$id]-- ;
            }else{
                unset($panier[$id]) ;
            }
          
        }

        $session->set('panier',$panier) ;
        return $this->redirectToRoute('cart_index') ;
    }

    #[Route('/delete{id}', name: 'delete')]
    public function delete(Product $product , SessionInterface $session): Response
    {
        $id=$product->getId() ;
        $panier=$session-> get('panier', []) ;

        if(!empty($panier[$id])){      
                unset($panier[$id]) ;         
        }

        $session->set('panier',$panier) ;
        return $this->redirectToRoute('cart_index') ;
    }
}
    

