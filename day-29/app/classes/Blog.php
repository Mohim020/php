<?php

namespace App\classes;

class blog
{
    public $blogs = [];

    public function __construct()
    {
        $this->blogs =[
            0 => [
                'id'             => 1,
                'title'          =>'This is blog title one',
                'desription_one' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'desription_two' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'image'          =>'blog-1.jpg'
            ],
            1 => [
                'id'             => 2,
                'title'          =>'This is blog title two',
                'desription_one' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'desription_two' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'image'          =>'blog-2.jpg'
            ],
            2 => [
                'id'             => 3,
                'title'          =>'This is blog title three',
                'desription_one' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'desription_two' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'image'          =>'blog-1.jpg'
            ],
            3 => [
                'id'             => 4,
                'title'          =>'This is blog title four',
                'desription_one' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'desription_two' =>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, accusantium?',
                'image'          =>'feature.jpg'
            ],
        ];

    }
    public function getAllBlog()
        {
            return $this->blogs;
        }


    public function getBlogById($id)
    {
        foreach ($this->blogs as $blog)
        {
            if($blog['id'] == $id)
            {
                return $blog;
            }
        }
    }
}