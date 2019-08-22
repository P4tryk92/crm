<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Shares;
use AppBundle\Form\SharesType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class SharesController extends BaseController
{
    public function indexAction(Request $request, $id, $page)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);

        if (!$lead) {
            return $this->redirectToRoute('lead_index'); 
        }

        $this->setPerPage();

        $query = $this->getDoctrine()->getRepository('AppBundle:Shares')
                    ->createQueryBuilder('c')
                    ->where('c.lead = :leadId')
                    ->setParameter('leadId', $id)
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('shares/index.html.twig', [
            'lead'  => $lead,
            'shares' => $paginator,
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

        $shares = new Shares();

        $form = $this->createForm(SharesType::class, $shares);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $shares = $form->getData();
            $shares->setLead($lead);
            
            $em->persist($shares);
            $em->flush();

            return $this->redirectToRoute('shares_index', ['id' => $lead->getId()]);
        }

        return $this->render('shares/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editAction(Request $request, $leadId, $sharesId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $shares = $em->getRepository('AppBundle:shares')->findOneById($sharesId);

        if (!$lead || !$shares) {
            return $this->redirectToRoute('lead_index'); 
        }

        $form = $this->createForm(SharesType::class, $shares);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $shares = $form->getData();
            $shares->setLead($lead);
            
            $em->persist($shares);
            $em->flush();

            return $this->redirectToRoute('shares_index', ['id' => $lead->getId()]);
        }

        return $this->render('shares/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeAction(Request $request, $leadId, $sharesId)
    {
        $em = $this->getDoctrine()->getManager();
        $lead = $em->getRepository('AppBundle:Lead')->findOneById($leadId);
        $shares = $em->getRepository('AppBundle:Shares')->findOneById($sharesId);

        if (!$lead || !$shares) {
            return $this->redirectToRoute('lead_index'); 
        }

        $em->remove($shares);
        $em->flush();

        return $this->redirectToRoute('shares_index', ['id' => $lead->getId()]);
    }
}
