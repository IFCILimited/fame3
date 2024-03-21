<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('account_holder_name', 255);
            $table->bigInteger('account_no');
            $table->string('ifsc_code', 255);
            $table->string('micr_code', 255);
            $table->string('account_type', 255);
            $table->string('bank_name', 255);
            $table->string('branch_name', 255);
            $table->string('address', 255);
            $table->integer('pincode');
            $table->string('state', 255);
            $table->string('district', 255);
            $table->string('city', 255);
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
        Schema::dropIfExists('bank_details');
    }
}
