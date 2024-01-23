<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'name',
        'phone',
        'email',
    ];
}
