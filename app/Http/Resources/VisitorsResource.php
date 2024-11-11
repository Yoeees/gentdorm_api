<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VisitorsResource extends JsonResource
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
            'name' => $this->name, // Fixed the syntax error here
            'birthday' => $this->birthday,
            'age' => $this->age,
            'sex' => $this->sex,
            'address' => $this->address,
            'contact_info' => $this->contact_info,
            'visitor_type' => $this->visitor_type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
