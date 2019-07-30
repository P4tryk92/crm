<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Lead;
use AppBundle\Form\LeadType;

class LeadController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('lead/index.html.twig');
    }

    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = new Lead();

        $form = $this->createForm(LeadType::class, $lead);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            

            return $this->redirectToRoute('homepage'); 
        }

        return $this->render('lead/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
