<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory,LogsActivity;
    protected $guarded = [];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['key','value'])
        ->logOnlyDirty()
        ->setDescriptionForEvent(fn(string $eventName) => "{$eventName} in the Settings")
        ->dontSubmitEmptyLogs();
    }
}