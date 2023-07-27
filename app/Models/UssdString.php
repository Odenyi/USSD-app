<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UssdString extends Model
{
    use HasFactory;
    protected $table = 'ussdstring';
    
    protected $fillable =[
        'code',
               
    ];
}
