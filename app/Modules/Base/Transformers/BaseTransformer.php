<?php

namespace App\Modules\Base\Transformers;

use App\Modules\Base\Domain\BaseDomain;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseTransformer extends JsonResource
{

    /**
     * The resource instance.
     *
     * @var mixed|BaseDomain
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'icon' => $this->getIcon(),
            'description' => $this->getDescription(),
            'short-description' => $this->getShortDescription(),
            'long-description' => $this->getLongDescription(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
