<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login()
    {
        return $this->render('auth/login.html.twig');
    }
}
