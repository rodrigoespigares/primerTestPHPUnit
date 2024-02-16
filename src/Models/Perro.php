<?php

namespace src\Models;
class Perro extends Animal{
    public function __construct()
    {
        parent::__construct("guau");
    }
    public function habla() {
        return $this->voz;
    }

}