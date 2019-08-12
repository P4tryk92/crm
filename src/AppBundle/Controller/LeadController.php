<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Lead;
use AppBundle\Entity\Credit;
use AppBundle\Form\LeadType;
use AppBundle\Form\CreditType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class LeadController extends BaseController
{
    public function indexAction(Request $request, $page)
    {
        $this->setPerPage();

        $query = $this->getDoctrine()->getRepository('AppBundle:Lead')
                    ->createQueryBuilder('l')
                    ->orderBy('l.created_at','DESC')
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('lead/index.html.twig', [
            'leads' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
        ]);
    }

    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = new Lead();

        $form = $this->createForm(LeadType::class, $lead);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $lead = $form->getData();
            $lead->setCreatedAt(new \DateTime());
            $lead->setUpdatedAt(new \DateTime());
            $em->persist($lead);
            $em->flush();

            return $this->redirectToRoute('lead_index'); 
        }

        return $this->render('lead/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function newCreditAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index'); 
        }

        $credit = new Credit();

        $form = $this->createForm(CreditType::class, $credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $credit = $form->getData();
            $credit->setLead($lead);
            
            $em->persist($lead);
            $em->flush();

            return $this->redirectToRoute('lead_credit_index', ['id' => $lead->getId()]);
        }

        return $this->render('lead/credit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function indexCreditAction(Request $request, $id, $page)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index'); 
        }

        $this->setPerPage();

        $query = $this->getDoctrine()->getRepository('AppBundle:Credit')
                    ->createQueryBuilder('c')
                    ->where('c.lead = :leadId')
                    ->setParameter('leadId', $id)
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('lead/credit/index.html.twig', [
            'lead'  => $lead,
            'credits' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
        ]);
    }
}
