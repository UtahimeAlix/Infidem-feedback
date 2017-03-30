<?php $this->assign('title', __("Login")); ?>
  <div class="login">
  <?= $this->Flash->render() ?>
  <?= $this->Form->create() ?>
  <br>
  <img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;">
  <br>
      <fieldset class="login-infos">
          <legend class="legend"><?= __("Sign in") ?></legend>
          <?= $this->Form->input('username', array('style'=>'font-size: 11px; height:30px')) ?>
          <?= $this->Form->input('password', array('style'=>'font-size: 11px; height:30px')) ?>
          <?= $this->Html->link("Forgot Password?",['controller'=>'Users','action'=>'forgotPassword'], array('style'=>'font-size: 10px; height:20px'));?>
          <br>
          <?= $this->Form->submit('../img/signin.png'); ?>
          <?= $this->Form->end() ?>

          <legend class="legend"><?= __("New User") ?></legend><br><br>

          <a href="/infidem-feedback/Users/addUser" target="addUser"><img src="/infidem-feedback/img/signup.png" alt="Signup"></a>
      </fieldset>
  </div>
