<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $allLeads = $em->getRepository('AppBundle:Lead')->getAllLeads();
        $activeLeads = $em->getRepository('AppBundle:Lead')->getActiveLeads();

        return $this->render('default/index.html.twig', array(
            'allLeads' => $allLeads,
            'activeLeads' => $activeLeads,
        ));
    }
}
