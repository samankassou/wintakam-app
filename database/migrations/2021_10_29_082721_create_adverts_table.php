<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->tinyInteger('type')->default(1);
            $table->foreignId('host_id')->index();
            $table->boolean('hidden')->default(false);
            $table->integer('price_per_month')->nullable();
            $table->integer('price_per_year')->nullable();
            $table->tinyInteger('is_verified')->default(false);
            $table->tinyInteger('approval_status')->default(1);
            $table->foreignId('neighborhood_id')->index();
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
        Schema::dropIfExists('adverts');
    }
}