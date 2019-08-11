<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller {

    protected $perPage;

    protected function setPerPage($perPageNumber = null)
    {
        if ($perPageNumber) {
            $this->perPage = $perPageNumber;
        } else {
            $this->perPage = $this->container->getParameter('perPage');
        }
    }
    
}
