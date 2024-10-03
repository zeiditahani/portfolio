<?php

namespace App\Controller;

use App\Repository\ExperienceRepository;
use App\Repository\SettingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperienceController extends AbstractController
{
    //#[Route('/experience', name: 'app_experience')]
    public function index(ExperienceRepository $experienceRepository, SettingRepository $settingRepository)
    {
        $maxExperienceValue = $settingRepository ->returnMaxExperienceValue();
        $Maxexperience =$experienceRepository->findByExampleField($maxExperienceValue);
        return $this->render('experience/index.html.twig',['Maxexperience'=>$Maxexperience]);
    }
}
