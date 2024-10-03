<?php

namespace App\Controller;

use App\Repository\ContactsectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactSectionController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(ContactsectionRepository $contactsectionRepository): Response
    {
        $contactsection = $contactsectionRepository->findAll();
        return $this->render('contact_section/index.html.twig', [
            'contactsection'=> $contactsection,
        ]);
    }
}
