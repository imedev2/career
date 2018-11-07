<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_reqs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->unsigned()->index()->nullable();
            $table->string('name');
            $table->string('message');
            $table->string('email');
            $table->string('filename');
            $table->boolean('review')->default(false);
            $table->integer('order')->unsigned();
            $table->timestamps();



            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_reqs');
    }
}
