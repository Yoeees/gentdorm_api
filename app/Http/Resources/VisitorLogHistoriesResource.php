<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VisitorLogHistoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'visitor_id' => $this->visitor_id,
            'visitor_name' => $this->visitor->name, // Access the name through the relationship
            'status' => $this->status,
            'time_stamp' => $this->time_stamp,
            'purpose' => $this->purpose,
        ];
    
    }
}
