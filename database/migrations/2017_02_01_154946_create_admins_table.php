<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
          //  $table->integer('user_id');
            $table->string('name');
            $table->integer('settings');
            $table->integer('country');
            $table->integer('users');
            $table->integer('admingroup');
            $table->integer('pages');
            $table->integer('links');
            $table->integer('comments');
            $table->integer('contact');
            $table->integer('banners');
            $table->integer('university');
            $table->integer('levels');
            $table->integer('material');
            $table->integer('payment');
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
        Schema::dropIfExists('admins');
    }
}
