<?php $this->assign('title', __("Administration")); ?>

<head>
  <?= $this->Html->css('advancement.css') ?>
</head>

<br>
<a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
<br>

<div class="ods form">
  <fieldset class="add">
    <legend class="legend"><?= __('Panneau d\'administration') ?></legend>

<?php if ($this->request->session()->read('Auth.User.role_id') == 1): ?>
  <br><br><br><a href="/infidem-feedback/users/index"><?= __('- Liste des utilisateurs') ?></a><br>
  <?= $this->Html->link('- Assigner un utilisateur à un mandat', ['controller' => 'mandates', 'action' => 'assignation'], array('style' => 'font-size: 15px;')) ?>
<?php else: ?>
  <br><br><br><label><?= __('Vous n\'êtes pas autorisé à accéder à cette page. Pour plus d\'informations, contacter un administrateur.') ?><label>
<?php endif ?>

<br><br><a href="/infidem-feedback/Users/addUser" target="_self"><button type="button" class="btn-info btn-mandate" ><?= __('+') ?></button></a>

  </fieldset>
</div>
