<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class year extends Model
{
     use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = ['year_ten','year_status'];
    protected $primaryKey = 'year_id';
    protected $table = 'year';
     public function film()
    {
        return $this->hasMany('App\Models\film');
    }
}
