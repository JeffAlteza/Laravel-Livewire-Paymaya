<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payment_transactions', function (Blueprint $table) {
            $table->id('id')->nullable();
            $table->string('student_ref_no')->nullable();
            $table->string('fullname');
            $table->string('email');
            $table->integer('mobile_no');
            $table->integer('amount');
            $table->string('payment_for');
            $table->date('date_of_trans')->nullable();
            $table->string('payment_method');
            $table->string('paymaya_ref_no');
            $table->string('transaction_id');
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
        //
        Schema::dropIfExists('payment_transactions');
    }
};
