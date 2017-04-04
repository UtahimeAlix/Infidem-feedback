<?php $this->assign('title', __("Forgot Password")); ?>
<div class="users form ">
  <br>
  <img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;">
  <br>
    <?= $this->Form->create() ?>
    <fieldset class="login-infos">
        <legend class='legend'><?= __('Forgot password') ?></legend>
        <?= $this->Form->input('email',['label'=>'Enter your registered email address', 'class'=>'champ']) ?>
        <button type="submit" class="btn-info btn-login" ><?= __('Next') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
