<?php $this->assign('title', __("Forgot Password")); ?>
<div class="users form ">
  <br>
  <img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;">
  <br>
    <?= $this->Form->create() ?>
    <fieldset class="login-infos">
        <legend class='legend'><?= __('Mot de passe oublié') ?></legend>
        <?= $this->Form->input('email',['label'=>'Entrer votre adresse courriel', 'class'=>'champ']) ?>
        <button type="submit" class="btn-info btn-login" ><?= __('Suivant') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
