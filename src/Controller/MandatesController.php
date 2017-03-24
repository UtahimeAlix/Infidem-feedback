<?php

namespace App\Controller;

class MandatesController extends AppController
{
  public function index()
    {
        $mandates = $this->Mandates->find('all');
        $this->set(compact('mandates'));
    }
}

 ?>
