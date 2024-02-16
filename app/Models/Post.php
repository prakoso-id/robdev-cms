<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Post extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    // protected $connection = 'pgsql_corner';

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'slug',
        'url',
        'image_thumb'
    ];

    public function medias(): HasMany
    {
        return $this->hasMany(Media::class,'model_id')->select(['id','model_id', 'file_name', $this->raw("CONCAT( '".env("APP_URL_STORAGE")."','Post/',order_column,'/', file_name) as url_file")],)->where('model_type', '=', 'App\Models\Post');
    }
    
}