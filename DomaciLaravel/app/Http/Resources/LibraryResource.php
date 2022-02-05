<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LibraryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'name' => $this->resource->name,
            'city' => $this->resource->city,
            'address'=>$this->resource->address,
            'email'=>$this->resource->email,
            'about_us'=>$this->resource->about_us,
        ];
    }
}
