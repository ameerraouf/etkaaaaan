<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order3s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->longtext('pdf_files')->nullable();;
            $table->enum('status',['panding','accept','refused'])->nullable();
            $table->string('pdf_name')->nullable();;
            $table->longtext('refused_reason')->nullable();;
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
        Schema::dropIfExists('order3s');
    }
}
