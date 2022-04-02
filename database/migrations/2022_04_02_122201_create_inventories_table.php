<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->nullable()->constrained();
            $table->float('factory_price', null, null, true)
                ->default(00.00)->comment('bought price from factory');
            $table->float('selling_price', null, null, true)
                ->default(0.0)->comment('selling price to channel or ecommerce platform');
            $table->tinyInteger('quantity')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
};
