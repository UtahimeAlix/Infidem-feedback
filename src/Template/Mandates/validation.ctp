<?php $this->assign('title', __("Validation")); ?>

<head>
  <?= $this->Html->css('advancement.css') ?>
</head>

<br>
<a href="/infidem-feedback/mandates/add"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>

<br>

<div class="ods form">
    <fieldset class="add">
      <legend class="legend"><?= __('Validation') ?></legend>
      <label for="debute" style="padding-top: 10px;"><?= __('Tests débutés') ?></label><input class="checkbox-advancement" type="checkbox" name="checkbox" id="debute" value="value"><br>
      <label for="middle" style="padding-top: 10px;"><?= __('Tests semi-complétés') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="middle" value="value"><br>
      <label for="endTest" style="padding-top: 10px;"><?= __('Tests temrinés') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="endTest" value="value"><br>
    </fieldset>
  </div>
