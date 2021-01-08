<?php


namespace App\EventListener;

use Illuminate\Database\Capsule\Manager;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class RequestListener
{
    private $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $this->manager->bootEloquent();
    }
}
