<?php

namespace Davyb\DashBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DashBoardBundle:Default:index.html.twig');
    }
}
