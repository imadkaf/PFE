<?php

namespace aYaline\aYavilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('aYalineaYavilleBundle:Default:index.html.twig', array('name' => $name));
    }

    public function layoutAction()
    {
        return $this->render('aYalineaYavilleBundle::page_layout.html.twig');
    }

}
