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
            'meeting_id' => $this->meeting_id,
            'mlocation' => MeetingResource::collection($this->mlocation),
            'date' => MeetingResource::collection($this->date),
            'time' => MeetingResource::collection($this->time),
            'type' => MeetingResource::collection($this->type),
            
            
        ];
    }
    

    
}
