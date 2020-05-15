<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class ResourcesResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            //'county' => CountyResource::collection($this->name),
            //'location' => LocationResource::collection($this->name),
            'name' => $this->name,
            'contact' => $this->contact,
            'phone' => $this->phone,
            'web_url' => $this->web_url,
            'county' => $this->county,
        ];
    }
}
