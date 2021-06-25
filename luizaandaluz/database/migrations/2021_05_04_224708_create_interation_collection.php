<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterationCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_interation', function (Blueprint $collection) {
            $collection->unique('uuid');
            $collection->index('location');
            $collection->index('attachment');
            $collection->string('title');
            $collection->string('description');
            $collection->string('email');
            $collection->string('name');
            $collection->date('birthday');
            $collection->boolean('active');
            
            $collection->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_interation');
    }
}
