<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // This defines the primary key
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_person');
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('mobile'); // Remove the primary() method
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('username')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->char('isotpverified', 1);
            $table->char('isactive', 1);
            $table->char('isapproved', 1);
            $table->integer('type');
            $table->string('address');
            $table->integer('pincode');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('fax')->nullable();
            $table->string('registration_no');
            $table->string('registration_certificate_upload_id')->nullable();;
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
        Schema::dropIfExists('users');
    }
}
