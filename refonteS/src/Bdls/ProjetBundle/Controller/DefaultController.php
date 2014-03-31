<?php

namespace Bdls\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BdlsProjetBundle:Default:index.html.twig', array('name' => $name));
    }
}
