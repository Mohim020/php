<?php

namespace App\classes;

class Category
{
    public $cetagories = [];

    public function __construct()
    {
        $this->cetagories = [
            0 =>[
                'id'   => 1,
                'name' => 'Electronics',
            ],
            1 =>[
                'id'   => 2,
                'name' => 'Man Fashion',
            ],
            2 =>[
                'id'   => 3,
                'name' => 'Sport item',
            ],
            3 =>[
                'id'   => 4,
                'name' => 'Woman Fashion',
            ]
        ];
    }
    public function getAllCategroy()
     {
        return $this->cetagories;
     }
}