
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
  scEventControl_data["padre_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["parentezco" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tutor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["patrocinador" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["llamar_emergencia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["padre_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["padre_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["parentezco" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["parentezco" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tutor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tutor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["patrocinador" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["patrocinador" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["llamar_emergencia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["llamar_emergencia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["padre_id" + iSeqRow]["autocomp"]) {
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
  if ("estudiante_id" + iSeq == fieldName) {
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
  $('#id_sc_field_padre_id' + iSeqRow).bind('blur', function() { sc_form_padres_estudiantes_padre_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_padres_estudiantes_padre_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_llamar_emergencia' + iSeqRow).bind('blur', function() { sc_form_padres_estudiantes_llamar_emergencia_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_padres_estudiantes_llamar_emergencia_onfocus(this, iSeqRow) });
  $('#id_sc_field_tutor' + iSeqRow).bind('blur', function() { sc_form_padres_estudiantes_tutor_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_padres_estudiantes_tutor_onfocus(this, iSeqRow) });
  $('#id_sc_field_patrocinador' + iSeqRow).bind('blur', function() { sc_form_padres_estudiantes_patrocinador_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_padres_estudiantes_patrocinador_onfocus(this, iSeqRow) });
  $('#id_sc_field_parentezco' + iSeqRow).bind('blur', function() { sc_form_padres_estudiantes_parentezco_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_padres_estudiantes_parentezco_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_padres_estudiantes_padre_id_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_estudiantes_mob_validate_padre_id();
  scCssBlur(oThis);
}

function sc_form_padres_estudiantes_padre_id_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_padres_estudiantes_llamar_emergencia_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_estudiantes_mob_validate_llamar_emergencia();
  scCssBlur(oThis);
}

function sc_form_padres_estudiantes_llamar_emergencia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_estudiantes_tutor_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_estudiantes_mob_validate_tutor();
  scCssBlur(oThis);
}

function sc_form_padres_estudiantes_tutor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_estudiantes_patrocinador_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_estudiantes_mob_validate_patrocinador();
  scCssBlur(oThis);
}

function sc_form_padres_estudiantes_patrocinador_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_padres_estudiantes_parentezco_onblur(oThis, iSeqRow) {
  do_ajax_form_padres_estudiantes_mob_validate_parentezco();
  scCssBlur(oThis);
}

function sc_form_padres_estudiantes_parentezco_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("padre_id", "", status);
	displayChange_field("parentezco", "", status);
	displayChange_field("tutor", "", status);
	displayChange_field("patrocinador", "", status);
	displayChange_field("llamar_emergencia", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_padre_id(row, status);
	displayChange_field_parentezco(row, status);
	displayChange_field_tutor(row, status);
	displayChange_field_patrocinador(row, status);
	displayChange_field_llamar_emergencia(row, status);
}

function displayChange_field(field, row, status) {
	if ("padre_id" == field) {
		displayChange_field_padre_id(row, status);
	}
	if ("parentezco" == field) {
		displayChange_field_parentezco(row, status);
	}
	if ("tutor" == field) {
		displayChange_field_tutor(row, status);
	}
	if ("patrocinador" == field) {
		displayChange_field_patrocinador(row, status);
	}
	if ("llamar_emergencia" == field) {
		displayChange_field_llamar_emergencia(row, status);
	}
}

function displayChange_field_padre_id(row, status) {
}

function displayChange_field_parentezco(row, status) {
}

function displayChange_field_tutor(row, status) {
}

function displayChange_field_patrocinador(row, status) {
}

function displayChange_field_llamar_emergencia(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_padres_estudiantes_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(35);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "colegio_id" == specificField) {
    scJQSelect2Add_colegio_id(seqRow);
  }
  if (null == specificField || "estudiante_id" == specificField) {
    scJQSelect2Add_estudiante_id(seqRow);
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

function scJQSelect2Add_estudiante_id(seqRow) {
  $("#id_sc_field_estudiante_id" + seqRow).select2(
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

