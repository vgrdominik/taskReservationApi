<?php

namespace App\Modules\Base\Traits;

interface DescriptiveInterface
{
    public function getDescription(): string;
    public function getShortDescription(): string;
    public function getLongDescription(): string;
}
