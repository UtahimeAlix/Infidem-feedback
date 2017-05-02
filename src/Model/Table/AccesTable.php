<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AccesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users');
        $this->belongsTo('Mandates');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('user_id', __("Please select a user."))
            ->notEmpty('mandate_id', __("Please select a mandate."));
        return $validator;
    }
}

?>
