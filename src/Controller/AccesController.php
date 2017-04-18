<?php

namespace App\Controller;

class AccesController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Flash');
  }

  public function index()
  {
    $acces = $this->Acces->find('all');
    $this->set(compact('acces'));
  }

?>
