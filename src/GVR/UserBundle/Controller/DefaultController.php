<?php

namespace GVR\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GVRUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
