<?php $this->assign('title', __("Liste des utilisateurs")); ?>

<head>
  <?= $this->Html->css('advancement.css') ?>
</head>

<br>
<a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
<br>

<div class="ods form">
  <fieldset class="add">
    <legend class="legend"><?= __('Liste des utilisateurs') ?></legend>

    <ul><br><br>
    <?php if(!empty($users)): foreach($users as $user): ?>
      <li>
      <h4>
        <?php echo $user->username; ?>
          <?= $this->Form->postLink('Supprimer',['action' =>'delete', $user->id], array('style' => 'float:right; font-size: 15px;'), ['confirm' => 'Êtes-vous sûr de vouloir supprimer cet utilisateur?']) ?>
        <?= $this->Html->link('Éditer', ['action' => 'edit', $user->id], array('style' => 'float:right; padding-right: 10px; font-size: 15px;')) ?><br>
      </h4>
      <h5>
        <?= $this->Html->link('Voir la liste des mandats', ['controller' => 'mandates', 'action' => 'listMandates', $user->id], array('style' => 'font-size: 15px;')) ?><br><br>
      </h5>

    </li>
      <?php
    endforeach;

  else: ?>
  </ul>
  <p class="no-­‐record">No users found......</p>
<?php endif; ?>

</fieldset>
</div>
</div>
