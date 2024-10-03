<?php

namespace App\Controller;

use App\Repository\BannerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BannerController extends AbstractController
{
    #[Route('/banner', name: 'app_banner')]
    public function index(BannerRepository $bannerRepository): Response
    {
        $banner = $bannerRepository ->findAll();
        return $this->render('banner/index.html.twig', [
            'banner' => $banner,
        ]);
    }
}
