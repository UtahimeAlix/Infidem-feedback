<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add a user') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('compagny_name') ?>
        <?= $this->Form->input('name') ?>
        <?= $this->Form->input('user_image') ?>
        <?=  $this->Form->input('role_id', [
        'type' => 'select',
        'options' => $roles,
        'label' => __("Role")
    ]); ?>
    </fieldset>
<?= $this->Form->button(__('Save user')); ?>
<?= $this->Form->end() ?>
</div>
