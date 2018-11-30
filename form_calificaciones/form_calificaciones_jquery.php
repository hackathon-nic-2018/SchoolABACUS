
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
  scEventControl_data["estudiante_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["asignatura_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_calificacion_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_1_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_1_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_2_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_2_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_3_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_3_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_4_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_4_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_5_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_5_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_6_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_6_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_7_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_7_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_8_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_8_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_9_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_nivel_9_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["calificacion_final_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["estudiante_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estudiante_id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["asignatura_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["asignatura_id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_calificacion_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_calificacion_id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_1_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_1_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_1_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_1_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_2_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_2_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_2_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_2_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_3_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_3_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_3_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_3_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_4_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_4_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_4_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_4_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_5_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_5_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_5_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_5_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_6_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_6_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_6_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_6_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_7_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_7_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_7_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_7_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_8_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_8_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_8_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_8_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_9_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_9_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_9_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_nivel_9_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["calificacion_final_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["calificacion_final_" + iSeqRow]["change"]) {
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
  if ("calificacion_1_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_2_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_3_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_4_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_5_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_6_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_7_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_8_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("calificacion_9_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
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
  $('#id_sc_field_estudiante_id_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_estudiante_id__onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_calificaciones_estudiante_id__onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_calificaciones_estudiante_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_asignatura_id_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_asignatura_id__onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_calificaciones_asignatura_id__onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_calificaciones_asignatura_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_calificacion_id_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_tipo_calificacion_id__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_tipo_calificacion_id__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_tipo_calificacion_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_final_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_final__onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_calificaciones_calificacion_final__onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_calificaciones_calificacion_final__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_1_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_1__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_1__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_1__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_1_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_1__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_1__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_1__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_2_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_2__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_2__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_2__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_2_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_2__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_2__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_2__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_3_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_3__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_3__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_3__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_3_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_3__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_3__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_3__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_4_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_4__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_4__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_4__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_4_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_4__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_4__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_4__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_5_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_5__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_5__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_5__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_5_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_5__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_5__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_5__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_6_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_6__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_6__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_6__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_6_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_6__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_6__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_6__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_7_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_7__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_7__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_7__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_7_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_7__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_7__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_7__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_8_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_8__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_8__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_8__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_8_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_8__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_8__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_8__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_9_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_9__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_calificaciones_calificacion_9__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_calificaciones_calificacion_9__onfocus(this, iSeqRow) });
  $('#id_sc_field_calificacion_nivel_9_' + iSeqRow).bind('blur', function() { sc_form_calificaciones_calificacion_nivel_9__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_calificaciones_calificacion_nivel_9__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_calificaciones_calificacion_nivel_9__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_calificaciones_estudiante_id__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_estudiante_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_estudiante_id__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_estudiante_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_asignatura_id__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_asignatura_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_asignatura_id__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_asignatura_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_tipo_calificacion_id__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_tipo_calificacion_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_tipo_calificacion_id__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_tipo_calificacion_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_final__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_final_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_final__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_final__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_1__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_1_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_1__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_1__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_1__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_1__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_1_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_1__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_1__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_2__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_2_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_2__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_2__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_2__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_2__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_2_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_2__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_2__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_3__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_3_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_3__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_3__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_3__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_3__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_3_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_3__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_3__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_4__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_4_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_4__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_4__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_4__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_4__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_4_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_4__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_4__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_5__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_5_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_5__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_5__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_5__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_5__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_5_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_5__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_5__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_6__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_6_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_6__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_6__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_6__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_6__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_6_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_6__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_6__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_7__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_7_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_7__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_7__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_7__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_7__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_7_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_7__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_7__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_8__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_8_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_8__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_8__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_8__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_8__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_8_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_8__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_8__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_9__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_9_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_9__onchange(oThis, iSeqRow) {
  do_ajax_form_calificaciones_event_calificacion_9__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_9__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_9__onblur(oThis, iSeqRow) {
  do_ajax_form_calificaciones_validate_calificacion_nivel_9_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_9__onchange(oThis, iSeqRow) {
  nm_check_insert(iSeqRow);
}

function sc_form_calificaciones_calificacion_nivel_9__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("estudiante_id_", "", status);
	displayChange_field("asignatura_id_", "", status);
	displayChange_field("tipo_calificacion_id_", "", status);
	displayChange_field("calificacion_1_", "", status);
	displayChange_field("calificacion_nivel_1_", "", status);
	displayChange_field("calificacion_2_", "", status);
	displayChange_field("calificacion_nivel_2_", "", status);
	displayChange_field("calificacion_3_", "", status);
	displayChange_field("calificacion_nivel_3_", "", status);
	displayChange_field("calificacion_4_", "", status);
	displayChange_field("calificacion_nivel_4_", "", status);
	displayChange_field("calificacion_5_", "", status);
	displayChange_field("calificacion_nivel_5_", "", status);
	displayChange_field("calificacion_6_", "", status);
	displayChange_field("calificacion_nivel_6_", "", status);
	displayChange_field("calificacion_7_", "", status);
	displayChange_field("calificacion_nivel_7_", "", status);
	displayChange_field("calificacion_8_", "", status);
	displayChange_field("calificacion_nivel_8_", "", status);
	displayChange_field("calificacion_9_", "", status);
	displayChange_field("calificacion_nivel_9_", "", status);
	displayChange_field("calificacion_final_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_estudiante_id_(row, status);
	displayChange_field_asignatura_id_(row, status);
	displayChange_field_tipo_calificacion_id_(row, status);
	displayChange_field_calificacion_1_(row, status);
	displayChange_field_calificacion_nivel_1_(row, status);
	displayChange_field_calificacion_2_(row, status);
	displayChange_field_calificacion_nivel_2_(row, status);
	displayChange_field_calificacion_3_(row, status);
	displayChange_field_calificacion_nivel_3_(row, status);
	displayChange_field_calificacion_4_(row, status);
	displayChange_field_calificacion_nivel_4_(row, status);
	displayChange_field_calificacion_5_(row, status);
	displayChange_field_calificacion_nivel_5_(row, status);
	displayChange_field_calificacion_6_(row, status);
	displayChange_field_calificacion_nivel_6_(row, status);
	displayChange_field_calificacion_7_(row, status);
	displayChange_field_calificacion_nivel_7_(row, status);
	displayChange_field_calificacion_8_(row, status);
	displayChange_field_calificacion_nivel_8_(row, status);
	displayChange_field_calificacion_9_(row, status);
	displayChange_field_calificacion_nivel_9_(row, status);
	displayChange_field_calificacion_final_(row, status);
}

function displayChange_field(field, row, status) {
	if ("estudiante_id_" == field) {
		displayChange_field_estudiante_id_(row, status);
	}
	if ("asignatura_id_" == field) {
		displayChange_field_asignatura_id_(row, status);
	}
	if ("tipo_calificacion_id_" == field) {
		displayChange_field_tipo_calificacion_id_(row, status);
	}
	if ("calificacion_1_" == field) {
		displayChange_field_calificacion_1_(row, status);
	}
	if ("calificacion_nivel_1_" == field) {
		displayChange_field_calificacion_nivel_1_(row, status);
	}
	if ("calificacion_2_" == field) {
		displayChange_field_calificacion_2_(row, status);
	}
	if ("calificacion_nivel_2_" == field) {
		displayChange_field_calificacion_nivel_2_(row, status);
	}
	if ("calificacion_3_" == field) {
		displayChange_field_calificacion_3_(row, status);
	}
	if ("calificacion_nivel_3_" == field) {
		displayChange_field_calificacion_nivel_3_(row, status);
	}
	if ("calificacion_4_" == field) {
		displayChange_field_calificacion_4_(row, status);
	}
	if ("calificacion_nivel_4_" == field) {
		displayChange_field_calificacion_nivel_4_(row, status);
	}
	if ("calificacion_5_" == field) {
		displayChange_field_calificacion_5_(row, status);
	}
	if ("calificacion_nivel_5_" == field) {
		displayChange_field_calificacion_nivel_5_(row, status);
	}
	if ("calificacion_6_" == field) {
		displayChange_field_calificacion_6_(row, status);
	}
	if ("calificacion_nivel_6_" == field) {
		displayChange_field_calificacion_nivel_6_(row, status);
	}
	if ("calificacion_7_" == field) {
		displayChange_field_calificacion_7_(row, status);
	}
	if ("calificacion_nivel_7_" == field) {
		displayChange_field_calificacion_nivel_7_(row, status);
	}
	if ("calificacion_8_" == field) {
		displayChange_field_calificacion_8_(row, status);
	}
	if ("calificacion_nivel_8_" == field) {
		displayChange_field_calificacion_nivel_8_(row, status);
	}
	if ("calificacion_9_" == field) {
		displayChange_field_calificacion_9_(row, status);
	}
	if ("calificacion_nivel_9_" == field) {
		displayChange_field_calificacion_nivel_9_(row, status);
	}
	if ("calificacion_final_" == field) {
		displayChange_field_calificacion_final_(row, status);
	}
}

function displayChange_field_estudiante_id_(row, status) {
}

function displayChange_field_asignatura_id_(row, status) {
}

function displayChange_field_tipo_calificacion_id_(row, status) {
}

function displayChange_field_calificacion_1_(row, status) {
}

function displayChange_field_calificacion_nivel_1_(row, status) {
}

function displayChange_field_calificacion_2_(row, status) {
}

function displayChange_field_calificacion_nivel_2_(row, status) {
}

function displayChange_field_calificacion_3_(row, status) {
}

function displayChange_field_calificacion_nivel_3_(row, status) {
}

function displayChange_field_calificacion_4_(row, status) {
}

function displayChange_field_calificacion_nivel_4_(row, status) {
}

function displayChange_field_calificacion_5_(row, status) {
}

function displayChange_field_calificacion_nivel_5_(row, status) {
}

function displayChange_field_calificacion_6_(row, status) {
}

function displayChange_field_calificacion_nivel_6_(row, status) {
}

function displayChange_field_calificacion_7_(row, status) {
}

function displayChange_field_calificacion_nivel_7_(row, status) {
}

function displayChange_field_calificacion_8_(row, status) {
}

function displayChange_field_calificacion_nivel_8_(row, status) {
}

function displayChange_field_calificacion_9_(row, status) {
}

function displayChange_field_calificacion_nivel_9_(row, status) {
}

function displayChange_field_calificacion_final_(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_calificaciones_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(27);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "colegio_id_" == specificField) {
    scJQSelect2Add_colegio_id_(seqRow);
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


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

