<?php $this->assign('title', __("Assignation")); ?>
<div class="users form">
<?= $this->Form->create($acces) ?><br>
<a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
<br>

    <fieldset class="add">
        <legend class="legend"><?= __('Assignation') ?></legend>

        <?= $this->Form->input('user_id', [
        'type' => 'select',
        'options' => $users,
        'label' => __("Utilisateur"),
        'style' => 'height: 35px;'
    ]); ?>

    <?= $this->Form->input('mandate_id', [
    'type' => 'select',
    'options' => $mandates,
    'label' => __("Mandat"),
    'style' => 'height: 35px;'
]); ?>
<br>


    <button type="submit" class="btn-info btn-login" ><?= __('Valider') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
