<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('company_id')->nullable();
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('certificate_id')->nullable();
            // $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
            $table->integer('stage')->nullable();
            $table->string('quoted_man')->nullable();
            $table->string('employee_detail')->nullable();
            $table->string('change_scope')->nullable();
            $table->string('additional_information')->nullable();
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
        Schema::dropIfExists('changes');
    }
}
