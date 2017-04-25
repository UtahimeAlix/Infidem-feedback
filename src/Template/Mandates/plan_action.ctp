<?php $this->assign('title', __("Plan d'action")); ?>

<head>
  <?= $this->Html->css('planAction.css') ?>

</head>

<br><br>

<div class="ods form">
    <fieldset class="planAction">
        <legend class="legend"><?= __('Plan d\'action') ?></legend>

        <table class="tableauVuln" id="tableauVuln">
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
            <th><?= __('Corrigé') ?></td>
              <th><?= __('À valider?') ?></td>
          </tr>

          <tr>
            <?php if ($this->request->session()->read('Auth.User.role_id') == 1): ?>
            <td contenteditable='true'><input type='label' placeholder='ID' style='width:20px;'></imput></td>
            <td contenteditable='true'><input type='label' placeholder='Nom' style='width:120px;'></td>
            <td contenteditable='true'><input type='label' placeholder='Cible' style='width:120px;'></td>
          <?php else: ?>
            <td contenteditable='false'><input type='label' placeholder='ID' style='width:20px;' readonly></imput></td>
            <td contenteditable='false'><input type='label' placeholder='Nom' style='width:120px;' readonly></td>
            <td contenteditable='false'><input type='label' placeholder='Cible' style='width:120px;' readonly></td>
          <?php endif ?>

          <?php if ($this->request->session()->read('Auth.User.role_id') == 1 || $this->request->session()->read('Auth.User.role_id') == 4): ?>
            <td contenteditable='true'><input type='label' placeholder='Correctifs' style='width:180px;'></td>
            <td contenteditable='true'><input type="date" placeholder="yyyy-mm-dd" style="height: 20.5px;"></input></td>
            <td contenteditable='true'><input type='label' placeholder='Commentaires' style='width:180px;'></td>
            <td class="center-td"><input style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="termine" value="value"></td>
        <?php else: ?>
          <td contenteditable='false'><input type='label' placeholder='Correctifs' style='width:180px;' readonly></td>
          <td contenteditable='false'><input type="date" placeholder="yyyy-mm-dd" style="height: 20.5px;" readonly></input></td>
          <td contenteditable='false'><input type='label' placeholder='Commentaires' style='width:180px;' readonly></td>
          <td class="center-td"><input disabled='true' style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="termine" value="value"></td>
        <?php endif ?>

        <?php if ($this->request->session()->read('Auth.User.role_id') == 1): ?>
        <td class="center-td"><input style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="valide" value="value"></td>
      <?php else: ?>
      <td class="center-td"><input disabled='true' style="margin: 0 auto;" class="checkbox-planAction" type="checkbox" name="checkbox" id="valide" value="value"></td>
      <?php endif ?>
          </tr>
        </table>

        <button onclick="addVulnerability(<?= $this->request->session()->read('Auth.User.role_id') ?>);" type="button" class="btn-info btn-mandate btn-add" ><?= __('+') ?></button>
        <a href="" target="_self"><button type="button" class="btn-info btn-valider" ><?= __('Valider') ?></button></a>

    </fieldset>
</div>

<?= $this->Html->script('planAction.js') ?>
