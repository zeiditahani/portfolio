<?php

namespace App\Controller;

use App\Repository\LangageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LangageController extends AbstractController
{
    #[Route('/langage', name: 'app_langage')]
    public function index(LangageRepository $langageRepository): Response
    {
        $langage = $langageRepository->findAll();
        return $this->render('langage/index.html.twig', [
            'langage' => $langage,
        ]);
    }
}
