<?php

namespace App\Model;
/*
Cria uma nova caixa a partir de um nome e uma array contendo um map de ['Caixa.numero' => 'ASC'];
*/
class CaixaFactory
{
    public static function create(string $name): Caixa
    {
        $caixa = new Caixa();
        $caixa->setName($name);
      
        return $caixa;
    }
}