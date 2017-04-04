<?php $this->assign('title', __("Login")); ?>
  <?= $this->Flash->render() ?>
  <?= $this->Form->create() ?>
  <br>
  <img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;">
  <br>
      <fieldset class="login-infos">
          <legend class="legend"><?= __("Sign in") ?></legend>
          <?= $this->Form->input('username', array('class'=>'champ')) ?>
          <?= $this->Form->input('password', array('class'=>'champ')) ?>
          <?= $this->Html->link("Forgot Password?",['controller'=>'Users','action'=>'forgotPassword'], array('style'=>'font-size: 10px; height:20px'));?>
          <br>
          <button type="submit" class="btn-info btn-login" ><?= __('Login') ?></button>
          <?= $this->Form->end() ?>

          <legend class="legend"><?= __("New User") ?></legend><br><br><br><br>

          <a href="/infidem-feedback/Users/addUser" target="_self"><button type="button" class="btn-info btn-login" ><?= __('Sign up') ?></button></a>
      </fieldset>
