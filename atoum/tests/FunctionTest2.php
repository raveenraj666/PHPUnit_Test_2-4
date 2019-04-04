<?php 

use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase
{
    protected $instance;

    public function setUp()
    {
        $this->instance = new MyClass();
    }

    public function testSetValueRefusesBadInput()
    {
        $this->expectException(RuntimeException::class);
        $this->instance->setValue('baz');
    }
}