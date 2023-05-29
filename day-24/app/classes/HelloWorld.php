<?php 


namespace App\classes;
class HelloWorld
{
    public $message, $firstName, $lastName, $x, $y, $z;
    public function __construct()
    {
        $this->message = "Hello World";
        $this->x = 10;
        $this->y = 20;
    }

    public function index()
    {

        echo '<br/>';
        echo $this->x + $this->y;




        //$this->firstName = 1234;
        //$this->lastName ="BITM";
        //echo gettype($this->firstName);

        echo ' Full name is nbsp;'. $this->firstName .' &nbsp; &nbsp;'. $this->lastName;
    }
}