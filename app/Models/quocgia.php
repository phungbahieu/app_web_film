<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quocgia extends Model
{
     use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = ['quocgia_ten','quocgia_status'];
    protected $primaryKey = 'quocgia_id';
    protected $table = 'quocgia';
     public function film()
    {
        return $this->hasMany('App\Models\film');
    }
}
