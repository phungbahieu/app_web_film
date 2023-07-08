<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = ['name','	film_id','com'];
    protected $primaryKey = 'com_id';
    protected $table = 'com';
}
