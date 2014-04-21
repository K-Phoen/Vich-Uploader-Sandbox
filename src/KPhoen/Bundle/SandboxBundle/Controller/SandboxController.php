<?php

namespace KPhoen\Bundle\SandboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SandboxController extends Controller
{
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('sonata_admin_dashboard'));
    }
}
