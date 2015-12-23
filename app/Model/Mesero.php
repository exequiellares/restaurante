<?php

class Mesero extends AppModel
{
    public $virtualFields = array('nombre_completo' => 'CONCAT(Mesero.nombre, " ", Mesero.apellido)');
    
    public $validate = array(
        'dni' => array(
                        'notEmpty' => array(
                                        'rule' => 'notBlank'
                                ),
                        'numeric' => array(
                                        'rule' => 'numeric',
                                        'message' => 'Solo números'
                                ),
                        'unique' => array(
                                        'rule' => 'isUnique',
                                        'message' => 'El DNI ya se encuentra en nuestra base de datos'
                        )
                ),
        'nombre' => array(
                        'rule' => 'notBlank'
                ),
        'apellido' => array(
                        'rule' => 'notBlank'
                ),
        'telefono' => array(
                        'notEmpty' => array(
                                        'rule' => 'notBlank'
                                ),
                        'numeric' => array(
                                        'rule' => 'numeric',
                                        'message' => 'Solo números'
                                )
                ),

    );
    
    public $hasMany = array(
        'Mesa' => array(
            'className' => 'Mesa',
            'foreignKey' => 'mesero_id',
            'condition' => '',
            'order' => 'Mesa.serie ASC',
            'dependence' => false
        )
    );
        
        
}


?>