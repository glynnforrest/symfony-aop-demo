<?php

namespace AppBundle\Interceptor;

use CG\Proxy\MethodInterceptorInterface;
use CG\Proxy\MethodInvocation;
use Psr\Log\LoggerInterface;

/**
 * MischiefInterceptor
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class MischiefInterceptor implements MethodInterceptorInterface
{
    public function intercept(MethodInvocation $invocation)
    {
        $invocation->arguments = [rand(2,30)];
        return $invocation->proceed();
    }
}
