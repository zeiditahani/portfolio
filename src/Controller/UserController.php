<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    #[Route('/login', name: 'login')]
    //#[IsGranted('ROLE_USER', message: 'Accès impossible')]
public function login(AuthenticationUtils $authenticationUtils)
{
// get the login error if there is one
$error = $authenticationUtils->getLastAuthenticationError();
// last username entered by the user
$lastUsername = $authenticationUtils->getLastUsername();
return $this->render('@EasyAdmin/page/login.html.twig', [
'last_username' => $lastUsername,
'error'=> $error,
// the URL users are redirected to after the login (default: '/admin')
'target_path' => $this->generateUrl('admin'),
// the string used to generate the CSRF token. If you don't define
            // this parameter, the login form won't include a CSRF token
            'csrf_token_intention' => 'authenticate',
]);
}
}
