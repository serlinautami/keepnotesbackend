<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeInitialMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('confirmed')->nullable();
            $table->timestamps();
        });

        Schema::create('labels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label', 20)->nullable();
            $table->text('desc')->nullable();
            $table->timestamps();
        });

        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('label_id')->unsigned();
            $table->string('task')->nullable();
            $table->tinyInteger('completed')->nullable();
            $table->timestamps();
        });

        Schema::table('todos', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('label_id')->references('id')->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
