<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Event\Event;

class UsersController extends AppController
{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow('add', 'logout');
  }

  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Flash');
  }

  public function index()
  {
    $users = $this->Users
      ->find()
      ->contains(['Roles']);
    $this->set(compact('users'));
  }

  public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

  public function add()
  {
    $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->data);
      $user->created = date("Y-m-d H:i:s");
      $user->modified = date("Y-m-d H:i:s");
      if ($this->Users->save($user)) {
        $this->Flash->success(__('Your user has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
        $this->Flash->error(__('Unable to add your user.'));
      }
      $this->set('user', $user);
      $this->getRoles();
    }

    private function getRoles()
      {
          $roles_table = TableRegistry::get('Roles');
          $roles = $roles_table->find('list');
          $this->set(compact('roles'));
      }
}

 ?>
