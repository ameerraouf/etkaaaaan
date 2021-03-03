<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitename');
            $table->string('sitemail');
            $table->string('siteurl');
            $table->enum('active_users',['auto','email','sms']);
            $table->enum('active_posts',['auto','panding']);
            $table->enum('active_comment',['auto','panding']);
            $table->integer('profit');
            $table->integer('active_offer');
            $table->enum('status_site',['open','close']);
            $table->longtext('status_message');
            
            $table->longtext('contact_us_info');
            $table->longtext('keywords');
            $table->longtext('discription');

            $table->longtext('test_secret_key');
            $table->longtext('test_publish_key');
            $table->longtext('live_secret_key');
            $table->longtext('live_publish_key');
            $table->enum('payment',['live','sandbox']);
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
        Schema::dropIfExists('settings');
    }
}
