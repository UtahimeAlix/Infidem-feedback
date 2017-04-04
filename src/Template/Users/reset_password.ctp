<?php $this->assign('title', __("Reset Password")); ?>
<div class="users form">
  <br><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"><br>
    <?= $this->Form->create($user) ?>
    <fieldset class="login-infos">
        <legend class='legend'><?= __('Forgot password') ?></legend>
        <?= $this->Form->input('new_password',['type'=>'password']) ?>
        <?= $this->Form->input('confirm_password',['type'=>'password']) ?>
        <button type="submit" class="btn-info btn-login" ><?= __('Next') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
