<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    function sponsor()
    {
        return $this->belongsToMany(Sponsor::class);
    }

    function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    function eventType()
    {
        return $this->belongsTo(EventType::class);
    }

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
