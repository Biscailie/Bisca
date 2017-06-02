<?php

namespace Uab\BiscaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabBiscaBundle:Default:index.html.twig');
    }
}
