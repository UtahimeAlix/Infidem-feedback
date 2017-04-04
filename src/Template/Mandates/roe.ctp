<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php $this->assign('title', __("ROE")); ?>

<div class="ods form">
<?= $this->Form->create($mandate) ?>
    <fieldset class="addRoe">
      <legend class="legend"><?= __('Règles d\'engagement') ?></legend>
      <br><br><br>
        <h4 class="page-header"><strong>Context</strong></h4>
        <div><?= $mandate->contexte; ?></div>
        <h4 class="page-header"><strong>Requirement</strong></h4>
        <div><?= $mandate->besoin; ?></div>

        <?php if($mandate->external === true || $mandate->internal === true || $mandate->wireless === true): ?>
        <h4 class="page-header"><strong>Infrastructure</strong></h4>
        <?php if($mandate->external === true): ?>
        <h5>Périmètre externe</h5>
        <button class="btn btn-sm btn-success add_external_ip btn-add"><i class="fa fa-plus"></i></button>
        <div class="input_fields_external">
            <div><input class="champ-text" type="text" name="ext_ip[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->internal === true): ?>
        <h5>Réseau interne</h5>
        <button class="btn btn-sm btn-success add_internal_ip btn-add"><i class="fa fa-plus"></i></button>
        <div class="input_fields_internal">
            <div><input class="champ-text" type="text" name="int_ip[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->wireless === true): ?>
        <h5>Réseau sans-fil</h5>
        <button class="btn btn-sm btn-success add_wl_ssid btn-add"><i class="fa fa-plus"></i></button>
        <div class="input_fields_ssid">
            <div><input class="champ-text" type="text" name="ssid[]"></div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php if($mandate->web === true || $mandate->mobile === true || $mandate->review === true): ?>
        <h4 class="page-header"><strong>Applicatif</strong></h4>
        <?php if($mandate->web === true): ?>
        <h5>Application web</h5>
        <button class="btn btn-sm btn-success add_web_cred btn-right"><i class="fa fa-plus"></i></button>
        <div class="input_fields_web_cred form-group">
                <label for="web_login" class="field-name">Login:</label>
                <input class="form-control" type="text" name="web_login[]" id="web_login">
                <label for="web_password"  class="field-name">Password: </label>
                <input class="form-control" type="password" name="web_password[]" id="web_password">
        </div>
        <button style="margin-top:18px" class="btn btn-sm btn-success add_web_url btn-right"><i class="fa fa-plus"></i></button>
        <div class="input_fields_web_url">
            <div><input class="champ-text" type="text" name="mytext[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->mobile === true): ?>
        <h5>Application mobile</h5>
        <button class="btn btn-sm btn-success add_mobile_cred btn-right"><i class="fa fa-plus"></i></button>
        <div class="input_fields_mobile_cred form-group">
          <label for="web_login" class="field-name">Login:</label>
          <input class="form-control" type="text" name="web_login[]" id="web_login">
          <label for="web_password"  class="field-name">Password: </label>
          <input class="form-control" type="password" name="web_password[]" id="web_password">
        </div>
        <div class="input_fields_wrap1">
            <div><input class="champ-plein" type="text" name="mytext[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->review === true): ?>
        <h5>Revue de code</h5>
        <div class="input_fields_wrap2">
            <div><input class="champ-plein" type="text" name="mytext[]"></div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary btn-right">Save</button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>

</body>
</html>
