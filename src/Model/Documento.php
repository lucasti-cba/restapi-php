<?php 

namespace App\Model;
use Caixa;
Class Documento
{
    private $name = 'Documento';
    private $order = ['Documento.numero' => 'ASC'];
    private $caixa = ['caixa_id' => 'Caixa.id'] ;
    
    public Function getName()
    {
        return $this->name;
    }

    /*
    Método setter para o atributo name da classe
    $name -> Paramentro  nome 
    Altera o atributo $nome de acordo com o parametro $nome
    */
    public Function setName($name)
    {
        $this->name = $name;
    }

    /*
    Método getter do atributo order da classe Caixa.
    */
    public function getOrder() 
    {
        return $this->order;
    }

    /* 
    Método setter do atributo order da classe Caixa.
    */
    public function setOrder(array $order)
    {
        $this->order = $order;
    }

    /*
    Método que retora uma array da classe Caixa.
    Definer a regra de negocio entrea as comunicações
    */
    public function asArray(): array
    {
        return [
            'name' => $this->name,
            'order' => $this->order,         
        ];
    }

}