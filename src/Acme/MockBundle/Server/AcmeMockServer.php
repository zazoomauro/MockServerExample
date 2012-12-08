<?php

namespace Acme\MockBundle\Server;

use MockServer\Server\SymfonyServerInterface;

class AcmeMockServer extends SymfonyServerInterface
{
    protected $kernelClassName = '\Acme\MockBundle\app\AppKernel';
}
