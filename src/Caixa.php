<?php 


Class Caixa
{
    public $name = 'Caixa';
    public $order = ['Caixa.numero' => 'ASC'];
    public $validate = [
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


    public $belongsTo = [
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

    public $hasMany = [
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

    public $virtualFields = [
        'codigo_barras' => "('AG-' || lpad(Caixa.arquivo_geral_id ||'',3,'0') || '-' || lpad(Caixa.numero||'',6,'0'))",
        'numero_formatado' => "(lpad(Caixa.numero||'',6,'0'))",
        'nome_formatado'   => "lpad(Caixa.numero||'',6,'0')",
    ];

    public $actsAs = ['Log', 'Containable', 'Linkable'];


}