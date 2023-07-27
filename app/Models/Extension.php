<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;
    protected $table = 'extension';
    
    protected $fillable =[
        'user_id',
        'ussd_id',
        'extension',
        'account_no',
        'url',
        'status',
        'amount',
        'expiry_date',
       
    ];
     //get relationship fields
    public function getuserinfo()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    //get relationship fields
    public function getcode()
    {
        return $this->belongsTo(UssdString::class,'ussd_id','id');
    }
}
