<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\WealthByAppraiser;
use AppBundle\Form\WealthByAppraiserType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class WealthByAppraiserController extends BaseController
{
    public function indexAction(Request $request, $id, $page)
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

    public function newAction(Request $request, $id)
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

            return $this->redirectToRoute('wealth_by_appraiser_index', ['id' => $lead->getId()]);
        }

        return $this->render('lead/wealthByAppraiser/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editAction(Request $request, $leadId, $wealthByAppraiserId)
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

            return $this->redirectToRoute('wealth_by_appraiser_index', ['id' => $lead->getId()]);
        }

        return $this->render('lead/wealthByAppraiser/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeAction(Request $request, $leadId, $wealthByAppraiserId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $wealthByAppraiser = $em->getRepository('AppBundle:wealthByAppraiser')->findOneById($wealthByAppraiserId);

        if (!$lead || !$wealthByAppraiser) {
            return $this->redirectToRoute('lead_index'); 
        }

        $em->remove($wealthByAppraiser);
        $em->flush();

        return $this->redirectToRoute('wealth_by_appraiser_index', ['id' => $lead->getId()]);
    }
}
