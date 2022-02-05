<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static function AlivePersone($isAlive)
    {
        if($isAlive==true) {
            return 'yes';
        } else {
            return 'no';
        }
    }
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'first_name' => $this->resource->name,
            'last_name' => $this->resource->last_name,
            'year_of_birth'=>$this->resource->year_of_birth,
            'alive'=>AuthorResource::AlivePersone($this->resource->alive)
        ];
    }
}
