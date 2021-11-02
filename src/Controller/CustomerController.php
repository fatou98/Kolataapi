<?php

namespace App\Controller;

use App\Repository\CustomerRepository;
use App\Repository\TailorRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
/**
     * @Route("/customer")
     */
class CustomerController extends AbstractController
{
   /**
     * Get all customer by user
     * @Route("/list/{tailorId}", name="list_customer",methods={"GET"})
     * @param Request $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function getAllCustomerByUser(CustomerRepository $customerRepository,$tailorId)
    {
        $dish = $customerRepository->findBy(['tailor'=>$tailorId]);
       
        $data = $this->get('serializer')->serialize($dish, 'json');

                $reponse= json_decode($data);
            
            return new JsonResponse($reponse);
        
    }


    }
