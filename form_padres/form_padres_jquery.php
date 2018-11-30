
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if (false == scSetFocusOnField($oField) && $("#id_ac_" + sField).length > 0) {
    if (false == scSetFocusOnField($("#id_ac_" + sField))) {
      setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["fotografia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["apellidos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombres" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["direccion_linea1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["direccion_linea2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["apellidos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["apellidos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombres" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombres" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion_linea1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion_linea1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["direccion_linea2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["direccion_linea2" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("colegio_id" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_apellidos' + iSeqRow).bind('blur', function() { sc_form_padres_apellidos_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_padres_apellidos_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombres' + iSeqRow).bind('blur', function() { sc_form_padres_nombres_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_padres_nombres_onfocus(this, iSeqRow) });
  $('#id_sc_field_identificacion' + iSeqRow).bind('blur', function() { sc_form_padres_identificacion_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_padres_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefono' + iSeqRow).bind('blur', function() { sc_form_padres_telefono_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_padres_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_correo' + iSeqRow).bind('blur', function() { sc_form_padres_correo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_padres_correo_onfocus(this, iSeqRow) });
  $('#id_sc_field_fotografia' + iSeqRow).bind('blur', function() { sc_form_padres_fotografia_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_padres_fotografia_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_linea1' + iSeqRow).bind('blur', function() { sc_form_padres_direccion_linea1_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_padres_direccion_linea1_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_linea2' + iSeqRow).bind('blur', function() { sc_form_padres_direccion_linea2_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_padres_direccion_linea2_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_padres_apellidos_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_validate_apellidos();
  scCssBlur(oThis);
}

function sc_form_padres_apellidos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_nombres_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_validate_nombres();
  scCssBlur(oThis);
}

function sc_form_padres_nombres_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_validate_identificacion();
  scCssBlur(oThis);
}

function sc_form_padres_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_validate_telefono();
  scCssBlur(oThis);
}

function sc_form_padres_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_correo_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_validate_correo();
  scCssBlur(oThis);
}

function sc_form_padres_correo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_fotografia_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_padres_fotografia_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_padres_direccion_linea1_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_validate_direccion_linea1();
  scCssBlur(oThis);
}

function sc_form_padres_direccion_linea1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_direccion_linea2_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_validate_direccion_linea2();
  scCssBlur(oThis);
}

function sc_form_padres_direccion_linea2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("fotografia", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("apellidos", "", status);
	displayChange_field("nombres", "", status);
	displayChange_field("identificacion", "", status);
	displayChange_field("telefono", "", status);
	displayChange_field("correo", "", status);
	displayChange_field("direccion_linea1", "", status);
	displayChange_field("direccion_linea2", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_fotografia(row, status);
	displayChange_field_apellidos(row, status);
	displayChange_field_nombres(row, status);
	displayChange_field_identificacion(row, status);
	displayChange_field_telefono(row, status);
	displayChange_field_correo(row, status);
	displayChange_field_direccion_linea1(row, status);
	displayChange_field_direccion_linea2(row, status);
}

function displayChange_field(field, row, status) {
	if ("fotografia" == field) {
		displayChange_field_fotografia(row, status);
	}
	if ("apellidos" == field) {
		displayChange_field_apellidos(row, status);
	}
	if ("nombres" == field) {
		displayChange_field_nombres(row, status);
	}
	if ("identificacion" == field) {
		displayChange_field_identificacion(row, status);
	}
	if ("telefono" == field) {
		displayChange_field_telefono(row, status);
	}
	if ("correo" == field) {
		displayChange_field_correo(row, status);
	}
	if ("direccion_linea1" == field) {
		displayChange_field_direccion_linea1(row, status);
	}
	if ("direccion_linea2" == field) {
		displayChange_field_direccion_linea2(row, status);
	}
}

function displayChange_field_fotografia(row, status) {
}

function displayChange_field_apellidos(row, status) {
}

function displayChange_field_nombres(row, status) {
}

function displayChange_field_identificacion(row, status) {
}

function displayChange_field_telefono(row, status) {
}

function displayChange_field_correo(row, status) {
}

function displayChange_field_direccion_linea1(row, status) {
}

function displayChange_field_direccion_linea2(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_padres_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(19);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_fotografia" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_padres_ul_save.php",
    dropZone: $("#hidden_field_data_fotografia" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fotografia'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fotografia" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fotografia" + iSeqRow);
        loader.show();
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_fotografia" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fotografia" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_fotografia" + iSeqRow).val("");
      $("#id_sc_field_fotografia_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fotografia_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fotografia = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fotografia) ? "none" : "";
      $("#id_ajax_img_fotografia" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fotografia" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fotografia) {
        document.F1.temp_out_fotografia.value = var_ajax_img_thumb;
        document.F1.temp_out1_fotografia.value = var_ajax_img_fotografia;
      }
      else if (document.F1.temp_out_fotografia) {
        document.F1.temp_out_fotografia.value = var_ajax_img_fotografia;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fotografia" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fotografia" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fotografia" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_fotografia" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "colegio_id" == specificField) {
    scJQSelect2Add_colegio_id(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_colegio_id(seqRow) {
  $("#id_sc_field_colegio_id" + seqRow).select2(
    {
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

