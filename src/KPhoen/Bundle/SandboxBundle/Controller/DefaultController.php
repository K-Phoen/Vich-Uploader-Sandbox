<?php

namespace KPhoen\Bundle\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KPhoenSandboxBundle:Default:index.html.twig');
    }

    public function detailsPropelAction()
    {
        return $this->render('KPhoenSandboxBundle:Default:details_propel.html.twig');
    }

    public function detailsDoctrineAction()
    {
        return $this->render('KPhoenSandboxBundle:Default:details_doctrine.html.twig');
    }
}
