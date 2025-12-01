<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemFctsTable extends Migration
{
    public function up()
    {
        Schema::create('problem_fcts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('register_fct_id');
            $table->string('product_model');
            $table->string('registration_no');
            $table->date('date');
            $table->time('time');
            $table->string('step');
            $table->string('error');
            $table->string('action');
            $table->enum('result', ['OK', 'NG']);
            $table->string('pic');
            $table->timestamps();

            $table->foreign('register_fct_id')->references('id')->on('register_f_c_t_s')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('problem_fcts');
    }
}
