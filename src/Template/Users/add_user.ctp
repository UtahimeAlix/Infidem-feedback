<?php $this->assign('title', __("Ajouter un utilisateur")); ?>
<div class="users form">
<?= $this->Form->create($user) ?><br>
<a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
<br>

    <fieldset class="add">
        <legend class="legend"><?= __('Ajouter un utilisateur') ?></legend>
        <?= $this->Form->input('username', array('label'=>'Pseudo','class'=>'champ')) ?>
        <?= $this->Form->input('password', array('label'=>'Mot de passe','class'=>'champ')) ?>
        <?= $this->Form->input('email', array('label'=>'Courriel','class'=>'champ')) ?>
        <?= $this->Form->input('compagny_name', array('label'=>'Nom de la compagnie','class'=>'champ')) ?>
        <?= $this->Form->input('name', array('label'=>'Nom','class'=>'champ')) ?>
        <?= $this->Form->input('image', array('label'=>'Image','class'=>'champ')) ?>
        <?=  $this->Form->input('role_id', [
        'type' => 'select',
        'options' => $roles,
        'label' => __("Role"),
        'class' => 'champ'
    ]); ?><br>
    <button type="submit" class="btn-info btn-login" ><?= __('S\'inscrire') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
