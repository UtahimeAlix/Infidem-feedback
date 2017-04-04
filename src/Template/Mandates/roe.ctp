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
    <fieldset class="add">
        <h4 class="page-header"><strong>Context</strong></h4>
        <div><?= $mandate->contexte; ?></div>
        <h4 class="page-header"><strong>Requirement</strong></h4>
        <div><?= $mandate->besoin; ?></div>

        <?php if($mandate->external === true || $mandate->internal === true || $mandate->wireless === true): ?>
        <h4 class="page-header"><strong>Infrastructure</strong></h4>
        <?php if($mandate->external === true): ?>
        <h5>Périmètre externe</h5>
        <button style="margin-top:7px; float:right;" class="btn btn-sm btn-success add_external_ip"><i class="fa fa-plus"></i></button>
        <div class="input_fields_external">
            <div><input style="margin-top:15px; width:90%;" type="text" name="ext_ip[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->internal === true): ?>
        <h5>Réseau interne</h5>
        <button style="margin-top:7px; float:right;" class="btn btn-sm btn-success add_internal_ip"><i class="fa fa-plus"></i></button>
        <div class="input_fields_internal">
            <div><input style="margin-top:15px; width:90%;" type="text" name="int_ip[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->wireless === true): ?>
        <h5>Réseau sans-fil</h5>
        <button style="margin-top:7px; float:right;" class="btn btn-sm btn-success add_wl_ssid"><i class="fa fa-plus"></i></button>
        <div class="input_fields_ssid">
            <div><input style="margin-top:15px; width:90%;" type="text" name="ssid[]"></div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <?php if($mandate->web === true || $mandate->mobile === true || $mandate->review === true): ?>
        <h4 class="page-header"><strong>Applicatif</strong></h4>
        <?php if($mandate->web === true): ?>
        <h5>Application web</h5>
        <button style="float:right;" class="btn btn-sm btn-success add_web_cred"><i class="fa fa-plus"></i></button>
        <div class="input_fields_web_cred form-group">
                <label for="web_login" style="float:left; line-height:30px; font-size:14px;">Login:</label>
                <input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="text" name="web_login[]" id="web_login">
                <label for="web_password"  style="float:left; line-height:30px; font-size:14px;">Password: </label>
                <input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="password" name="web_password[]" id="web_password">
        </div>
        <button style="margin-top:18px; float:right;" class="btn btn-sm btn-success add_web_url"><i class="fa fa-plus"></i></button>
        <div class="input_fields_web_url">
            <div><input style="margin-top:15px; width:90%;" type="text" name="mytext[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->mobile === true): ?>
        <h5>Application mobile</h5>
        <button style="float:right;" class="btn btn-sm btn-success add_mobile_cred"><i class="fa fa-plus"></i></button>
        <div class="input_fields_mobile_cred form-group">
                <label for="login" style="float:left; line-height:30px; font-size:14px;">Login:</label>
                <input style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="text" name="mytext[]" id="login">
                <label for="password"  style="float:left; line-height:30px; font-size:14px;">Password: </label>
                <input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="password" name="mytext[]" id="password">
        </div>
        <div class="input_fields_wrap1">
            <div><input style="margin-top:15px; width:100%;" type="text" name="mytext[]"></div>
        </div>
        <?php endif; ?>
        <?php if($mandate->review === true): ?>
        <h5>Revue de code</h5>
        <div class="input_fields_wrap2">
            <div><input style="margin-top:15px; width:100%;" type="text" name="mytext[]"></div>
        </div>
        <?php endif; ?>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary" style="float:right;">Save</button>
        <?= $this->Form->end() ?>
    </fieldset>
</div>

</body>
</html>
