<?php

namespace App\Http\Resources;

//use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'county' => $this->county,
            'location' => $this->location,
            'date' => $this->date,
            'time' => $this->time,
            'type' => $this->type,
        ];
    }

    public function sort() {
        $sorted = $collection->sortBy('county');
    }
}
