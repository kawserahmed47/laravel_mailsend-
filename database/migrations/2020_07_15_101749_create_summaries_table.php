<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summaries', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('company_id')->nullable();
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('certificate_id')->nullable();
            // $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
            $table->string('stage')->nullable();
            $table->string('improvement_area')->nullable();
            $table->string('nonconformatise')->nullable();
            $table->string('declaration')->nullable();
            $table->string('recommendation')->nullable();
            $table->string('sign_off_date')->nullable();
            $table->string('auditorName')->nullable();
            $table->string('clientName')->nullable();
            $table->string('clidentDesignation')->nullable();
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
        Schema::dropIfExists('summaries');
    }
}
