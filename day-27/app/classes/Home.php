<?php

namespace App\classes;

class Home 
{
    public $students=[];

    public function __construct()
    {
        $this->students = [

            0=>[

                'id'    =>1,
                'name'  =>'Mohim',
                'email' =>'tafsinahmed851@gmail.com',
                'phone' =>[
                    'personal'  => '01866329957',
                    'parents'   => '01724932299'
                ],
                'image' =>'1.jpg',


            ],
            1=>[
                'id'    =>2,
                'name'  =>'Shuvra',
                'email' =>'shuvra@gmail.com',
                'phone' =>[
                    'personal'  => '01866329957',
                    'parents'   => '01724932299'
                ],
                'image' =>'2.jpg'
            ],
            2=>[
                'id'    =>3,
                'name'  =>'antick',
                'email' =>'antick@gmail.com',
                'phone' =>[
                    'personal'  => '01866329957',
                    'parents'   => '01724932299'
                ],
                'image' =>'3.jpg'

            ],
        ];
    }


    public function index()
    {

        return view('home', ['students' => $this->students]);



//        echo '<pre/>';

//        var_dump($this->students);
//        print_r($this->students);


//        foreach ($this->students as $index => $student)
//
//        {
//
//
//            foreach ($student as $item)
//            {
//
//                if (is_array($item))
//                {
//
//                    foreach ($item as $value)
//                    {
//                        echo $value.' ';
//                    }
//                }
//                else
//                {
//                    echo $item.' ';
//                }
//            }
//
//            echo '<br/>';



            //echo '<br/>';
            //echo $student['name'].''.$student['email'].''.$student['phone'];
    //    }
        
        
        //echo $this->students[0]['name'];
  }
}