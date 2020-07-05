<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->integer('certificate_id')->unsigned();
            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
            $table->integer('stage')->nullable();
            $table->string('question_id')->nullable();
            $table->text('status_id')->nullable();
            $table->text('evidence_id')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
