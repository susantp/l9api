<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_id')->nullable()->constrained();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->string('title');
            $table->text('description');
            $table->tinyInteger('type');
            $table->float('length', null, null, true)->nullable();
            $table->float('width', null, null, true)->nullable();
            $table->float('height', null, null, true)->nullable();
            $table->float('diameter', null, null, true)->nullable();
            $table->float('product_weight', null, null, true)->nullable();
            $table->float('shipping_weight', null, null, true)->nullable();
            $table->json('combo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
