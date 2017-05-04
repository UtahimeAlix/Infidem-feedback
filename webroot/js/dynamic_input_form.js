$(document).ready(function() {
  var id = $('#myroe').attr('data-id');

  var count_ext = 1;
  var max_ext      = 10;
  var external         = $(".input_fields_external");

  var max_int      = 10;
  var internal         = $(".input_fields_internal");
  var count_int = 1;

  var max_ssid      = 5;
  var wireless         = $(".input_fields_ssid");
  var count_ssid = 1;

  var max_web_url      = 7;
  var web_url         = $(".input_fields_web_url");
  var count_web_url = 1;

  var max_mobile_cred      = 3;
  var mobile_app         = $(".input_fields_mobile_cred");
  var count_mobile_cred = 1;

  $.ajax({
                  type: 'post',
                  data: { data: id },
                  url: roeUrl,
                  dataType: "json",
                  success: function (data) {
                    if (data.external.length > 0) {
                      count_ext = data.external.length;
                      for(var i=0; i<data.external.length; ++i) {
                        if (i == 0) {
                          $(external).append('<div><input class="champ-text" type="text" name="ext_ip[]" placeholder="IP or URL" value="'+data.external[i]['ip']+'"></div>');
                        } else {
                          $(external).append('<div><button style="margin-top:2.5px !important; float:right;" class="btn btn-sm btn-danger remove_ext_ip"><i class="fa fa-times"></i></button><input type="text" style="width:90%;" name="ext_ip[]" placeholder="IP or URL" value="'+data.external[i]['ip']+'"></div>');
                        }
                      }
                    } else {
                      $(external).append('<div><input class="champ-text" type="text" name="ext_ip[]" placeholder="IP or URL"></div>');
                    }

                    if (data.internal.length > 0) {
                      count_int = data.internal.length;
                      for(var i=0; i<data.internal.length; ++i) {
                        if (i == 0) {
                          $(internal).append('<div><input class="champ-text" type="text" name="int_ip[]" placeholder="IP or URL" value="'+data.internal[i]['ip']+'"></div>');
                        } else {
                          $(internal).append('<div><button style="margin-top:2.5px !important; float:right;" class="btn btn-sm btn-danger remove_int_ip"><i class="fa fa-times"></i></button><input type="text" style="width:90%;" name="int_ip[]" placeholder="IP or URL" value="'+data.internal[i]['ip']+'"></div>');
                        }
                      }
                    } else {
                      $(internal).append('<div><input class="champ-text" type="text" name="int_ip[]" placeholder="IP or URL"></div>');
                    }

                    if (data.wireless.length > 0) {
                      count_ssid = data.wireless.length;
                      for(var i=0; i<data.wireless.length; ++i) {
                        if (i == 0) {
                          $(wireless).append('<div><input class="champ-text" type="text" name="ssid[]" placeholder="IP or URL" value="'+data.wireless[i]['ssid']+'"></div>');
                        } else {
                          $(wireless).append('<div><button style="margin-top:2.5px !important; float:right;" class="btn btn-sm btn-danger remove_ssid"><i class="fa fa-times"></i></button><input type="text" style="width:90%;" name="ssid[]" placeholder="IP or URL" value="'+data.wireless[i]['ssid']+'"></div>');
                        }
                      }
                    } else {
                      $(wireless).append('<div><input class="champ-text" type="text" name="ssid[]" placeholder="IP or URL"></div>');
                    }

                  if (data.web.length > 0) {
                    count_web_url = data.web.length;
                    for(var i=0; i<data.web.length; ++i) {
                      if (i == 0) {
                        $(web_url).append('<div><input class="champ-text" placeholder="URL" type="text" name="web_url[]" value="'+data.web[i]['url']+'"></div><div class="form-group"><h5 for="web_login" class="field-name">Login:</h5><input class="form-control" type="text" name="web_login[]" id="web_login" value="'+data.web[i]['login']+'"><h5 for="web_password"  class="field-name">Mot de Passe: </h5><input class="form-control" type="password" name="web_password[]" id="web_password" value="'+data.web[i]['password']+'"></div>');
                      } else {
                        $(web_url).append('<div><button style="margin-top:47.5px !important; float:right;" class="btn btn-sm btn-danger remove_web_url"><i class="fa fa-times"></i></button><input type="text" style="width:90%;" name="web_url[]" placeholder="URL" value="'+data.web[i]['url']+'"><div><h5 for="web_login" style="float:left; font-size:14px;">Login:</h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="text" name="web_login[]" id="web_login" value="'+data.web[i]['login']+'"><h5 for="web_password" style="float:left; font-size:14px;">Mot de Passe: </h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="password" name="web_password[]" id="web_password" value="'+data.web[i]['password']+'"></div></div>');
                      }
                    }
                  } else {
                    $(web_url).append('<div><input class="champ-text" placeholder="URL" type="text" name="web_url[]"></div><div class="form-group"><h5 for="web_login" class="field-name">Login:</h5><input class="form-control" type="text" name="web_login[]" id="web_login"><h5 for="web_password"  class="field-name">Mot de Passe: </h5><input class="form-control" type="password" name="web_password[]" id="web_password"></div>');
                  }

                  if (data.mobile.length > 0) {
                    count_mobile_cred = data.mobile.length;
                    for(var i=0; i<data.mobile.length; ++i) {
                      if (i == 0) {
                        $(mobile_app).append('<h5 for="web_login" class="field-name">Login:</h5><input class="form-control" type="text" name="mobile_login[]" id="web_login" value="'+data.mobile[i]['login']+'"><h5 for="web_password"  class="field-name">Mot de Passe: </h5><input class="form-control" type="password" name="mobile_password[]" id="web_password" value="'+data.mobile[i]['password']+'">');
                      } else {
                        $(mobile_app).append('<div><button style="margin-top:17.5px !important; float:right;" class="btn btn-sm btn-danger remove_mobile_cred"><i class="fa fa-times"></i></button><h5 for="web_login" style="float:left; font-size:14px;">Login:</h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="text" name="mobile_login[]" id="web_login" value="'+data.mobile[i]['login']+'"><h5 for="web_password" style="float:left; font-size:14px;">Mot de Passe: </h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="password" name="mobile_password[]" id="web_password" value="'+data.mobile[i]['password']+'"></div>');
                      }
                      $('#mobile_url').val(data.mobile[i]['url']);
                    }
                  } else {
                    $(mobile_app).append('<div><h5 for="web_login" style="float:left; font-size:14px;">Login:</h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="text" name="mobile_login[]" id="web_login"><h5 for="web_password" style="float:left; font-size:14px;">Mot de Passe: </h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="password" name="mobile_password[]" id="web_password"></div>');
                    $('#mobile_url').val('');
                  }

                  if (data.review.length > 0) {
                    $('#review_url').val(data.review[0]['url']);
                  } else {
                    $('#review_url').val('');
                  }

                }
              });

    /*
    *
    * Add/Remove external IP dynamically
    * Max fields = 10
    *
    */
    var add_ext_ip      = $(".add_external_ip");

    $(add_ext_ip).click(function(e){
        e.preventDefault();
        if(count_ext < max_ext){
            count_ext++;
            $(external).append('<div><button style="margin-top:2.5px !important; float:right;" class="btn btn-sm btn-danger remove_ext_ip"><i class="fa fa-times"></i></button><input type="text" style="width:90%;" name="ext_ip[]" placeholder="IP or URL"></div>');
        }
    });
    $(external).on("click",".remove_ext_ip", function(e){
        e.preventDefault(); $(this).parent('div').remove(); count_ext--;
    });

    /*
    *
    * Add/Remove internal IP dynamically
    * Max fields = 10
    *
    */
    var add_int_ip      = $(".add_internal_ip");

    $(add_int_ip).click(function(e){
        e.preventDefault();
        if(count_int < max_int){
            count_int++;
            $(internal).append('<div><button style="margin-top:2.5px !important; float:right;" class="btn btn-sm btn-danger remove_int_ip"><i class="fa fa-times"></i></button><input  type="text" style="width:90%;" name="int_ip[]" placeholder="IP or URL"></div>');
        }
    });
    $(internal).on("click",".remove_int_ip", function(e){
        e.preventDefault(); $(this).parent('div').remove(); count_int--;
    });

    /*
    *
    * Add/Remove wireless SSID dynamically
    * Max fields = 5
    *
    */
    var add_wl_ssid      = $(".add_wl_ssid");

    $(add_wl_ssid).click(function(e){
        e.preventDefault();
        if(count_ssid < max_ssid){
            count_ssid++;
            $(wireless).append('<div><button style="margin-top:2.5px !important; float:right;" class="btn btn-sm btn-danger remove_ssid"><i class="fa fa-times"></i></button><input type="text" style="width:90%;" name="ssid[]" placeholder="SSID"></div>');
        }
    });
    $(wireless).on("click",".remove_ssid", function(e){
        e.preventDefault(); $(this).parent('div').remove(); count_ssid--;
    });

    var add_web_url      = $(".add_web_url");

    $(add_web_url).click(function(e){
        e.preventDefault();
        if(count_web_url < max_web_url){
            count_web_url++;
            $(web_url).append('<div><button style="margin-top:47.5px !important; float:right;" class="btn btn-sm btn-danger remove_web_url"><i class="fa fa-times"></i></button><input type="text" style="width:90%;" name="web_url[]" placeholder="URL"><div><h5 for="web_login" style="float:left; font-size:14px;">Login:</h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="text" name="web_login[]" id="web_login"><h5 for="web_password" style="float:left; font-size:14px;">Mot de Passe: </h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="password" name="web_password[]" id="web_password"></div></div>');
        }
    });
    $(web_url).on("click",".remove_web_url", function(e){
        e.preventDefault(); $(this).parent('div').remove(); count_web_url--;
    });

    /*
    *
    * Add/Remove mobile App credentials dynamically
    * Max fields = 3
    *
    */
    var add_mobile_cred      = $(".add_mobile_cred");

    $(add_mobile_cred).click(function(e){
        e.preventDefault();
        if(count_mobile_cred < max_mobile_cred){
            count_mobile_cred++;
            $(mobile_app).append('<div><button style="margin-top:17.5px !important; float:right;" class="btn btn-sm btn-danger remove_mobile_cred"><i class="fa fa-times"></i></button><h5 for="web_login" style="float:left; font-size:14px;">Login:</h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="text" name="mobile_login[]" id="web_login"><h5 for="web_password" style="float:left; font-size:14px;">Mot de Passe: </h5><input class="form-control" style="float:left; width:25%; margin-left: 10px; margin-right: 10px;" type="password" name="mobile_password[]" id="web_password"></div>');
        }
    });
    $(mobile_app).on("click",".remove_mobile_cred", function(e){
        e.preventDefault(); $(this).parent('div').remove(); count_mobile_cred--;
    });

});
