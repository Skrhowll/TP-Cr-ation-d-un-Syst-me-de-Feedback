<?php

namespace App\Controller;

use App\Entity\Feedback;
use App\Form\FeedbackType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FeedbackController extends AbstractController
{
    #[Route('/feedback', name: 'feedback')]
    public function feedback(Request $request): Response {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           $result = $request->request->all();
            return $this->render('feedback/resultfeedback.html.twig',[
                'Nom'=> $result['feedback']['nomClient'],
                'EmailClient'=> $result['feedback']['emailClient'],
                'NoteDuProduit'=> $result['feedback']['noteProduit'],
                'Commentaires'=> $result['feedback']['commentaires'],
                'DateDeSoumission'=> $result['feedback']['dateSoumission']['date'],
            ]);

        }
        return $this->render('feedback/feedback.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
