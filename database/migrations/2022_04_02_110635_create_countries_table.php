<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->char('code', 2)->unique('idx_code')->comment('Two-letter country code (ISO 3166-1 alpha-2)');
            $table->string('dial_code', 10)->nullable();
            $table->string('name', 64)->comment('English country name');
            $table->string('full_name', 128)->comment('Full English country name');
            $table->char('iso3', 3)->comment('Three-letter country code (ISO 3166-1 alpha-3)');
            $table->unsignedSmallInteger('number')->comment('Three-digit country number (ISO 3166-1 numeric)');
            $table->char('continent_code', 2)->index('idx_continent_code');
            $table->integer('display_order')->default(900);
            $table->unsignedBigInteger('zone_id')->nullable()->index('countries_ibfk_2');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
