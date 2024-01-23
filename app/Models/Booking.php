<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'ticket_id',
        'print_data',
        'is_printed',
        'url',
        'is_email_opted',
        'email_status',
        'is_sms_opted',
        'sms_status',
        'is_whatsapp_opted',
        'whatsapp_status',
    ];

    function order() {
        return $this->belongsTo(Order::class);
    }

    function ticket() {
        return $this->belongsTo(Ticket::class);
    }

   
}
