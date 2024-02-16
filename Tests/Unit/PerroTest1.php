<?php declare(strict_types=1);

namespace Test\Unit;
use src\Models\Perro;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

require_once("src/Models/Animal.php");
require_once("src/Models/Perro.php");

class PerroTest1 extends TestCase{
    private $p;

    protected function setUp():void {
        $this->p= new Perro();
    }
    protected function tearDown() :void {
        unset($this->p);
    }
    public function test_Sonido() {
        self::setUp();
        $this->assertEquals("guau",$this->p->habla());
        self::tearDown();
    }
    public function test_Sonido1() {
        self::setUp();
        $this->assertEquals("miau",$this->p->habla());
        self::tearDown();
    }
}