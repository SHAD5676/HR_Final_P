<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('payrolls', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('employee_id');
     
        $table->string('month'); 
        $table->year('year');

   
        $table->decimal('basic_salary', 10, 2);
        $table->decimal('allowance', 10, 2)->default(0); 
        $table->decimal('deduction', 10, 2)->default(0); 
        $table->decimal('net_salary', 10, 2); 
        
        $table->string('status')->default('paid'); 
        $table->timestamps();

      
        $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
    });
}
};
