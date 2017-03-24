<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Role extends Entity
{
  public function __toString()
  {
    return $this->name;
  }
}

?>
