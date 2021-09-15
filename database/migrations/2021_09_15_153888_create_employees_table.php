<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firm_id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();

            $table->foreign('firm_id', 'fk_employees_firms_id')->references('id')->on('firms');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('employees', function (Blueprint $table) {
           $table->dropForeign('fk_employees_firms_id');
        });
        Schema::dropIfExists('employees');
    }
}
