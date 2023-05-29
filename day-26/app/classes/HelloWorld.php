<?php

namespace App\classes;

class HelloWorld
{
    public $message, $x, $y, $z, $i, $data = [];


    public function __construct()
    {
        $this->message = "Hello World";
        $this->x = 10;
        $this->y = 20;

        $this->data = [10, 20, 30 , '01866329957', 'tafsinahemd851@gmail.com', true, 100.20];
    }

    public function index()
    {

        $this->data = [
            0=>[
                'name'    =>    'mohim',
                'email'   =>    'tafsinahmed851@gmail.com',
                'mobile'  =>    '01866329957'
            ],
            1=>[
                'name'    =>    'sifat',
                'email'   =>    'tafsinahmed851@gmail.com',
                'mobile'  =>    '01866329957'
            ],
            2=>[
                'name'    =>    'antick',
                'email'   =>    'tafsinahmed851@gmail.com',
                'mobile'  =>    '01866329957'],
        ];
        echo $this->data[0]['name'];



//        foreach ($this->data as $key => $item)
//        {
//            echo '<br/>'.$item;
//        }


//        echo $this->data[0].$this->data[6];

        








        //$this->i = 10;
        //do
        //{
            //echo '<br/>'.$this->i;
            //$this->i++;
        //}while($this->i > 20);




        //while ($this->i < 20)
        //{
            //echo '<br/>'.$this->i;
            //$this->i++;
        //}


        //for ($this->i = 30; $this->i >=20; $this->i --)
        //{
            //echo $this->i .'<br/>';
        //}






        //$this->z = $this->x + $this->y;


        //switch ($this->z)
        //{
            //case 10:
                //echo 'Hello World';
                //break;
            //case 20:
                //echo 'Hello Bangladesh';
                //break;
            //case 30:
                //echo 'Hello BITM';
                //break;
            //default:
                //echo 'Hello BASIS';
        //}







        //if ($this->x > $this->y)
        //{
            //echo $this->z;
        //}
        //elseif($this->y < $this->z)
        //{
            //echo "Hello BITM";
        //}
        //elseif($this->z > $this->x)
        //{
            //echo 'Hello BASIS';
        //}
        //else
        //{
            //echo "Hello PHP";
        //}



        //$this->z = $this->x + $this->y;

        //if ($this->z >50)
        //{
            //echo $this->z;
        //}

        //else 
        //{
            //echo "HELLO BITM";
        //}

        //echo $this->message;


    }
}