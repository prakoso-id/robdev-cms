<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class About extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    // protected $connection = 'pgsql_corner';

    protected $table = 'aboutme';

    protected $fillable = [
        'title',
        'description',
        'story',
        'user_id',
        'slug',
        'url_github',
        'url_linkedin',
        'url_instagram',
        'url_twitter',
        'email',
        'image_thumb',
        'avatar',
    ];

    public function medias(): HasMany
    {
        return $this->hasMany(Media::class,'model_id')->select(['id','model_id', 'file_name', $this->raw("CONCAT( '".env("APP_URL_STORAGE")."','About/',order_column,'/', file_name) as url_file")],)->where('model_type', '=', 'App\Models\About');
    }
    
}