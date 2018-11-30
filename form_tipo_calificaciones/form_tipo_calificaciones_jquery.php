
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
  scEventControl_data["tipo_calificacion_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detalle" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["niveles" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["tipo_calificacion_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_calificacion_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["niveles" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["niveles" + iSeqRow]["change"]) {
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
  $('#id_sc_field_tipo_calificacion_id' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_tipo_calificacion_id_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_tipo_calificaciones_tipo_calificacion_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_descripcion_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tipo_calificaciones_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_detalle' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_detalle_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tipo_calificaciones_detalle_onfocus(this, iSeqRow) });
  $('#id_sc_field_niveles' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_niveles_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_tipo_calificaciones_niveles_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tipo_calificaciones_tipo_calificacion_id_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_validate_tipo_calificacion_id();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_tipo_calificacion_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_validate_descripcion();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_detalle_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_validate_detalle();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_detalle_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_niveles_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_validate_niveles();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_niveles_onfocus(oThis, iSeqRow) {
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
	if ("2" == block) {
		displayChange_block_2(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("tipo_calificacion_id", "", status);
	displayChange_field("descripcion", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("detalle", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("niveles", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_tipo_calificacion_id(row, status);
	displayChange_field_descripcion(row, status);
	displayChange_field_detalle(row, status);
	displayChange_field_niveles(row, status);
}

function displayChange_field(field, row, status) {
	if ("tipo_calificacion_id" == field) {
		displayChange_field_tipo_calificacion_id(row, status);
	}
	if ("descripcion" == field) {
		displayChange_field_descripcion(row, status);
	}
	if ("detalle" == field) {
		displayChange_field_detalle(row, status);
	}
	if ("niveles" == field) {
		displayChange_field_niveles(row, status);
	}
}

function displayChange_field_tipo_calificacion_id(row, status) {
}

function displayChange_field_descripcion(row, status) {
}

function displayChange_field_detalle(row, status) {
}

function displayChange_field_niveles(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_tipo_calificaciones_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(32);
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

