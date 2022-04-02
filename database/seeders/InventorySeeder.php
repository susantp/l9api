<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    public function run()
    {
        \App\Models\Inventory::factory(10)->create();
    }
}
