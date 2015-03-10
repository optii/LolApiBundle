<?php

namespace Opti\LolApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OptiLolApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
