<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('title', '20');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
//            $table->decimal('latitude', 10, 2);
//            $table->decimal('longitude', 10, 2);
            $table->point('location');
            $table->spatialIndex('location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
};
