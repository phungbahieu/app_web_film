<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
   
    protected $table = 'film';


    public function year()
    {
        return $this->belongsTo('App\Models\year');
    }

    public function quocgia()
    {
        return $this->belongsTo('App\Models\quocgia');
    }
     public function theloai()
    {
        return $this->belongsToMany('App\Models\theloai');
    }


   
}
