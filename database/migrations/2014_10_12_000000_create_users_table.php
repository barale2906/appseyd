<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usuario')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('nit');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('conductor')->default(false);
            $table->date('cumpleanos')->nullable();
            $table->string('rh', 5)->nullable();
            $table->string('numRunt', 100)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('estado')->default('registro');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
