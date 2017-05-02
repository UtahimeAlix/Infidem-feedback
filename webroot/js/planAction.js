function addVulnerability(role_id) {

  $("#tableauVuln").append("<tr>" +
  "<?php if (role_id == 4): ?>" +
  "<td contenteditable='true'><input type='label' placeholder='ID' style='width:20px;'></imput></td>" +
  "<td contenteditable='true'><input type='label' placeholder='Nom' style='width:120px;'></td>" +
  "<td contenteditable='true'><input type='label' placeholder='Cible' style='width:120px;'></td>" +
  "<td contenteditable='true'><input type='label' placeholder='Correctifs' style='width:180px;'></td>" +
  "<td contenteditable='true'><input type='date' placeholder='yyyy-mm-dd' style='height: 20.5px;'></input></td>" +
  "<td contenteditable='true'><input type='label' placeholder='Commentaires' style='width:180px;'></td>" +
  "<td class='center-td'><input style='margin: 0 auto;' class='checkbox-planAction' type='checkbox' name='checkbox' id='termine' value='value'></td>" +
  "<td class='center-td'><input style='margin: 0 auto;' class='checkbox-planAction' type='checkbox' name='checkbox' id='valide' value='value'></td>" +
  "</tr>");


}
