<?php 


Class Caixa
{
    private $name = 'Caixa';
    private $order = ['Caixa.numero' => 'ASC'];
    private $validate = [
        'numero' => [
            'numeric' => [
                'rule' => ['numeric'],
            ],
        ],
        'corredor_id' => [
            'numeric' => [
                'rule' => ['numeric'],
            ],
        ],
        'face' => [
            'notBlank' => [
                'rule' => ['notBlank'],
            ],
        ],
        'estante' => [
            'numeric' => [
                'rule' => ['numeric'],
            ],
        ],
        'prateleira' => [
            'numeric' => [
                'rule' => ['numeric'],
            ],
        ],
        'situacao' => [
            'notBlank' => [
                'rule' => ['notBlank'],
            ],
        ],
    ];


    private $belongsTo = [
        'Estante' => [
            'className' => 'Estante',
            'foreignKey' => 'estante_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Instituicao' => [
            'className' => 'Instituicao',
            'foreignKey' => 'instituicao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'Temporalidade' => [
            'className' => 'Temporalidade',
            'foreignKey' => 'temporalidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'CaixaSetorial' => [
            'className' => 'CaixaSetorial',
            'foreignKey' => 'caixa_setorial_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];

    private $hasMany = [
        'CaixaDocumento' => [
            'className' => 'CaixaDocumento',
            'foreignKey' => 'caixa_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
        'ProtocoloGeral' => [
            'className' => 'ProtocoloGeral',
            'foreignKey' => 'caixa_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];

    private $virtualFields = [
        'codigo_barras' => "('AG-' || lpad(Caixa.arquivo_geral_id ||'',3,'0') || '-' || lpad(Caixa.numero||'',6,'0'))",
        'numero_formatado' => "(lpad(Caixa.numero||'',6,'0'))",
        'nome_formatado'   => "lpad(Caixa.numero||'',6,'0')",
    ];

    private $actsAs = ['Log', 'Containable', 'Linkable'];



    //Métodos Getter's e Setter's

    /*
    Método getter para o atributo name da classe
    */
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

}