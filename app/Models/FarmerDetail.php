<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity','type','price','user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
