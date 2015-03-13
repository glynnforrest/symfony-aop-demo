<?php

namespace AppBundle\Interceptor;

use CG\Proxy\MethodInterceptorInterface;
use CG\Proxy\MethodInvocation;

/**
 * WeekendsOnlyInterceptor
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class WeekendsOnlyInterceptor implements MethodInterceptorInterface
{
    public function intercept(MethodInvocation $invocation)
    {
        $now = new \DateTime();
        if ((int) $now->format('N') < 6) {
            throw new \Exception('This method may only be called on weekends');
        }

        return $invocation->proceed();
    }
}
