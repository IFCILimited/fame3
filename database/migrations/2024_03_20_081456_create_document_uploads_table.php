<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('document_uploads', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('app_id')->nullable();
        $table->bigInteger('doc_id')->nullable();
        $table->bigInteger('created_by')->nullable();
        $table->bigInteger('updated_by')->nullable();
        $table->string('file_name', 200);
        $table->string('mime', 200);
        $table->bigInteger('file_size');
        $table->binary('uploaded_file');
        $table->string('remarks', 500)->nullable();
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
        Schema::dropIfExists('document_uploads');
    }
}
