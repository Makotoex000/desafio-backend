<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Doesent need @colum() already know that Film class match with the table films 
class Film extends Model
{
    use HasFactory;
    // $fillable define which collum can be filled
    protected $fillable = [
        'title',
        'summary',
        'cover',
    ];
}
