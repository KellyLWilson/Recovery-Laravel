<?php

namespace App\Http\Resources;

//use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
class meeting extends JsonResource
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
            'county' => CountyResource::collection($this->county),
            'location' => LocationResource::collection($this->location),
            'date' => $this->date,
            'time' => $this->time,
            'type' => $this->type,
        ];
    }

    
}
