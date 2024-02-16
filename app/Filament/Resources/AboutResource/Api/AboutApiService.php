<?php
namespace App\Filament\Resources\AboutResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\AboutResource;
use Illuminate\Routing\Router;


class AboutApiService extends ApiService
{
    protected static string | null $resource = AboutResource::class;

    public static function allRoutes(Router $router)
    {
        Handlers\CreateHandler::route($router);
        Handlers\UpdateHandler::route($router);
        Handlers\DeleteHandler::route($router);
        Handlers\PaginationHandler::route($router);
        Handlers\DetailHandler::route($router);
    }
}
