<?php
namespace App\Filament\Resources\PostResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PostTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        return $this->resource->toArray();
        // return [
        //     "modified_name" => $this->name . ' so Cool!'
        // ];
    }
}
