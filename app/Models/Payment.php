<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_id',
        'payment_status',
        'email_address',
        'given_name',
        'surname',
        'currency_code',
        'value'
            
    ];
}
