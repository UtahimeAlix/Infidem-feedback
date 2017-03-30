<?php $this->assign('title', __("ODS")); ?>

<div class="ods form">
<?= $this->Form->create($mandate) ?><br>
    <fieldset class="add">
        <legend class="legend"><?= __('Ordre du Sphinx') ?></legend>
        <?= $this->Form->input('name') ?>
        <?= $this->Form->input('contexte') ?>
        <?= $this->Form->input('besoin') ?>
        <legend class="legend-ods"><?= __('Infrastructure') ?></legend>
        <?= $this->Form->input('external') ?>
        <?= $this->Form->input('internal') ?>
        <?= $this->Form->input('wireless') ?>
        <legend class="legend-ods"><?= __('Applicatif') ?></legend>
        <?= $this->Form->input('web') ?>
        <?= $this->Form->input('mobile') ?>
        <?= $this->Form->input('review') ?>
        <?= $this->Form->input('validation') ?>
      <?= $this->Form->submit('../img/save.png', array('style' => 'margin-left: auto; display:block;')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
