<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->integer('id_card')->nullable();
            $table->string('birth')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->string('age')->nullable();
            $table->string('num_of_family')->nullable();
            $table->enum('handicapped',['yes','no'])->nullable();
            $table->integer('handicapped_num')->nullable();
            $table->enum('sick',['yes','no'])->nullable();
            $table->integer('sick_num')->nullable();
            $table->enum('social_status',['male_married','male_unmarried','male_widowed','female_married','female_unmarried','female_widowed'])->nullable();
            $table->enum('pension_insurance',['pension','insurance','no'])->nullable();
            $table->integer('salary')->nullable();
            $table->string('ensure_monthly')->nullable();
            $table->string('yearly_guarantee')->nullable();
            $table->enum('other_income',['yes','no'])->nullable();
            $table->string('type_income')->nullable();
            $table->string('type_salary')->nullable();
            $table->enum('have_job',['yes','no'])->nullable();
            $table->string('title_job')->nullable();
            $table->enum('finance_climate',['yes','no'])->nullable();
            $table->string('finance_climate_salary')->nullable();
            $table->string('total_salary')->nullable();
            $table->enum('transport',['yes','no'])->nullable();
            $table->string('transport_salary')->nullable();
            $table->enum('sheep',['yes','no'])->nullable();
            $table->string('sheep_salary')->nullable();
            $table->enum('camel',['yes','no'])->nullable();
            $table->string('camel_salary')->nullable();
            $table->enum('farm',['yes','no'])->nullable();
            $table->string('farm_salary')->nullable();
            $table->enum('home_property',['yes','no'])->nullable();
            $table->string('home_salary')->nullable();
            $table->enum('employment',['yes','no'])->nullable();
            $table->string('employment_salary')->nullable();
            $table->enum('forestry',['yes','no'])->nullable();
            $table->string('forestry_salary')->nullable();
            $table->enum('basta',['yes','no'])->nullable();
            $table->string('basta_salary')->nullable();
            $table->enum('corporation',['yes','no'])->nullable();
            $table->string('corporation_salary')->nullable();
            $table->longtext('details')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
