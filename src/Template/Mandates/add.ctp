<?php $this->assign('title', __("ODS")); ?>

<br>
<a href="/infidem-feedback/mandates/add"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>

<div class="ods form">
<?= $this->Form->create($mandate) ?><br>
    <fieldset class="add">
        <legend class="legend"><?= __('Offre de service') ?></legend>
        <?= $this->Form->input('name', array('label'=>'Nom','class'=>'champ')) ?>
        <?= $this->Form->input('contexte', array('type'=>'textarea','label'=>'Contexte', 'class'=>'champ')) ?>
        <?= $this->Form->input('besoin', array('type'=>'textarea','label'=>'Besoins', 'class'=>'champ')) ?>
        <legend class="legend"><?= __('Infrastructure') ?></legend>
        <?= $this->Form->input('external', array('label'=>'Externe','class'=>'checkbox')) ?>
        <?= $this->Form->input('internal', array('label'=>'Interne','class'=>'checkbox')) ?>
        <?= $this->Form->input('wireless', array('label'=>'Sans-fil','class'=>'checkbox')) ?>
        <legend class="legend"><?= __('Applicatif') ?></legend>
        <?= $this->Form->input('web', array('label'=>'Web','class'=>'checkbox')) ?>
        <?= $this->Form->input('mobile', array('label'=>'Mobile','class'=>'checkbox')) ?>
        <?= $this->Form->input('review', array('label'=>'Revue de code','class'=>'checkbox')) ?>
        <legend class="legend"><?= __('Options') ?></legend>
        <?= $this->Form->input('validation', array('class'=>'checkbox')) ?>
        <button type="submit" class="btn-info btn-login" ><?= __('Sauvegarder') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
