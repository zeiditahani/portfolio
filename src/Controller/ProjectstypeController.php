<?php

namespace App\Controller;

use App\Repository\ProjectstypeRepository;
use App\Entity\Projectstype;
use Doctrine\ORM\PersistentCollection;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectstypeController extends AbstractController
{
    //#[Route('/projectstype', name: 'app_projectstype')]
    public function index(ManagerRegistry $doctrine,ProjectstypeRepository $projectstypeRepository): Response
    {
          // Récupérer les types de projets avec les projets associés
        $projectstype = $projectstypeRepository->findAllWithProjects();

        // Initialiser les projets pour chaque type de projet
      
        return $this->render('home/index.html.twig', [
            'projectstype' => $projectstype,
        ]);
    }
}
