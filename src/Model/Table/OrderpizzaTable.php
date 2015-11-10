<?php
// src/Model/Table/ArticlesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrderpizzaTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name')
            ->requirePresence('name')
            ->notEmpty('address1')
            ->requirePresence('address1');

        return $validator;
    }
}
?>