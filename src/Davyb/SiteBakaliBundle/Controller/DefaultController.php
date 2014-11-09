<?php

namespace Davyb\SiteBakaliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBakaliBundle:Default:index.html.twig');
    }
}
