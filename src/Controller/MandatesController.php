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
    $externalTable = TableRegistry::get('vuln_external');
    $internalTable = TableRegistry::get('vuln_internal');
    $wirelessTable = TableRegistry::get('vuln_wireless');
    $mobileTable = TableRegistry::get('vuln_mobile');
    $webTable = TableRegistry::get('vuln_web');
    if ($this->request->is('post')) {
      $external_ips = $this->request->data['ext_ip'];
      $internal_ips = $this->request->data['int_ip'];
      $wireless_ssids = $this->request->data['ssid'];
      $web_logins = $this->request->data['web_login'];
      $web_passwords = $this->request->data['web_password'];
      $web_urls = $this->request->data['web_url'];
      $mobile_logins = $this->request->data['mobile_login'];
      $mobile_passwords = $this->request->data['mobile_password'];

      if ($mandate->external) {
        foreach($external_ips as $external_ip)
        {
          $externalIp = $externalTable->newEntity();
          $externalIp->ip = $external_ip;
          $externalIp->mandate_id = $mandate->id;
          $externalTable->save($externalIp);
        }
      }
      if ($mandate->internal) {
        foreach($internal_ips as $internal_ip)
        {
          $internalIp = $internalTable->newEntity();
          $internalIp->ip = $internal_ip;
          $internalIp->mandate_id = $mandate->id;
          $internalTable->save($internalIp);
        }
      }
      if ($mandate->wireless) {
        foreach($wireless_ssids as $wireless_ssid)
        {
          $wirelessSsid = $wirelessTable->newEntity();
          $wirelessSsid->ssid = $wireless_ssid;
          $wirelessSsid->mandate_id = $mandate->id;
          $wirelessTable->save($wirelessSsid);
        }
      }
      if ($mandate->web) {
          $counter_web = 0;
          foreach($web_urls as $web_url)
          {
            $webUrl = $webTable->newEntity();
            if ($web_logins[$counter_web] != null && $web_url != null && $web_passwords[$counter_web] != null) {
              $webUrl->url = $web_url;
              $webUrl->login = $web_logins[$counter_web];
              $webUrl->password = $web_passwords[$counter_web];
            } elseif ($web_logins[$counter_web] === null && $web_url != null && $web_passwords[$counter_web] === null) {
              $webUrl->url = $web_url;
            }
            $webUrl->mandate_id = $mandate->id;
            $webTable->save($webUrl);
            $counter_web++;
          }
        }
      if ($mandate->mobile) {
        if (count($mobile_logins) != 0 && count($mobile_passwords) != 0) {
          $counter_mobile = 0;
          foreach($mobile_logins as $mobile_login)
          {
            $mobileRecord = $mobileTable->newEntity();
            $mobileRecord->login = $mobile_login;
            $mobileRecord->password = $mobile_passwords[$counter_mobile];
            $mobileRecord->mandate_id = $mandate->id;
            $mobileTable->save($mobileRecord);
            $counter_mobile++;
          }
        }
      }
    }
    $this->set('mandate', $mandate);
  }

public function advancement($mandateId)
{
  /**if ($this->request->is('ajax')) {
    $mandate = $this->Mandates->get($mandateId);
    $mandate->state = $mandate->state + 1;
    if ($this->Mandates->save($mandate)) {
      $this->set('mandate', $mandate);
    }
  }**/
  $mandate = $this->Mandates->get($mandateId);
  $this->set('mandate', $mandate);
}

public function planAction($mandateId) {
  $mandate = $this->Mandates->get($mandateId);
  $this->set('mandate', $mandate);
}

}
?>
