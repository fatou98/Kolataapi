<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthController extends AbstractController
{
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        
        $data = json_decode(
            $request->getContent(),
            true
        );
        $username = $data['username'];
        $password = $data['password'];
        $email = $data['email'];
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $mobileNumber = $data['mobileNumber'];
        $identityNumber = $data['identityNumber'];
        $addresse = $data['address'];
        
        $user = new User($username);
        $user->setEmail($email);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setMobileNumber($mobileNumber);
        $user->setIdentityNumber($identityNumber);
        $user->setAddress($addresse);
        $user->setPassword($encoder->encodePassword($user, $password));
        $em->persist($user);
        $em->flush();

        return new Response(sprintf('User %s successfully created', $user->getUsername()));
    }

    public function api()
    {
        return new Response(sprintf('Logged in as %s', $this->getUser()->getUsername()));
    }
}
