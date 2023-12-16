<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen_Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','comment','kitchen_id'];


    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
