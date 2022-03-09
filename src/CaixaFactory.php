<?php


/*
Cria uma nova caixa a partir de um nome e uma array contendo um map de ['Caixa.numero' => 'ASC'];
*/
class CaixaFactory
{
    public static function create(string $name, array $order): Caixa
    {
        $caixa = new Caixa();
        $caixa->setName($name);
        $caixa->setOrder($order);
        return $caixa;
    }
}