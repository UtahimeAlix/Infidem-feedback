$(document).ready(function() {
  switch(parseInt($('#validation_state').text(), 10)) {
    case 3:
    $('#updated').prop( "checked", true );
    case 2:
    $('#middle').prop( "checked", true );
    case 1:
    $('#debute').prop( "checked", true );
    break;
  }

  switch(parseInt($('#validation_state').text(), 10)) {
    case 1:
      $('#debute').prop( "disabled", true );
      $('#termine').prop( "disabled", false );
    break;
    case 2:
    $('#debute').prop( "disabled", true );
    $('#updated').prop( "disabled", false );
    break;
    case 3:
    $('#debute').prop( "disabled", true );
    break;
  }

  $('.checkbox-advancement').change(function() {
    if($(this).is(":checked")) {
    switch($(this).attr('id')) {
      case 'debute':
      $('#debute').prop( "disabled", true );
        $('#termine').prop( "disabled", false );
      break;
      case 'termine':
      $('#termine').prop( "disabled", true );
        $('#updated').prop( "disabled", false );
      break;
      case 'updated':
      $('#updated').prop( "disabled", true );
      break;
      }

      $(this).prop( "disabled", true );
      $.ajaxSetup({
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
    })
      $.ajax({
            type:"POST",
            data: {$mandateId: $('#mandate_id').text()},
            url: validationUrl + '/' + $('#mandate_id').text(),
            success : function(data) {
            },
            error : function() {
               alert("false");
            }
        });
    }


    });
});
