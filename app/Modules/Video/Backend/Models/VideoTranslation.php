<?php

namespace App\Modules\Video\Backend\Models;

use Illuminate\Database\Eloquent\Model;

class VideoTranslation extends Model
{
    protected $fillable = [
        'locale',
        'name',
        'url',
        'seo_keywords',
        'seo_description'
    ];
}

