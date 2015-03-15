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
    public function latestAction()
    {
        $books = $this->get('book_repo')->findLatest();

        return $this->render(
            'AppBundle:Bookshop:list.html.twig', [
                'books' => $books
            ]
        );
    }

    public function oldestAction()
    {
        $books = $this->get('book_repo')->findOldest();

        return $this->render(
            'AppBundle:Bookshop:list.html.twig', [
                'books' => $books
            ]
        );
    }

    public function createRandomAction()
    {
        $book = $this->get('book_repo')->createRandom();

        return $this->render(
            'AppBundle:Bookshop:createRandom.html.twig', [
                'book' => $book
            ]
        );
    }

}
