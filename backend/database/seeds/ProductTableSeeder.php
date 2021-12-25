<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'id'             => 1,
                'title'           => 'product1',
                'description'          => 'Product1 description',
                'price'       => 12,
                'quantity' => 50,
                'image' => "https://via.placeholder.com/150x100",
            ],
            [
                'id'             => 2,
                'title'           => 'product2',
                'description'          => 'Product2 description',
                'price'       => 41,
                'quantity' => 20,
                'image' => "https://via.placeholder.com/150x100",
            ],
            [
                'id'             => 3,
                'title'           => 'product3',
                'description'          => 'Product3 description',
                'price'       => 32,
                'quantity' => 0,
                'image' => "https://via.placeholder.com/150x100",
            ],
            [
                'id'             => 4,
                'title'           => 'product4',
                'description'          => 'Product4 description',
                'price'       => 18,
                'quantity' => 80,
                'image' => "https://via.placeholder.com/150x100",
            ],
            [
                'id'             => 5,
                'title'           => 'product5',
                'description'          => 'Product5 description',
                'price'       => 52,
                'quantity' => 150,
                'image' => "https://via.placeholder.com/150x100",
            ]
        ];

        Products::insert($products);
    }
}
