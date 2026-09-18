<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateEventInquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
