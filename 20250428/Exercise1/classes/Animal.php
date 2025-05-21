<?php
class Animal
{
    public $color;
    public $name;
    public function petMe()
    {
        echo "The $this->name is friendly and mine has color $this->color ";
    }
}