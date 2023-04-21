<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiteraturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('literatures', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('author');
            $table->string('year');
            $table->string('quater');
            $table->string('cover_page');
            $table->string('literature_url');
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
        Schema::dropIfExists('literatures');
    }
}
