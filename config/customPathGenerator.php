<?php
namespace Spatie\MediaLibrary\Support\PathGenerator;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Post;

class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media) : string
    {
        return substr(strrchr($media->model_type, '\\'), 1).'/'.$media->id.'/';
    }

    public function getPathForConversions(Media $media) : string
    {
        return $this->getPath($media) . 'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'responsive/';
    }
}

?>