<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Mandate extends Entity
{
  public function __toString()
  {
    return $this->name;
  }
}

?>
