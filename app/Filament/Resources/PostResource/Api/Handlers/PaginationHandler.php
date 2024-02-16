<?php
namespace App\Filament\Resources\PostResource\Api\Handlers;

use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;
use App\Filament\Resources\PostResource;
use App\Models\Post;

class PaginationHandler extends Handlers {
    public static string | null $uri = '/';
    public static string | null $resource = PostResource::class;


    public function handler()
    {
        $model = static::getModel();

        $query = QueryBuilder::for($model)->with('medias')
        ->allowedFields($model::$allowedFields ?? [])
        ->allowedSorts($model::$allowedSorts ?? [])
        ->allowedFilters($model::$allowedFilters ?? [])
        ->paginate(request()->query('per_page'))
        ->appends(request()->query());

        // $users = Post::with('medias')->paginate();


        return static::getApiTransformer()::collection($query);
    }
}