<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class, 'id_user', 'id');
    }
    public function therapist()
    {
        return $this->belongsTo(User::class, 'id_terapis', 'id');
    }
}
