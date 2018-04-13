<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('content');
            $table->string('location');
            $table->string('photo');
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
        Schema::dropIfExists('reports');
    }
}
