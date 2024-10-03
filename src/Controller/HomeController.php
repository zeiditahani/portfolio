<?php

namespace App\Controller;

use App\Repository\ProjectstypeRepository;
use App\Repository\SettingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(SettingRepository $settingRepository, ProjectstypeRepository $projectstypeRepository): Response
    {
        $projectstype = $projectstypeRepository->findAll();
        $setting = $settingRepository->findAll();
        return $this->render('base.html.twig', [
            'setting' => $setting,
            'projectstype' => $projectstype,
        ]);
       
    }
    #[Route('/cv', name: 'app_cv')]
    public function downloadCv()
    {
        $cvPath = $this->getParameter('kernel.project_dir') . '/public/cv/cv.pdf';
        
        return new BinaryFileResponse($cvPath);
    }
}
