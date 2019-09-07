<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Company;
use AppBundle\Entity\WealthByAppraiser;
use AppBundle\Form\CompanyType;
use AppBundle\Form\WealthByAppraiserType;
use AppBundle\Controller\BaseController;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CompanyController extends BaseController
{
    public function indexAction(Request $request, $page)
    {
        $this->setPerPage();

        $query = $this->getDoctrine()->getRepository('AppBundle:Company')
                    ->createQueryBuilder('l')
                    ->orderBy('l.created_at','DESC')
                    ->getQuery()
                    ->setFirstResult(($page-1) * $this->perPage)
                    ->setMaxResults($this->perPage);

        $paginator = new Paginator($query);
        
        return $this->render('company/index.html.twig', [
            'companies' => $paginator,
            'perPage' => $this->perPage,
            'page' => $page,
        ]);
    }

    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $company = new Company();

        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $company = $form->getData();
            $company->setCreatedAt(new \DateTime());
            $company->setUpdatedAt(new \DateTime());
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('company_index'); 
        }

        return $this->render('company/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function editAction (Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->findOneById($id);

        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $company = $form->getData();
            $company->setUpdatedAt(new \DateTime());
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('company_index'); 
        }

        return $this->render('company/new.html.twig', [
            'form' => $form->createView(),
            'company' => $company,
            'edit' => 1
        ]);
    }

    public function removeAction (Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->findOneById($id);

        if (!$company) {
            return $this->redirectToRoute('company_index');
        }

        $em->remove($company);
        $em->flush();

        return $this->redirectToRoute('company_index');
    }
}
