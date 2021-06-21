<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screens', function (Blueprint $table) {
            $table->id();
            $table->string( 'name');
            $table->string( 'address' );
            $table->string( 'city' );
            $table->string( 'state' );
            $table->string( 'country' );
            $table->decimal( 'latitude', 8, 6 );
            $table->decimal( 'longitude', 9, 6 );
            $table->integer( 'mad' );
            $table->float( 'cost_per_second' );
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
        Schema::dropIfExists('screens');
    }
}
