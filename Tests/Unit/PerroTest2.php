<?php declare(strict_types=1);

namespace Test\Unit;
use src\Models\Perro;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;


require_once("src/Models/Animal.php");
require_once("src/Models/Perro.php");

class PerroTest2 extends TestCase{
    private $p;

    protected function setUp():void {
        $this->p= new Perro();
    }
    protected function tearDown() :void {
        unset($this->p);
    }
    
    #[DataProvider("additionProvider")]
    #[Test]
    #[TestDox('Añadiendo $data resultado esperado $habla')]
    public function sonido(string $data, string $habla):void {
        $this->assertSame($data,$habla);
    }

    public static function additionProvider()
    {
        $p = new Perro();
        return [
            'sonido1' => ["guau",$p->habla()],
            'sonido2' => ["miau",$p->habla()],
        ];
    }
}