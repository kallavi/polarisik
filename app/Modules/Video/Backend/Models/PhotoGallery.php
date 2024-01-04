<?php

namespace App\Modules\Video\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Contracts\Activity;

class VideoGallery extends Model
{
    use LogsActivity;
    protected $fillable = [
        'video_id',
    ];


    public function getActivitylogOptions(): LogOptions
    {

        return LogOptions::defaults()
            ->logOnly([
                'video_id',
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
