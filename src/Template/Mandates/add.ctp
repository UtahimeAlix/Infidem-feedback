<?php $this->assign('title', __("ODS")); ?>

<div class="ods form">
<?= $this->Form->create($mandate) ?><br>
    <fieldset class="add">
        <legend class="legend"><?= __('Service offer') ?></legend>
        <?= $this->Form->input('name', array('class'=>'champ')) ?>
        <?= $this->Form->input('contexte', array('type'=>'textarea','label'=>'Context', 'class'=>'champ')) ?>
        <?= $this->Form->input('besoin', array('label'=>'Requirement', 'class'=>'champ')) ?>
        <legend class="legend"><?= __('Infrastructure') ?></legend>
        <?= $this->Form->input('external', array('class'=>'checkbox')) ?>
        <?= $this->Form->input('internal', array('class'=>'checkbox')) ?>
        <?= $this->Form->input('wireless', array('class'=>'checkbox')) ?>
        <legend class="legend"><?= __('Applicatif') ?></legend>
        <?= $this->Form->input('web', array('class'=>'checkbox')) ?>
        <?= $this->Form->input('mobile', array('class'=>'checkbox')) ?>
        <?= $this->Form->input('review', array('class'=>'checkbox')) ?>
        <legend class="legend"><?= __('Options') ?></legend>
        <?= $this->Form->input('validation', array('class'=>'checkbox')) ?>
        <button type="submit" class="btn-info btn-login" ><?= __('Save') ?></button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
