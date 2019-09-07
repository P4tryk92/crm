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
    public function indexAction(Request $request, $type, $id, $page)
    {
        $em = $this->getDoctrine()->getManager();
        if ($type == 'klient') {
            $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);
            $creditType = 'lead';
        } else {
            $lead = $em->getRepository('AppBundle:Company')->findOneById($id);
            $creditType = 'company';
        }

        if (!$lead) {
            return $this->redirectToRoute($creditType . '_index'); 
        }

        $this->setPerPage();


        $query = $this->getDoctrine()->getRepository('AppBundle:Credit')
                    ->createQueryBuilder('c')
                    ->where('c.' . $creditType . ' = :id')
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('credit/index.html.twig', [
            'lead'  => $lead,
            'type' => $type,
            'paginator' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
        ]);
    }

    public function newAction(Request $request, $type, $id)
    {
        $em = $this->getDoctrine()->getManager();
        if ($type == 'klient') {
            $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);
            $creditType = 'lead';
        } else {
            $lead = $em->getRepository('AppBundle:Company')->findOneById($id);
            $creditType = 'company';
        }

        if (!$lead) {
            return $this->redirectToRoute($creditType . '_index'); 
        }

        $credit = new Credit();

        $form = $this->createForm(CreditType::class, $credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $credit = $form->getData();
            if ($type == 'klient') {
                $credit->setLead($lead);
            } else {
                $credit->setCompany($lead);
                
            }
            $em->persist($credit);
            $em->flush();

            return $this->redirectToRoute('credit_index', ['type' => $type, 'id' => $lead->getId()]);
        }

        return $this->render('credit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editAction(Request $request, $type, $id, $creditId)
    {
        $em = $this->getDoctrine()->getManager();
        if ($type == 'klient') {
            $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);
            $creditType = 'lead';
        } else {
            $lead = $em->getRepository('AppBundle:Company')->findOneById($id);
            $creditType = 'company';
        }
        $credit = $em->getRepository('AppBundle:Credit')->findOneById($creditId);

        if (!$lead || !$credit) {
            return $this->redirectToRoute($creditType . '_index'); 
        }

        $form = $this->createForm(CreditType::class, $credit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $credit = $form->getData();
            if ($type == 'klient') {
                $credit->setLead($lead);
            } else {
                $credit->setCompany($lead);   
            }
            
            $em->persist($lead);
            $em->flush();

            return $this->redirectToRoute('credit_index', ['type' => $type, 'id' => $lead->getId()]);
        }

        return $this->render('credit/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeAction(Request $request, $type, $id, $creditId)
    {
        $em = $this->getDoctrine()->getManager();
        if ($type == 'klient') {
            $lead = $em->getRepository('AppBundle:Lead')->findOneById($id);
            $creditType = 'lead';
        } else {
            $lead = $em->getRepository('AppBundle:Company')->findOneById($id);
            $creditType = 'company';
        }
        $credit = $em->getRepository('AppBundle:Credit')->findOneById($creditId);

        if (!$lead || !$credit) {
            return $this->redirectToRoute('lead_index'); 
        }

        $em->remove($credit);
        $em->flush();

        return $this->redirectToRoute('credit_index', ['type' => $type, 'id' => $lead->getId()]);
    }
}
