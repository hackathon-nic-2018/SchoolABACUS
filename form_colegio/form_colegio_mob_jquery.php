
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
  scEventControl_data["logo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["colegio_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["region" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["departamento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ciudad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["municipio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["direccion_linea1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["direccion_linea2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["telefonos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sitio_web" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["correo_oficial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fondo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["especialidades" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["estatus_periodo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipos_periodo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["estatus_estudiantes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipos_grados" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["turnos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["estatus_docentes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["colegio_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["colegio_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["region" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["region" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["departamento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["departamento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ciudad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ciudad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["municipio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["municipio" + iSeqRow]["change"]) {
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
  if (scEventControl_data["telefonos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["telefonos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sitio_web" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sitio_web" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["correo_oficial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["correo_oficial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["especialidades" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["especialidades" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estatus_periodo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estatus_periodo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipos_periodo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipos_periodo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estatus_estudiantes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estatus_estudiantes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipos_grados" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipos_grados" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["turnos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["turnos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estatus_docentes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estatus_docentes" + iSeqRow]["change"]) {
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
  $('#id_sc_field_colegio_nombre' + iSeqRow).bind('blur', function() { sc_form_colegio_colegio_nombre_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_colegio_colegio_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_pais' + iSeqRow).bind('blur', function() { sc_form_colegio_pais_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_colegio_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_region' + iSeqRow).bind('blur', function() { sc_form_colegio_region_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_colegio_region_onfocus(this, iSeqRow) });
  $('#id_sc_field_departamento' + iSeqRow).bind('blur', function() { sc_form_colegio_departamento_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_colegio_departamento_onfocus(this, iSeqRow) });
  $('#id_sc_field_ciudad' + iSeqRow).bind('blur', function() { sc_form_colegio_ciudad_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_colegio_ciudad_onfocus(this, iSeqRow) });
  $('#id_sc_field_municipio' + iSeqRow).bind('blur', function() { sc_form_colegio_municipio_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_colegio_municipio_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_linea1' + iSeqRow).bind('blur', function() { sc_form_colegio_direccion_linea1_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_colegio_direccion_linea1_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_linea2' + iSeqRow).bind('blur', function() { sc_form_colegio_direccion_linea2_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_colegio_direccion_linea2_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefonos' + iSeqRow).bind('blur', function() { sc_form_colegio_telefonos_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_colegio_telefonos_onfocus(this, iSeqRow) });
  $('#id_sc_field_sitio_web' + iSeqRow).bind('blur', function() { sc_form_colegio_sitio_web_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_colegio_sitio_web_onfocus(this, iSeqRow) });
  $('#id_sc_field_correo_oficial' + iSeqRow).bind('blur', function() { sc_form_colegio_correo_oficial_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_colegio_correo_oficial_onfocus(this, iSeqRow) });
  $('#id_sc_field_fondo' + iSeqRow).bind('blur', function() { sc_form_colegio_fondo_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_colegio_fondo_onfocus(this, iSeqRow) });
  $('#id_sc_field_logo' + iSeqRow).bind('blur', function() { sc_form_colegio_logo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_colegio_logo_onfocus(this, iSeqRow) });
  $('#id_sc_field_especialidades' + iSeqRow).bind('blur', function() { sc_form_colegio_especialidades_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_colegio_especialidades_onfocus(this, iSeqRow) });
  $('#id_sc_field_estatus_periodo' + iSeqRow).bind('blur', function() { sc_form_colegio_estatus_periodo_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_colegio_estatus_periodo_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipos_periodo' + iSeqRow).bind('blur', function() { sc_form_colegio_tipos_periodo_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_colegio_tipos_periodo_onfocus(this, iSeqRow) });
  $('#id_sc_field_estatus_estudiantes' + iSeqRow).bind('blur', function() { sc_form_colegio_estatus_estudiantes_onblur(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_colegio_estatus_estudiantes_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipos_grados' + iSeqRow).bind('blur', function() { sc_form_colegio_tipos_grados_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_colegio_tipos_grados_onfocus(this, iSeqRow) });
  $('#id_sc_field_turnos' + iSeqRow).bind('blur', function() { sc_form_colegio_turnos_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_colegio_turnos_onfocus(this, iSeqRow) });
  $('#id_sc_field_estatus_docentes' + iSeqRow).bind('blur', function() { sc_form_colegio_estatus_docentes_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_colegio_estatus_docentes_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_colegio_colegio_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_colegio_nombre();
  scCssBlur(oThis);
}

function sc_form_colegio_colegio_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_pais();
  scCssBlur(oThis);
}

function sc_form_colegio_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_region_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_region();
  scCssBlur(oThis);
}

function sc_form_colegio_region_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_departamento_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_departamento();
  scCssBlur(oThis);
}

function sc_form_colegio_departamento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_ciudad_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_ciudad();
  scCssBlur(oThis);
}

function sc_form_colegio_ciudad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_municipio_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_municipio();
  scCssBlur(oThis);
}

function sc_form_colegio_municipio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_direccion_linea1_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_direccion_linea1();
  scCssBlur(oThis);
}

function sc_form_colegio_direccion_linea1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_direccion_linea2_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_direccion_linea2();
  scCssBlur(oThis);
}

function sc_form_colegio_direccion_linea2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_telefonos_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_telefonos();
  scCssBlur(oThis);
}

function sc_form_colegio_telefonos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_sitio_web_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_sitio_web();
  scCssBlur(oThis);
}

function sc_form_colegio_sitio_web_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_correo_oficial_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_correo_oficial();
  scCssBlur(oThis);
}

function sc_form_colegio_correo_oficial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_fondo_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_colegio_fondo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_colegio_logo_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_colegio_logo_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_colegio_especialidades_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_especialidades();
  scCssBlur(oThis);
}

function sc_form_colegio_especialidades_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_estatus_periodo_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_estatus_periodo();
  scCssBlur(oThis);
}

function sc_form_colegio_estatus_periodo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_tipos_periodo_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_tipos_periodo();
  scCssBlur(oThis);
}

function sc_form_colegio_tipos_periodo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_estatus_estudiantes_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_estatus_estudiantes();
  scCssBlur(oThis);
}

function sc_form_colegio_estatus_estudiantes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_tipos_grados_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_tipos_grados();
  scCssBlur(oThis);
}

function sc_form_colegio_tipos_grados_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_turnos_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_turnos();
  scCssBlur(oThis);
}

function sc_form_colegio_turnos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_colegio_estatus_docentes_onblur(oThis, iSeqRow) {
  do_ajax_form_colegio_mob_validate_estatus_docentes();
  scCssBlur(oThis);
}

function sc_form_colegio_estatus_docentes_onfocus(oThis, iSeqRow) {
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
	if ("3" == block) {
		displayChange_block_3(status);
	}
	if ("4" == block) {
		displayChange_block_4(status);
	}
	if ("5" == block) {
		displayChange_block_5(status);
	}
	if ("6" == block) {
		displayChange_block_6(status);
	}
	if ("7" == block) {
		displayChange_block_7(status);
	}
	if ("8" == block) {
		displayChange_block_8(status);
	}
	if ("9" == block) {
		displayChange_block_9(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("logo", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("colegio_nombre", "", status);
	displayChange_field("pais", "", status);
	displayChange_field("region", "", status);
	displayChange_field("departamento", "", status);
	displayChange_field("ciudad", "", status);
	displayChange_field("municipio", "", status);
	displayChange_field("direccion_linea1", "", status);
	displayChange_field("direccion_linea2", "", status);
	displayChange_field("telefonos", "", status);
	displayChange_field("sitio_web", "", status);
	displayChange_field("correo_oficial", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("fondo", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("especialidades", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("estatus_periodo", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("tipos_periodo", "", status);
}

function displayChange_block_6(status) {
	displayChange_field("estatus_estudiantes", "", status);
}

function displayChange_block_7(status) {
	displayChange_field("tipos_grados", "", status);
}

function displayChange_block_8(status) {
	displayChange_field("turnos", "", status);
}

function displayChange_block_9(status) {
	displayChange_field("estatus_docentes", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_logo(row, status);
	displayChange_field_colegio_nombre(row, status);
	displayChange_field_pais(row, status);
	displayChange_field_region(row, status);
	displayChange_field_departamento(row, status);
	displayChange_field_ciudad(row, status);
	displayChange_field_municipio(row, status);
	displayChange_field_direccion_linea1(row, status);
	displayChange_field_direccion_linea2(row, status);
	displayChange_field_telefonos(row, status);
	displayChange_field_sitio_web(row, status);
	displayChange_field_correo_oficial(row, status);
	displayChange_field_fondo(row, status);
	displayChange_field_especialidades(row, status);
	displayChange_field_estatus_periodo(row, status);
	displayChange_field_tipos_periodo(row, status);
	displayChange_field_estatus_estudiantes(row, status);
	displayChange_field_tipos_grados(row, status);
	displayChange_field_turnos(row, status);
	displayChange_field_estatus_docentes(row, status);
}

function displayChange_field(field, row, status) {
	if ("logo" == field) {
		displayChange_field_logo(row, status);
	}
	if ("colegio_nombre" == field) {
		displayChange_field_colegio_nombre(row, status);
	}
	if ("pais" == field) {
		displayChange_field_pais(row, status);
	}
	if ("region" == field) {
		displayChange_field_region(row, status);
	}
	if ("departamento" == field) {
		displayChange_field_departamento(row, status);
	}
	if ("ciudad" == field) {
		displayChange_field_ciudad(row, status);
	}
	if ("municipio" == field) {
		displayChange_field_municipio(row, status);
	}
	if ("direccion_linea1" == field) {
		displayChange_field_direccion_linea1(row, status);
	}
	if ("direccion_linea2" == field) {
		displayChange_field_direccion_linea2(row, status);
	}
	if ("telefonos" == field) {
		displayChange_field_telefonos(row, status);
	}
	if ("sitio_web" == field) {
		displayChange_field_sitio_web(row, status);
	}
	if ("correo_oficial" == field) {
		displayChange_field_correo_oficial(row, status);
	}
	if ("fondo" == field) {
		displayChange_field_fondo(row, status);
	}
	if ("especialidades" == field) {
		displayChange_field_especialidades(row, status);
	}
	if ("estatus_periodo" == field) {
		displayChange_field_estatus_periodo(row, status);
	}
	if ("tipos_periodo" == field) {
		displayChange_field_tipos_periodo(row, status);
	}
	if ("estatus_estudiantes" == field) {
		displayChange_field_estatus_estudiantes(row, status);
	}
	if ("tipos_grados" == field) {
		displayChange_field_tipos_grados(row, status);
	}
	if ("turnos" == field) {
		displayChange_field_turnos(row, status);
	}
	if ("estatus_docentes" == field) {
		displayChange_field_estatus_docentes(row, status);
	}
}

function displayChange_field_logo(row, status) {
}

function displayChange_field_colegio_nombre(row, status) {
}

function displayChange_field_pais(row, status) {
}

function displayChange_field_region(row, status) {
}

function displayChange_field_departamento(row, status) {
}

function displayChange_field_ciudad(row, status) {
}

function displayChange_field_municipio(row, status) {
}

function displayChange_field_direccion_linea1(row, status) {
}

function displayChange_field_direccion_linea2(row, status) {
}

function displayChange_field_telefonos(row, status) {
}

function displayChange_field_sitio_web(row, status) {
}

function displayChange_field_correo_oficial(row, status) {
}

function displayChange_field_fondo(row, status) {
}

function displayChange_field_especialidades(row, status) {
}

function displayChange_field_estatus_periodo(row, status) {
}

function displayChange_field_tipos_periodo(row, status) {
}

function displayChange_field_estatus_estudiantes(row, status) {
}

function displayChange_field_tipos_grados(row, status) {
}

function displayChange_field_turnos(row, status) {
}

function displayChange_field_estatus_docentes(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_colegio_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(24);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_logo" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_colegio_mob_ul_save.php",
    dropZone: $("#hidden_field_data_logo" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'logo'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_logo" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_logo" + iSeqRow);
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
        $("#id_img_loader_logo" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_logo" + iSeqRow).hide();
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
      $("#id_sc_field_logo" + iSeqRow).val("");
      $("#id_sc_field_logo_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_logo_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_logo = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_logo) ? "none" : "";
      $("#id_ajax_img_logo" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_logo" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_logo) {
        document.F1.temp_out_logo.value = var_ajax_img_thumb;
        document.F1.temp_out1_logo.value = var_ajax_img_logo;
      }
      else if (document.F1.temp_out_logo) {
        document.F1.temp_out_logo.value = var_ajax_img_logo;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_logo" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_logo" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_logo" + iSeqRow).css("display", "none");
      $("#id_ajax_link_logo" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_fondo" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_colegio_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'fondo'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fondo" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fondo" + iSeqRow);
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
        $("#id_img_loader_fondo" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fondo" + iSeqRow).hide();
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
      $("#id_sc_field_fondo" + iSeqRow).val("");
      $("#id_sc_field_fondo_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fondo_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fondo = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fondo) ? "none" : "";
      $("#id_ajax_img_fondo" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fondo" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fondo) {
        document.F1.temp_out_fondo.value = var_ajax_img_thumb;
        document.F1.temp_out1_fondo.value = var_ajax_img_fondo;
      }
      else if (document.F1.temp_out_fondo) {
        document.F1.temp_out_fondo.value = var_ajax_img_fondo;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fondo" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fondo" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fondo" + iSeqRow).css("display", "none");
      $("#id_ajax_link_fondo" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

