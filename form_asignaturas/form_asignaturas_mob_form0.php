<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " asignaturas"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " asignaturas"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php
header("X-XSS-Protection: 0");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<style type="text/css">
	.sc.switch {
		position: relative;
		display: inline-flex;
	}

	.sc.switch span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.switch span {
		background: #DFDFDF;
		width: 22px;
		height: 14px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		padding: 0 3px;
		transition: all .2s linear;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.switch span:before {
		content: '\2713';
		display: inline-block;
		color: white;
		font-size: 10px;
		z-index: 0;
		position: absolute;
		top: 0;
		left: 4px;
	}

	.sc.switch span:after {
		content: '';
		background: white;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		border-radius: 15px;
		transition: all .2s linear;
		z-index: 1;
	}

	.sc.switch input {
		margin-right: 10px;
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.switch input:disabled + span {
		opacity: 0.35;
	}

	.sc.switch input:checked + span {
		background: #66AFE9;
	}

	.sc.switch input:checked + span:after {
		left: calc(100% - 1px);
		transform: translateX(-100%);
	}

	.sc.radio {
		position: relative;
		display: inline-flex;
	}

	.sc.radio span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.radio span {
		background: #ffffff;
		border: 1px solid #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.radio span:after {
		content: '';
		background: #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		z-index: 1;
		transform: scale(0);
	}

	.sc.radio input {
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.radio input:disabled + span {
		opacity: 0.35;
	}

	.sc.radio input:checked + span {
		background: #66AFE9;
	}

	.sc.radio input:checked + span:after {
		transform: translateX(-100%);
		transform: scale(1);
	}
</style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_asignaturas/form_asignaturas_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_tiny_mce; ?>"></SCRIPT>
 <STYLE>
  .mce-toolbar-grp .mce-container-body {text-align: left !important}
 </STYLE>

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_asignaturas_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_binicio_off = "<?php echo $this->arr_buttons['binicio_off']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bavanca_off = "<?php echo $this->arr_buttons['bavanca_off']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bretorna_off = "<?php echo $this->arr_buttons['bretorna_off']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_bfinal_off  = "<?php echo $this->arr_buttons['bfinal_off']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).show();
       $("#sc_b_ini_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ini_" + str_pos).show();
       $("#gbl_sc_b_ini_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).show();
       $("#sc_b_ret_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_ret_" + str_pos).show();
       $("#gbl_sc_b_ret_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).hide();
       $("#sc_b_ini_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ini_" + str_pos).hide();
       $("#gbl_sc_b_ini_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).hide();
       $("#sc_b_ret_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_ret_" + str_pos).hide();
       $("#gbl_sc_b_ret_off_" + str_pos).show();
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).show();
       $("#sc_b_fim_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_fim_" + str_pos).show();
       $("#gbl_sc_b_fim_off_" + str_pos).hide();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).show();
       $("#sc_b_avc_off_" + str_pos).hide().prop("disabled", false);
       $("#gbl_sc_b_avc_" + str_pos).show();
       $("#gbl_sc_b_avc_off_" + str_pos).hide();
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).hide();
       $("#sc_b_fim_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_fim_" + str_pos).hide();
       $("#gbl_sc_b_fim_off_" + str_pos).show();
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).hide();
       $("#sc_b_avc_off_" + str_pos).prop("disabled", true).show();
       $("#gbl_sc_b_avc_" + str_pos).hide();
       $("#gbl_sc_b_avc_off_" + str_pos).show();
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_asignaturas_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys.inc.js"></script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys_setup.js"></script>
<script type="text/javascript">
function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'height': Math.max(oInput.height(), 16) + 'px',
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_asignaturas']['error_buffer']) && '' != $_SESSION['scriptcase']['form_asignaturas']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_asignaturas']['error_buffer'];
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_asignaturas_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
 </script>
