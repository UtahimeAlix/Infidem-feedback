<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <?php $this->assign('title', __("ROE")); ?>

  <br>
  <a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
  <br>

<div id="myroe" data-id="<?= $mandate->id; ?>" class="ods form">
  <form method="post" action="">
      <fieldset class="addRoe">
        <legend class="legend"><?= __('Règles d\'engagement') ?></legend>
        <br><br><br>
          <h4 class="page-header"><strong>Contexte</strong></h4>
          <div><?= $mandate->contexte; ?></div>
          <h4 class="page-header"><strong>Besoin</strong></h4>
          <div><?= $mandate->besoin; ?></div>

          <?php if($mandate->external === true || $mandate->internal === true || $mandate->wireless === true): ?>
          <h4 class="page-header"><strong>Infrastructure</strong></h4>
          <?php if($mandate->external === true): ?>
          <h5><strong>Périmètre externe</strong></h5>
          <button class="btn btn-sm btn-success add_external_ip btn-add"><i class="fa fa-plus"></i></button><div class="input_fields_external">
          </div>
          <?php endif; ?>
          <?php if($mandate->internal === true): ?>
          <h5><strong>Réseau interne</strong></h5>
          <button class="btn btn-sm btn-success add_internal_ip btn-add"><i class="fa fa-plus"></i></button>
          <div class="input_fields_internal">
          </div>
          <?php endif; ?>
          <?php if($mandate->wireless === true): ?>
          <h5><strong>Réseau sans-fil</strong></h5>
          <button class="btn btn-sm btn-success add_wl_ssid btn-add"><i class="fa fa-plus"></i></button>
          <div class="input_fields_ssid">
          </div>
          <?php endif; ?>
          <?php endif; ?>
        <?php if($mandate->web === true || $mandate->mobile === true || $mandate->review === true): ?>
          <h4 class="page-header"><strong>Applicatif</strong></h4>
          <?php if($mandate->web === true): ?>
          <h5><strong>Application web</strong></h5>
          <button style="margin-top:7.5px" class="btn btn-sm btn-success add_web_url btn-right"><i class="fa fa-plus"></i></button>
          <div class="input_fields_web_url">
          </div>
          <?php endif; ?>
          <?php if($mandate->mobile === true): ?>
          <h5><strong>Application mobile</strong></h5>
          <button class="btn btn-sm btn-success add_mobile_cred btn-right"><i class="fa fa-plus"></i></button>
          <div class="input_fields_mobile_cred form-group">
          </div>
          <div class="input_fields_wrap1">
              <div><input class="champ-plein" placeholder="URL" type="text" name="url_app"></div>
          </div>
          <?php endif; ?>
          <?php if($mandate->review === true): ?>
          <h5><strong>Revue de code</strong></h5>
          <div class="input_fields_wrap2">
              <div><input class="champ-plein" type="text" name="code_review" placeholder="URL"></div>
          </div>
          <?php endif; ?>
          <?php endif; ?>
          <button type="submit" class="btn btn-primary btn-right">Save</button>
      </fieldset>
    </form>
</div>

</body>
</html>
<script type="text/javascript">var roeUrl = '<?= $this->Url->Build(['controller' => 'Mandates', 'action' => 'datas'], true); ?>';</script>
<script src="/infidem-feedback/webroot/js/dynamic_input_form.js"></script>
