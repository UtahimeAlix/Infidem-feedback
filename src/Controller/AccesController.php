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
        $this->Flash->success(__('Accès sauvegardé.'));
        return $this->redirect(['action' => 'add']);
      }
      $this->Flash->error(__('Impossible d\'ajouter l\'accès.'));
    }
    $this->set('acces', $acces);
    $this->getUsers();
    $this->getMandates();
  }

  private function getUsers()
  {
    $users_table = TableRegistry::get('Users');
    $users = $users_table->find('list');
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
