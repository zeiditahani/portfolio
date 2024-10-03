<?php

namespace App\Controller;

use App\Entity\Projects;
use App\Repository\ProjectsRepository;
use App\Repository\SettingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'app_projects')]
    public function index(ProjectsRepository $projectsRepository): Response
    {
        $allProjects = $projectsRepository->findAll();
        return $this->render('projects/index.html.twig', [
            'projects' => $allProjects,
        ]);
    }
    #[Route('/project{id}', name: 'show_project')]
    public function show(ProjectsRepository $projectsRepository, int $id): Response
    {
        $ProjectsById = $projectsRepository->find($id);
        // Dump the project data to check if it is empty or not
        dump($ProjectsById);

        if (!$ProjectsById) {
            throw $this->createNotFoundException('The project does not exist');
        }
        // Faites quelque chose avec le produit récupéré, par exemple, l'afficher dans un template Twig
        return $this->render('projects/show.html.twig', [
            'Projects' => $ProjectsById,
        ]);
    }
    public function Maxprojects(ProjectsRepository $projectsRepository, SettingRepository $settingRepository)
    {
        $maxProjectsValue = $settingRepository ->returnMaxProjectsValue();
        $projects =$projectsRepository->findByExampleField($maxProjectsValue);
        return $this->render('projects/index.html.twig',['projects'=>$projects]);
    }
}
