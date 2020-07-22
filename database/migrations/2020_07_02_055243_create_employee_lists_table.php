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
            $table->string('company_name')->nullable();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->string('phone_parsonal')->nullable();
            $table->string('phone_official')->nullable();
            $table->string('email')->nullable();
            $table->string('addresh')->nullable();
            $table->string('bankname')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('online_account_number')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('image_nid')->default('default.png');
            $table->string('image_passport')->default('default.png');
            $table->string('image_driving')->default('default.png');
            $table->string('document_pdf')->default('default.png');
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
