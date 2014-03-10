<?php

namespace Everfail\newBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EverfailnewBundle:Default:index.html.twig', array('name' => $name));
    }
}
