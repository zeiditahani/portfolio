<?php

namespace App\Controller;

use App\Repository\ProjectsectionRepository;
use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectSectionController extends AbstractController
{
    //#[Route('/projectsection', name: 'app_project_section')]
    public function index(ProjectsectionRepository $projectsectionRepository): Response
    {
        $projects = $projectsectionRepository->findAll();
        return $this->render('project_section/index.html.twig', [
            'projects' => $projects,
        ]);
    }
}
