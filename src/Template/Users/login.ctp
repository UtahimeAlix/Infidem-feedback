<?php $this->assign('title', __("Login")); ?>
  <?= $this->Flash->render() ?>
  <?= $this->Form->create() ?>
  <br>
  <img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;">
  <br>
      <fieldset class="login-infos">
          <legend class="legend"><?= __("Se connecter") ?></legend>
          <?= $this->Form->input('username', array('label'=>'Nom d\'utilisateur','class'=>'champ')) ?>
          <?= $this->Form->input('password', array('label'=>'Mot de passe','class'=>'champ')) ?>
          <?= $this->Html->link(__("Mot de passe oublié?"),['controller'=>'Users','action'=>'forgotPassword'], array('style'=>'font-size: 10px; height:20px'));?>
          <br>
          <button type="submit" class="btn-info btn-login" ><?= __('Login') ?></button>
          <?= $this->Form->end() ?>

          <legend class="legend"><?= __("Nouvel utilisateur") ?></legend><br><br><br><br>

          <a href="/infidem-feedback/Users/addUser" target="_self"><button type="button" class="btn-info btn-login" ><?= __('S\'inscrire') ?></button></a>
      </fieldset>