<form  name="F1" method="post" 
               action="form_asignaturas_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="colegio_id" value="<?php  echo $this->form_encode_input($this->colegio_id) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_asignaturas_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_asignaturas_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "sc-unique-btn-19", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "sc-unique-btn-20", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Escape)", "sc-unique-btn-21", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "sc-unique-btn-22", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "sc-unique-btn-23", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-24", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-25", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "sc-unique-btn-26", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-27", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "sc-unique-btn-28", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['asignatura_id']))
           {
               $this->nmgp_cmp_readonly['asignatura_id'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['asignatura_id']))
    {
        $this->nm_new_label['asignatura_id'] = "Código";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $asignatura_id = $this->asignatura_id;
   $sStyleHidden_asignatura_id = '';
   if (isset($this->nmgp_cmp_hidden['asignatura_id']) && $this->nmgp_cmp_hidden['asignatura_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['asignatura_id']);
       $sStyleHidden_asignatura_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_asignatura_id = 'display: none;';
   $sStyleReadInp_asignatura_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["asignatura_id"]) &&  $this->nmgp_cmp_readonly["asignatura_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['asignatura_id']);
       $sStyleReadLab_asignatura_id = '';
       $sStyleReadInp_asignatura_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['asignatura_id']) && $this->nmgp_cmp_hidden['asignatura_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="asignatura_id" value="<?php echo $this->form_encode_input($asignatura_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_asignatura_id_line" id="hidden_field_data_asignatura_id" style="<?php echo $sStyleHidden_asignatura_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_asignatura_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_asignatura_id_label"><span id="id_label_asignatura_id"><?php echo $this->nm_new_label['asignatura_id']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['php_cmp_required']['asignatura_id']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['php_cmp_required']['asignatura_id'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["asignatura_id"]) &&  $this->nmgp_cmp_readonly["asignatura_id"] == "on")) { 

 ?>
<input type="hidden" name="asignatura_id" value="<?php echo $this->form_encode_input($asignatura_id) . "\"><span id=\"id_ajax_label_asignatura_id\">" . $asignatura_id . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_asignatura_id" class="sc-ui-readonly-asignatura_id css_asignatura_id_line" style="<?php echo $sStyleReadLab_asignatura_id; ?>"><?php echo $this->form_encode_input($this->asignatura_id); ?></span><span id="id_read_off_asignatura_id" style="white-space: nowrap;<?php echo $sStyleReadInp_asignatura_id; ?>">
 <input class="sc-js-input scFormObjectOdd css_asignatura_id_obj" style="" id="id_sc_field_asignatura_id" type=text name="asignatura_id" value="<?php echo $this->form_encode_input($asignatura_id) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['asignatura_id']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['asignatura_id']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['asignatura_id']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_asignatura_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_asignatura_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['descripcion']))
    {
        $this->nm_new_label['descripcion'] = "Descripción";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $descripcion = $this->descripcion;
   $sStyleHidden_descripcion = '';
   if (isset($this->nmgp_cmp_hidden['descripcion']) && $this->nmgp_cmp_hidden['descripcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['descripcion']);
       $sStyleHidden_descripcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_descripcion = 'display: none;';
   $sStyleReadInp_descripcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['descripcion']) && $this->nmgp_cmp_readonly['descripcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['descripcion']);
       $sStyleReadLab_descripcion = '';
       $sStyleReadInp_descripcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['descripcion']) && $this->nmgp_cmp_hidden['descripcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="descripcion" value="<?php echo $this->form_encode_input($descripcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_descripcion_line" id="hidden_field_data_descripcion" style="<?php echo $sStyleHidden_descripcion; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_descripcion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_descripcion_label"><span id="id_label_descripcion"><?php echo $this->nm_new_label['descripcion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["descripcion"]) &&  $this->nmgp_cmp_readonly["descripcion"] == "on") { 

 ?>
<input type="hidden" name="descripcion" value="<?php echo $this->form_encode_input($descripcion) . "\">" . $descripcion . ""; ?>
<?php } else { ?>
<span id="id_read_on_descripcion" class="sc-ui-readonly-descripcion css_descripcion_line" style="<?php echo $sStyleReadLab_descripcion; ?>"><?php echo $this->form_encode_input($this->descripcion); ?></span><span id="id_read_off_descripcion" style="white-space: nowrap;<?php echo $sStyleReadInp_descripcion; ?>">
 <input class="sc-js-input scFormObjectOdd css_descripcion_obj" style="" id="id_sc_field_descripcion" type=text name="descripcion" value="<?php echo $this->form_encode_input($descripcion) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_descripcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_descripcion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['descripcion_detallada']))
    {
        $this->nm_new_label['descripcion_detallada'] = "Descripción Detallada";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $descripcion_detallada = $this->descripcion_detallada;
   $sStyleHidden_descripcion_detallada = '';
   if (isset($this->nmgp_cmp_hidden['descripcion_detallada']) && $this->nmgp_cmp_hidden['descripcion_detallada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['descripcion_detallada']);
       $sStyleHidden_descripcion_detallada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_descripcion_detallada = 'display: none;';
   $sStyleReadInp_descripcion_detallada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['descripcion_detallada']) && $this->nmgp_cmp_readonly['descripcion_detallada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['descripcion_detallada']);
       $sStyleReadLab_descripcion_detallada = '';
       $sStyleReadInp_descripcion_detallada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['descripcion_detallada']) && $this->nmgp_cmp_hidden['descripcion_detallada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="descripcion_detallada" value="<?php echo $this->form_encode_input($descripcion_detallada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_descripcion_detallada_line" id="hidden_field_data_descripcion_detallada" style="<?php echo $sStyleHidden_descripcion_detallada; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_descripcion_detallada_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_descripcion_detallada_label"><span id="id_label_descripcion_detallada"><?php echo $this->nm_new_label['descripcion_detallada']; ?></span></span><br><span id="id_read_on_descripcion_detallada" style="<?php echo $sStyleReadLab_descripcion_detallada; ?>"><?php echo sc_strip_script($this->descripcion_detallada); ?></span><span id="id_read_off_descripcion_detallada" style="<?php echo $sStyleReadInp_descripcion_detallada; ?>"><textarea id="descripcion_detallada" name="descripcion_detallada" cols="50" rows="10" class="mceEditor_descripcion_detallada" style="width: 100%; height:200px;"><?php echo $this->form_encode_input($this->descripcion_detallada); ?></textarea>
</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_descripcion_detallada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_descripcion_detallada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['especialidad_id']))
   {
       $this->nm_new_label['especialidad_id'] = "Especialidad";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $especialidad_id = $this->especialidad_id;
   $sStyleHidden_especialidad_id = '';
   if (isset($this->nmgp_cmp_hidden['especialidad_id']) && $this->nmgp_cmp_hidden['especialidad_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['especialidad_id']);
       $sStyleHidden_especialidad_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_especialidad_id = 'display: none;';
   $sStyleReadInp_especialidad_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['especialidad_id']) && $this->nmgp_cmp_readonly['especialidad_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['especialidad_id']);
       $sStyleReadLab_especialidad_id = '';
       $sStyleReadInp_especialidad_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['especialidad_id']) && $this->nmgp_cmp_hidden['especialidad_id'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="especialidad_id" value="<?php echo $this->form_encode_input($this->especialidad_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_especialidad_id_line" id="hidden_field_data_especialidad_id" style="<?php echo $sStyleHidden_especialidad_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_especialidad_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_especialidad_id_label"><span id="id_label_especialidad_id"><?php echo $this->nm_new_label['especialidad_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["especialidad_id"]) &&  $this->nmgp_cmp_readonly["especialidad_id"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id'] = array(); 
    }

   $old_value_asignatura_id = $this->asignatura_id;
   $this->nm_tira_formatacao();


   $unformatted_value_asignatura_id = $this->asignatura_id;

   $nm_comando = "SELECT especialidad_id, descripcion  FROM especialidades WHERE colegio_id = " . $_SESSION['vglo_colegio'] . " ORDER BY descripcion";

   $this->asignatura_id = $old_value_asignatura_id;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_especialidad_id'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $especialidad_id_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->especialidad_id_1))
          {
              foreach ($this->especialidad_id_1 as $tmp_especialidad_id)
              {
                  if (trim($tmp_especialidad_id) === trim($cadaselect[1])) { $especialidad_id_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->especialidad_id) === trim($cadaselect[1])) { $especialidad_id_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="especialidad_id" value="<?php echo $this->form_encode_input($especialidad_id) . "\">" . $especialidad_id_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_especialidad_id();
   $x = 0 ; 
   $especialidad_id_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->especialidad_id_1))
          {
              foreach ($this->especialidad_id_1 as $tmp_especialidad_id)
              {
                  if (trim($tmp_especialidad_id) === trim($cadaselect[1])) { $especialidad_id_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->especialidad_id) === trim($cadaselect[1])) { $especialidad_id_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($especialidad_id_look))
          {
              $especialidad_id_look = $this->especialidad_id;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_especialidad_id\" class=\"css_especialidad_id_line\" style=\"" .  $sStyleReadLab_especialidad_id . "\">" . $this->form_encode_input($especialidad_id_look) . "</span><span id=\"id_read_off_especialidad_id\" style=\"" . $sStyleReadInp_especialidad_id . "\">";
   echo " <span id=\"idAjaxSelect_especialidad_id\"><select class=\"sc-js-input scFormObjectOdd css_especialidad_id_obj\" style=\"\" id=\"id_sc_field_especialidad_id\" name=\"especialidad_id\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->especialidad_id) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->especialidad_id)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_especialidad_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_especialidad_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['reportar_gobierno']))
   {
       $this->nm_new_label['reportar_gobierno'] = "Reportar Gobierno";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $reportar_gobierno = $this->reportar_gobierno;
   $sStyleHidden_reportar_gobierno = '';
   if (isset($this->nmgp_cmp_hidden['reportar_gobierno']) && $this->nmgp_cmp_hidden['reportar_gobierno'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['reportar_gobierno']);
       $sStyleHidden_reportar_gobierno = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_reportar_gobierno = 'display: none;';
   $sStyleReadInp_reportar_gobierno = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['reportar_gobierno']) && $this->nmgp_cmp_readonly['reportar_gobierno'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['reportar_gobierno']);
       $sStyleReadLab_reportar_gobierno = '';
       $sStyleReadInp_reportar_gobierno = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['reportar_gobierno']) && $this->nmgp_cmp_hidden['reportar_gobierno'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="reportar_gobierno" value="<?php echo $this->form_encode_input($this->reportar_gobierno) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->reportar_gobierno_1 = explode(";", trim($this->reportar_gobierno));
  } 
  else
  {
      if (empty($this->reportar_gobierno))
      {
          $this->reportar_gobierno_1= array(); 
          $this->reportar_gobierno= "0";
      } 
      else
      {
          $this->reportar_gobierno_1= $this->reportar_gobierno; 
          $this->reportar_gobierno= ""; 
          foreach ($this->reportar_gobierno_1 as $cada_reportar_gobierno)
          {
             if (!empty($reportar_gobierno))
             {
                 $this->reportar_gobierno.= ";"; 
             } 
             $this->reportar_gobierno.= $cada_reportar_gobierno; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_reportar_gobierno_line" id="hidden_field_data_reportar_gobierno" style="<?php echo $sStyleHidden_reportar_gobierno; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_reportar_gobierno_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_reportar_gobierno_label"><span id="id_label_reportar_gobierno"><?php echo $this->nm_new_label['reportar_gobierno']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["reportar_gobierno"]) &&  $this->nmgp_cmp_readonly["reportar_gobierno"] == "on") { 

$reportar_gobierno_look = "";
 if ($this->reportar_gobierno == "1") { $reportar_gobierno_look .= " " ;} 
 if (empty($reportar_gobierno_look)) { $reportar_gobierno_look = $this->reportar_gobierno; }
?>
<input type="hidden" name="reportar_gobierno" value="<?php echo $this->form_encode_input($reportar_gobierno) . "\">" . $reportar_gobierno_look . ""; ?>
<?php } else { ?>

<?php

$reportar_gobierno_look = "";
 if ($this->reportar_gobierno == "1") { $reportar_gobierno_look .= " " ;} 
 if (empty($reportar_gobierno_look)) { $reportar_gobierno_look = $this->reportar_gobierno; }
?>
<span id="id_read_on_reportar_gobierno" class="css_reportar_gobierno_line" style="<?php echo $sStyleReadLab_reportar_gobierno; ?>"><?php echo $this->form_encode_input($reportar_gobierno_look); ?></span><span id="id_read_off_reportar_gobierno" class="css_reportar_gobierno_line" style="<?php echo $sStyleReadInp_reportar_gobierno; ?>"><?php echo "<div id=\"idAjaxCheckbox_reportar_gobierno\" style=\"display: inline-block\" class=\"css_reportar_gobierno_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_reportar_gobierno_line"><?php $tempOptionId = "id-opt-reportar_gobierno" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-reportar_gobierno sc-ui-checkbox-reportar_gobierno" name="reportar_gobierno[]" value="1"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_reportar_gobierno'][] = '1'; ?>
<?php  if (in_array("1", $this->reportar_gobierno_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"> </label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_reportar_gobierno_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_reportar_gobierno_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['tipo_calificacion_id']))
   {
       $this->nm_new_label['tipo_calificacion_id'] = "Tipo Calificación ";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipo_calificacion_id = $this->tipo_calificacion_id;
   $sStyleHidden_tipo_calificacion_id = '';
   if (isset($this->nmgp_cmp_hidden['tipo_calificacion_id']) && $this->nmgp_cmp_hidden['tipo_calificacion_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipo_calificacion_id']);
       $sStyleHidden_tipo_calificacion_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipo_calificacion_id = 'display: none;';
   $sStyleReadInp_tipo_calificacion_id = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipo_calificacion_id']) && $this->nmgp_cmp_readonly['tipo_calificacion_id'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipo_calificacion_id']);
       $sStyleReadLab_tipo_calificacion_id = '';
       $sStyleReadInp_tipo_calificacion_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipo_calificacion_id']) && $this->nmgp_cmp_hidden['tipo_calificacion_id'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="tipo_calificacion_id" value="<?php echo $this->form_encode_input($this->tipo_calificacion_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipo_calificacion_id_line" id="hidden_field_data_tipo_calificacion_id" style="<?php echo $sStyleHidden_tipo_calificacion_id; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tipo_calificacion_id_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipo_calificacion_id_label"><span id="id_label_tipo_calificacion_id"><?php echo $this->nm_new_label['tipo_calificacion_id']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo_calificacion_id"]) &&  $this->nmgp_cmp_readonly["tipo_calificacion_id"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id'] = array(); 
    }

   $old_value_asignatura_id = $this->asignatura_id;
   $this->nm_tira_formatacao();


   $unformatted_value_asignatura_id = $this->asignatura_id;

   $nm_comando = "SELECT tipo_calificacion_id, descripcion  FROM tipo_calificaciones WHERE colegio_id = " . $_SESSION['vglo_colegio'] . " ORDER BY descripcion";

   $this->asignatura_id = $old_value_asignatura_id;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['Lookup_tipo_calificacion_id'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $tipo_calificacion_id_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tipo_calificacion_id_1))
          {
              foreach ($this->tipo_calificacion_id_1 as $tmp_tipo_calificacion_id)
              {
                  if (trim($tmp_tipo_calificacion_id) === trim($cadaselect[1])) { $tipo_calificacion_id_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tipo_calificacion_id) === trim($cadaselect[1])) { $tipo_calificacion_id_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="tipo_calificacion_id" value="<?php echo $this->form_encode_input($tipo_calificacion_id) . "\">" . $tipo_calificacion_id_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_tipo_calificacion_id();
   $x = 0 ; 
   $tipo_calificacion_id_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tipo_calificacion_id_1))
          {
              foreach ($this->tipo_calificacion_id_1 as $tmp_tipo_calificacion_id)
              {
                  if (trim($tmp_tipo_calificacion_id) === trim($cadaselect[1])) { $tipo_calificacion_id_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->tipo_calificacion_id) === trim($cadaselect[1])) { $tipo_calificacion_id_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($tipo_calificacion_id_look))
          {
              $tipo_calificacion_id_look = $this->tipo_calificacion_id;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_tipo_calificacion_id\" class=\"css_tipo_calificacion_id_line\" style=\"" .  $sStyleReadLab_tipo_calificacion_id . "\">" . $this->form_encode_input($tipo_calificacion_id_look) . "</span><span id=\"id_read_off_tipo_calificacion_id\" style=\"" . $sStyleReadInp_tipo_calificacion_id . "\">";
   echo " <span id=\"idAjaxSelect_tipo_calificacion_id\"><select class=\"sc-js-input scFormObjectOdd css_tipo_calificacion_id_obj\" style=\"\" id=\"id_sc_field_tipo_calificacion_id\" name=\"tipo_calificacion_id\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->tipo_calificacion_id) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->tipo_calificacion_id)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_calificacion_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_calificacion_id_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8592;)", "sc-unique-btn-29", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8592;)", "sc-unique-btn-30", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "sc-unique-btn-31", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "sc-unique-btn-32", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "sc-unique-btn-33", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "sc-unique-btn-34", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8594;)", "sc-unique-btn-35", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8594;)", "sc-unique-btn-36", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_asignaturas_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_asignaturas_mob");
 parent.scAjaxDetailHeight("form_asignaturas_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_asignaturas_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_asignaturas_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
?>
<script type="text/javascript">
_scAjaxShowMessage(scMsgDefTitle, "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", false, sc_ajaxMsgTime, false, "Ok", 0, 0, 0, 0, "", "", "", false, true);
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_asignaturas_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-19").length && $("#sc_b_new_t.sc-unique-btn-19").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-20").length && $("#sc_b_ins_t.sc-unique-btn-20").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-21").length && $("#sc_b_sai_t.sc-unique-btn-21").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-22").length && $("#sc_b_upd_t.sc-unique-btn-22").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-23").length && $("#sc_b_del_t.sc-unique-btn-23").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-24").length && $("#sc_b_sai_t.sc-unique-btn-24").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-25").length && $("#sc_b_sai_t.sc-unique-btn-25").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-26").length && $("#sc_b_sai_t.sc-unique-btn-26").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-27").length && $("#sc_b_sai_t.sc-unique-btn-27").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-28").length && $("#sc_b_sai_t.sc-unique-btn-28").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
		if ($("#sc_b_ini_off_b.sc-unique-btn-12").length && $("#sc_b_ini_off_b.sc-unique-btn-12").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-29").length && $("#sc_b_ini_b.sc-unique-btn-29").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
		if ($("#sc_b_ini_off_b.sc-unique-btn-30").length && $("#sc_b_ini_off_b.sc-unique-btn-30").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-13").length && $("#sc_b_ret_b.sc-unique-btn-13").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_off_b.sc-unique-btn-14").length && $("#sc_b_ret_off_b.sc-unique-btn-14").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-31").length && $("#sc_b_ret_b.sc-unique-btn-31").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_off_b.sc-unique-btn-32").length && $("#sc_b_ret_off_b.sc-unique-btn-32").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-15").length && $("#sc_b_avc_b.sc-unique-btn-15").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_off_b.sc-unique-btn-16").length && $("#sc_b_avc_off_b.sc-unique-btn-16").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-33").length && $("#sc_b_avc_b.sc-unique-btn-33").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_off_b.sc-unique-btn-34").length && $("#sc_b_avc_off_b.sc-unique-btn-34").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-17").length && $("#sc_b_fim_b.sc-unique-btn-17").is(":visible")) {
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_off_b.sc-unique-btn-18").length && $("#sc_b_fim_off_b.sc-unique-btn-18").is(":visible")) {
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-35").length && $("#sc_b_fim_b.sc-unique-btn-35").is(":visible")) {
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_off_b.sc-unique-btn-36").length && $("#sc_b_fim_off_b.sc-unique-btn-36").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
