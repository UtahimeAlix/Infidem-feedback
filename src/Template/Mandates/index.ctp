<?php $this->assign('title', __("Avancement")); ?>

<br>
<a href="/infidem-feedback/mandates/add"><img class="logo-img" src="/infidem-feedback/webroot/img/logo.jpg" alt="logo" style="align: middle;"></a>
<br>

<div class="ods form">
  <fieldset class="add">
    <legend class="legend"><?= __('En cours') ?></legend><br><br>
    <?php
    if(!empty($mandates)): foreach($mandates as $mandate): ?>
    <div class="post-­‐box">
      <div class="post-­‐content">
        <div class="caption">
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
            <a href="/infidem-feedback/mandates/advancement/<?php echo $mandate->id;?>"><?php echo $advancement; ?></a>
          </h5>
        </div>
      </div>
    </div>
    <?php
  endforeach;
else: ?>
<p class="no-­‐record">No mandates found...</p>
<?php endif; ?>

<br><a href="/infidem-feedback/Mandates/add" target="_self"><button type="button" class="btn-info btn-mandate" ><?= __('+') ?></button></a>
</fieldset>
</div>
