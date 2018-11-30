
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
  scEventControl_data["grado_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["grado_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_grado_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["actualiza_estudiante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["asignaturas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["grado_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["grado_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["grado_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["grado_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_grado_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_grado_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["actualiza_estudiante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["actualiza_estudiante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["asignaturas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["asignaturas" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("tipo_grado_id" + iSeq == fieldName) {
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
  $('#id_sc_field_grado_id' + iSeqRow).bind('blur', function() { sc_form_grados_grado_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_grados_grado_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_grado_nombre' + iSeqRow).bind('blur', function() { sc_form_grados_grado_nombre_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_grados_grado_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_grado_id' + iSeqRow).bind('blur', function() { sc_form_grados_tipo_grado_id_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_grados_tipo_grado_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_actualiza_estudiante' + iSeqRow).bind('blur', function() { sc_form_grados_actualiza_estudiante_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_grados_actualiza_estudiante_onfocus(this, iSeqRow) });
  $('#id_sc_field_asignaturas' + iSeqRow).bind('blur', function() { sc_form_grados_asignaturas_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_grados_asignaturas_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_grados_grado_id_onblur(oThis, iSeqRow) {
  do_ajax_form_grados_mob_validate_grado_id();
  scCssBlur(oThis);
}

function sc_form_grados_grado_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_grados_grado_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_grados_mob_validate_grado_nombre();
  scCssBlur(oThis);
}

function sc_form_grados_grado_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_grados_tipo_grado_id_onblur(oThis, iSeqRow) {
  do_ajax_form_grados_mob_validate_tipo_grado_id();
  scCssBlur(oThis);
}

function sc_form_grados_tipo_grado_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_grados_actualiza_estudiante_onblur(oThis, iSeqRow) {
  do_ajax_form_grados_mob_validate_actualiza_estudiante();
  scCssBlur(oThis);
}

function sc_form_grados_actualiza_estudiante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_grados_asignaturas_onblur(oThis, iSeqRow) {
  do_ajax_form_grados_mob_validate_asignaturas();
  scCssBlur(oThis);
}

function sc_form_grados_asignaturas_onfocus(oThis, iSeqRow) {
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
	displayChange_field("grado_id", "", status);
	displayChange_field("grado_nombre", "", status);
	displayChange_field("tipo_grado_id", "", status);
	displayChange_field("actualiza_estudiante", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("asignaturas", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_grado_id(row, status);
	displayChange_field_grado_nombre(row, status);
	displayChange_field_tipo_grado_id(row, status);
	displayChange_field_actualiza_estudiante(row, status);
	displayChange_field_asignaturas(row, status);
}

function displayChange_field(field, row, status) {
	if ("grado_id" == field) {
		displayChange_field_grado_id(row, status);
	}
	if ("grado_nombre" == field) {
		displayChange_field_grado_nombre(row, status);
	}
	if ("tipo_grado_id" == field) {
		displayChange_field_tipo_grado_id(row, status);
	}
	if ("actualiza_estudiante" == field) {
		displayChange_field_actualiza_estudiante(row, status);
	}
	if ("asignaturas" == field) {
		displayChange_field_asignaturas(row, status);
	}
}

function displayChange_field_grado_id(row, status) {
}

function displayChange_field_grado_nombre(row, status) {
}

function displayChange_field_tipo_grado_id(row, status) {
}

function displayChange_field_actualiza_estudiante(row, status) {
}

function displayChange_field_asignaturas(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_grados_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(23);
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

