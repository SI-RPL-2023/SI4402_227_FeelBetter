<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class, 'id_user', 'id');
    }
    public function articles()
    {
        return $this->hasMany(Article::class, 'id_terapis', 'id');
    }
}
