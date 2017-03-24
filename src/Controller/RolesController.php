<?php

namespace App\Controller;

class RolesController extends AppController
{
  public function index()
    {
        $roles = $this->Roles->find('all');
        $this->set(compact('roles'));
    }
}

 ?>
