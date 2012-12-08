<?php

namespace Acme\MockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeMockBundle:Default:index.html.twig');
    }
}
