$(document).ready(function() {
  switch(parseInt($('#mandate_state').text(), 10)) {
    case 5:
      $('#endReport').prop( "checked", true );
    case 4:
    $('#endAnalyze').prop( "checked", true );
    case 3:
    $('#endTest').prop( "checked", true );
    case 2:
    $('#middle').prop( "checked", true );
    case 1:
    $('#debute').prop( "checked", true );
    break;
  }

  switch(parseInt($('#mandate_state').text(), 10)) {
    case 1:
      $('#debute').prop( "disabled", true );
      $('#middle').prop( "disabled", false );
      $('#ad').html('5%');
    break;
    case 2:
    $('#debute').prop( "disabled", true );
    $('#endTest').prop( "disabled", false );
    $('#ad').html('50%');
    break;
    case 3:
    $('#debute').prop( "disabled", true );
    $('#endAnalyze').prop( "disabled", false );
    $('#ad').html('75%');
    break;
    case 4:
    $('#debute').prop( "disabled", true );
    $('#endReport').prop( "disabled", false );
    $('#ad').html('85%');
    break;
    case 5:
    $('#debute').prop( "disabled", true );
    $('#ad').html('100%');
    default:
  }

  $('.checkbox-advancement').change(function() {
    if($(this).is(":checked")) {
    switch($(this).attr('id')) {
      case 'debute':
      $('#debute').prop( "disabled", true );
        $('#middle').prop( "disabled", false );
        $('#ad').html('5%');
      break;
      case 'middle':
      $('#middle').prop( "disabled", true );
        $('#endTest').prop( "disabled", false );
        $('#ad').html('50%');
      break;
      case 'endTest':
      $('#endTest').prop( "disabled", true );
        $('#endAnalyze').prop( "disabled", false );
        $('#ad').html('75%');
      break;
      case 'endAnalyze':
      $('#endAnalyze').prop( "disabled", true );
        $('#endReport').prop( "disabled", false );
        $('#ad').html('85%');
      break;
      case 'endReport':
      $('#endReport').prop( "disabled", true );
      $('#ad').html('100%');
      break;
      default:

      }
      $(this).prop( "disabled", true );
      $.ajaxSetup({
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
      $.ajax({
            type:"POST",
            data: {$mandateId: $('#mandate_id').text()},
            url: advancementUrl + '/' + $('#mandate_id').text(),
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
