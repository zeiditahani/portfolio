<?php

namespace App\Controller;

use App\Repository\AboutmeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutMeController extends AbstractController
{
   // #[Route('/about', name: 'app_about')]
    public function index(AboutmeRepository $aboutmeRepository): Response
    {
        $aboutMe = $aboutmeRepository ->findAll();
        return $this->render('about_me/index.html.twig', [
            'aboutMe' => $aboutMe,
        ]);
    }
}
