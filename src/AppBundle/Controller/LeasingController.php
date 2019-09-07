<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Leasing;
use AppBundle\Form\LeasingType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class LeasingController extends BaseController
{
    public function indexAction(Request $request, $id, $page)
    {
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->findOneById($id);

        if (!$company) {
            return $this->redirectToRoute('leasing_index'); 
        }

        $this->setPerPage();

        $query = $this->getDoctrine()->getRepository('AppBundle:Leasing')
                    ->createQueryBuilder('c')
                    ->where('c.company = :id')
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('leasing/index.html.twig', [
            'company'  => $company,
            'paginator' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
        ]);
    }

    public function newAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->findOneById($id);

        if (!$company) {
            return $this->redirectToRoute('leasing_index'); 
        }

        $leasing = new Leasing();

        $form = $this->createForm(LeasingType::class, $leasing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $leasing = $form->getData();
            $leasing->setCompany($company);
                
            $em->persist($leasing);
            $em->flush();

            return $this->redirectToRoute('leasing_index', ['id' => $company->getId()]);
        }

        return $this->render('leasing/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editAction(Request $request, $id, $leasingId)
    {
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->findOneById($id);
        $leasing = $em->getRepository('AppBundle:Leasing')->findOneById($leasingId);

        if (!$company || !$leasing) {
            return $this->redirectToRoute('leasing_index'); 
        }

        $form = $this->createForm(LeasingType::class, $leasing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $leasing = $form->getData();
            $leasing->setCompany($company);   
            
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('leasing_index', ['id' => $company->getId()]);
        }

        return $this->render('leasing/new.html.twig', [
            'form' => $form->createView(),
            'edit' => 1
        ]);
    }

    public function removeAction(Request $request, $type, $id, $leasingId)
    {
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->findOneById($id);
        $leasing = $em->getRepository('AppBundle:Credit')->findOneById($leasingId);

        if (!$company || !$leasing) {
            return $this->redirectToRoute('leasing_index'); 
        }

        $em->remove($credit);
        $em->flush();

        return $this->redirectToRoute('leasing_index', ['id' => $company->getId()]);
    }
}
