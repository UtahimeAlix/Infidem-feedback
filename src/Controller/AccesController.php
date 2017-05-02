<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

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

  public function add() {
    $acces = $this->Acces->newEntity();
    if ($this->request->is('post')) {
      $acces = $this->Acces->patchEntity($acces, $this->request->data);
      $acces->created = date("Y-m-d H:i:s");
      $acces->modified = date("Y-m-d H:i:s");
      if ($this->Acces->save($acces)) {
        $this->Flash->success(__('Your acces has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your acces.'));
    }
    $this->set('acces', $acces);
    $this->getUsers();
    $this->getMandates();
  }

  private function getUsers()
  {
    $users_table = TableRegistry::get('Users');
    $users = $users_table->find('all');
    $this->set(compact('users'));
  }

  private function getMandates()
  {
    $mandates_table = TableRegistry::get('Mandates');
    $mandates = $mandates_table->find('list');
    $this->set(compact('mandates'));
  }

}

?>
