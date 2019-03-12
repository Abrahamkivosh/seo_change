<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_mails', function (Blueprint $table) {

                $table->increments('id');
                $table->longText('to')->nullable();
                $table->string('subject', 255)->nullable();
                $table->string('body', 255)->nullable();
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('client_mails');
    }
}
