<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('eventName');
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->string('speaker');
            $table->string('speakerDesignation');
            $table->string('speakerInstitute');
            $table->string('speakerImage')->nullable();
            $table->longText('description');
            $table->string('eventImage')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('events');
    }
}
