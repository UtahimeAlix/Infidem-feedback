<?php $this->assign('title', __("Add User")); ?>
<div class="users form">
<?= $this->Form->create($user) ?><br>
<img class="logo-img" src="../webroot/img/logo.jpg" alt="logo" style="align: middle;"><br>
    <fieldset class="add">
        <legend class="legend"><?= __('Add a user') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('compagny_name') ?>
        <?= $this->Form->input('name') ?>
        <?= $this->Form->input('image') ?>
        <?=  $this->Form->input('role_id', [
        'type' => 'select',
        'options' => $roles,
        'label' => __("Role")
    ]); ?>
      <?= $this->Form->submit('../img/save.png', array('style' => 'margin-left: auto; display:block;')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
