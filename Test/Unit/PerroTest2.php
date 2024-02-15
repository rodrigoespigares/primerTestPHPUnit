<?php declare(strict_types=1);

namespace Test\Unit;
use Models\Perro;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

class PerroTest2 extends TestCase{
    private $p;

    protected function setUp():void {
        $this->p= new Perro();
    }
    protected function tearDown() :void {
        unset($this->p);
    }
    /**
     * @test
     */
    public function sonido() {
        self::setUp();
        $this->assertEquals("guau",$this->p->habla());
        self::tearDown();
    }
    /**
     * @test
     */
    public function test_sonido2() {
        self::setUp();
        $this->assertEquals("miau",$this->p->habla());
        self::tearDown();
    }
}