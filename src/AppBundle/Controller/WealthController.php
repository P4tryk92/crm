<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Wealth;
use AppBundle\Form\WealthType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class WealthController extends BaseController
{
    public function indexAction(Request $request, $id, $page)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index'); 
        }

        $this->setPerPage();

        $query = $this->getDoctrine()->getRepository('AppBundle:Wealth')
                    ->createQueryBuilder('c')
                    ->where('c.lead = :leadId')
                    ->setParameter('leadId', $id)
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('wealth/index.html.twig', [
            'lead'  => $lead,
            'wealths' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
        ]);
    }

    public function newAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index'); 
        }

        $wealth = new Wealth();

        $form = $this->createForm(WealthType::class, $wealth);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $wealth = $form->getData();
            $wealth->setLead($lead);
            
            $em->persist($wealth);
            $em->flush();

            return $this->redirectToRoute('wealth_index', ['id' => $lead->getId()]);
        }

        return $this->render('wealth/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editAction(Request $request, $leadId, $wealthId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $wealth = $em->getRepository('AppBundle:Wealth')->findOneById($wealthId);

        if (!$lead || !$wealth) {
            return $this->redirectToRoute('lead_index'); 
        }

        $form = $this->createForm(WealthType::class, $wealth);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $wealth = $form->getData();
            $wealth->setLead($lead);
            
            $em->persist($wealth);
            $em->flush();

            return $this->redirectToRoute('wealth_index', ['id' => $lead->getId()]);
        }

        return $this->render('wealth/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeAction(Request $request, $leadId, $wealthId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $wealth = $em->getRepository('AppBundle:Wealth')->findOneById($wealthId);

        if (!$lead || !$wealth) {
            return $this->redirectToRoute('lead_index'); 
        }

        $em->remove($wealth);
        $em->flush();

        return $this->redirectToRoute('wealth_index', ['id' => $lead->getId()]);
    }
}
