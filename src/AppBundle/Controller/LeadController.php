<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\SearchLeadCompany;
use AppBundle\Entity\WealthByAppraiser;
use AppBundle\Form\LeadType;
use AppBundle\Form\LeadSearchType;
use AppBundle\Form\WealthByAppraiserType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class LeadController extends BaseController
{
    public function indexAction(Request $request, $page)
    {
        $this->setPerPage();

        $lead = new SearchLeadCompany();

        $form = $this->createForm(LeadSearchType::class, $lead, ['allow_extra_fields' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $lead = $form->getData();
            $query = $this->getDoctrine()->getRepository('AppBundle:Lead')->getBySearchForm($lead);
            $query->setFirstResult(($page-1) * $this->perPage)
            ->setMaxResults($this->perPage);

        } else {
            $query = $this->getDoctrine()->getRepository('AppBundle:Lead')
                ->createQueryBuilder('l')
                ->orderBy('l.created_at','DESC')
                ->getQuery()
                ->setFirstResult(($page-1) * $this->perPage)
                ->setMaxResults($this->perPage);
        }
        
        $paginator = new Paginator($query);

        return $this->render('lead/index.html.twig', [
            'leads' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
            'form' => $form->createView(),
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

    public function editAction (Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        $form = $this->createForm(LeadType::class, $lead);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $lead = $form->getData();
            $lead->setUpdatedAt(new \DateTime());
            $em->persist($lead);
            $em->flush();

            return $this->redirectToRoute('lead_index'); 
        }

        return $this->render('lead/new.html.twig', [
            'form' => $form->createView(),
            'lead' => $lead,
            'edit' => 1
        ]);
    }

    public function removeAction (Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index');
        }

        $em->remove($lead);
        $em->flush();

        return $this->redirectToRoute('lead_index');
    }
}
