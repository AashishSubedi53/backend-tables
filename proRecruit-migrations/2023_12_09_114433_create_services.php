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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->text('description');
            $table->text('service_image');
            $table->unsignedBigInteger('professional_id');
            $table->unsignedBigInteger('service_category_id');
            $table->timestamps();

            $table->foreign('service_category_id')->references('id')->on('service_category')->onDelete('cascade');
            $table->foreign('professional_id')->references('id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['service_category_id']);
            $table->dropColumn('service_category_id');

            $table->dropForeign(['professional_id']);
            $table->dropColumn('professional_id');

        });
    
        Schema::dropIfExists('services');
    }
};
