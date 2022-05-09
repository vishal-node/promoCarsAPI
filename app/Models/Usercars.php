<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usercars extends Model
{
    use HasFactory;


    protected $fillable = [
        'users_id',
        'transaction_id',
        'car_id',
    ];
}
