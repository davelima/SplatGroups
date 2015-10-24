<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', array(
            
        ));
    }
    
    /**
     * @Route("/login/", name="login")
     */
    public function loginAction(Request $request)
    {
        return $this->render('default/login.html.twig', array(
        ));
    }
    
    /**
     * @Route("/register/", name="register") 
     */
    public function registerAction(Request $request)
    {
        return $this->render('default/register.html.twig', array(
            
        ));
    }
    
    /**
     * @Route("/rooms/", name="rooms") 
     */
    public function roomsAction(Request $request)
    {
        return $this->render('default/rooms.html.twig', array(
            
        ));
    }
}
