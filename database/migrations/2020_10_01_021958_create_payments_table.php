<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->decimal('amount');
            $table->string('description');
            $table->string('receipt_number')->unique();
            $table->string('ref_number')->nullable();
            $table->string('month_paid_for')->nullable();
            $table->date('date_paid');            
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->ipAddress('ipaddress');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');;
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
