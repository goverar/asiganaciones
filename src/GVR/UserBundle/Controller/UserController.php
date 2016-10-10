<?php

namespace GVR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        /* Return new Response ('Bienvenidos a mi modulo de usuario');*/
        
        $em = $this->getdoctrine()->getManager();
        
        $users = $em->getRepository('GVRUserBundle:User')->findAll();
        
        
        
        /*$res = 'Lista de usuario:<br />';
        
        foreach ($users as $user)
        {
            $res .= 'Usuario: ' . $user->getUsername(). ' - Email: ' .$user->getEmail() . '<br />';
            
        }
        
        return new Response ($res);
        */
        
        return $this ->render('GVRUserBundle:User:index.html.twig', array('users' => $users));
        
    }
    
    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('GVRUserBundle:User');
        
        $user = $repository->find($id);
        
        // $user = $repository->findOneByUsername($nombre);
        
        return new Response('Usuario: ' . $user->getUsername() . ' con email: '. $user->getEmail());
        
    }
}
