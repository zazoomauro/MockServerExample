<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GitController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AcmeDemoBundle:Git:index.html.twig');
    }

    /**
     * @Route("/user/{name}")
     */
    public function userAction($name)
    {
        /** @var $gitHub \Acme\DemoBundle\Service\GitHubService */
        $gitHub = $this->get('github.service');
        $user = $gitHub->getUserByName($name);

        return $this->render('AcmeDemoBundle:Git:user.html.twig', array(
            'user' => $user,
            'name' => $name,
        ));
    }
}
