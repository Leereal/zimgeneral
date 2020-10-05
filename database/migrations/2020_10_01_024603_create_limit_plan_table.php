<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLimitPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limit_plan', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('limit_id');
            $table->decimal('amount_yearly');
            $table->decimal('amount_monthly');
            $table->integer('status')->default(1); 
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->foreign('limit_id')->references('id')->on('limits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('limit_plan');
    }
}
