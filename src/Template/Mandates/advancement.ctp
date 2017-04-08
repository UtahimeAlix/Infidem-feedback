<?php $this->assign('title', __("Avancement")); ?>

<br><br>
<div class="ods form">
    <fieldset class="add">
        <legend class="legend"><?= __('Avancement') ?></legend>

        <label for="debute" style="padding-top: 10px;">Débuté</label><input class="checkbox-advancement" type="checkbox" name="checkbox" id="debute" value="value"><br>
        <label for="middle" style="padding-top: 10px;">Moitié des tests</label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="middle" value="value"><br>
        <label for="endTest" style="padding-top: 10px;">Tests terminés</label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="endTest" value="value"><br>
        <label for="endAnalyze" style="padding-top: 10px;">Analyse terminée</label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="endAnalyze" value="value"><br>
        <label for="endreport" style="padding-top: 10px;">Rapport terminé</label><input disabled="disabled" class="checkbox-advancement" type="checkbox" name="checkbox" id="endReport" value="value"><br>

        <br>

        <table><div style="text-align: center; width:50px; height:30px; border: 1px solid #212121; border-radius: 5px; padding: 5px; margin: 0 auto;">0%</div></table>
    </fieldset>
</div>
