<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Lead;
use AppBundle\Entity\Credit;
use AppBundle\Entity\WealthByAppraiser;
use AppBundle\Form\LeadType;
use AppBundle\Form\CreditType;
use AppBundle\Form\WealthByAppraiserType;
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

    public function editAction (Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

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
            
            $em->persist($credit);
            $em->flush();

            return $this->redirectToRoute('lead_credit_index', ['id' => $lead->getId()]);
        }

        return $this->render('lead/credit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editCreditAction(Request $request, $leadId, $creditId)
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

            return $this->redirectToRoute('lead_credit_index', ['id' => $lead->getId()]);
        }

        return $this->render('lead/credit/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeCreditAction(Request $request, $leadId, $creditId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $credit = $em->getRepository('AppBundle:Credit')->findOneById($creditId);

        if (!$lead || !$credit) {
            return $this->redirectToRoute('lead_index'); 
        }

        $em->remove($credit);
        $em->flush();

        return $this->redirectToRoute('lead_credit_index', ['id' => $lead->getId()]);
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

    public function newWealthByAppraiserAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index'); 
        }

        $wealthByAppraiser = new WealthByAppraiser();

        $form = $this->createForm(WealthByAppraiserType::class, $wealthByAppraiser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $wealthByAppraiser = $form->getData();
            $wealthByAppraiser->setLead($lead);
            
            $em->persist($wealthByAppraiser);
            $em->flush();

            return $this->redirectToRoute('lead_wealth_by_appraiser_index', ['id' => $lead->getId()]);
        }

        return $this->render('lead/wealthByAppraiser/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editWealthByAppraiserAction(Request $request, $leadId, $wealthByAppraiserId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $wealthByAppraiser = $em->getRepository('AppBundle:wealthByAppraiser')->findOneById($wealthByAppraiserId);

        if (!$lead || !$wealthByAppraiser) {
            return $this->redirectToRoute('lead_index'); 
        }

        $form = $this->createForm(WealthByAppraiserType::class, $wealthByAppraiser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $wealthByAppraiser = $form->getData();
            $wealthByAppraiser->setLead($lead);
            
            $em->persist($wealthByAppraiser);
            $em->flush();

            return $this->redirectToRoute('lead_wealth_by_appraiser_index', ['id' => $lead->getId()]);
        }

        return $this->render('lead/wealthByAppraiser/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeWealthByAppraiserAction(Request $request, $leadId, $wealthByAppraiserId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $wealthByAppraiser = $em->getRepository('AppBundle:wealthByAppraiser')->findOneById($wealthByAppraiserId);

        if (!$lead || !$wealthByAppraiser) {
            return $this->redirectToRoute('lead_index'); 
        }

        $em->remove($wealthByAppraiser);
        $em->flush();

        return $this->redirectToRoute('lead_wealth_by_appraiser_index', ['id' => $lead->getId()]);
    }

    public function indexWealthByAppraiserAction(Request $request, $id, $page)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index'); 
        }

        $this->setPerPage();

        $query = $this->getDoctrine()->getRepository('AppBundle:wealthByAppraiser')
                    ->createQueryBuilder('c')
                    ->where('c.lead = :leadId')
                    ->setParameter('leadId', $id)
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('lead/wealthByAppraiser/index.html.twig', [
            'lead'  => $lead,
            'wealthsByAppraiser' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
        ]);
    }
}
