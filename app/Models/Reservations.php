<?php

namespace App\Models;
use App\Models\Playgrounds;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
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
  
    public function Playgrounds(){
        return $this->belongsTo(Playgrounds::class,'playground_id');
    
    }

    public function User(){
        return $this->belongsTo(User::class,'user_id');
    
    }
    // public function User(){
    //     return $this->hasMany(User::class,);
    
    // }
}
