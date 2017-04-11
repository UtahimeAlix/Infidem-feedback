<?php $this->assign('title', __("Avancement")); ?>

<br><br>
<div class="ods form">
  <span style="display: none;" id="mandate_id"><?= $mandate->id ?></span>
  <span style="display: none;" id="mandate_state"><?= $mandate->state ?></span>
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

<script>
$(document).ready(function() {
  switch(parseInt($('#mandate_state').text(), 10)) {
    // case 0:
    //
    // break;
    case 1:
      $('#debute').prop( "disabled", true );
      $('#middle').prop( "disabled", false );
    break;
    case 2:
    $('#debute').prop( "disabled", true );
    $('#endTest').prop( "disabled", false );
    break;
    case 3:
    $('#debute').prop( "disabled", true );
    $('#endAnalyze').prop( "disabled", false );
    case 4:
    $('#debute').prop( "disabled", true );
    $('#endTest').prop( "disabled", false );
    case 5:
    $('#debute').prop( "disabled", true );
    default:
  }

  $('.checkbox-advancement').change(function() {
    if($(this).is(":checked")) {
    switch($(this).attr('id')) {
      case 'debute':
        $('#middle').prop( "disabled", false );
      break;
      case 'middle':
        $('#endTest').prop( "disabled", false );
      break;
      case 'endTest':
        $('#endAnalyze').prop( "disabled", false );
      break;
      case 'endAnalyze':
        $('#endReport').prop( "disabled", false );
      break;
      case 'endReport':
      break;
      default:
//
      }
      $(this).prop( "disabled", true );
      $.ajaxSetup({
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    });
      $.ajax({
            type:"POST",
            url:'/mandates/advancement/' + $('#mandate_id').text(),
            success : function(data) {
               alert(data);
            },
            error : function() {
               alert("false");
            }
        });
    }


    });
});

</script>
