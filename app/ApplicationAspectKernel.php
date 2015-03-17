<?php

use Go\Core\AspectKernel;
use Go\Core\AspectContainer;
use AppBundle\Aspect\SayHelloAspect;

/**
 * ApplicationAspectKernel
 *
 * @author Glynn Forrest <me@glynnforrest.com>
 **/
class ApplicationAspectKernel extends AspectKernel
{
    /**
     * Configure an AspectContainer with advisors, aspects and pointcuts
     *
     * @param AspectContainer $container
     *
     * @return void
     */
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new SayHelloAspect());
    }
}
