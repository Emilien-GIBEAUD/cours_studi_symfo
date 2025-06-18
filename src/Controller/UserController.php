<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/user/new', name: 'app_user_new', methods: ["POST", "GET"])]
    public function createUser(Request $request, EntiTyManagerInterface $em, UserPasswordHasherInterface $encoder): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/edit/{id<\d+>}', name: 'app_user_edit', methods: ["POST", "GET"])]
    public function editUser(User $user, Request $request, EntiTyManagerInterface $em): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/list', name: 'app_user_list', methods: "GET")]
    public function listUser(UserRepository $userrepo): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
