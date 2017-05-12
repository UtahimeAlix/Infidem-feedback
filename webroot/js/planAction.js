var arr = [
{val : 0, text: 'Non'},
{val : 1, text: 'Oui'}
];
var sel = $("<select class='form-control' id='isdone[]' name='isdone[]'>");
var sel2 = $("<select class='form-control' id='isvalid[]' name='isvalid[]'>");
$(arr).each(function() {
sel.append($("<option>").attr('value',this.val).text(this.text));
sel2.append($("<option>").attr('value',this.val).text(this.text));
});

$(document).ready(function() {
  var id = $('#tableauVuln').attr('data-id');

  $.ajax({
    type: 'post',
    data: { data: id },
    url: planActionUrl,
    dataType: "json",
    success: function (data) {
      if (data.actions.length > 0) {
        for (var i = 0; i < data.actions.length; i++) {
          var currentTime = new Date(data.actions[i]['date']);
          var date = currentTime.getFullYear() + "-" +
      ("0" + (currentTime.getMonth() + 1)).slice(-2) + "-" +
      ("0" + currentTime.getDate()).slice(-2);
      $("#tableauVuln tbody").append("<tr>");

          if (data.user['role_id'] == 1) {
            $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' value='"+data.actions[i]['vuln_id']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='name[]' name='name[]' placeholder='Nom' value='"+data.actions[i]['name']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='target[]' name='target[]' placeholder='Cible' value='"+data.actions[i]['target']+"'></td>");
          } else {
            $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' readonly value='"+data.actions[i]['vuln_id']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='name[]' name='name[]' placeholder='Nom' readonly value='"+data.actions[i]['name']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='target[]' name='target[]' placeholder='Cible' readonly value='"+data.actions[i]['target']+"'></td>");
          }
          if (data.user['role_id'] == 1 || data.user['role_id'] == 4) {
            $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='action[]' name='action[]' placeholder='Correctifs' value='"+data.actions[i]['action']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' value='"+date+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='comment[]' name='comment[]' placeholder='Commentaires' value='"+data.actions[i]['comment']+"'></td>");
            if (data.actions[i]['is_fixed']) {
              sel.find('option[value="0"]').attr("selected",false);
              sel.find('option[value="1"]').attr("selected",true);
              sel.attr("disabled",false);
              $("#tableauVuln tbody").append("<td class='center-td'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel.clone());
            } else {
              sel.find('option[value="0"]').attr("selected",true);
              sel.find('option[value="1"]').attr("selected",false);
              sel.attr("disabled",false);
              $("#tableauVuln tbody").append("<td class='center-td'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel.clone());
            }
          } else {
            $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='action[]' name='action[]' placeholder='Correctifs'  readonly value='"+data.actions[i]['action']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd'  readonly value='"+date+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='comment[]' name='comment[]' placeholder='Commentaires'  readonly value='"+data.actions[i]['comment']+"'></td>");
            if (data.actions[i]['is_fixed']) {
              sel.find('option[value="0"]').attr("selected",false);
              sel.find('option[value="1"]').attr("selected",true);
              sel.attr("disabled",true);
              $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel.clone());
            } else {
              sel.find('option[value="0"]').attr("selected",true);
              sel.find('option[value="1"]').attr("selected",false);
              sel.attr("disabled",true);
              $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel.clone());
            }
          }
          if (data.user['role_id'] == 1) {
            if (data.actions[i]['is_approved']) {
              sel2.find('option[value="0"]').attr("selected",false);
              sel2.find('option[value="1"]').attr("selected",true);
              sel2.attr("disabled",false);
              $("#tableauVuln tbody").append("<td class='center-td'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel2.clone());
            } else {
              sel2.find('option[value="0"]').attr("selected",true);
              sel2.find('option[value="1"]').attr("selected",false);
              sel2.attr("disabled",false);
              $("#tableauVuln tbody").append("<td class='center-td'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel2.clone());
            }
          } else {
            if (data.actions[i]['is_approved']) {
              sel2.find('option[value="0"]').attr("selected",false);
              sel2.find('option[value="1"]').attr("selected",true);
              sel2.attr("disabled",true);
              $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel2.clone());
            } else {
              sel2.find('option[value="0"]').attr("selected",true);
              sel2.find('option[value="1"]').attr("selected",false);
              sel2.attr("disabled",true);
              $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
              $("#tableauVuln tbody").find('td:last').append(sel2.clone());
            }
            $("#tableauVuln tbody").append("</tr>");
          }
        }
      } else {
        $("#tableauVuln tbody").append("<tr>");
        if (data.user['role_id'] == 1) {
          $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' ></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='name[]' name='name[]' placeholder='Nom' ></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='target[]' name='target[]' placeholder='Cible' ></td>");
        } else {
          $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID'  readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='name[]' name='name[]' placeholder='Nom'  readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='target[]' name='target[]' placeholder='Cible'  readonly></td>");
        }
        if (data.user['role_id'] == 1 || data.user['role_id'] == 4) {
          $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='action[]' name='action[]' placeholder='Correctifs' ></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' ></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='comment[]' name='comment[]' placeholder='Commentaires' ></td>");
          sel.find('option[value="0"]').attr("selected",false);
          sel.find('option[value="1"]').attr("selected",false);
          sel.attr("disabled",false);
          $("#tableauVuln tbody").append("<td class='center-td'></td>");
          $("#tableauVuln tbody").find('td:last').append(sel.clone());
        } else {
          $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='action[]' name='action[]' placeholder='Correctifs'  readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd'  readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='comment[]' name='comment[]' placeholder='Commentaires'  readonly></td>");
          sel.find('option[value="0"]').attr("selected",false);
          sel.find('option[value="1"]').attr("selected",false);
          sel.attr("disabled",true);
          $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
          $("#tableauVuln tbody").find('td:last').append(sel.clone());
        }
        if (data.user['role_id'] == 1) {
          sel2.find('option[value="0"]').attr("selected",false);
          sel2.find('option[value="1"]').attr("selected",false);
          sel2.attr("disabled",false);
          $("#tableauVuln tbody").append("<td class='center-td'></td>");
          $("#tableauVuln tbody").find('td:last').append(sel2.clone());
        } else {
          sel2.find('option[value="0"]').attr("selected",false);
          sel2.find('option[value="1"]').attr("selected",false);
          sel2.attr("disabled",true);
          $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
          $("#tableauVuln tbody").find('td:last').append(sel2.clone());
        }
        $("#tableauVuln tbody").append("</tr>");
      }

    }
  });

  var role_id = $('#addVulnBtn').attr('data-id');

  $('#addVulnBtn').on('click', function(){ addVulnerability(role_id); });

});

function addVulnerability(role_id) {

  $("#tableauVuln tbody").append("<tr>");
  if (role_id == 1) {
    $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' ></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='name[]' name='name[]' placeholder='Nom' ></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='target[]' name='target[]' placeholder='Cible' ></td>");
  } else {
    $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID'  readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='name[]' name='name[]' placeholder='Nom'  readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='target[]' name='target[]' placeholder='Cible'  readonly></td>");
  }
  if (role_id == 1 || role_id == 4) {
    $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='action[]' name='action[]' placeholder='Correctifs' ></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' ></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input class='form-control input-sm' type='label' id='comment[]' name='comment[]' placeholder='Commentaires' ></td>");
    sel.find('option[value="0"]').attr("selected",false);
    sel.find('option[value="1"]').attr("selected",false);
    sel.attr("disabled",false);
    $("#tableauVuln tbody").append("<td class='center-td'></td>");
    $("#tableauVuln tbody").find('td:last').append(sel.clone());
  } else {
    $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='action[]' name='action[]' placeholder='Correctifs'  readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd'  readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input class='form-control input-sm' type='label' id='comment[]' name='comment[]' placeholder='Commentaires'  readonly></td>");
    sel.find('option[value="0"]').attr("selected",false);
    sel.find('option[value="1"]').attr("selected",false);
    sel.attr("disabled",true);
    $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
    $("#tableauVuln tbody").find('td:last').append(sel.clone());
  }
  if (role_id == 1) {
    sel2.find('option[value="0"]').attr("selected",false);
    sel2.find('option[value="1"]').attr("selected",false);
    sel2.attr("disabled",false);
    $("#tableauVuln tbody").append("<td class='center-td'></td>");
    $("#tableauVuln tbody").find('td:last').append(sel2.clone());
  } else {
    sel2.find('option[value="0"]').attr("selected",false);
    sel2.find('option[value="1"]').attr("selected",false);
    sel2.attr("disabled",true);
    $("#tableauVuln tbody").append("<td class='center-td' contenteditable='false'></td>");
    $("#tableauVuln tbody").find('td:last').append(sel2.clone());
  }
  $("#tableauVuln tbody").append("</tr>");

};
