<?php $this->assign('title', __("Reset Password")); ?>
<div class="users form">
  <br><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"><br>
    <?= $this->Form->create($user) ?>
    <fieldset class="login-infos">
        <legend class='legend'><?= __('Mot de passe oublié') ?></legend>
        <?= $this->Form->input('new_password',['label'=>'Nouveau mot de passe','type'=>'password']) ?>
        <?= $this->Form->input('confirm_password',['label'=>'Confirmation','type'=>'password']) ?>
        <button type="submit" class="btn-info btn-login" ><?= __('Suivant') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
