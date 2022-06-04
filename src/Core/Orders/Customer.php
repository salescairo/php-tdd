<?php 
namespace Core\Orders;

class Customer{
    protected $name;
    public function __construct(
        string $name
    )
    {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function changeName(string $name){
        $this->name = $name;
    }
}