<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndex2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index2s', function (Blueprint $table) {
            $table->id();
            $table->string('src');
            $table->string('title');
            $table->text('content');
            $table->string('k_title');
            $table->text('k_content');
            $table->string('k2_title');
            $table->text('k2_content');

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
        Schema::dropIfExists('index2s');
    }
}
