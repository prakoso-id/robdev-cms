<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleryPost extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $connection = 'pgsql_corner';

    protected $table = 'galery_posts';

    protected $fillable = [
        'file_path',
        'post_id',
    ];

    
}