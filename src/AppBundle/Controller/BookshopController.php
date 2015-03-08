<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * BookshopController
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class BookshopController extends Controller
{
    public function listAction()
    {
        $books = $this->get('doctrine')
            ->getRepository('AppBundle:Book')
            ->findLatest();

        return $this->render(
            'AppBundle:Bookshop:list.html.twig', [
                'books' => $books
            ]
        );
    }
}
