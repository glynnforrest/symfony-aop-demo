<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * IndexController
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            'AppBundle:Index:index.html.twig'
        );
    }

}
