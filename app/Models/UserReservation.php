<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'user_id',
        'last_name',
        'phone_number',
        'Start_date',
        'End_date',
        'playground_id',
    ];
}
