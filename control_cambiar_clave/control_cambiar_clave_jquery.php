
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
  scEventControl_data["clave_actual" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nueva_clave" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["confirmar_clave" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["clave_actual" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["clave_actual" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nueva_clave" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nueva_clave" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["confirmar_clave" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["confirmar_clave" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
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
  $('#id_sc_field_clave_actual' + iSeqRow).bind('blur', function() { sc_control_cambiar_clave_clave_actual_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_control_cambiar_clave_clave_actual_onfocus(this, iSeqRow) });
  $('#id_sc_field_nueva_clave' + iSeqRow).bind('blur', function() { sc_control_cambiar_clave_nueva_clave_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_control_cambiar_clave_nueva_clave_onfocus(this, iSeqRow) });
  $('#id_sc_field_confirmar_clave' + iSeqRow).bind('blur', function() { sc_control_cambiar_clave_confirmar_clave_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_control_cambiar_clave_confirmar_clave_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_control_cambiar_clave_clave_actual_onblur(oThis, iSeqRow) {
  do_ajax_control_cambiar_clave_validate_clave_actual();
  scCssBlur(oThis);
}

function sc_control_cambiar_clave_clave_actual_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_cambiar_clave_nueva_clave_onblur(oThis, iSeqRow) {
  do_ajax_control_cambiar_clave_validate_nueva_clave();
  scCssBlur(oThis);
}

function sc_control_cambiar_clave_nueva_clave_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_control_cambiar_clave_confirmar_clave_onblur(oThis, iSeqRow) {
  do_ajax_control_cambiar_clave_validate_confirmar_clave();
  scCssBlur(oThis);
}

function sc_control_cambiar_clave_confirmar_clave_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("clave_actual", "", status);
	displayChange_field("nueva_clave", "", status);
	displayChange_field("confirmar_clave", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_clave_actual(row, status);
	displayChange_field_nueva_clave(row, status);
	displayChange_field_confirmar_clave(row, status);
}

function displayChange_field(field, row, status) {
	if ("clave_actual" == field) {
		displayChange_field_clave_actual(row, status);
	}
	if ("nueva_clave" == field) {
		displayChange_field_nueva_clave(row, status);
	}
	if ("confirmar_clave" == field) {
		displayChange_field_confirmar_clave(row, status);
	}
}

function displayChange_field_clave_actual(row, status) {
}

function displayChange_field_nueva_clave(row, status) {
}

function displayChange_field_confirmar_clave(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_control_cambiar_clave_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(29);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
} // scJQElementsAdd

