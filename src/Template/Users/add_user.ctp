<?php $this->assign('title', __("Add User")); ?>
<div class="users form">
<?= $this->Form->create($user) ?><br>
<img class="logo-img" src="../webroot/img/logo.jpg" alt="logo" style="align: middle;"><br>
    <fieldset class="add">
        <legend class="legend"><?= __('Add a user') ?></legend>
        <?= $this->Form->input('username', array('class'=>'champ')) ?>
        <?= $this->Form->input('password', array('class'=>'champ')) ?>
        <?= $this->Form->input('email', array('class'=>'champ')) ?>
        <?= $this->Form->input('compagny_name', array('class'=>'champ')) ?>
        <?= $this->Form->input('name', array('class'=>'champ')) ?>
        <?= $this->Form->input('image', array('class'=>'champ')) ?>
        <?=  $this->Form->input('role_id', [
        'type' => 'select',
        'options' => $roles,
        'label' => __("Role"),
        'class' => 'champ'
    ]); ?><br>
    <button type="submit" class="btn-info btn-login" ><?= __('Sign up') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
