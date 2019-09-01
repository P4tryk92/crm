<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserEditType;
use AppBundle\Form\UserNewType;

class SecurityController extends Controller
{

    public function loginAction(AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
    
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
    
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();

        return $this->render('security/index.html.twig', [
            'users' => $users,
        ]);
    }

    public function editAction($id, Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneById($id);

        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $oldPassword = $form->get('oldPassword')->getData();
            $isPasswordValid = $encoder->isPasswordValid($user, $oldPassword);
            
            if ($isPasswordValid) {
                $plainPassword = $form->get('password')->getData();
                $encoded = $encoder->encodePassword($user, $plainPassword);
                $user->setPassword($encoded);
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('homepage'); 
            } else {
                $error = 'Nieprawidłowe hasło';

                return $this->render('security/edit.html.twig', [
                    'form'  => $form->createView(),
                    'error' => $error,
                ]);
            }
        }
        return $this->render('security/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function newAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();

        $form = $this->createForm(UserNewType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $username = strtolower($user->getFirstName()[0] . $user->getLastName());
            $plainPassword = substr($user->getPin(), -4);
            $encoded = $encoder->encodePassword($user, $plainPassword);
            
            $user->setPassword($encoded);
            $user->setUsername($username);
            $user->setIsActive(true);

            $em->persist($user);
            $em->flush();
            $userId = $this->getUser()->getId();
            return $this->redirectToRoute('user_new_success', ['id' => $user->getId()]);
        }

        return $this->render('security/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    public function successAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findOneById($id);
        return $this->render('security/newuser.html.twig', [
            'user' => $users,
        ]);
    }
}