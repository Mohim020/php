<?php

namespace App\classes;

class fullName
{
    public $firstName, $lastName, $fullName;
    public function makeFullName($post)
    {
        $this->firstName = $post['first_name'];
        $this->lastName = $post['last_name'];
        $this->fullName = $this->firstName.' '.$this->lastName;
        echo $this->fullName;

        

        header('Location: action.php?page=full_name&message='.$this->fullName);
    }
}