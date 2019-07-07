<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LeadController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('lead/index.html.twig');
    }

    public function newAction(Request $request)
    {
        
        return $this->render('lead/new.html.twig');
    }
}
