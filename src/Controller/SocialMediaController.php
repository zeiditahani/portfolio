<?php

namespace App\Controller;

use App\Repository\SocialmediaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocialMediaController extends AbstractController
{
    //#[Route('/social/media', name: 'app_social_media')]
    public function index(SocialmediaRepository $socialmediaRepository): Response
    {
        $socialMedia=$socialmediaRepository->findAll();
        return $this->render('home/index.html.twig', [
            'socialMedia' => $socialMedia,
        ]);
    }
}
