<?php

namespace App\Controller;

use App\Service\CartService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    private RequestStack $requestStack; 
    
    #[Route('/mon-panier', name: 'app_cart')]
    public function index(CartService $cartService, RequestStack $requestStack): Response
    { 
    $this-> denyAccessUnlessGranted('ROLE_USER');

        $total=0;


        // dd($cartService->getTotal());

        return $this->render('cart/index.html.twig', [
            'cart' =>$cartService->getTotal(),
            'total' => $total,

        ]);
    }


#[Route('/mon-panier/add/{id}', name: 'cart_add')]
    public function addToRoute(CartService $cartService, int $id ): Response
    {

        $cartService->addToCart($id);
        return $this->redirectToRoute('app_cart');
    }

    #[Route('/mon-panier/remove/{id}', name: 'cart_remove')]
    public function removeToCart(CartService $cartService, int $id ): Response
    {
        $cartService->removeToCart($id);

        return $this->redirectToRoute('app_cart');
    }


    #[Route('/mon-panier/removeAll', name: 'cart_removeAll')]
    public function removeAll(CartService $cartService ): Response
    {
        $cartService->revoveCartAll();

        return $this->redirectToRoute('app_cart');
    } 
}