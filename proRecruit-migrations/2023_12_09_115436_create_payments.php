<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('payment_status', ['paid', 'not paid', 'refunded']);
            // $paid_payment = YourModel::Payment('payment_status', 'paid')->get();

            $table->double('payment_amount');
            $table->date('payment_date');
            $table->double('refund_amount');
            $table->date('refund_date');
            $table->unsignedBigInteger('order_id');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function drop():void
    {
        Schema::table('payments', function(Blueprint $table){
            $table->dropForeign(['order_id']);
            $table->dropColumn('order_id');
        });

        Schema::dropIfExists('payments');

    }
};
