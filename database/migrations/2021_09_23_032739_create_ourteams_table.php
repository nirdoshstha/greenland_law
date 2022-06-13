<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourteams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->mediumText('description');
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('ourteams');
    }
}
