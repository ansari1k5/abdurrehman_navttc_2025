<?php
class Animal
{
    public $dog;
    public $cat;
    public $elephant;
    public function talk()
    {
        echo "Dog = $this->dog . cat = $this->cat . Elephant = $this->elephant";
    }
}