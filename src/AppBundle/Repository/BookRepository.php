<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Annotation\Mischief;

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
                          'SELECT b from AppBundle:Book b ORDER BY b.publishedAt DESC'
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
                          'SELECT b from AppBundle:Book b ORDER BY b.publishedAt ASC'
                      );
        $query->setMaxResults($limit);

        return $query->getResult();
    }
}
