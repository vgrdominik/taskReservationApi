<?php


namespace App\Modules\Event\Infrastructure\Controller;

use App\Modules\Base\Infrastructure\Controller\ResourceController;

class Api extends ResourceController
{
    protected function getModelName(): string
    {
        return 'Event';
    }
}
