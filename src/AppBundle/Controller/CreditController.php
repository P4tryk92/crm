<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Credit;
use AppBundle\Form\CreditType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CreditController extends BaseController
{
    public function indexAction(Request $request, $id, $page)
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
        
        return $this->render('credit/index.html.twig', [
            'lead'  => $lead,
            'credits' => $paginator,
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

        $credit = new Credit();

        $form = $this->createForm(CreditType::class, $credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $credit = $form->getData();
            $credit->setLead($lead);
            
            $em->persist($credit);
            $em->flush();

            return $this->redirectToRoute('credit_index', ['id' => $lead->getId()]);
        }

        return $this->render('credit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editAction(Request $request, $leadId, $creditId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $credit = $em->getRepository('AppBundle:Credit')->findOneById($creditId);

        if (!$lead || !$credit) {
            return $this->redirectToRoute('lead_index'); 
        }

        $form = $this->createForm(CreditType::class, $credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $credit = $form->getData();
            $credit->setLead($lead);
            
            $em->persist($lead);
            $em->flush();

            return $this->redirectToRoute('credit_index', ['id' => $lead->getId()]);
        }

        return $this->render('credit/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeAction(Request $request, $leadId, $creditId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $credit = $em->getRepository('AppBundle:Credit')->findOneById($creditId);

        if (!$lead || !$credit) {
            return $this->redirectToRoute('lead_index'); 
        }

        $em->remove($credit);
        $em->flush();

        return $this->redirectToRoute('credit_index', ['id' => $lead->getId()]);
    }
}
