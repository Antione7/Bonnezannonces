<?php

namespace Bonnezannonces\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function registerAction($name)
    {
        return $this->render('UserBundle:Default:register.html.twig', array('name' => $name));
    }
}
