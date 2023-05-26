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
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('designation')->nullable();
            $table->integer('carrier_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('facilities', function (Blueprint $table) {
            $table->softDeletes();
            $table->foreign('carrier_id')->references('id')->on('carriers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
