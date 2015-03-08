<?php

namespace AppBundle\Pointcut;

use JMS\AopBundle\Aop\PointcutInterface;

/**
 * BookRepositoryPointcut
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class BookRepositoryPointcut implements PointcutInterface
{
    public function matchesClass(\ReflectionClass $class)
    {
        return $class->name === 'AppBundle\Repository\BookRepository';
    }

    public function matchesMethod(\ReflectionMethod $method)
    {
        //match all methods
        return true;
    }
}
