<?php $this->assign('title', __("Plan d'action")); ?>

<head>
  <?= $this->Html->css('planAction.css') ?>
</head>

<br><br>

<div class="ods form">
    <fieldset class="planAction">
        <legend class="legend"><?= __('Plan d\'action') ?></legend>

        <table class="tableauVuln">
          <col width="5px">
          <col width="20px">
          <col width="20px">
          <col width="30px">
          <col width="10px">
          <col width="30px">
          <col width="7px">
          <col width="10px">
          <tr>
            <th>ID</td>
            <th><?= __('Nom') ?></td>
            <th><?= __('Cible') ?></td>
            <th><?= __('Correctifs') ?></td>
            <th><?= __('Date de correction prévue') ?></td>
            <th><?= __('Commentaires') ?></td>
            <th><?= __('Terminé') ?></td>
              <th><?= __('À valider?') ?></td>
          </tr>
          <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Cible</td>
            <td>Correctif</td>
            <td>Date</td>
            <td>Commentaires</td>
            <td class="center-td"><input style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="termine" value="value"></td>
            <td class="center-td"><input style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="valide" value="value"></td>
          </tr>
          <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Cible</td>
            <td>Correctif</td>
            <td>Date</td>
            <td>Commentaires</td>
            <td class="center-td"><input style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="termine" value="value"></td>
            <td class="center-td"><input style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="valide" value="value"></td>
          </tr>
        </table>

        <a href="" target="_self"><button type="button" class="btn-info btn-valider" ><?= __('Valider') ?></button></a>

    </fieldset>
</div>
