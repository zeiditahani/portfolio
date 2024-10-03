<?php

namespace App\Controller;

use App\Repository\SkillsRepository;
use App\Entity\Skills;
use App\Repository\SettingRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController
{
    //#[Route('/skills', name: 'app_skills')]

    public function index( SkillsRepository $skillsRepository, SettingRepository $settingRepository)
    {
        $maxSkillsValue = $settingRepository ->returnMaxSkillsValue();
        $skills =$skillsRepository->findByExampleField($maxSkillsValue);
        return $this->render('skills/index.html.twig',[
            'skills'=>$skills,
            //'maxSkillsValue'=>$maxSkillsValue
        ]);
    }

    //An exception has been thrown during the rendering of a template ("Undefined method "returnMaxValue". 
    //The method name must start with either findBy, findOneBy or countBy!").
     //=> je dois verifier le nom de methode(de preference je le prends copier/coller)
    //An exception has been thrown during the rendering of a template ("An exception occurred while executing a query:
    // SQLSTATE[42S02]: Base table or view not found: 1146 Table 'portfolio.Setting' doesn't exist").
    //=>je dois verifier le nom de table 
}
