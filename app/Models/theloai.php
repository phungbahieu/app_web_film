<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = ['theloai_ten','theloai_status'];
    protected $primaryKey = 'theloai_id';
        protected $table = 'theloai';

 public function film()
    {
        return $this->belongsToMany('App\Models\film');
    }

}
