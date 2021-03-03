<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order2s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->enum('housing_type',['property','rent','stood','mutual'])->nullable();
            $table->string('housing_text')->nullable();
            $table->string('district_home')->nullable();
            $table->string('home_no')->nullable();
            $table->string('employer')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('mobile3')->nullable();
            $table->string('mobile4')->nullable();
            $table->string('salary')->nullable();
            $table->enum('financial_information',['monthly','retirement','insurance','financial','other'])->nullable();
            $table->string('financial_information_other')->nullable();
            $table->string('total')->nullable();
            $table->string('file_pdf_download')->nullable();
            $table->enum('status',['panding','accept','refused'])->nullable();
            $table->longtext('refused_reason')->nullable();
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
        Schema::dropIfExists('order2s');
    }
}
