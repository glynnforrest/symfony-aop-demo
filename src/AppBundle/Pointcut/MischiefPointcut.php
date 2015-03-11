<?php

namespace AppBundle\Pointcut;

use JMS\AopBundle\Aop\PointcutInterface;
use Doctrine\Common\Annotations\Reader;

/**
 * MischiefPointcut
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class MischiefPointcut implements PointcutInterface
{
    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function matchesClass(\ReflectionClass $class)
    {
        //match all classes
        return true;
    }

    public function matchesMethod(\ReflectionMethod $method)
    {
        //match methods with the Mischief annotation
        return null !== $this->reader->getMethodAnnotation($method, 'AppBundle\Annotation\Mischief');
    }
}
