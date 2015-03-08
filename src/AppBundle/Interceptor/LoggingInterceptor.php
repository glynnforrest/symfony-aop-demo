<?php

namespace AppBundle\Interceptor;

use CG\Proxy\MethodInterceptorInterface;
use CG\Proxy\MethodInvocation;
use Psr\Log\LoggerInterface;

/**
 * LoggingInterceptor
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class LoggingInterceptor implements MethodInterceptorInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function intercept(MethodInvocation $invocation)
    {
        $this->logger->debug(sprintf('Before method %s', $invocation));
        return $invocation->proceed();
    }

}
