<?php
namespace Tests\Core\Orders;
use PHPUnit\Framework\TestCase;

use Core\Orders\Customer;

class CustomerTest extends TestCase
{
   /**
    * Testar se os atributos estão recebendo e retornando os dados corretamente
    */ 
    public function testNameAttribute(){
        $customer = new Customer("José Matos");
        $this->assertEquals('José Matos',$customer->getName());

        $customer->changeName("José Matos da Silva");
        $this->assertEquals('José Matos da Silva',$customer->getName());
    }
}