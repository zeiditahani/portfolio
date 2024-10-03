<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use App\Repository\ContactsectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(ContactsectionRepository $contactRepository): Response
    {
        $contact = $contactRepository->findAll();
        return $this->render('contact/index.html.twig', [
            'contactsection' => $contact,
        ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            //return new Response('success');
            return $this->redirectToRoute('app_home');
         
        }

        return $this->render('contact/index.html.twig', [
           // 'contact' =>$contact,
            'form' => $form,
        ]);
    }
}
