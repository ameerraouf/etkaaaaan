<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('mobile');
            $table->string('other_mobile');
            $table->integer('country');
            $table->integer('area');
            $table->integer('city');
            $table->enum('level',['user','admin']);
            $table->integer('group_id');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->longtext('api_token');
            $table->integer('expire_from');
            $table->integer('expire_to');
            $table->integer('active_account');
            $table->integer('blocking_user');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
