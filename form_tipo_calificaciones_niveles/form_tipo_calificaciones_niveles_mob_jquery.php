
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
  scEventControl_data["nivel" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["abreviacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["minimo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["maximo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["color" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["nivel" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nivel" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["abreviacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["abreviacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["minimo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["minimo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["maximo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["maximo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["color" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["color" + iSeqRow]["change"]) {
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
  if ("tipo_calificacion_id" + iSeq == fieldName) {
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
  $('#id_sc_field_nivel' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_niveles_nivel_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tipo_calificaciones_niveles_nivel_onfocus(this, iSeqRow) });
  $('#id_sc_field_abreviacion' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_niveles_abreviacion_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tipo_calificaciones_niveles_abreviacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_niveles_descripcion_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_tipo_calificaciones_niveles_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_minimo' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_niveles_minimo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tipo_calificaciones_niveles_minimo_onfocus(this, iSeqRow) });
  $('#id_sc_field_maximo' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_niveles_maximo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_tipo_calificaciones_niveles_maximo_onfocus(this, iSeqRow) });
  $('#id_sc_field_color' + iSeqRow).bind('blur', function() { sc_form_tipo_calificaciones_niveles_color_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_tipo_calificaciones_niveles_color_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_tipo_calificaciones_niveles_nivel_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_niveles_mob_validate_nivel();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_niveles_nivel_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_niveles_abreviacion_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_niveles_mob_validate_abreviacion();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_niveles_abreviacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_niveles_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_niveles_mob_validate_descripcion();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_niveles_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_niveles_minimo_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_niveles_mob_validate_minimo();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_niveles_minimo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_niveles_maximo_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_niveles_mob_validate_maximo();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_niveles_maximo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_tipo_calificaciones_niveles_color_onblur(oThis, iSeqRow) {
  do_ajax_form_tipo_calificaciones_niveles_mob_validate_color();
  scCssBlur(oThis);
}

function sc_form_tipo_calificaciones_niveles_color_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("nivel", "", status);
	displayChange_field("abreviacion", "", status);
	displayChange_field("descripcion", "", status);
	displayChange_field("minimo", "", status);
	displayChange_field("maximo", "", status);
	displayChange_field("color", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_nivel(row, status);
	displayChange_field_abreviacion(row, status);
	displayChange_field_descripcion(row, status);
	displayChange_field_minimo(row, status);
	displayChange_field_maximo(row, status);
	displayChange_field_color(row, status);
}

function displayChange_field(field, row, status) {
	if ("nivel" == field) {
		displayChange_field_nivel(row, status);
	}
	if ("abreviacion" == field) {
		displayChange_field_abreviacion(row, status);
	}
	if ("descripcion" == field) {
		displayChange_field_descripcion(row, status);
	}
	if ("minimo" == field) {
		displayChange_field_minimo(row, status);
	}
	if ("maximo" == field) {
		displayChange_field_maximo(row, status);
	}
	if ("color" == field) {
		displayChange_field_color(row, status);
	}
}

function displayChange_field_nivel(row, status) {
}

function displayChange_field_abreviacion(row, status) {
}

function displayChange_field_descripcion(row, status) {
}

function displayChange_field_minimo(row, status) {
}

function displayChange_field_maximo(row, status) {
}

function displayChange_field_color(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_tipo_calificaciones_niveles_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(44);
		}
	}
}
function setaCorPaleta(sField, sValue) {
  $('.colors_' + sField).removeClass('scFormColorPaleteItemChecked');
  $('#id_sc_field_' + sField).val(sValue);
  $(".colors_" + sField + "[valor='"+ sValue +"']").addClass('scFormColorPaleteItemChecked');
} // setaCorPaleta

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "colegio_id" == specificField) {
    scJQSelect2Add_colegio_id(seqRow);
  }
  if (null == specificField || "tipo_calificacion_id" == specificField) {
    scJQSelect2Add_tipo_calificacion_id(seqRow);
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

function scJQSelect2Add_tipo_calificacion_id(seqRow) {
  $("#id_sc_field_tipo_calificacion_id" + seqRow).select2(
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

