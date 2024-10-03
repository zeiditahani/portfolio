<?php

namespace App\Controller;

use App\Repository\SkillsectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkskillSectionController extends AbstractController
{
    //#[Route('/skill', name: 'app_skill')]
    public function index(SkillsectionRepository $skillsectionRepository): Response
    {
        $skillsection = $skillsectionRepository ->findAll();
        return $this->render('skskill_section/index.html.twig', [
        'skillsection'=>$skillsection
        ]);
    }
}
