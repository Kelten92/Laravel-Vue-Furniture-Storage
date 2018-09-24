<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Furniture extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'comments' => $this->comments,
            'color' => $this->color,
            'wood' => $this->wood,
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
