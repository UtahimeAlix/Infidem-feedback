<?php $this->assign('title', __("Liste des mandats")); ?>

<br>
<a href="/infidem-feedback/mandates/index"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
<br>

<div class="ods form">
  <fieldset class="add">
    <legend class="legend"><?= __('Liste des mandats') ?></legend><br><br>
    <?php
    if(!empty($mandates)): foreach($mandates as $mandate): ?>
    <?php foreach($acces as $mandateAcces): ?>
      <?php if ($userId == $mandateAcces->user_id && $mandateAcces->mandate_id == $mandate->id): ?>
              <h5>
                ● <?php echo $mandate->name;
                switch ($mandate->state) {
                  case 0:
                  $advancement = __(" (tests non-débutés)");
                  break;
                  case 1:
                  $advancement = __(" (tests débutés)");
                  break;
                  case 2:
                  $advancement = __(" (tests semi-complétés)");
                  break;
                  case 3:
                  $advancement = __(" (tests terminés)");
                  break;
                  case 4:
                  $advancement = __(" (analyse terminée)");
                  break;
                  case 5:
                  $advancement = __(" (rapport terminée)");
                  break;
                }
                ?>
                <?php echo $advancement; ?>
              </h5>
              <h6 class="element"><a href="/infidem-feedback/mandates/edit/<?php echo $mandate->id;?>"><?= __('- ODS') ?></a></h6>
              <?php if ($this->request->session()->read('Auth.User.role_id') == 1 || $this->request->session()->read('Auth.User.role_id') == 4): ?>
              <h6 class="element"><a href="/infidem-feedback/mandates/roe/<?php echo $mandate->id;?>"><?= __('- ROE') ?></a></h6>
            <?php endif ?>
            <h6 class="element"><a href="/infidem-feedback/mandates/advancement/<?php echo $mandate->id;?>"><?= __('- Avancement') ?></a></h6>
            <h6 class="element"><a href="/infidem-feedback/mandates/plan_action/<?php echo $mandate->id;?>"><?= __('- Plan d\'action') ?></a></h6>
            <?php if ($this->request->session()->read('Auth.User.role_id') == 1 || $this->request->session()->read('Auth.User.role_id') == 3 || $this->request->session()->read('Auth.User.role_id') == 4): ?>
              <h6 class="element"><a href="/infidem-feedback/mandates/validation/<?php echo $mandate->id;?>"><?= __('- Validation') ?></a></h6>
              <?php endif ?>
        <?php endif; ?>

      <?php endforeach;
    endforeach;
    else: ?>
    <p class="no-­‐record">No mandates found...</p>
  <?php endif; ?>

  <br><a href="/infidem-feedback/Mandates/add" target="_self"><button type="button" class="btn-info btn-mandate" ><?= __('+') ?></button></a>
</fieldset>
</div>
