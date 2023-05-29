<?php

namespace App\classes;

class Product
{
     public $products =[];

     public function __construct()
     {
        $this->products = [
            0 =>[
                'id'   => 1,
                'cetagory_id' => '2',
                'name'  => 'New Fashionable T-Shirt',
                'price' => 1500,
                'description' => '',
                'image' =>'assets/img/product/t-shirt.jpg'
            ],
            1 =>[
                'id'   => 2,
                'cetagory_id' => '2',
                'name'  => 'Smart Jeans pant',
                'price' => 2200,
                'description' => '',
                'image' =>'assets/img/product/smart-jeans-pant.jpg'
            ],
            2 =>[
                'id'   => 3,
                'cetagory_id' => '2',
                'name'  => 'Formal Shirt for Man',
                'price' => 3000,
                'description' => '',
                'image' =>'assets/img/product/formal-shirt-for-man.jpg'
            ],
            3 =>[
                'id'   => 4,
                'cetagory_id' => '1',
                'name'  => 'New Sony Mobile',
                'price' => 45000,
                'description' => '',
                'image' =>'assets/img/product/sony-moblie.jpg'
            ],
            4 =>[
                'id'   => 5,
                'cetagory_id' => '1',
                'name'  => 'New Samsung Mobile',
                'price' => 15000,
                'description' => '',
                'image' =>'assets/img/product/samsung-mobile.jpg'
            ],
            5 =>[
                'id'   => 6,
                'cetagory_id' => '3',
                'name'  => 'Cricket Bat',
                'price' => 1500,
                'description' => '',
                'image' =>'assets/img/product/cricket-bat.jpg'
            ],
            6 =>[
                'id'   => 7,
                'cetagory_id' => '4',
                'name'  => 'New women hand bag',
                'price' => 4000,
                'description' => '',
                'image' =>'assets/img/product/woman-hand-bag.jpg'
            ]
        ];
     }
     public function getAllProduct()
     {
        return $this->products;
     }
}