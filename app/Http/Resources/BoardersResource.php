<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BoardersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'school_id' => $this->school_id,
            'name' => $this->name,
            'birthday' => $this->birthday,
            'age' => $this->age,
            'sex' => $this->sex,
            'address' => $this->address,
            'contact_info' => $this->contact_info,
            'program' => $this->program,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
