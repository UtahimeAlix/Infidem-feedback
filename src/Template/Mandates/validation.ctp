<?php $this->assign('title', __("Validation")); ?>

<head>
  <?= $this->Html->css('advancement.css') ?>
</head>

<br>
<a href="/infidem-feedback/mandates/add"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>

<br>

<div class="ods form">
    <fieldset class="add">
      <span style="display: none;" id="validation_state"><?= $mandate->validation_state ?></span>
      <span style="display: none;" id="mandate_id"><?= $mandate->id ?></span>

      <legend class="legend"><?= __('Validation') ?></legend>
      <label for="debute" style="padding-top: 10px;"><?= __('Tests débutés') ?></label><input class="checkbox-advancement" type="checkbox" name="checkbox" id="debute" value="value"><br>
      <label for="termine" style="padding-top: 10px;"><?= __('Tests terminés') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="termine" value="value"><br>
      <label for="updated" style="padding-top: 10px;"><?= __('Plan d\'action mis à jour') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="updated" value="value"><br>
    </fieldset>
  </div>

  <script type="text/javascript">var validationUrl = '<?= $this->Url->Build(['controller' => 'Mandates', 'action' => 'validation']) ?>';</script>
  <?= $this->Html->script('validation.js') ?>
