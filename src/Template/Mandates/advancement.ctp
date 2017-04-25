<?php $this->assign('title', __("Avancement")); ?>

<head>
  <?= $this->Html->css('advancement.css') ?>
</head>

<br>
<a href="/infidem-feedback/mandates/add"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>

<br>
<div class="ods form">
  <span style="display: none;" id="mandate_id"><?= $mandate->id ?></span>
  <span style="display: none;" id="mandate_state"><?= $mandate->state ?></span>
    <fieldset class="add">
        <legend class="legend"><?= __('Avancement') ?></legend>

        <label for="debute" style="padding-top: 10px;"><?= __('Tests débutés') ?></label><input class="checkbox-advancement" type="checkbox" name="checkbox" id="debute" value="value"><br>
        <label for="middle" style="padding-top: 10px;"><?= __('Tests semi-complétés') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="middle" value="value"><br>
        <label for="endTest" style="padding-top: 10px;"><?= __('Tests terminés') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="endTest" value="value"><br>
        <label for="endAnalyze" style="padding-top: 10px;"><?= __('Analyse terminée') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="endAnalyze" value="value"><br>
        <label for="endreport" style="padding-top: 10px;"><?= __('Rapport terminé') ?></label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="endReport" value="value"><br>

        <br>

        <table><div id="ad" style="text-align: center; width:50px; height:30px; border: 1px solid #212121; border-radius: 5px; padding: 5px; margin: 0 auto;">0%</div></table>
    </fieldset>
</div>

<script type="text/javascript">var advancementUrl = '<?= $this->Url->Build(['controller' => 'Mandates', 'action' => 'advancement']) ?>';</script>
<?= $this->Html->script('advancement.js') ?>
