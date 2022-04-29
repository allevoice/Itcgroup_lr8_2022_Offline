<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->text('imageslide');
            $table->text('logoslide')->nullable();
            $table->string('linkslide')->nullable();
            $table->string('titleslide', 250);
            $table->text('contentslide')->nullable();
            $table->integer('status')->nullable();
            $table->string('langues')->nullable();
            $table->string('level')->nullable();
            $table->string('iduser')->nullable();
            $table->softDeletes()->nullable();
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
        Schema::dropIfExists('slides');
    }
}
