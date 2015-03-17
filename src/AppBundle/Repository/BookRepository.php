<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Annotation\Mischief;
use AppBundle\Annotation\WeekendsOnly;
use AppBundle\Annotation\SayHello;
use AppBundle\Entity\Book;

/**
 * BookRepository
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class BookRepository extends EntityRepository
{

    public function findLatest($limit = 20)
    {
        $query = $this->getEntityManager()
                      ->createQuery(
                          'SELECT b FROM AppBundle:Book b ORDER BY b.publishedAt DESC'
                      );
        $query->setMaxResults($limit);

        return $query->getResult();
    }

    /**
     * @Mischief
     */
    public function findOldest($limit = 20)
    {
        $query = $this->getEntityManager()
                      ->createQuery(
                          'SELECT b FROM AppBundle:Book b ORDER BY b.publishedAt ASC'
                      );
        $query->setMaxResults($limit);

        return $query->getResult();
    }

    /**
     * @SayHello
     */
    public function createRandom()
    {
        $faker = \Faker\Factory::create();
        $em = $this->getEntityManager();

        $book = new Book();
        $book->setTitle($faker->sentence);
        $book->setSynopsis($faker->paragraph);
        $book->setPages(rand(50, 500));
        $book->setPublishedAt($faker->dateTimeThisCentury);

        $randomAuthor = $em->createQuery('SELECT a FROM AppBundle:Author a')
                           ->setMaxResults(1)
                           ->getSingleResult();

        $book->setAuthor($randomAuthor);
        $em->persist($book);
        $em->flush();

        return $book;
    }
}
