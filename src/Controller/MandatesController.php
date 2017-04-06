<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class MandatesController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->loadComponent('Flash');
  }

  public function index()
  {
    $mandates = $this->Mandates->find('all');
    $this->set(compact('mandates'));
  }

  public function add()
  {
    $mandate = $this->Mandates->newEntity();
    if ($this->request->is('post')) {
      $mandate = $this->Mandates->patchEntity($mandate, $this->request->data);
      $mandate->created = date("Y-m-d H:i:s");
      $mandate->modified = date("Y-m-d H:i:s");
      if ($this->Mandates->save($mandate)) {
        $this->Flash->success(__('Your mandate has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your mandate.'));
    }
    $this->set('mandate', $mandate);
  }

  public function roe($mandateId)
  {
    $mandate = $this->Mandates->get($mandateId);
    $internalTable = TableRegistry::get('vuln_internal');
    if ($this->request->is('post')) {
      $internal_ips = $this->request->data['int_ip'];
      foreach($internal_ips as $internal_ip)
      {
        $internalIp = $internalTable->newEntity();
        $internalIp->ip = $internal_ip;
        $internalIp->mandate_id = $mandate->id;
        // $internalIp->url = 'Ceci est le contenu de cet article';
        $internalTable->save($internalIp);
      }
    }
    $this->set('mandate', $mandate);
  }
}

?>
