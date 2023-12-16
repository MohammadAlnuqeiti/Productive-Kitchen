<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen_Details extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','kitchen_name','short_description','long_description','image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
