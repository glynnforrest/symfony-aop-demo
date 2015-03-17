<?php

namespace AppBundle\Pointcut;

use JMS\AopBundle\Aop\PointcutInterface;
use Doctrine\Common\Annotations\Reader;

/**
 * WeekendsOnlyPointcut
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class WeekendsOnlyPointcut implements PointcutInterface
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
        //match methods with the WeekendsOnly annotation
        return null !== $this->reader->getMethodAnnotation($method, 'AppBundle\Annotation\WeekendsOnly');
    }
}
