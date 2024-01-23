<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'total',
        'amount_paid',
        'is_paid',
        'payment_method',
        'is_email_opted',
        'is_sms_opted',
        'is_whatsapp_opted',
    ];

    function event()
    {
        return $this->belongsTo(Event::class);
    }

    function billing()
    {
        return $this->hasOne(BillingInformation::class);
    }
}
