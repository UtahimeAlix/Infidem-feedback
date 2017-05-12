<?php $this->assign('title', __("Plan d'action")); ?>

<br>
<a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
<br>

<head>
  <?= $this->Html->css('planAction.css') ?>

</head>

<br><br>

<div class="ods form">
  <form method="post" action="">
    <fieldset class="planAction">
    <table id="tableauVuln" data-id="<?= $mandate->id ?>">
      <thead>
      <tr>
        <th>ID</th>
        <th><?= __('Nom') ?></th>
        <th><?= __('Cible') ?></th>
        <th><?= __('Correctifs') ?></th>
        <th><?= __('Date de correction prévue') ?></th>
        <th><?= __('Commentaires') ?></th>
        <th><?= __('Corrigé') ?></th>
        <th><?= __('À valider?') ?></th>
      </tr>
    </thead>
    <tbody id="tbodyVuln">
    </tbody>
    </table>
    <button id="addVulnBtn" data-id="<?= $this->request->session()->read('Auth.User.role_id') ?>" type="button" class="btn-info btn-mandate btn-add" ><?= __('+') ?></button>
    <a href="" target="_self"><button type="submit" class="btn-info btn-valider" ><?= __('Valider') ?></button></a>
  </fieldset>
  </form>

</div>

<script type="text/javascript">
var planActionUrl = '<?= $this->Url->Build(['controller' => 'Mandates', 'action' => 'planActionDatas'], true); ?>';
var savePlanActionUrl = '<?= $this->Url->Build(['controller' => 'Mandates', 'action' => 'planActionSave'], true); ?>';
</script>
<?= $this->Html->script('planAction.js') ?>
