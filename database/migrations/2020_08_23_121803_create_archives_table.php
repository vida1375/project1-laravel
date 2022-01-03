<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('post_id');
            $table->string('post_name')->unsigned();
            $table->foreign('post_name')->references('product_name')->on('posts');
            $table->float('post_price')->unsigned();
            $table->foreign('post_price')->references('product_price')->on('posts');
            $table->string('archive_name');
            $table->string('archive_name_kanevadegi');
            $table->string('address');
            $table->integer('phone');
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
        Schema::dropIfExists('archives');
    }
}
