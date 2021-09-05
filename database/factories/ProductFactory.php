<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'barcode' => $this->faker->word,
            'purchase_price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'sale_price' => $this->faker->randomFloat(2, 0, 99999999.99),
            'unit' => $this->faker->word,
            'quantity_in_stock' => $this->faker->randomNumber(),
            'minimum_quantity_in_stock' => $this->faker->randomNumber(),
        ];
    }
}
