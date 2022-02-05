<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='books';
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'title'=>$this->resource->title,
            'publisher'=>$this->resource->publisher,
            'number_of_pages'=>$this->resource->number_of_pages,
            'date'=>$this->resource->date,
            'genre'=>$this->resource->genre,
            'title'=>$this->resource->title,
            'author'=> new AuthorResource($this->resource->author),
            'library'=> new LibraryResource($this->resource->library)
        ];
    }
}
