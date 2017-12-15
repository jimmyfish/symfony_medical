<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
        $data = ['Hello There'];
        return $this->render('defaults/index.html.twig', ['data' => $data]);
    }

    public function addUserForm(Request $request)
    {
        $user = new UserType();
        $userData = new User();

        $form = $this->createForm($user);

        return $this->render('defaults/create_user.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
