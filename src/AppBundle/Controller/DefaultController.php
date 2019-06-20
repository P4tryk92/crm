<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {   
        return $this->render('login/loginForm.html.twig');
        // return new Response('<html><body>Admin page!</body></html>');
    }

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(UserPasswordEncoderInterface $encoder)
    {
        // whatever *your* User object is
        $user = new AppBundle\Entity\User();
        $plainPassword = 'admin';
        $encoded = $encoder->encodePassword($user, $plainPassword);

        $user->setPassword($encoded);

        dump($user);
        exit;
    }
}
