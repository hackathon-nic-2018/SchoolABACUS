
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
  scEventControl_data["asignatura_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descripcion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descripcion_detallada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["especialidad_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["reportar_gobierno" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_calificacion_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["asignatura_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["asignatura_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descripcion_detallada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descripcion_detallada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["especialidad_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["especialidad_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["reportar_gobierno" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["reportar_gobierno" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_calificacion_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_calificacion_id" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("especialidad_id" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("tipo_calificacion_id" + iSeq == fieldName) {
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
  $('#id_sc_field_asignatura_id' + iSeqRow).bind('blur', function() { sc_form_asignaturas_asignatura_id_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_asignaturas_asignatura_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion' + iSeqRow).bind('blur', function() { sc_form_asignaturas_descripcion_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_asignaturas_descripcion_onfocus(this, iSeqRow) });
  $('#id_sc_field_descripcion_detallada' + iSeqRow).bind('blur', function() { sc_form_asignaturas_descripcion_detallada_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_asignaturas_descripcion_detallada_onfocus(this, iSeqRow) });
  $('#id_sc_field_especialidad_id' + iSeqRow).bind('blur', function() { sc_form_asignaturas_especialidad_id_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_asignaturas_especialidad_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_reportar_gobierno' + iSeqRow).bind('blur', function() { sc_form_asignaturas_reportar_gobierno_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_asignaturas_reportar_gobierno_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_calificacion_id' + iSeqRow).bind('blur', function() { sc_form_asignaturas_tipo_calificacion_id_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_asignaturas_tipo_calificacion_id_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_asignaturas_asignatura_id_onblur(oThis, iSeqRow) {
  do_ajax_form_asignaturas_mob_validate_asignatura_id();
  scCssBlur(oThis);
}

function sc_form_asignaturas_asignatura_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_asignaturas_descripcion_onblur(oThis, iSeqRow) {
  do_ajax_form_asignaturas_mob_validate_descripcion();
  scCssBlur(oThis);
}

function sc_form_asignaturas_descripcion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_asignaturas_descripcion_detallada_onblur(oThis, iSeqRow) {
  do_ajax_form_asignaturas_mob_validate_descripcion_detallada();
  scCssBlur(oThis);
}

function sc_form_asignaturas_descripcion_detallada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_asignaturas_especialidad_id_onblur(oThis, iSeqRow) {
  do_ajax_form_asignaturas_mob_validate_especialidad_id();
  scCssBlur(oThis);
}

function sc_form_asignaturas_especialidad_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_asignaturas_reportar_gobierno_onblur(oThis, iSeqRow) {
  do_ajax_form_asignaturas_mob_validate_reportar_gobierno();
  scCssBlur(oThis);
}

function sc_form_asignaturas_reportar_gobierno_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_asignaturas_tipo_calificacion_id_onblur(oThis, iSeqRow) {
  do_ajax_form_asignaturas_mob_validate_tipo_calificacion_id();
  scCssBlur(oThis);
}

function sc_form_asignaturas_tipo_calificacion_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("asignatura_id", "", status);
	displayChange_field("descripcion", "", status);
	displayChange_field("descripcion_detallada", "", status);
	displayChange_field("especialidad_id", "", status);
	displayChange_field("reportar_gobierno", "", status);
	displayChange_field("tipo_calificacion_id", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_asignatura_id(row, status);
	displayChange_field_descripcion(row, status);
	displayChange_field_descripcion_detallada(row, status);
	displayChange_field_especialidad_id(row, status);
	displayChange_field_reportar_gobierno(row, status);
	displayChange_field_tipo_calificacion_id(row, status);
}

function displayChange_field(field, row, status) {
	if ("asignatura_id" == field) {
		displayChange_field_asignatura_id(row, status);
	}
	if ("descripcion" == field) {
		displayChange_field_descripcion(row, status);
	}
	if ("descripcion_detallada" == field) {
		displayChange_field_descripcion_detallada(row, status);
	}
	if ("especialidad_id" == field) {
		displayChange_field_especialidad_id(row, status);
	}
	if ("reportar_gobierno" == field) {
		displayChange_field_reportar_gobierno(row, status);
	}
	if ("tipo_calificacion_id" == field) {
		displayChange_field_tipo_calificacion_id(row, status);
	}
}

function displayChange_field_asignatura_id(row, status) {
}

function displayChange_field_descripcion(row, status) {
}

function displayChange_field_descripcion_detallada(row, status) {
}

function displayChange_field_especialidad_id(row, status) {
	if ("on" == status) {
		$("#id_sc_field_especialidad_id" + row).select2("destroy");
		scJQSelect2Add(row, "especialidad_id");
	}
}

function displayChange_field_reportar_gobierno(row, status) {
}

function displayChange_field_tipo_calificacion_id(row, status) {
}

function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_asignaturas_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(28);
		}
	}
}
                var scJQHtmlEditorData = (function() {
                    var data = {};
                    function scJQHtmlEditorData(a, b) {
                        if (a) {
                            if (typeof(a) === typeof({})) {
                                for (var d in a) {
                                    if (a.hasOwnProperty(d)) {
                                        data[d] = a[d];
                                    }
                                }
                            } else if ((typeof(a) === typeof('')) || (typeof(a) === typeof(1))) {
                                if (b) {
                                    data[a] = b;
                                } else {
                                    if (typeof(a) === typeof('')) {
                                        var v = data;
                                        a = a.split('.');
                                        a.forEach(function (r) {
                                            v = v[r];
                                        });
                                        return v;
                                    }
                                    return data[a];
                                }
                            }
                        }
                        return data;
                    }
                    return scJQHtmlEditorData;
                }());
 function scJQHtmlEditorAdd(iSeqRow) {
<?php
$sLangTest = '';
if(is_file('../_lib/lang/arr_langs_tinymce.php'))
{
    include('../_lib/lang/arr_langs_tinymce.php');
    if(isset($Nm_arr_lang_tinymce[ $this->Ini->str_lang ]))
    {
        $sLangTest = $Nm_arr_lang_tinymce[ $this->Ini->str_lang ];
    }
}
if(empty($sLangTest))
{
    $sLangTest = 'en_GB';
}
?>
 tinyMCE.init(scJQHtmlEditorData({
  mode: "textareas",
  theme: "modern",
  browser_spellcheck : true,
<?php
if ('novo' != $this->nmgp_opcao && isset($this->nmgp_cmp_readonly['descripcion_detallada']) && $this->nmgp_cmp_readonly['descripcion_detallada'] == 'on')
{
    unset($this->nmgp_cmp_readonly['descripcion_detallada']);
?>
   readonly: "true",
<?php
}
?>
  relative_urls : false,
  remove_script_host : false,
  convert_urls  : true,
  language : '<?php echo $sLangTest; ?>',
  plugins : 'advlist,autolink,link,image,lists,charmap,print,preview,hr,anchor,pagebreak,searchreplace,wordcount,visualblocks,visualchars,code,fullscreen,insertdatetime,media,nonbreaking,table,directionality,emoticons,template,textcolor,paste,textcolor,colorpicker,textpattern,contextmenu',
  toolbar1: "undo,redo,separator,styleselect,separator,bold,italic,separator,alignleft,aligncenter,alignright,alignjustify,separator,bullist,numlist,outdent,indent,separator,link,image",
  statusbar : false,
  menubar : 'file edit insert view format table tools',
  toolbar_items_size: 'small',
  content_style: ".mce-container-body {text-align: center !important}",
  editor_selector: "mceEditor_descripcion_detallada" + iSeqRow,
  setup: function(ed) {
    ed.on("init", function (e) {
      if ($('textarea[name="descripcion_detallada' + iSeqRow + '"]').prop('disabled') == true) {
        ed.setMode("readonly");
      }
    });
  }
 }));
} // scJQHtmlEditorAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "especialidad_id" == specificField) {
    scJQSelect2Add_especialidad_id(seqRow);
  }
  if (null == specificField || "colegio_id" == specificField) {
    scJQSelect2Add_colegio_id(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_especialidad_id(seqRow) {
  $("#id_sc_field_especialidad_id" + seqRow).select2(
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
  scJQHtmlEditorAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

