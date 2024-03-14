<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
      'name','phone', 'amount','photo','type','remarks','order_id'
       ];
   
   
       public function user()
       {
           return $this->belongsTo(User::class);
       }
       public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
