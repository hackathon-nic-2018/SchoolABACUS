
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
  scEventControl_data["fotografia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigo_estudiante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numero_carnet" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["estatus" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["primer_apellido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["segundo_apellido" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombres" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sexo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["grado_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fecha_nacimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fecha_ingreso" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["direccion_linea1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["direccion_linea2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombre_padre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nombre_madre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["comentarios" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["padres_estudiante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigo_estudiante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigo_estudiante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numero_carnet" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numero_carnet" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estatus" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estatus" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["primer_apellido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["primer_apellido" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["segundo_apellido" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["segundo_apellido" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombres" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombres" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["grado_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["grado_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecha_nacimiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha_nacimiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fecha_ingreso" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fecha_ingreso" + iSeqRow]["change"]) {
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
  if (scEventControl_data["telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombre_padre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre_padre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nombre_madre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nombre_madre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["comentarios" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["comentarios" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["padres_estudiante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["padres_estudiante" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("estatus" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("sexo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("grado_id" + iSeq == fieldName) {
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
  $('#id_sc_field_codigo_estudiante' + iSeqRow).bind('blur', function() { sc_form_estudiantes_codigo_estudiante_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_estudiantes_codigo_estudiante_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero_carnet' + iSeqRow).bind('blur', function() { sc_form_estudiantes_numero_carnet_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_estudiantes_numero_carnet_onfocus(this, iSeqRow) });
  $('#id_sc_field_estatus' + iSeqRow).bind('blur', function() { sc_form_estudiantes_estatus_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_estudiantes_estatus_onfocus(this, iSeqRow) });
  $('#id_sc_field_primer_apellido' + iSeqRow).bind('blur', function() { sc_form_estudiantes_primer_apellido_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_estudiantes_primer_apellido_onfocus(this, iSeqRow) });
  $('#id_sc_field_segundo_apellido' + iSeqRow).bind('blur', function() { sc_form_estudiantes_segundo_apellido_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_estudiantes_segundo_apellido_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombres' + iSeqRow).bind('blur', function() { sc_form_estudiantes_nombres_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_estudiantes_nombres_onfocus(this, iSeqRow) });
  $('#id_sc_field_sexo' + iSeqRow).bind('blur', function() { sc_form_estudiantes_sexo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_estudiantes_sexo_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_nacimiento' + iSeqRow).bind('blur', function() { sc_form_estudiantes_fecha_nacimiento_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_estudiantes_fecha_nacimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fecha_ingreso' + iSeqRow).bind('blur', function() { sc_form_estudiantes_fecha_ingreso_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_estudiantes_fecha_ingreso_onfocus(this, iSeqRow) });
  $('#id_sc_field_grado_id' + iSeqRow).bind('blur', function() { sc_form_estudiantes_grado_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_estudiantes_grado_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_linea1' + iSeqRow).bind('blur', function() { sc_form_estudiantes_direccion_linea1_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_estudiantes_direccion_linea1_onfocus(this, iSeqRow) });
  $('#id_sc_field_direccion_linea2' + iSeqRow).bind('blur', function() { sc_form_estudiantes_direccion_linea2_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_estudiantes_direccion_linea2_onfocus(this, iSeqRow) });
  $('#id_sc_field_telefono' + iSeqRow).bind('blur', function() { sc_form_estudiantes_telefono_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_estudiantes_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_fotografia' + iSeqRow).bind('blur', function() { sc_form_estudiantes_fotografia_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_estudiantes_fotografia_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre_padre' + iSeqRow).bind('blur', function() { sc_form_estudiantes_nombre_padre_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_estudiantes_nombre_padre_onfocus(this, iSeqRow) });
  $('#id_sc_field_nombre_madre' + iSeqRow).bind('blur', function() { sc_form_estudiantes_nombre_madre_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_estudiantes_nombre_madre_onfocus(this, iSeqRow) });
  $('#id_sc_field_comentarios' + iSeqRow).bind('blur', function() { sc_form_estudiantes_comentarios_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_estudiantes_comentarios_onfocus(this, iSeqRow) });
  $('#id_sc_field_usuario' + iSeqRow).bind('blur', function() { sc_form_estudiantes_usuario_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_estudiantes_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_padres_estudiante' + iSeqRow).bind('blur', function() { sc_form_estudiantes_padres_estudiante_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_estudiantes_padres_estudiante_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_estudiantes_codigo_estudiante_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_codigo_estudiante();
  scCssBlur(oThis);
}

function sc_form_estudiantes_codigo_estudiante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_numero_carnet_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_numero_carnet();
  scCssBlur(oThis);
}

function sc_form_estudiantes_numero_carnet_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_estatus_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_estatus();
  scCssBlur(oThis);
}

function sc_form_estudiantes_estatus_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_primer_apellido_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_primer_apellido();
  scCssBlur(oThis);
}

function sc_form_estudiantes_primer_apellido_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_segundo_apellido_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_segundo_apellido();
  scCssBlur(oThis);
}

function sc_form_estudiantes_segundo_apellido_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_nombres_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_nombres();
  scCssBlur(oThis);
}

function sc_form_estudiantes_nombres_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_sexo_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_sexo();
  scCssBlur(oThis);
}

function sc_form_estudiantes_sexo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_fecha_nacimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_fecha_nacimiento();
  scCssBlur(oThis);
}

function sc_form_estudiantes_fecha_nacimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_fecha_ingreso_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_fecha_ingreso();
  scCssBlur(oThis);
}

function sc_form_estudiantes_fecha_ingreso_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_grado_id_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_grado_id();
  scCssBlur(oThis);
}

function sc_form_estudiantes_grado_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_direccion_linea1_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_direccion_linea1();
  scCssBlur(oThis);
}

function sc_form_estudiantes_direccion_linea1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_direccion_linea2_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_direccion_linea2();
  scCssBlur(oThis);
}

function sc_form_estudiantes_direccion_linea2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_telefono();
  scCssBlur(oThis);
}

function sc_form_estudiantes_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_fotografia_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_estudiantes_fotografia_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_estudiantes_nombre_padre_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_nombre_padre();
  scCssBlur(oThis);
}

function sc_form_estudiantes_nombre_padre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_nombre_madre_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_nombre_madre();
  scCssBlur(oThis);
}

function sc_form_estudiantes_nombre_madre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_comentarios_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_comentarios();
  scCssBlur(oThis);
}

function sc_form_estudiantes_comentarios_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_usuario();
  scCssBlur(oThis);
}

function sc_form_estudiantes_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_estudiantes_padres_estudiante_onblur(oThis, iSeqRow) {
  do_ajax_form_estudiantes_mob_validate_padres_estudiante();
  scCssBlur(oThis);
}

function sc_form_estudiantes_padres_estudiante_onfocus(oThis, iSeqRow) {
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
	displayChange_field("fotografia", "", status);
	displayChange_field("usuario", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("codigo_estudiante", "", status);
	displayChange_field("numero_carnet", "", status);
	displayChange_field("estatus", "", status);
	displayChange_field("primer_apellido", "", status);
	displayChange_field("segundo_apellido", "", status);
	displayChange_field("nombres", "", status);
	displayChange_field("sexo", "", status);
	displayChange_field("grado_id", "", status);
	displayChange_field("fecha_nacimiento", "", status);
	displayChange_field("fecha_ingreso", "", status);
	displayChange_field("direccion_linea1", "", status);
	displayChange_field("direccion_linea2", "", status);
	displayChange_field("telefono", "", status);
	displayChange_field("nombre_padre", "", status);
	displayChange_field("nombre_madre", "", status);
	displayChange_field("comentarios", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("padres_estudiante", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_fotografia(row, status);
	displayChange_field_usuario(row, status);
	displayChange_field_codigo_estudiante(row, status);
	displayChange_field_numero_carnet(row, status);
	displayChange_field_estatus(row, status);
	displayChange_field_primer_apellido(row, status);
	displayChange_field_segundo_apellido(row, status);
	displayChange_field_nombres(row, status);
	displayChange_field_sexo(row, status);
	displayChange_field_grado_id(row, status);
	displayChange_field_fecha_nacimiento(row, status);
	displayChange_field_fecha_ingreso(row, status);
	displayChange_field_direccion_linea1(row, status);
	displayChange_field_direccion_linea2(row, status);
	displayChange_field_telefono(row, status);
	displayChange_field_nombre_padre(row, status);
	displayChange_field_nombre_madre(row, status);
	displayChange_field_comentarios(row, status);
	displayChange_field_padres_estudiante(row, status);
}

function displayChange_field(field, row, status) {
	if ("fotografia" == field) {
		displayChange_field_fotografia(row, status);
	}
	if ("usuario" == field) {
		displayChange_field_usuario(row, status);
	}
	if ("codigo_estudiante" == field) {
		displayChange_field_codigo_estudiante(row, status);
	}
	if ("numero_carnet" == field) {
		displayChange_field_numero_carnet(row, status);
	}
	if ("estatus" == field) {
		displayChange_field_estatus(row, status);
	}
	if ("primer_apellido" == field) {
		displayChange_field_primer_apellido(row, status);
	}
	if ("segundo_apellido" == field) {
		displayChange_field_segundo_apellido(row, status);
	}
	if ("nombres" == field) {
		displayChange_field_nombres(row, status);
	}
	if ("sexo" == field) {
		displayChange_field_sexo(row, status);
	}
	if ("grado_id" == field) {
		displayChange_field_grado_id(row, status);
	}
	if ("fecha_nacimiento" == field) {
		displayChange_field_fecha_nacimiento(row, status);
	}
	if ("fecha_ingreso" == field) {
		displayChange_field_fecha_ingreso(row, status);
	}
	if ("direccion_linea1" == field) {
		displayChange_field_direccion_linea1(row, status);
	}
	if ("direccion_linea2" == field) {
		displayChange_field_direccion_linea2(row, status);
	}
	if ("telefono" == field) {
		displayChange_field_telefono(row, status);
	}
	if ("nombre_padre" == field) {
		displayChange_field_nombre_padre(row, status);
	}
	if ("nombre_madre" == field) {
		displayChange_field_nombre_madre(row, status);
	}
	if ("comentarios" == field) {
		displayChange_field_comentarios(row, status);
	}
	if ("padres_estudiante" == field) {
		displayChange_field_padres_estudiante(row, status);
	}
}

function displayChange_field_fotografia(row, status) {
}

function displayChange_field_usuario(row, status) {
}

function displayChange_field_codigo_estudiante(row, status) {
}

function displayChange_field_numero_carnet(row, status) {
}

function displayChange_field_estatus(row, status) {
	if ("on" == status) {
		$("#id_sc_field_estatus" + row).select2("destroy");
		scJQSelect2Add(row, "estatus");
	}
}

function displayChange_field_primer_apellido(row, status) {
}

function displayChange_field_segundo_apellido(row, status) {
}

function displayChange_field_nombres(row, status) {
}

function displayChange_field_sexo(row, status) {
}

function displayChange_field_grado_id(row, status) {
}

function displayChange_field_fecha_nacimiento(row, status) {
}

function displayChange_field_fecha_ingreso(row, status) {
}

function displayChange_field_direccion_linea1(row, status) {
}

function displayChange_field_direccion_linea2(row, status) {
}

function displayChange_field_telefono(row, status) {
}

function displayChange_field_nombre_padre(row, status) {
}

function displayChange_field_nombre_madre(row, status) {
}

function displayChange_field_comentarios(row, status) {
}

function displayChange_field_padres_estudiante(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_estudiantes_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(28);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_fecha_nacimiento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_nacimiento" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_estudiantes_mob_validate_fecha_nacimiento(iSeqRow); }, 200);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-15:c+15',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_nacimiento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true,
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });

  $("#id_sc_field_fecha_ingreso" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fecha_ingreso" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_estudiantes_mob_validate_fecha_ingreso(iSeqRow); }, 200);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-7:c+7',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fecha_ingreso']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->jqueryIconFile('calendar'); ?>",
    buttonImageOnly: true,
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });

} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_fotografia" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_estudiantes_mob_ul_save.php",
    dropZone: $("#hidden_field_data_fotografia" + iSeqRow),
    formData: function() {
      return [
        {name: 'param_field', value: 'fotografia'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_fotografia" + iSeqRow);
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_fotografia" + iSeqRow);
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
        $("#id_img_loader_fotografia" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_fotografia" + iSeqRow).hide();
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
      $("#id_sc_field_fotografia" + iSeqRow).val("");
      $("#id_sc_field_fotografia_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_fotografia_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_fotografia = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_fotografia) ? "none" : "";
      $("#id_ajax_img_fotografia" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_fotografia" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_fotografia) {
        document.F1.temp_out_fotografia.value = var_ajax_img_thumb;
        document.F1.temp_out1_fotografia.value = var_ajax_img_fotografia;
      }
      else if (document.F1.temp_out_fotografia) {
        document.F1.temp_out_fotografia.value = var_ajax_img_fotografia;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_fotografia" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_fotografia" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_fotografia" + iSeqRow).css("display", "none");
      $("#id_ajax_link_fotografia" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "estatus" == specificField) {
    scJQSelect2Add_estatus(seqRow);
  }
  if (null == specificField || "colegio_id" == specificField) {
    scJQSelect2Add_colegio_id(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_estatus(seqRow) {
  $("#id_sc_field_estatus" + seqRow).select2(
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


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  if (typeof(scBtnGrpShowMobile) === typeof(function(){})) { return scBtnGrpShowMobile(sGroup); };
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    scBtnGrpStatus[sGroup] = '';
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  }).mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup) {
  if ('over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
  }
}
