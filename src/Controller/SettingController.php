<?php

namespace App\Controller;

use App\Repository\SettingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SettingController extends AbstractController
{
    //#[Route('/setting', name: 'app_setting')]
    public function index(SettingRepository $settingRepository): Response
    {
        $setting = $settingRepository->findAll();
        return $this->render('base.html.twig', [
            'setting' => $setting,
        ]);
    }
}
