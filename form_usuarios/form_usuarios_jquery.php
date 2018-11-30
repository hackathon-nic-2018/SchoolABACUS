
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
  scEventControl_data["usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usuario_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["clave" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["confirmar_clave" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usuario_correo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["activo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usuario_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usuario_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["clave" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["clave" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["confirmar_clave" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["confirmar_clave" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usuario_correo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usuario_correo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["activo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["activo" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("tipo_usuario" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
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
  $('#id_sc_field_usuario' + iSeqRow).bind('blur', function() { sc_form_usuarios_usuario_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_usuarios_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuario_nombre' + iSeqRow).bind('blur', function() { sc_form_usuarios_usuario_nombre_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_usuarios_usuario_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_clave' + iSeqRow).bind('blur', function() { sc_form_usuarios_clave_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_usuarios_clave_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_usuario' + iSeqRow).bind('blur', function() { sc_form_usuarios_tipo_usuario_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_usuarios_tipo_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuario_correo' + iSeqRow).bind('blur', function() { sc_form_usuarios_usuario_correo_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_usuarios_usuario_correo_onfocus(this, iSeqRow) });
  $('#id_sc_field_activo' + iSeqRow).bind('blur', function() { sc_form_usuarios_activo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_usuarios_activo_onfocus(this, iSeqRow) });
  $('#id_sc_field_confirmar_clave' + iSeqRow).bind('blur', function() { sc_form_usuarios_confirmar_clave_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_usuarios_confirmar_clave_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_usuarios_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_validate_usuario();
  scCssBlur(oThis);
}

function sc_form_usuarios_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_usuarios_usuario_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_validate_usuario_nombre();
  scCssBlur(oThis);
}

function sc_form_usuarios_usuario_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_usuarios_clave_onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_validate_clave();
  scCssBlur(oThis);
}

function sc_form_usuarios_clave_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_usuarios_tipo_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_validate_tipo_usuario();
  scCssBlur(oThis);
}

function sc_form_usuarios_tipo_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_usuarios_usuario_correo_onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_validate_usuario_correo();
  scCssBlur(oThis);
}

function sc_form_usuarios_usuario_correo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_usuarios_activo_onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_validate_activo();
  scCssBlur(oThis);
}

function sc_form_usuarios_activo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_usuarios_confirmar_clave_onblur(oThis, iSeqRow) {
  do_ajax_form_usuarios_validate_confirmar_clave();
  scCssBlur(oThis);
}

function sc_form_usuarios_confirmar_clave_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("usuario", "", status);
	displayChange_field("usuario_nombre", "", status);
	displayChange_field("clave", "", status);
	displayChange_field("confirmar_clave", "", status);
	displayChange_field("tipo_usuario", "", status);
	displayChange_field("usuario_correo", "", status);
	displayChange_field("activo", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_usuario(row, status);
	displayChange_field_usuario_nombre(row, status);
	displayChange_field_clave(row, status);
	displayChange_field_confirmar_clave(row, status);
	displayChange_field_tipo_usuario(row, status);
	displayChange_field_usuario_correo(row, status);
	displayChange_field_activo(row, status);
}

function displayChange_field(field, row, status) {
	if ("usuario" == field) {
		displayChange_field_usuario(row, status);
	}
	if ("usuario_nombre" == field) {
		displayChange_field_usuario_nombre(row, status);
	}
	if ("clave" == field) {
		displayChange_field_clave(row, status);
	}
	if ("confirmar_clave" == field) {
		displayChange_field_confirmar_clave(row, status);
	}
	if ("tipo_usuario" == field) {
		displayChange_field_tipo_usuario(row, status);
	}
	if ("usuario_correo" == field) {
		displayChange_field_usuario_correo(row, status);
	}
	if ("activo" == field) {
		displayChange_field_activo(row, status);
	}
}

function displayChange_field_usuario(row, status) {
}

function displayChange_field_usuario_nombre(row, status) {
}

function displayChange_field_clave(row, status) {
}

function displayChange_field_confirmar_clave(row, status) {
}

function displayChange_field_tipo_usuario(row, status) {
}

function displayChange_field_usuario_correo(row, status) {
}

function displayChange_field_activo(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_usuarios_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(21);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
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

