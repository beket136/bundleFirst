<?php

namespace Volcano\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('::base.html.twig', array('name' => $name));
    }
}
