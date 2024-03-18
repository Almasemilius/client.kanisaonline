<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChurchService extends Model
{
    protected $fillable = [
        'image_url',
        'name',
        'type',
        'description',
        'minister_type',
        'minister_name',
        'target_type',
        'target_name',
        'location',
        'start_date',
        'end_date',
    ];
    use HasFactory;

    function report() {
        return $this->hasOne(Report::class);
    }
}
