<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->date('date_joined')->nullable(); 
            $table->string('medical_aid_number')->unique(); 
            $table->string('id_number')->unique();
            $table->string('title');
            $table->string('firstname');
            $table->string('surname'); 
            $table->date('date_of_birth')->nullable();  
            $table->mediumText('address')->nullable(); 
            $table->string('gender');
            $table->string('business_telephone')->nullable(); 
            $table->string('home_telephone')->nullable(); 
            $table->string('cellphone')->nullable();
            $table->string('email')->nullable();
            $table->enum('type',['Principal', 'Dependent'])->default('Principal');
            $table->string('avatar')->nullable(); 
            $table->integer('membership_status')->default(1);
            $table->integer('card_status')->default(1);    
            $table->unsignedBigInteger('referrer_id')->nullable(); 
            $table->unsignedBigInteger('principal_id')->nullable(); 
            $table->unsignedBigInteger('branch_id');  
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('plan_id'); 
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');           
            $table->foreign('referrer_id')->references('id')->on('users');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
