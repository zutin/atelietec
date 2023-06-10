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
        Schema::create('ticket_facilities', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('noc_protocol')->nullable();
            $table->integer('facility_id')->unsigned();
            $table->integer('ticket_id')->unsigned();
            $table->string('protocol')->nullable();
            $table->timestamps();
        });

        Schema::table('ticket_facilities', function (Blueprint $table) {
            $table->softDeletes();
            $table->foreign('facility_id')->references('id')->on('facilities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('tickets')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
