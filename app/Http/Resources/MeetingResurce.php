<?php

namespace App\Http\Resources;

//use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class MeetingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            //'county' => CountyResource::collection($this->name),
            //'location' => LocationResource::collection($this->name),
            'date' => $this->date,
            'time' => $this->time,
            'type' => $this->type,
            
            
        ];
    }
    

    
}
