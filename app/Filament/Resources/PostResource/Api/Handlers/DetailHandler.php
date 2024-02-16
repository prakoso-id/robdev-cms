<?php

namespace App\Filament\Resources\PostResource\Api\Handlers;

use App\Filament\Resources\SettingResource;
use App\Filament\Resources\PostResource;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class DetailHandler extends Handlers
{
    public static string | null $uri = '/{id}';
    public static string | null $resource = PostResource::class;


    public function handler($id)
    {
        $model = static::getModel()::query();

        $query = QueryBuilder::for(
            $model->where('slug','LIKE', '%'.$id.'%')
        )
        ->with('medias')->first();

        if (!$query) return static::sendNotFoundResponse();

        $transformer = static::getApiTransformer();
        
        return new $transformer($query);
    }
}
