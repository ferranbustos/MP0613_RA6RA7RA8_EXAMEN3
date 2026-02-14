<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1,
                'type' => 'Margherita',
                'base' => 'Classic',
                'name' => 'Margherita',
                'price' => 120,
                'toppings' => json_encode(['mozzarella', 'basil']),
                'image_url' => '/img/pizza1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'type' => 'Pepperoni',
                'base' => 'Thin',
                'name' => 'Pepperoni Feast',
                'price' => 150,
                'toppings' => json_encode(['mozzarella', 'pepperoni']),
                'image_url' => '/img/pizza2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'type' => 'Veggie',
                'base' => 'Classic',
                'name' => 'Garden Veggie',
                'price' => 130,
                'toppings' => json_encode(['mozzarella', 'peppers', 'onions', 'olives']),
                'image_url' => '/img/pizza3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'type' => 'Hawaiian',
                'base' => 'Thick',
                'name' => 'Hawaiian Delight',
                'price' => 160,
                'toppings' => json_encode(['mozzarella', 'ham', 'pineapple']),
                'image_url' => '/img/pizza4.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'type' => 'Volcano',
                'base' => 'Thin & Crispy',
                'name' => 'Volcano Heat',
                'price' => 170,
                'toppings' => json_encode(['mozzarella', 'chili', 'pepperoni']),
                'image_url' => '/img/pizza5.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'type' => 'Margherita',
                'base' => 'Garlic Crust',
                'name' => 'Garlic Margherita',
                'price' => 140,
                'toppings' => json_encode(['mozzarella', 'basil', 'garlic']),
                'image_url' => '/img/pizza6.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'type' => 'Veg Supreme',
                'base' => 'Classic',
                'name' => 'Supreme Veg',
                'price' => 155,
                'toppings' => json_encode(['mozzarella', 'mushrooms', 'peppers', 'olives']),
                'image_url' => '/img/pizza7.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'type' => 'Pepperoni',
                'base' => 'Cheesy Crust',
                'name' => 'Cheesy Pepperoni',
                'price' => 175,
                'toppings' => json_encode(['mozzarella', 'pepperoni', 'extra cheese']),
                'image_url' => '/img/pizza8.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'type' => 'Hawaiian',
                'base' => 'Thin & Crispy',
                'name' => 'Crispy Hawaiian',
                'price' => 165,
                'toppings' => json_encode(['mozzarella', 'ham', 'pineapple']),
                'image_url' => '/img/pizza9.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'type' => 'Volcano',
                'base' => 'Thick',
                'name' => 'Lava Blast',
                'price' => 180,
                'toppings' => json_encode(['mozzarella', 'chili', 'garlic']),
                'image_url' => '/img/pizza10.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
