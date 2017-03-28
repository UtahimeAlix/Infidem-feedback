<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username', __("Please enter a username."))
            ->notEmpty('password', __("Please enter a password."))
            ->notEmpty('role_id', __("Please chose a role."))
            ->notEmpty('email', __("Please enter an email."));
        return $validator;
    }

    public function validationPassword(Validator $validator)
        {
            $validator
                ->notEmpty('password', __('Please enter a password.'));
            return $validator;
        }
}

?>
