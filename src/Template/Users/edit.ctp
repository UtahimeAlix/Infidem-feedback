<div class="users form">

  <head>
    <?= $this->Html->css('advancement.css') ?>
  </head>

  <br>
  <a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
  <br>

<?= $this->Form->create($user) ?>
    <fieldset class='add'>
        <legend class="legend"><?= __('Edit a user') ?></legend>
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
    </fieldset>
    <?= $this->Form->submit('../img/save.png', array('style' => 'margin-left: auto; display:block;')) ?>
    <?= $this->Form->end() ?>
    </h5>
</div>
