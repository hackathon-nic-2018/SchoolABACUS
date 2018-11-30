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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " colegios"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " colegios"); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_colegio/form_colegio_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_colegio_sajax_js.php");
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
<?php

include_once('form_colegio_jquery.php');

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
   });
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
    if ("hidden_bloco_3" == block_id) {
      scAjaxDetailHeight("form_especialidades", $($("#nmsc_iframe_liga_form_especialidades")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_4" == block_id) {
      scAjaxDetailHeight("form_estatus_periodos", $($("#nmsc_iframe_liga_form_estatus_periodos")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_5" == block_id) {
      scAjaxDetailHeight("form_tipo_periodo", $($("#nmsc_iframe_liga_form_tipo_periodo")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_6" == block_id) {
      scAjaxDetailHeight("form_estatus_estudiantes", $($("#nmsc_iframe_liga_form_estatus_estudiantes")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_7" == block_id) {
      scAjaxDetailHeight("form_tipo_grados", $($("#nmsc_iframe_liga_form_tipo_grados")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_8" == block_id) {
      scAjaxDetailHeight("form_turnos", $($("#nmsc_iframe_liga_form_turnos")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_9" == block_id) {
      scAjaxDetailHeight("form_estatus_docentes", $($("#nmsc_iframe_liga_form_estatus_docentes")[0].contentWindow.document).innerHeight());
    }
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['recarga'];
}
?>
<body class="scFormPage" style="<?php echo $str_iframe_body; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
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
 include_once("form_colegio_js0.php");
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
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['insert_validation']; ?>">
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
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="logo_salva" value="<?php  echo $this->form_encode_input($this->logo) ?>">
<input type="hidden" name="fondo_salva" value="<?php  echo $this->form_encode_input($this->fondo) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_colegio'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_colegio'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "sc-unique-btn-1", "", "");?>
 
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
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "sc-unique-btn-2", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-3", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "sc-unique-btn-4", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="200px" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><script type="text/javascript">
function sc_change_tabs(bTabDisp, sTabId, sTabParts)
{
  if (document.getElementById(sTabId)) {
    if (bTabDisp) {
      document.getElementById("div_" + sTabId).style.width = "";
      document.getElementById("div_" + sTabId).style.height = "";
      document.getElementById("div_" + sTabId).style.display = "";
      document.getElementById("div_" + sTabId).style.overflow = "visible";
      document.getElementById(sTabParts).className = "scTabActive";
    }
    else {
      document.getElementById("div_" + sTabId).style.width = "1px";
      document.getElementById("div_" + sTabId).style.height = "0px";
      document.getElementById("div_" + sTabId).style.display = "none";
      document.getElementById("div_" + sTabId).style.overflow = "scroll";
      document.getElementById(sTabParts).className = "scTabInactive";
    }
  }
}
</script>
<input type="hidden" name="fondo_ul_name" id="id_sc_field_fondo_ul_name" value="<?php echo $this->form_encode_input($this->fondo_ul_name);?>">
<input type="hidden" name="fondo_ul_type" id="id_sc_field_fondo_ul_type" value="<?php echo $this->form_encode_input($this->fondo_ul_type);?>">
<input type="hidden" name="logo_ul_name" id="id_sc_field_logo_ul_name" value="<?php echo $this->form_encode_input($this->logo_ul_name);?>">
<input type="hidden" name="logo_ul_type" id="id_sc_field_logo_ul_type" value="<?php echo $this->form_encode_input($this->logo_ul_type);?>">
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['logo']))
    {
        $this->nm_new_label['logo'] = "Logo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $logo = $this->logo;
   $sStyleHidden_logo = '';
   if (isset($this->nmgp_cmp_hidden['logo']) && $this->nmgp_cmp_hidden['logo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['logo']);
       $sStyleHidden_logo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_logo = 'display: none;';
   $sStyleReadInp_logo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['logo']) && $this->nmgp_cmp_readonly['logo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['logo']);
       $sStyleReadLab_logo = '';
       $sStyleReadInp_logo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['logo']) && $this->nmgp_cmp_hidden['logo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="logo" value="<?php echo $this->form_encode_input($logo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_logo_line" id="hidden_field_data_logo" style="<?php echo $sStyleHidden_logo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_logo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_logo_label"><span id="id_label_logo"><?php echo $this->nm_new_label['logo']; ?></span></span><br>
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_logo" => $out1_logo); ?><script>var var_ajax_img_logo = '<?php echo $out1_logo; ?>';</script><?php if (!empty($out_logo)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_logo, '" . $this->nmgp_return_img['logo'][0] . "', '" . $this->nmgp_return_img['logo'][1] . "')\"><img id=\"id_ajax_img_logo\" border=\"0\" src=\"$out_logo\"></a> &nbsp;" . "<span id=\"txt_ajax_img_logo\" style=\"display: none\">" . $logo . "</span>"; if (!empty($logo)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_logo\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_logo\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["logo"]) &&  $this->nmgp_cmp_readonly["logo"] == "on") { 

 ?>
<img id=\"logo_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="logo" value="<?php echo $this->form_encode_input($logo) . "\">" . $logo . ""; ?>
<?php } else { ?>
<span id="id_read_off_logo" style="white-space: nowrap;<?php echo $sStyleReadInp_logo; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-logo" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_logo_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="logo[]" id="id_sc_field_logo" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_logo"<?php if ($this->nmgp_opcao == "novo" || empty($logo)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="logo_limpa" value="<?php echo $logo_limpa . '" '; if ($logo_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="logo_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_sc_dragdrop_logo" class="scFormDataDragNDrop"><?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
<div id="id_img_loader_logo" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_logo" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_logo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_logo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_logo_dumb = ('' == $sStyleHidden_logo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_logo_dumb" style="<?php echo $sStyleHidden_logo_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="100%" height="">
   <a name="bloco_1"></a>
<script type="text/javascript">
function sc_control_tabs_1(iTabIndex)
{
  sc_change_tabs(iTabIndex == 1, 'hidden_bloco_1', 'id_tabs_1_1');
  sc_change_tabs(iTabIndex == 2, 'hidden_bloco_2', 'id_tabs_1_2');
}
</script>
<ul class="scTabLine">
<li id="id_tabs_1_1" class="scTabActive"><a href="javascript: sc_control_tabs_1(1)">Información General</a></li>
<li id="id_tabs_1_2" class="scTabInactive"><a href="javascript: sc_control_tabs_1(2)">Fondo</a></li>
</ul>
<div style='clear:both'></div>
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['colegio_nombre']))
    {
        $this->nm_new_label['colegio_nombre'] = "Nombre del Colegio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $colegio_nombre = $this->colegio_nombre;
   $sStyleHidden_colegio_nombre = '';
   if (isset($this->nmgp_cmp_hidden['colegio_nombre']) && $this->nmgp_cmp_hidden['colegio_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['colegio_nombre']);
       $sStyleHidden_colegio_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_colegio_nombre = 'display: none;';
   $sStyleReadInp_colegio_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['colegio_nombre']) && $this->nmgp_cmp_readonly['colegio_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['colegio_nombre']);
       $sStyleReadLab_colegio_nombre = '';
       $sStyleReadInp_colegio_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['colegio_nombre']) && $this->nmgp_cmp_hidden['colegio_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="colegio_nombre" value="<?php echo $this->form_encode_input($colegio_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_colegio_nombre_label" id="hidden_field_label_colegio_nombre" style="<?php echo $sStyleHidden_colegio_nombre; ?>"><span id="id_label_colegio_nombre"><?php echo $this->nm_new_label['colegio_nombre']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['colegio_nombre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['colegio_nombre'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_colegio_nombre_line" id="hidden_field_data_colegio_nombre" style="<?php echo $sStyleHidden_colegio_nombre; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_colegio_nombre_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["colegio_nombre"]) &&  $this->nmgp_cmp_readonly["colegio_nombre"] == "on") { 

 ?>
<input type="hidden" name="colegio_nombre" value="<?php echo $this->form_encode_input($colegio_nombre) . "\">" . $colegio_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_colegio_nombre" class="sc-ui-readonly-colegio_nombre css_colegio_nombre_line" style="<?php echo $sStyleReadLab_colegio_nombre; ?>"><?php echo $this->form_encode_input($this->colegio_nombre); ?></span><span id="id_read_off_colegio_nombre" style="white-space: nowrap;<?php echo $sStyleReadInp_colegio_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_colegio_nombre_obj" style="" id="id_sc_field_colegio_nombre" type=text name="colegio_nombre" value="<?php echo $this->form_encode_input($colegio_nombre) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'words', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_colegio_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_colegio_nombre_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pais']))
    {
        $this->nm_new_label['pais'] = "País";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pais = $this->pais;
   $sStyleHidden_pais = '';
   if (isset($this->nmgp_cmp_hidden['pais']) && $this->nmgp_cmp_hidden['pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pais']);
       $sStyleHidden_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pais = 'display: none;';
   $sStyleReadInp_pais = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pais']) && $this->nmgp_cmp_readonly['pais'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pais']);
       $sStyleReadLab_pais = '';
       $sStyleReadInp_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pais']) && $this->nmgp_cmp_hidden['pais'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pais" value="<?php echo $this->form_encode_input($pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_pais_label" id="hidden_field_label_pais" style="<?php echo $sStyleHidden_pais; ?>"><span id="id_label_pais"><?php echo $this->nm_new_label['pais']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['pais']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['pais'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_pais_line" id="hidden_field_data_pais" style="<?php echo $sStyleHidden_pais; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pais_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pais"]) &&  $this->nmgp_cmp_readonly["pais"] == "on") { 

 ?>
<input type="hidden" name="pais" value="<?php echo $this->form_encode_input($pais) . "\">" . $pais . ""; ?>
<?php } else { ?>
<span id="id_read_on_pais" class="sc-ui-readonly-pais css_pais_line" style="<?php echo $sStyleReadLab_pais; ?>"><?php echo $this->form_encode_input($this->pais); ?></span><span id="id_read_off_pais" style="white-space: nowrap;<?php echo $sStyleReadInp_pais; ?>">
 <input class="sc-js-input scFormObjectOdd css_pais_obj" style="" id="id_sc_field_pais" type=text name="pais" value="<?php echo $this->form_encode_input($pais) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'words', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pais_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['region']))
    {
        $this->nm_new_label['region'] = "Región";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $region = $this->region;
   $sStyleHidden_region = '';
   if (isset($this->nmgp_cmp_hidden['region']) && $this->nmgp_cmp_hidden['region'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['region']);
       $sStyleHidden_region = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_region = 'display: none;';
   $sStyleReadInp_region = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['region']) && $this->nmgp_cmp_readonly['region'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['region']);
       $sStyleReadLab_region = '';
       $sStyleReadInp_region = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['region']) && $this->nmgp_cmp_hidden['region'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="region" value="<?php echo $this->form_encode_input($region) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_region_label" id="hidden_field_label_region" style="<?php echo $sStyleHidden_region; ?>"><span id="id_label_region"><?php echo $this->nm_new_label['region']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['region']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['region'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_region_line" id="hidden_field_data_region" style="<?php echo $sStyleHidden_region; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_region_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["region"]) &&  $this->nmgp_cmp_readonly["region"] == "on") { 

 ?>
<input type="hidden" name="region" value="<?php echo $this->form_encode_input($region) . "\">" . $region . ""; ?>
<?php } else { ?>
<span id="id_read_on_region" class="sc-ui-readonly-region css_region_line" style="<?php echo $sStyleReadLab_region; ?>"><?php echo $this->form_encode_input($this->region); ?></span><span id="id_read_off_region" style="white-space: nowrap;<?php echo $sStyleReadInp_region; ?>">
 <input class="sc-js-input scFormObjectOdd css_region_obj" style="" id="id_sc_field_region" type=text name="region" value="<?php echo $this->form_encode_input($region) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'words', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_region_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_region_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['departamento']))
    {
        $this->nm_new_label['departamento'] = "Departamento";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $departamento = $this->departamento;
   $sStyleHidden_departamento = '';
   if (isset($this->nmgp_cmp_hidden['departamento']) && $this->nmgp_cmp_hidden['departamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['departamento']);
       $sStyleHidden_departamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_departamento = 'display: none;';
   $sStyleReadInp_departamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['departamento']) && $this->nmgp_cmp_readonly['departamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['departamento']);
       $sStyleReadLab_departamento = '';
       $sStyleReadInp_departamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['departamento']) && $this->nmgp_cmp_hidden['departamento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="departamento" value="<?php echo $this->form_encode_input($departamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_departamento_label" id="hidden_field_label_departamento" style="<?php echo $sStyleHidden_departamento; ?>"><span id="id_label_departamento"><?php echo $this->nm_new_label['departamento']; ?></span></TD>
    <TD class="scFormDataOdd css_departamento_line" id="hidden_field_data_departamento" style="<?php echo $sStyleHidden_departamento; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_departamento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["departamento"]) &&  $this->nmgp_cmp_readonly["departamento"] == "on") { 

 ?>
<input type="hidden" name="departamento" value="<?php echo $this->form_encode_input($departamento) . "\">" . $departamento . ""; ?>
<?php } else { ?>
<span id="id_read_on_departamento" class="sc-ui-readonly-departamento css_departamento_line" style="<?php echo $sStyleReadLab_departamento; ?>"><?php echo $this->form_encode_input($this->departamento); ?></span><span id="id_read_off_departamento" style="white-space: nowrap;<?php echo $sStyleReadInp_departamento; ?>">
 <input class="sc-js-input scFormObjectOdd css_departamento_obj" style="" id="id_sc_field_departamento" type=text name="departamento" value="<?php echo $this->form_encode_input($departamento) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'words', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_departamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_departamento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ciudad']))
    {
        $this->nm_new_label['ciudad'] = "Ciudad";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ciudad = $this->ciudad;
   $sStyleHidden_ciudad = '';
   if (isset($this->nmgp_cmp_hidden['ciudad']) && $this->nmgp_cmp_hidden['ciudad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ciudad']);
       $sStyleHidden_ciudad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ciudad = 'display: none;';
   $sStyleReadInp_ciudad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ciudad']) && $this->nmgp_cmp_readonly['ciudad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ciudad']);
       $sStyleReadLab_ciudad = '';
       $sStyleReadInp_ciudad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ciudad']) && $this->nmgp_cmp_hidden['ciudad'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ciudad" value="<?php echo $this->form_encode_input($ciudad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ciudad_label" id="hidden_field_label_ciudad" style="<?php echo $sStyleHidden_ciudad; ?>"><span id="id_label_ciudad"><?php echo $this->nm_new_label['ciudad']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['ciudad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['ciudad'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_ciudad_line" id="hidden_field_data_ciudad" style="<?php echo $sStyleHidden_ciudad; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ciudad_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ciudad"]) &&  $this->nmgp_cmp_readonly["ciudad"] == "on") { 

 ?>
<input type="hidden" name="ciudad" value="<?php echo $this->form_encode_input($ciudad) . "\">" . $ciudad . ""; ?>
<?php } else { ?>
<span id="id_read_on_ciudad" class="sc-ui-readonly-ciudad css_ciudad_line" style="<?php echo $sStyleReadLab_ciudad; ?>"><?php echo $this->form_encode_input($this->ciudad); ?></span><span id="id_read_off_ciudad" style="white-space: nowrap;<?php echo $sStyleReadInp_ciudad; ?>">
 <input class="sc-js-input scFormObjectOdd css_ciudad_obj" style="" id="id_sc_field_ciudad" type=text name="ciudad" value="<?php echo $this->form_encode_input($ciudad) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'words', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ciudad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ciudad_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['municipio']))
    {
        $this->nm_new_label['municipio'] = "Municipio";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $municipio = $this->municipio;
   $sStyleHidden_municipio = '';
   if (isset($this->nmgp_cmp_hidden['municipio']) && $this->nmgp_cmp_hidden['municipio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['municipio']);
       $sStyleHidden_municipio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_municipio = 'display: none;';
   $sStyleReadInp_municipio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['municipio']) && $this->nmgp_cmp_readonly['municipio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['municipio']);
       $sStyleReadLab_municipio = '';
       $sStyleReadInp_municipio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['municipio']) && $this->nmgp_cmp_hidden['municipio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="municipio" value="<?php echo $this->form_encode_input($municipio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_municipio_label" id="hidden_field_label_municipio" style="<?php echo $sStyleHidden_municipio; ?>"><span id="id_label_municipio"><?php echo $this->nm_new_label['municipio']; ?></span></TD>
    <TD class="scFormDataOdd css_municipio_line" id="hidden_field_data_municipio" style="<?php echo $sStyleHidden_municipio; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_municipio_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["municipio"]) &&  $this->nmgp_cmp_readonly["municipio"] == "on") { 

 ?>
<input type="hidden" name="municipio" value="<?php echo $this->form_encode_input($municipio) . "\">" . $municipio . ""; ?>
<?php } else { ?>
<span id="id_read_on_municipio" class="sc-ui-readonly-municipio css_municipio_line" style="<?php echo $sStyleReadLab_municipio; ?>"><?php echo $this->form_encode_input($this->municipio); ?></span><span id="id_read_off_municipio" style="white-space: nowrap;<?php echo $sStyleReadInp_municipio; ?>">
 <input class="sc-js-input scFormObjectOdd css_municipio_obj" style="" id="id_sc_field_municipio" type=text name="municipio" value="<?php echo $this->form_encode_input($municipio) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'words', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_municipio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_municipio_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['direccion_linea1']))
    {
        $this->nm_new_label['direccion_linea1'] = "Direccion Linea 1";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion_linea1 = $this->direccion_linea1;
   $sStyleHidden_direccion_linea1 = '';
   if (isset($this->nmgp_cmp_hidden['direccion_linea1']) && $this->nmgp_cmp_hidden['direccion_linea1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion_linea1']);
       $sStyleHidden_direccion_linea1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion_linea1 = 'display: none;';
   $sStyleReadInp_direccion_linea1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion_linea1']) && $this->nmgp_cmp_readonly['direccion_linea1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion_linea1']);
       $sStyleReadLab_direccion_linea1 = '';
       $sStyleReadInp_direccion_linea1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion_linea1']) && $this->nmgp_cmp_hidden['direccion_linea1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="direccion_linea1" value="<?php echo $this->form_encode_input($direccion_linea1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_direccion_linea1_label" id="hidden_field_label_direccion_linea1" style="<?php echo $sStyleHidden_direccion_linea1; ?>"><span id="id_label_direccion_linea1"><?php echo $this->nm_new_label['direccion_linea1']; ?></span></TD>
    <TD class="scFormDataOdd css_direccion_linea1_line" id="hidden_field_data_direccion_linea1" style="<?php echo $sStyleHidden_direccion_linea1; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_direccion_linea1_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion_linea1"]) &&  $this->nmgp_cmp_readonly["direccion_linea1"] == "on") { 

 ?>
<input type="hidden" name="direccion_linea1" value="<?php echo $this->form_encode_input($direccion_linea1) . "\">" . $direccion_linea1 . ""; ?>
<?php } else { ?>
<span id="id_read_on_direccion_linea1" class="sc-ui-readonly-direccion_linea1 css_direccion_linea1_line" style="<?php echo $sStyleReadLab_direccion_linea1; ?>"><?php echo $this->form_encode_input($this->direccion_linea1); ?></span><span id="id_read_off_direccion_linea1" style="white-space: nowrap;<?php echo $sStyleReadInp_direccion_linea1; ?>">
 <input class="sc-js-input scFormObjectOdd css_direccion_linea1_obj" style="" id="id_sc_field_direccion_linea1" type=text name="direccion_linea1" value="<?php echo $this->form_encode_input($direccion_linea1) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_linea1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_linea1_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['direccion_linea2']))
    {
        $this->nm_new_label['direccion_linea2'] = "Direccion Linea 2";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $direccion_linea2 = $this->direccion_linea2;
   $sStyleHidden_direccion_linea2 = '';
   if (isset($this->nmgp_cmp_hidden['direccion_linea2']) && $this->nmgp_cmp_hidden['direccion_linea2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['direccion_linea2']);
       $sStyleHidden_direccion_linea2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_direccion_linea2 = 'display: none;';
   $sStyleReadInp_direccion_linea2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['direccion_linea2']) && $this->nmgp_cmp_readonly['direccion_linea2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['direccion_linea2']);
       $sStyleReadLab_direccion_linea2 = '';
       $sStyleReadInp_direccion_linea2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['direccion_linea2']) && $this->nmgp_cmp_hidden['direccion_linea2'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="direccion_linea2" value="<?php echo $this->form_encode_input($direccion_linea2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_direccion_linea2_label" id="hidden_field_label_direccion_linea2" style="<?php echo $sStyleHidden_direccion_linea2; ?>"><span id="id_label_direccion_linea2"><?php echo $this->nm_new_label['direccion_linea2']; ?></span></TD>
    <TD class="scFormDataOdd css_direccion_linea2_line" id="hidden_field_data_direccion_linea2" style="<?php echo $sStyleHidden_direccion_linea2; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_direccion_linea2_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["direccion_linea2"]) &&  $this->nmgp_cmp_readonly["direccion_linea2"] == "on") { 

 ?>
<input type="hidden" name="direccion_linea2" value="<?php echo $this->form_encode_input($direccion_linea2) . "\">" . $direccion_linea2 . ""; ?>
<?php } else { ?>
<span id="id_read_on_direccion_linea2" class="sc-ui-readonly-direccion_linea2 css_direccion_linea2_line" style="<?php echo $sStyleReadLab_direccion_linea2; ?>"><?php echo $this->form_encode_input($this->direccion_linea2); ?></span><span id="id_read_off_direccion_linea2" style="white-space: nowrap;<?php echo $sStyleReadInp_direccion_linea2; ?>">
 <input class="sc-js-input scFormObjectOdd css_direccion_linea2_obj" style="" id="id_sc_field_direccion_linea2" type=text name="direccion_linea2" value="<?php echo $this->form_encode_input($direccion_linea2) ?>"
 size=50 maxlength=250 alt="{datatype: 'text', maxLength: 250, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_direccion_linea2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_direccion_linea2_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['telefonos']))
    {
        $this->nm_new_label['telefonos'] = "Telefonos";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $telefonos = $this->telefonos;
   $sStyleHidden_telefonos = '';
   if (isset($this->nmgp_cmp_hidden['telefonos']) && $this->nmgp_cmp_hidden['telefonos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['telefonos']);
       $sStyleHidden_telefonos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_telefonos = 'display: none;';
   $sStyleReadInp_telefonos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['telefonos']) && $this->nmgp_cmp_readonly['telefonos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['telefonos']);
       $sStyleReadLab_telefonos = '';
       $sStyleReadInp_telefonos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['telefonos']) && $this->nmgp_cmp_hidden['telefonos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="telefonos" value="<?php echo $this->form_encode_input($telefonos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_telefonos_label" id="hidden_field_label_telefonos" style="<?php echo $sStyleHidden_telefonos; ?>"><span id="id_label_telefonos"><?php echo $this->nm_new_label['telefonos']; ?></span></TD>
    <TD class="scFormDataOdd css_telefonos_line" id="hidden_field_data_telefonos" style="<?php echo $sStyleHidden_telefonos; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_telefonos_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["telefonos"]) &&  $this->nmgp_cmp_readonly["telefonos"] == "on") { 

 ?>
<input type="hidden" name="telefonos" value="<?php echo $this->form_encode_input($telefonos) . "\">" . $telefonos . ""; ?>
<?php } else { ?>
<span id="id_read_on_telefonos" class="sc-ui-readonly-telefonos css_telefonos_line" style="<?php echo $sStyleReadLab_telefonos; ?>"><?php echo $this->form_encode_input($this->telefonos); ?></span><span id="id_read_off_telefonos" style="white-space: nowrap;<?php echo $sStyleReadInp_telefonos; ?>">
 <input class="sc-js-input scFormObjectOdd css_telefonos_obj" style="" id="id_sc_field_telefonos" type=text name="telefonos" value="<?php echo $this->form_encode_input($telefonos) ?>"
 size=50 maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_telefonos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_telefonos_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sitio_web']))
    {
        $this->nm_new_label['sitio_web'] = "Sitio Web";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sitio_web = $this->sitio_web;
   $sStyleHidden_sitio_web = '';
   if (isset($this->nmgp_cmp_hidden['sitio_web']) && $this->nmgp_cmp_hidden['sitio_web'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sitio_web']);
       $sStyleHidden_sitio_web = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sitio_web = 'display: none;';
   $sStyleReadInp_sitio_web = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sitio_web']) && $this->nmgp_cmp_readonly['sitio_web'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sitio_web']);
       $sStyleReadLab_sitio_web = '';
       $sStyleReadInp_sitio_web = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sitio_web']) && $this->nmgp_cmp_hidden['sitio_web'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sitio_web" value="<?php echo $this->form_encode_input($sitio_web) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sitio_web_label" id="hidden_field_label_sitio_web" style="<?php echo $sStyleHidden_sitio_web; ?>"><span id="id_label_sitio_web"><?php echo $this->nm_new_label['sitio_web']; ?></span></TD>
    <TD class="scFormDataOdd css_sitio_web_line" id="hidden_field_data_sitio_web" style="<?php echo $sStyleHidden_sitio_web; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sitio_web_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sitio_web"]) &&  $this->nmgp_cmp_readonly["sitio_web"] == "on") { 

 ?>
<input type="hidden" name="sitio_web" value="<?php echo $this->form_encode_input($sitio_web) . "\">" . $sitio_web . ""; ?>
<?php } else { ?>
<span id="id_read_on_sitio_web" class="sc-ui-readonly-sitio_web css_sitio_web_line" style="<?php echo $sStyleReadLab_sitio_web; ?>"><?php echo $this->form_encode_input($this->sitio_web); ?></span><span id="id_read_off_sitio_web" style="white-space: nowrap;<?php echo $sStyleReadInp_sitio_web; ?>">
 <input class="sc-js-input scFormObjectOdd css_sitio_web_obj" style="" id="id_sc_field_sitio_web" type=text name="sitio_web" value="<?php echo $this->form_encode_input($sitio_web) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sitio_web_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sitio_web_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['correo_oficial']))
    {
        $this->nm_new_label['correo_oficial'] = "Correo Oficial";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $correo_oficial = $this->correo_oficial;
   $sStyleHidden_correo_oficial = '';
   if (isset($this->nmgp_cmp_hidden['correo_oficial']) && $this->nmgp_cmp_hidden['correo_oficial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['correo_oficial']);
       $sStyleHidden_correo_oficial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_correo_oficial = 'display: none;';
   $sStyleReadInp_correo_oficial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['correo_oficial']) && $this->nmgp_cmp_readonly['correo_oficial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['correo_oficial']);
       $sStyleReadLab_correo_oficial = '';
       $sStyleReadInp_correo_oficial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['correo_oficial']) && $this->nmgp_cmp_hidden['correo_oficial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="correo_oficial" value="<?php echo $this->form_encode_input($correo_oficial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_correo_oficial_label" id="hidden_field_label_correo_oficial" style="<?php echo $sStyleHidden_correo_oficial; ?>"><span id="id_label_correo_oficial"><?php echo $this->nm_new_label['correo_oficial']; ?></span></TD>
    <TD class="scFormDataOdd css_correo_oficial_line" id="hidden_field_data_correo_oficial" style="<?php echo $sStyleHidden_correo_oficial; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_correo_oficial_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["correo_oficial"]) &&  $this->nmgp_cmp_readonly["correo_oficial"] == "on") { 

 ?>
<input type="hidden" name="correo_oficial" value="<?php echo $this->form_encode_input($correo_oficial) . "\">" . $correo_oficial . ""; ?>
<?php } else { ?>
<span id="id_read_on_correo_oficial" class="sc-ui-readonly-correo_oficial css_correo_oficial_line" style="<?php echo $sStyleReadLab_correo_oficial; ?>"><?php echo $this->form_encode_input($this->correo_oficial); ?></span><span id="id_read_off_correo_oficial" style="white-space: nowrap;<?php echo $sStyleReadInp_correo_oficial; ?>">
 <input class="sc-js-input scFormObjectOdd css_correo_oficial_obj" style="" id="id_sc_field_correo_oficial" type=text name="correo_oficial" value="<?php echo $this->form_encode_input($correo_oficial) ?>"
 size=50 maxlength=100 alt="{datatype: 'text', maxLength: 100, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_correo_oficial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_correo_oficial_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   <a name="bloco_2"></a>
<div id="div_hidden_bloco_2" style="display: none; width: 1px; height: 0px; overflow: scroll"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fondo']))
    {
        $this->nm_new_label['fondo'] = "Fondo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fondo = $this->fondo;
   $sStyleHidden_fondo = '';
   if (isset($this->nmgp_cmp_hidden['fondo']) && $this->nmgp_cmp_hidden['fondo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fondo']);
       $sStyleHidden_fondo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fondo = 'display: none;';
   $sStyleReadInp_fondo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fondo']) && $this->nmgp_cmp_readonly['fondo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fondo']);
       $sStyleReadLab_fondo = '';
       $sStyleReadInp_fondo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fondo']) && $this->nmgp_cmp_hidden['fondo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fondo" value="<?php echo $this->form_encode_input($fondo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_fondo_label" id="hidden_field_label_fondo" style="<?php echo $sStyleHidden_fondo; ?>"><span id="id_label_fondo"><?php echo $this->nm_new_label['fondo']; ?></span></TD>
    <TD class="scFormDataOdd css_fondo_line" id="hidden_field_data_fondo" style="<?php echo $sStyleHidden_fondo; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fondo_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_fondo" => $out1_fondo); ?><script>var var_ajax_img_fondo = '<?php echo $out1_fondo; ?>';</script><?php if (!empty($out_fondo)){ echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_fondo, '" . $this->nmgp_return_img['fondo'][0] . "', '" . $this->nmgp_return_img['fondo'][1] . "')\"><img id=\"id_ajax_img_fondo\" border=\"0\" src=\"$out_fondo\"></a> &nbsp;" . "<span id=\"txt_ajax_img_fondo\" style=\"display: none\">" . $fondo . "</span>"; if (!empty($fondo)){ echo "<br>";} } else { echo "<img id=\"id_ajax_img_fondo\" border=\"0\" style=\"display: none\"> &nbsp;<span id=\"txt_ajax_img_fondo\"></span><br />"; } ?>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fondo"]) &&  $this->nmgp_cmp_readonly["fondo"] == "on") { 

 ?>
<img id=\"fondo_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="fondo" value="<?php echo $this->form_encode_input($fondo) . "\">" . $fondo . ""; ?>
<?php } else { ?>
<span id="id_read_off_fondo" style="white-space: nowrap;<?php echo $sStyleReadInp_fondo; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-fondo" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_fondo_obj" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="fondo[]" id="id_sc_field_fondo" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<span id="chk_ajax_img_fondo"<?php if ($this->nmgp_opcao == "novo" || empty($fondo)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="fondo_limpa" value="<?php echo $fondo_limpa . '" '; if ($fondo_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="fondo_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_fondo" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_fondo" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fondo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fondo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['especialidades']))
    {
        $this->nm_new_label['especialidades'] = "Especialidades";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $especialidades = $this->especialidades;
   $sStyleHidden_especialidades = '';
   if (isset($this->nmgp_cmp_hidden['especialidades']) && $this->nmgp_cmp_hidden['especialidades'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['especialidades']);
       $sStyleHidden_especialidades = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_especialidades = 'display: none;';
   $sStyleReadInp_especialidades = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['especialidades']) && $this->nmgp_cmp_readonly['especialidades'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['especialidades']);
       $sStyleReadLab_especialidades = '';
       $sStyleReadInp_especialidades = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['especialidades']) && $this->nmgp_cmp_hidden['especialidades'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="especialidades" value="<?php echo $this->form_encode_input($especialidades) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_especialidades_line" id="hidden_field_data_especialidades" style="<?php echo $sStyleHidden_especialidades; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_especialidades_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_especialidades_label"><span id="id_label_especialidades"><?php echo $this->nm_new_label['especialidades']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_especialidades'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_especialidades'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_especialidades'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_colegio']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_colegio_empty.htm' : $this->Ini->link_form_especialidades_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_especialidades']) && 'nmsc_iframe_liga_form_especialidades' != $this->Ini->sc_lig_target['C_@scinf_especialidades'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_especialidades'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_especialidades'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_especialidades"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_especialidades"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_especialidades_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_especialidades_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_especialidades_dumb = ('' == $sStyleHidden_especialidades) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_especialidades_dumb" style="<?php echo $sStyleHidden_especialidades_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="50%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['estatus_periodo']))
    {
        $this->nm_new_label['estatus_periodo'] = "Estatus de Periodos";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estatus_periodo = $this->estatus_periodo;
   $sStyleHidden_estatus_periodo = '';
   if (isset($this->nmgp_cmp_hidden['estatus_periodo']) && $this->nmgp_cmp_hidden['estatus_periodo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estatus_periodo']);
       $sStyleHidden_estatus_periodo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estatus_periodo = 'display: none;';
   $sStyleReadInp_estatus_periodo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estatus_periodo']) && $this->nmgp_cmp_readonly['estatus_periodo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estatus_periodo']);
       $sStyleReadLab_estatus_periodo = '';
       $sStyleReadInp_estatus_periodo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estatus_periodo']) && $this->nmgp_cmp_hidden['estatus_periodo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="estatus_periodo" value="<?php echo $this->form_encode_input($estatus_periodo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estatus_periodo_line" id="hidden_field_data_estatus_periodo" style="<?php echo $sStyleHidden_estatus_periodo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_estatus_periodo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_estatus_periodo_label"><span id="id_label_estatus_periodo"><?php echo $this->nm_new_label['estatus_periodo']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_periodo'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_periodo'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_periodo'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_colegio']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_colegio_empty.htm' : $this->Ini->link_form_estatus_periodos_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_estatus_periodo']) && 'nmsc_iframe_liga_form_estatus_periodos' != $this->Ini->sc_lig_target['C_@scinf_estatus_periodo'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_estatus_periodo'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_estatus_periodo'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_estatus_periodos"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_estatus_periodos"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estatus_periodo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estatus_periodo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_estatus_periodo_dumb = ('' == $sStyleHidden_estatus_periodo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estatus_periodo_dumb" style="<?php echo $sStyleHidden_estatus_periodo_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="50%" height="">
   <a name="bloco_5"></a>
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipos_periodo']))
    {
        $this->nm_new_label['tipos_periodo'] = "Tipos de Periodos";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipos_periodo = $this->tipos_periodo;
   $sStyleHidden_tipos_periodo = '';
   if (isset($this->nmgp_cmp_hidden['tipos_periodo']) && $this->nmgp_cmp_hidden['tipos_periodo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipos_periodo']);
       $sStyleHidden_tipos_periodo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipos_periodo = 'display: none;';
   $sStyleReadInp_tipos_periodo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipos_periodo']) && $this->nmgp_cmp_readonly['tipos_periodo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipos_periodo']);
       $sStyleReadLab_tipos_periodo = '';
       $sStyleReadInp_tipos_periodo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipos_periodo']) && $this->nmgp_cmp_hidden['tipos_periodo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipos_periodo" value="<?php echo $this->form_encode_input($tipos_periodo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipos_periodo_line" id="hidden_field_data_tipos_periodo" style="<?php echo $sStyleHidden_tipos_periodo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_tipos_periodo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipos_periodo_label"><span id="id_label_tipos_periodo"><?php echo $this->nm_new_label['tipos_periodo']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_tipos_periodo'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_tipos_periodo'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_tipos_periodo'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_colegio']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_colegio_empty.htm' : $this->Ini->link_form_tipo_periodo_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_tipos_periodo']) && 'nmsc_iframe_liga_form_tipo_periodo' != $this->Ini->sc_lig_target['C_@scinf_tipos_periodo'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_tipos_periodo'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_tipos_periodo'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_tipo_periodo"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_tipo_periodo"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipos_periodo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipos_periodo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_tipos_periodo_dumb = ('' == $sStyleHidden_tipos_periodo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tipos_periodo_dumb" style="<?php echo $sStyleHidden_tipos_periodo_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="50%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['estatus_estudiantes']))
    {
        $this->nm_new_label['estatus_estudiantes'] = "Estatus de estudiantes";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estatus_estudiantes = $this->estatus_estudiantes;
   $sStyleHidden_estatus_estudiantes = '';
   if (isset($this->nmgp_cmp_hidden['estatus_estudiantes']) && $this->nmgp_cmp_hidden['estatus_estudiantes'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estatus_estudiantes']);
       $sStyleHidden_estatus_estudiantes = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estatus_estudiantes = 'display: none;';
   $sStyleReadInp_estatus_estudiantes = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estatus_estudiantes']) && $this->nmgp_cmp_readonly['estatus_estudiantes'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estatus_estudiantes']);
       $sStyleReadLab_estatus_estudiantes = '';
       $sStyleReadInp_estatus_estudiantes = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estatus_estudiantes']) && $this->nmgp_cmp_hidden['estatus_estudiantes'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="estatus_estudiantes" value="<?php echo $this->form_encode_input($estatus_estudiantes) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estatus_estudiantes_line" id="hidden_field_data_estatus_estudiantes" style="<?php echo $sStyleHidden_estatus_estudiantes; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_estatus_estudiantes_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_estatus_estudiantes_label"><span id="id_label_estatus_estudiantes"><?php echo $this->nm_new_label['estatus_estudiantes']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_estudiantes'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_estudiantes'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_estudiantes'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_colegio']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_colegio_empty.htm' : $this->Ini->link_form_estatus_estudiantes_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_estatus_estudiantes']) && 'nmsc_iframe_liga_form_estatus_estudiantes' != $this->Ini->sc_lig_target['C_@scinf_estatus_estudiantes'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_estatus_estudiantes'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_estatus_estudiantes'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_estatus_estudiantes"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_estatus_estudiantes"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estatus_estudiantes_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estatus_estudiantes_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_estatus_estudiantes_dumb = ('' == $sStyleHidden_estatus_estudiantes) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_estatus_estudiantes_dumb" style="<?php echo $sStyleHidden_estatus_estudiantes_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="50%" height="">
   <a name="bloco_7"></a>
<div id="div_hidden_bloco_7"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_7" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tipos_grados']))
    {
        $this->nm_new_label['tipos_grados'] = "Tipos de Grado";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tipos_grados = $this->tipos_grados;
   $sStyleHidden_tipos_grados = '';
   if (isset($this->nmgp_cmp_hidden['tipos_grados']) && $this->nmgp_cmp_hidden['tipos_grados'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tipos_grados']);
       $sStyleHidden_tipos_grados = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tipos_grados = 'display: none;';
   $sStyleReadInp_tipos_grados = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tipos_grados']) && $this->nmgp_cmp_readonly['tipos_grados'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tipos_grados']);
       $sStyleReadLab_tipos_grados = '';
       $sStyleReadInp_tipos_grados = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tipos_grados']) && $this->nmgp_cmp_hidden['tipos_grados'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipos_grados" value="<?php echo $this->form_encode_input($tipos_grados) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tipos_grados_line" id="hidden_field_data_tipos_grados" style="<?php echo $sStyleHidden_tipos_grados; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_tipos_grados_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tipos_grados_label"><span id="id_label_tipos_grados"><?php echo $this->nm_new_label['tipos_grados']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_tipos_grados'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_tipos_grados'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_tipos_grados'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_colegio']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_colegio_empty.htm' : $this->Ini->link_form_tipo_grados_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_tipos_grados']) && 'nmsc_iframe_liga_form_tipo_grados' != $this->Ini->sc_lig_target['C_@scinf_tipos_grados'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_tipos_grados'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_tipos_grados'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_tipo_grados"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_tipo_grados"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipos_grados_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipos_grados_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_tipos_grados_dumb = ('' == $sStyleHidden_tipos_grados) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tipos_grados_dumb" style="<?php echo $sStyleHidden_tipos_grados_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_8"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="50%" height="">
<div id="div_hidden_bloco_8"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_8" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['turnos']))
    {
        $this->nm_new_label['turnos'] = "Turnos";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $turnos = $this->turnos;
   $sStyleHidden_turnos = '';
   if (isset($this->nmgp_cmp_hidden['turnos']) && $this->nmgp_cmp_hidden['turnos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['turnos']);
       $sStyleHidden_turnos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_turnos = 'display: none;';
   $sStyleReadInp_turnos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['turnos']) && $this->nmgp_cmp_readonly['turnos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['turnos']);
       $sStyleReadLab_turnos = '';
       $sStyleReadInp_turnos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['turnos']) && $this->nmgp_cmp_hidden['turnos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="turnos" value="<?php echo $this->form_encode_input($turnos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_turnos_line" id="hidden_field_data_turnos" style="<?php echo $sStyleHidden_turnos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_turnos_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_turnos_label"><span id="id_label_turnos"><?php echo $this->nm_new_label['turnos']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_turnos'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_turnos'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_turnos'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_colegio']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_colegio_empty.htm' : $this->Ini->link_form_turnos_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_turnos']) && 'nmsc_iframe_liga_form_turnos' != $this->Ini->sc_lig_target['C_@scinf_turnos'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_turnos'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_turnos'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_turnos"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_turnos"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_turnos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_turnos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_turnos_dumb = ('' == $sStyleHidden_turnos) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_turnos_dumb" style="<?php echo $sStyleHidden_turnos_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="50%" height="">
   <a name="bloco_9"></a>
<div id="div_hidden_bloco_9"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_9" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['estatus_docentes']))
    {
        $this->nm_new_label['estatus_docentes'] = "Estatus de Docentes";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $estatus_docentes = $this->estatus_docentes;
   $sStyleHidden_estatus_docentes = '';
   if (isset($this->nmgp_cmp_hidden['estatus_docentes']) && $this->nmgp_cmp_hidden['estatus_docentes'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['estatus_docentes']);
       $sStyleHidden_estatus_docentes = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_estatus_docentes = 'display: none;';
   $sStyleReadInp_estatus_docentes = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['estatus_docentes']) && $this->nmgp_cmp_readonly['estatus_docentes'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['estatus_docentes']);
       $sStyleReadLab_estatus_docentes = '';
       $sStyleReadInp_estatus_docentes = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['estatus_docentes']) && $this->nmgp_cmp_hidden['estatus_docentes'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="estatus_docentes" value="<?php echo $this->form_encode_input($estatus_docentes) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_estatus_docentes_line" id="hidden_field_data_estatus_docentes" style="<?php echo $sStyleHidden_estatus_docentes; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_estatus_docentes_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_estatus_docentes_label"><span id="id_label_estatus_docentes"><?php echo $this->nm_new_label['estatus_docentes']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_docentes'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_docentes'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_estatus_docentes'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_colegio']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_colegio_empty.htm' : $this->Ini->link_form_estatus_docentes_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_session=' . session_id() . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_estatus_docentes']) && 'nmsc_iframe_liga_form_estatus_docentes' != $this->Ini->sc_lig_target['C_@scinf_estatus_docentes'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_estatus_docentes'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_estatus_docentes'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_estatus_docentes"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_estatus_docentes"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estatus_docentes_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estatus_docentes_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R")
{
    $NM_btn = false;
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "sc-unique-btn-5", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] != "R")
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
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage('', "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", false, 0, false, "Ok", 0, 0, 0, 0, "", "", "", true, false);
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7,8,9);
  $nm_sc_blocos_aba    = array(1 => 1,2 => 1);
  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = 'hidden';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
$(window).bind("load", function() {
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7,8,9);
  $nm_sc_blocos_aba    = array(1 => 1,2 => 1);
  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = '';";
      }
  }
?>
});
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_colegio");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_colegio");
 parent.scAjaxDetailHeight("form_colegio", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_colegio", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_colegio", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_modal'])
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
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-1").length && $("#sc_b_upd_t.sc-unique-btn-1").is(":visible")) {
			nm_atualiza ('alterar');
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
		if ($("#sc_b_sai_t.sc-unique-btn-2").length && $("#sc_b_sai_t.sc-unique-btn-2").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-5").length && $("#sc_b_ret_b.sc-unique-btn-5").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_off_b.sc-unique-btn-6").length && $("#sc_b_ret_off_b.sc-unique-btn-6").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-7").length && $("#sc_b_avc_b.sc-unique-btn-7").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_off_b.sc-unique-btn-8").length && $("#sc_b_avc_off_b.sc-unique-btn-8").is(":visible")) {
			nm_move ('avanca');
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
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
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
