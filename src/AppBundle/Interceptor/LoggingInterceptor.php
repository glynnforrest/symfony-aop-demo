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
        $message = sprintf('Before method %s()', $invocation);
        $this->logger->debug($message);
        \Symfony\Component\VarDumper\VarDumper::dump($message);

        return $invocation->proceed();
    }

}
