<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhgia extends Model
{
     use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = ['film_id','danhgia'];
    protected $primaryKey = 'danhgia_id';
    protected $table = 'danhgia';
}
