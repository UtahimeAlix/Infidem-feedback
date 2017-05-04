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
            $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' style='width:20px;' value='"+data.actions[i]['vuln_id']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='name[]' name='name[]' placeholder='Nom' style='width:120px;' value='"+data.actions[i]['name']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='target[]' name='target[]' placeholder='Cible' style='width:120px;' value='"+data.actions[i]['target']+"'></td>");
          } else {
            $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' style='width:20px;' readonly value='"+data.actions[i]['vuln_id']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='name[]' name='name[]' placeholder='Nom' style='width:120px;' readonly value='"+data.actions[i]['name']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='target[]' name='target[]' placeholder='Cible' style='width:120px;' readonly value='"+data.actions[i]['target']+"'></td>");
          }
          if (data.user['role_id'] == 1 || data.user['role_id'] == 4) {
            $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='action[]' name='action[]' placeholder='Correctifs' style='width:180px;' value='"+data.actions[i]['action']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' style='height: 20.5px;' value='"+date+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='comment[]' name='comment[]' placeholder='Commentaires' style='width:180px;' value='"+data.actions[i]['comment']+"'></td>");
            if (data.actions[i]['is_fixed']) {
              $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='checkbox' value='1' checked>");
              $("#tableauVuln tbody").append("<input style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='hidden' value='0'></td>");
            } else {
              $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='checkbox' value='1'>");
              $("#tableauVuln tbody").append("<input style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='hidden' value='0'></td>");
            }
          } else {
            $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='action[]' name='action[]' placeholder='Correctifs' style='width:180px;' readonly value='"+data.actions[i]['action']+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' style='height: 20.5px;' readonly value='"+date+"'></td>");
            $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='comment[]' name='comment[]' placeholder='Commentaires' style='width:180px;' readonly value='"+data.actions[i]['comment']+"'></td>");
            if (data.actions[i]['is_fixed']) {
              $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='checkbox' value='1' checked>");
              $("#tableauVuln tbody").append("<input disabled='true' style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='hidden' value='0'></td>");
            } else {
              $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='checkbox' value='1'>");
              $("#tableauVuln tbody").append("<input disabled='true' style='margin: 0 auto;' id='isdone[]' name='isdone["+i+"]' class='checkbox-planAction' type='hidden' value='0'></td>");
            }
          }
          if (data.user['role_id'] == 1) {
            if (data.actions[i]['is_approved']) {
              $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='checkbox' value='1' checked>");
              $("#tableauVuln tbody").append("<input style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='hidden' value='0'></td>");
            } else {
              $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='checkbox' value='1'>");
              $("#tableauVuln tbody").append("<input style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='hidden' value='0'></td>");
            }
          } else {
            if (data.actions[i]['is_approved']) {
              $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='checkbox' value='1' checked></td>");
              $("#tableauVuln tbody").append("<input disabled='true' style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='hidden' value='0'>");
            } else {
              $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='checkbox' value='1'>");
              $("#tableauVuln tbody").append("<input disabled='true' style='margin: 0 auto;' id='isvalid[]' name='isvalid["+i+"]' class='checkbox-planAction' type='hidden' value='0'></td>");
            }
            $("#tableauVuln tbody").append("</tr>");
          }
        }
      } else {
        $("#tableauVuln tbody").append("<tr>");
        if (data.user['role_id'] == 1) {
          $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' style='width:20px;'></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='name[]' name='name[]' placeholder='Nom' style='width:120px;'></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='target[]' name='target[]' placeholder='Cible' style='width:120px;'></td>");
        } else {
          $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' style='width:20px;' readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='name[]' name='name[]' placeholder='Nom' style='width:120px;' readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='target[]' name='target[]' placeholder='Cible' style='width:120px;' readonly></td>");
        }
        if (data.user['role_id'] == 1 || data.user['role_id'] == 4) {
          $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='action[]' name='action[]' placeholder='Correctifs' style='width:180px;'></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' style='height: 20.5px;'></td>");
          $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='comment[]' name='comment[]' placeholder='Commentaires' style='width:180px;'></td>");
          $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isdone[]' name='isdone[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
        } else {
          $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='action[]' name='action[]' placeholder='Correctifs' style='width:180px;' readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' style='height: 20.5px;' readonly></td>");
          $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='comment[]' name='comment[]' placeholder='Commentaires' style='width:180px;' readonly></td>");
          $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isdone[]' name='isdone[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
        }
        if (data.user['role_id'] == 1) {
          $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isvalid[]' name='isvalid[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
        } else {
          $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isvalid[]' name='isvalid[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
        }
        $("#tableauVuln tbody").append("</tr>");
      }

    }
  });

});

function addVulnerability(role_id) {

  $("#tableauVuln tbody").append("<tr>");
  if (role_id == 1) {
    $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' style='width:20px;'></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='name[]' name='name[]' placeholder='Nom' style='width:120px;'></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='target[]' name='target[]' placeholder='Cible' style='width:120px;'></td>");
  } else {
    $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='vuln_id[]' name='vuln_id[]' placeholder='ID' style='width:20px;' readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='name[]' name='name[]' placeholder='Nom' style='width:120px;' readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='target[]' name='target[]' placeholder='Cible' style='width:120px;' readonly></td>");
  }
  if (role_id == 1 || role_id == 4) {
    $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='action[]' name='action[]' placeholder='Correctifs' style='width:180px;'></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' style='height: 20.5px;'></td>");
    $("#tableauVuln tbody").append("<td contenteditable='true'><input type='label' id='comment[]' name='comment[]' placeholder='Commentaires' style='width:180px;'></td>");
    $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isdone[]' name='isdone[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
  } else {
    $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='action[]' name='action[]' placeholder='Correctifs' style='width:180px;' readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input type='date' id='date[]' name='date[]' placeholder='yyyy-mm-dd' style='height: 20.5px;' readonly></td>");
    $("#tableauVuln tbody").append("<td contenteditable='false'><input type='label' id='comment[]' name='comment[]' placeholder='Commentaires' style='width:180px;' readonly></td>");
    $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isdone[]' name='isdone[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
  }
  if (role_id == 1) {
    $("#tableauVuln tbody").append("<td class='center-td'><input style='margin: 0 auto;' id='isvalid[]' name='isvalid[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
  } else {
    $("#tableauVuln tbody").append("<td class='center-td'><input disabled='true' style='margin: 0 auto;' id='isvalid[]' name='isvalid[]' class='checkbox-planAction' type='checkbox' value='value'></td>");
  }
  $("#tableauVuln tbody").append("</tr>");

};
