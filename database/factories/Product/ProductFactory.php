<?php

declare(strict_types=1);

namespace Database\Factories\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'inventory_id' => null,
            'title' => $this->faker->domainName,
            'description' => $this->faker->paragraph,
            'type' => $this->faker->numberBetween(0, 1),
            'length' => $this->faker->randomFloat('4', '5', '100'),
            'width' => $this->faker->randomFloat('4', '5', '100'),
            'height' => $this->faker->randomFloat('4', '5', '100'),
            'diameter' => $this->faker->randomFloat('4', '5', '100'),
            'product_weight' => $this->faker->randomFloat('5', '0', '100'),
            'shipping_weight' => $this->faker->randomFloat('5', '0', '100'),
            'combo' => null,
            'created_at' => Carbon::now(),
        ];
    }
}
