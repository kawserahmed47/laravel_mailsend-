<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('address')->nullable();
            $table->string('standard_name')->nullable();
            $table->string('site_address')->nullable();
            $table->integer('employees_num')->nullable();
            $table->string('shift_num')->nullable();
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('scope')->nullable();
            $table->string('technical_area')->nullable();
            $table->text('exclusion')->nullable();
            $table->string('audit_team')->nullable();
            $table->string('audit_duration')->nullable();
            $table->string('s_audit_date')->nullable();
            $table->string('e_audit_date')->nullable();
            $table->text('brief')->nullable();
            $table->text('objective')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('companies');
    }
}
