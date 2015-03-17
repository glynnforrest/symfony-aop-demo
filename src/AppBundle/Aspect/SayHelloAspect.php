<?php

namespace AppBundle\Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

/**
 * SayHelloAspect
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class SayHelloAspect implements Aspect
{

    /**
     * Method that will be called before real method
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("@annotation(AppBundle\Annotation\SayHello)")
     */
    public function beforeMethodExecution(MethodInvocation $invocation)
    {
        $message = 'Hello from Go AOP before '.get_class($invocation->getThis()).$invocation->getMethod()->name;
        \Symfony\Component\VarDumper\VarDumper::dump($message);
    }
}
