<?php

namespace Everfail\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EverfailBundle:Default:index.html.twig', array('name' => $name));
    }
}
