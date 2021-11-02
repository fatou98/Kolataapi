<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use App\Repository\OrderCustomerRepository;
use App\Repository\OrderRepository;
use App\Repository\TailorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;
    /**
     * @Route("/api/order")
     */
class OrderCustomerController extends AbstractController
{
    /**
     * Get all order by user
     * @Route("/list/{tailorId}", name="list_order",methods={"GET"})
     * @param Request $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
public function getAllCustomerByUser(OrderCustomerRepository $orderRepository,$tailorId)
    {
        $dish = $orderRepository->findBy(['tailor'=>$tailorId]);
       
        $data = $this->get('serializer')->serialize($dish, 'json');

                $reponse= json_decode($data);
            
            return new JsonResponse($reponse);
        
    }

}
