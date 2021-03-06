
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
  scEventControl_data["linea_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descripcion_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_maxima_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["colegio_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_calificacion_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["linea_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["linea_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_maxima_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_maxima_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["colegio_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["colegio_id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_calificacion_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_calificacion_id_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("colegio_id_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("tipo_calificacion_id_" + iSeq == fieldName) {
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
  $('#id_sc_field_colegio_id_' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_detalle_colegio_id__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_tipo_calificaciones_detalle_colegio_id__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tipo_calificaciones_detalle_colegio_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_calificacion_id_' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_detalle_tipo_calificacion_id__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_tipo_calificaciones_detalle_tipo_calificacion_id__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_tipo_calificaciones_detalle_tipo_calificacion_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_linea_' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_detalle_linea__onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_tipo_calificaciones_detalle_linea__onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tipo_calificaciones_detalle_linea__onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion_' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_detalle_descripcion__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_tipo_calificaciones_detalle_descripcion__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_tipo_calificaciones_detalle_descripcion__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_maxima_' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_detalle_calificacion_maxima__onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_tipo_calificaciones_detalle_calificacion_maxima__onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_tipo_calificaciones_detalle_calificacion_maxima__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tipo_calificaciones_detalle_colegio_id__onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_detalle_validate_colegio_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_colegio_id__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_colegio_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_tipo_calificacion_id__onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_detalle_validate_tipo_calificacion_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_tipo_calificacion_id__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_tipo_calificacion_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_linea__onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_detalle_validate_linea_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_linea__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_linea__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_descripcion__onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_detalle_validate_descripcion_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_descripcion__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_descripcion__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_calificacion_maxima__onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_detalle_validate_calificacion_maxima_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_calificacion_maxima__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_tipo_calificaciones_detalle_calificacion_maxima__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("linea_", "", status);
	displayChange_field("descripcion_", "", status);
	displayChange_field("calificacion_maxima_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_linea_(row, status);
	displayChange_field_descripcion_(row, status);
	displayChange_field_calificacion_maxima_(row, status);
	displayChange_field_colegio_id_(row, status);
	displayChange_field_tipo_calificacion_id_(row, status);
}

function displayChange_field(field, row, status) {
	if ("linea_" == field) {
		displayChange_field_linea_(row, status);
	}
	if ("descripcion_" == field) {
		displayChange_field_descripcion_(row, status);
	}
	if ("calificacion_maxima_" == field) {
		displayChange_field_calificacion_maxima_(row, status);
	}
	if ("colegio_id_" == field) {
		displayChange_field_colegio_id_(row, status);
	}
	if ("tipo_calificacion_id_" == field) {
		displayChange_field_tipo_calificacion_id_(row, status);
	}
}

function displayChange_field_linea_(row, status) {
}

function displayChange_field_descripcion_(row, status) {
}

function displayChange_field_calificacion_maxima_(row, status) {
}

function displayChange_field_colegio_id_(row, status) {
	if ("on" == status) {
		$("#id_sc_field_colegio_id_" + row).select2("destroy");
		scJQSelect2Add(row, "colegio_id_");
	}
}

function displayChange_field_tipo_calificacion_id_(row, status) {
	if ("on" == status) {
		$("#id_sc_field_tipo_calificacion_id_" + row).select2("destroy");
		scJQSelect2Add(row, "tipo_calificacion_id_");
	}
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_tipo_calificaciones_detalle_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(40);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "colegio_id_" == specificField) {
    scJQSelect2Add_colegio_id_(seqRow);
  }
  if (null == specificField || "tipo_calificacion_id_" == specificField) {
    scJQSelect2Add_tipo_calificacion_id_(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_colegio_id_(seqRow) {
  $("#id_sc_field_colegio_id_" + seqRow).select2(
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

function scJQSelect2Add_tipo_calificacion_id_(seqRow) {
  $("#id_sc_field_tipo_calificacion_id_" + seqRow).select2(
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

