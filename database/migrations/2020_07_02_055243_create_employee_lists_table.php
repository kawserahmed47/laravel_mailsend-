<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bankname')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('phone')->nullable();
            $table->string('addresh')->nullable();
            $table->string('email')->nullable();
            $table->string('details')->nullable();
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
        Schema::dropIfExists('employee_lists');
    }
}
