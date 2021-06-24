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
            $collection->string('title');
            $collection->string('description');
<<<<<<< HEAD
=======
            $collection->string('email');
            $collection->string('name');
            $collection->date('birthday');
            $collection->boolean('active');

>>>>>>> ef1ab97ecbb6d84a78012cb3a3168c81c1e49cab
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
