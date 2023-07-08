<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
         $table->Increments('film_id');
            $table->string('film_ten');
           $table->integer('theloai_id');
            $table->integer('year_id');
             $table->integer('quocgia_id');
                $table->longText('link1');
            $table->string('trailer');
            $table->string('film_tacgia');
            $table->string('film_dienvien');
          
            
            $table->string('time');
           
            $table->text('film_content');
            $table->string('film_price');
            $table->string('product_image');
            $table->integer('product_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
