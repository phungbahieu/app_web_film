<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yeuthich extends Model
{
     protected $table='filmyeuthich';
    protected $fillable=['movie_id','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }
}
