<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('pre')->unique();
            $table->integer('last_number')->default(0);
            $table->integer('dependent_last_number')->default(0);        
            // $table->unsignedBigInteger('limit_id')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
                       
            // $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
