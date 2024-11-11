<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BoarderLogHistoriesResource extends JsonResource
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
            'boarder_id' => $this->boarder_id,
            'boarder_name' => $this->boarder->name, // Access the name through the relationship
            'status' => $this->status,
            'time_stamp' => $this->time_stamp,
            'reason' => $this->reason,
        ];
    }
}
