<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuangcao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quangcao', function (Blueprint $table) {
            $table->id();

            $table->string('quangcao_ten');
           
            $table->longText('quangcao_link');
            
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
        Schema::dropIfExists('quangcao');
    }
}
