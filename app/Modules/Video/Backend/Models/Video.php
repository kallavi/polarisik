<?php

namespace App\Modules\Video\Backend\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Contracts\Activity;

class Video extends Model implements TranslatableContract
{
    use HasFactory, Translatable, LogsActivity;

    protected $fillable = [
        'image',
        'status'
    ];
 
    public $translatedAttributes = [
        'locale',
        'name',
        'url',
        'seo_keywords',
        'seo_description'
    ];

    public function getActivitylogOptions(): LogOptions
    {

        return LogOptions::defaults()
            ->logOnly([
                'image',
                'status',
                'url',
                'name',
                'seo_keywords',
                'seo_description'
            ]);
    }
    public function tapActivity(Activity $activity, string $eventName)
    {
        if ($eventName == "created") {
            $activity->description = "Video Galeri eklendi - {$activity->subject->name}";
        }
        if ($eventName == "updated") {
            $activity->description = "Video Galeri güncellendi - {$activity->subject->name}";
        }
        if ($eventName == "deleted") {
            $activity->description = "Video Galeri silindi - {$activity->subject->name}";
        }
    }
}
