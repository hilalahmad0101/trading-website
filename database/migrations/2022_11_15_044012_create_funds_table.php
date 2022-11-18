<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('transaction_id')->nullable();
            $table->string('gate_way')->nullable();
            $table->string('amount')->nullable();
            $table->string('charge')->nullable();
            $table->string('payable')->nullable();
            $table->string('total_pkr')->nullable();
            $table->string('sender_account_no')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('screenshot')->nullable();
            $table->string('status')->default('0');
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
        Schema::dropIfExists('funds');
    }
}
