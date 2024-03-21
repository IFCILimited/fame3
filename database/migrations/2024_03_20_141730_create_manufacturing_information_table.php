<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturingInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manufacturing_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('company_registration_no', 255)->nullable();
            $table->unsignedBigInteger('registration_certificate_upload_id')->nullable();
            $table->string('gstin_no', 255)->nullable();
            $table->unsignedBigInteger('gstin_registration_upload_id')->nullable();
            $table->string('oem_pan', 255)->nullable();
            $table->unsignedBigInteger('oem_pan_upload_id')->nullable();
            $table->unsignedBigInteger('r_and_d_facilities_upload_id')->nullable();
            $table->decimal('annual_turnover', 15, 2)->nullable();
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
        Schema::dropIfExists('manufacturing_information');
    }
}
