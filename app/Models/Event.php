<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Collective\Html\Eloquent\FormAccessible;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use SoftDeletes, FormAccessible, Sluggable, SluggableScopeHelpers;

    protected $table = 'events';

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'event_slug'
            ]
        ];
    }

    public function getEventSlugAttribute()
    {
        return $this->event_name . '-' . $this->event_date->format('m-d-Y');
    }

    protected $dates = [
        'event_date',
        'starts_at',
        'stops_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'venue_id',
        'event_name',
        'event_title',
        'event_description',
        'event_date',
        'starts_at',
        'stops_at'
    ];

    // Each Event belongs to one Venue
    public function venue() {
        return $this->belongsTo(
            Venue::class, 'venue_id'
        );
    }

    // Each event can have many participants
    public function participants() {
        return $this->hasMany(Participant::class,'event_id');
    }

    public function formEventDateAttribute($date) {
        return Carbon::parse($date)->format('Y-m-d');
    }

    public function formStartsAtAttribute($value) {
        return Carbon::parse($value)->format('H:i');
    }

    public function formStopsAtAttribute($value) {
        return Carbon::parse($value)->format('H:i');
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function($event)
        {
            $event->participants()->delete();
        });
    }
}