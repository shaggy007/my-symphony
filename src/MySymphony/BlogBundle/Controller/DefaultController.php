<?php

namespace MySymphony\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	
    public function indexAction()
    {
    	
        return $this->render('MySymphonyBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
