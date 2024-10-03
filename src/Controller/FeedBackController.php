<?php

namespace App\Controller;

use App\Repository\FeedbackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedBackController extends AbstractController
{
    public function index(FeedbackRepository $feedbackRepository): Response
    {
        $feedback = $feedbackRepository->findAll();
        return $this->render('feed_back/index.html.twig', [
            'feedback' =>$feedback,
        ]);
    }
    #[Route('/review', name: 'app_review')]
    public function addFeedBack(): Response
    {
        return $this->render('feed_back/addFeedBack.html.twig', [
        ]);
    }
}
