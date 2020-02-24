<?php

namespace App\Modules\Base\Traits;

trait Descriptive
{
    public function getDescription(): string
    {
        return optional($this->description) ?? 'Sin descripción';
    }

    public function getShortDescription(): string
    {
        return 'Sin descripción corta';
    }

    public function getLongDescription(): string
    {
        return 'Sin descripción larga';
    }
}
