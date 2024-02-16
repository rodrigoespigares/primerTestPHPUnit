<?php


namespace src\Models;
abstract class Animal{
    protected $voz;
    public function __construct($voz)
    {
        $this->voz=$voz;
    }
    abstract public function habla();
}