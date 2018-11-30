
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
  scEventControl_data["descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ubicacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["turno_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["docente_guia_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["comentarios" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cant_max_alumnos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["grado_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["grado_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ubicacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ubicacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["turno_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["turno_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["docente_guia_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["docente_guia_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["comentarios" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["comentarios" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cant_max_alumnos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cant_max_alumnos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["docente_guia_id" + iSeqRow]["autocomp"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("grado_id" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("turno_id" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("colegio_id" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("periodo_id" + iSeq == fieldName) {
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
  $('#id_sc_field_grado_id' + iSeqRow).bind('blur', function() { sc_form_cursos_grado_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_cursos_grado_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion' + iSeqRow).bind('blur', function() { sc_form_cursos_descripcion_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_cursos_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_ubicacion' + iSeqRow).bind('blur', function() { sc_form_cursos_ubicacion_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_cursos_ubicacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_turno_id' + iSeqRow).bind('blur', function() { sc_form_cursos_turno_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_cursos_turno_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_docente_guia_id' + iSeqRow).bind('blur', function() { sc_form_cursos_docente_guia_id_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_cursos_docente_guia_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_comentarios' + iSeqRow).bind('blur', function() { sc_form_cursos_comentarios_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_cursos_comentarios_onfocus(this, iSeqRow) });
  $('#id_sc_field_cant_max_alumnos' + iSeqRow).bind('blur', function() { sc_form_cursos_cant_max_alumnos_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_cursos_cant_max_alumnos_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cursos_grado_id_onblur(oThis, iSeqRow) {
  do_ajax_form_cursos_validate_grado_id();
  scCssBlur(oThis);
}

function sc_form_cursos_grado_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cursos_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_cursos_validate_descripcion();
  scCssBlur(oThis);
}

function sc_form_cursos_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cursos_ubicacion_onblur(oThis, iSeqRow) {
  do_ajax_form_cursos_validate_ubicacion();
  scCssBlur(oThis);
}

function sc_form_cursos_ubicacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cursos_turno_id_onblur(oThis, iSeqRow) {
  do_ajax_form_cursos_validate_turno_id();
  scCssBlur(oThis);
}

function sc_form_cursos_turno_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cursos_docente_guia_id_onblur(oThis, iSeqRow) {
  do_ajax_form_cursos_validate_docente_guia_id();
  scCssBlur(oThis);
}

function sc_form_cursos_docente_guia_id_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_cursos_comentarios_onblur(oThis, iSeqRow) {
  do_ajax_form_cursos_validate_comentarios();
  scCssBlur(oThis);
}

function sc_form_cursos_comentarios_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cursos_cant_max_alumnos_onblur(oThis, iSeqRow) {
  do_ajax_form_cursos_validate_cant_max_alumnos();
  scCssBlur(oThis);
}

function sc_form_cursos_cant_max_alumnos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("grado_id", "", status);
	displayChange_field("descripcion", "", status);
	displayChange_field("ubicacion", "", status);
	displayChange_field("turno_id", "", status);
	displayChange_field("docente_guia_id", "", status);
	displayChange_field("comentarios", "", status);
	displayChange_field("cant_max_alumnos", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_grado_id(row, status);
	displayChange_field_descripcion(row, status);
	displayChange_field_ubicacion(row, status);
	displayChange_field_turno_id(row, status);
	displayChange_field_docente_guia_id(row, status);
	displayChange_field_comentarios(row, status);
	displayChange_field_cant_max_alumnos(row, status);
}

function displayChange_field(field, row, status) {
	if ("grado_id" == field) {
		displayChange_field_grado_id(row, status);
	}
	if ("descripcion" == field) {
		displayChange_field_descripcion(row, status);
	}
	if ("ubicacion" == field) {
		displayChange_field_ubicacion(row, status);
	}
	if ("turno_id" == field) {
		displayChange_field_turno_id(row, status);
	}
	if ("docente_guia_id" == field) {
		displayChange_field_docente_guia_id(row, status);
	}
	if ("comentarios" == field) {
		displayChange_field_comentarios(row, status);
	}
	if ("cant_max_alumnos" == field) {
		displayChange_field_cant_max_alumnos(row, status);
	}
}

function displayChange_field_grado_id(row, status) {
	if ("on" == status) {
		$("#id_sc_field_grado_id" + row).select2("destroy");
		scJQSelect2Add(row, "grado_id");
	}
}

function displayChange_field_descripcion(row, status) {
}

function displayChange_field_ubicacion(row, status) {
}

function displayChange_field_turno_id(row, status) {
	if ("on" == status) {
		$("#id_sc_field_turno_id" + row).select2("destroy");
		scJQSelect2Add(row, "turno_id");
	}
}

function displayChange_field_docente_guia_id(row, status) {
}

function displayChange_field_comentarios(row, status) {
}

function displayChange_field_cant_max_alumnos(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_cursos_form" + pageNo).hide();
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
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "grado_id" == specificField) {
    scJQSelect2Add_grado_id(seqRow);
  }
  if (null == specificField || "turno_id" == specificField) {
    scJQSelect2Add_turno_id(seqRow);
  }
  if (null == specificField || "colegio_id" == specificField) {
    scJQSelect2Add_colegio_id(seqRow);
  }
  if (null == specificField || "periodo_id" == specificField) {
    scJQSelect2Add_periodo_id(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_grado_id(seqRow) {
  $("#id_sc_field_grado_id" + seqRow).select2(
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

function scJQSelect2Add_turno_id(seqRow) {
  $("#id_sc_field_turno_id" + seqRow).select2(
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

function scJQSelect2Add_periodo_id(seqRow) {
  $("#id_sc_field_periodo_id" + seqRow).select2(
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

