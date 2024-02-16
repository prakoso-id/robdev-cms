<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory;

    // protected $connection = 'pgsql_corner';

    protected $table = 'media';

    protected $fillable = [
        'file_path',
        'post_id',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function about()
    {
        return $this->belongsTo(About::class);
    }

    
}