<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id');
            $table->integer('settings');
            $table->integer('admins');
            $table->integer('admin_group');
            $table->integer('user');
            $table->integer('store');
            $table->integer('posts');
            $table->integer('orders');
            $table->integer('services');
            $table->integer('banners');
            $table->integer('invoices');
            $table->integer('comments');
            $table->integer('pages');
            $table->integer('offers');
            $table->integer('reports');
            $table->integer('links');
            $table->integer('contactus');
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
        Schema::dropIfExists('users_groups');
    }
}
