<?php
class form_calificaciones_form extends form_calificaciones_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " calificaciones"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " calificaciones"); } ?></TITLE>
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
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
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
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_desc ?>'], 
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_asc ?>']{opacity:1!important;} 
   .scFormLabelOddMult a img{opacity:0;transition:all .2s;} 
   .scFormLabelOddMult:HOVER a img{opacity:1;transition:all .2s;} 
 </style>
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
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_calificaciones/form_calificaciones_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_calificaciones_sajax_js.php");
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
    nm_sumario = "[<?php echo $this->Ini->Nm_lang['lang_othr_smry_info']?>]";
    nm_sumario = nm_sumario.replace("?start?", reg_ini);
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

include_once('form_calificaciones_jquery.php');

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


  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
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
 include_once("form_calificaciones_js0.php");
?>
<script type="text/javascript"> 
  sc_quant_excl = <?php echo count($sc_check_excl); ?>; 
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
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
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
<?php
$_SESSION['scriptcase']['error_span_title']['form_calificaciones'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_calificaciones'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " calificaciones"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " calificaciones"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div></td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'][2] : "";
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
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-1", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-2", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-3", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-4", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-5", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-6", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-7", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-8", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R")
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
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;">   <tr>
<?php
$orderColName = '';
$orderColOrient = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


       if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") { $Col_span = " colspan=2"; }
    if (!$this->Embutida_form && $this->nmgp_opcao == "novo") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="scFormLabelOddMult"  width="10">  </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="scFormLabelOddMult"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['estudiante_id_']) && $this->nmgp_cmp_hidden['estudiante_id_'] == 'off') { $sStyleHidden_estudiante_id_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['estudiante_id_']) || $this->nmgp_cmp_hidden['estudiante_id_'] == 'on') {
      if (!isset($this->nm_new_label['estudiante_id_'])) {
          $this->nm_new_label['estudiante_id_'] = "Estudiante Id"; } ?>

    <TD class="scFormLabelOddMult css_estudiante_id__label" id="hidden_field_label_estudiante_id_" style="<?php echo $sStyleHidden_estudiante_id_; ?>" > <?php echo $this->nm_new_label['estudiante_id_'] ?> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['asignatura_id_']) && $this->nmgp_cmp_hidden['asignatura_id_'] == 'off') { $sStyleHidden_asignatura_id_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['asignatura_id_']) || $this->nmgp_cmp_hidden['asignatura_id_'] == 'on') {
      if (!isset($this->nm_new_label['asignatura_id_'])) {
          $this->nm_new_label['asignatura_id_'] = "Asignatura Id"; } ?>

    <TD class="scFormLabelOddMult css_asignatura_id__label" id="hidden_field_label_asignatura_id_" style="<?php echo $sStyleHidden_asignatura_id_; ?>" > <?php echo $this->nm_new_label['asignatura_id_'] ?> <span class="scFormRequiredOddMult">*</span> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['tipo_calificacion_id_']) && $this->nmgp_cmp_hidden['tipo_calificacion_id_'] == 'off') { $sStyleHidden_tipo_calificacion_id_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['tipo_calificacion_id_']) || $this->nmgp_cmp_hidden['tipo_calificacion_id_'] == 'on') {
      if (!isset($this->nm_new_label['tipo_calificacion_id_'])) {
          $this->nm_new_label['tipo_calificacion_id_'] = "Tipo Calificacion Id"; } ?>

    <TD class="scFormLabelOddMult css_tipo_calificacion_id__label" id="hidden_field_label_tipo_calificacion_id_" style="<?php echo $sStyleHidden_tipo_calificacion_id_; ?>" > <?php echo $this->nm_new_label['tipo_calificacion_id_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_1_']) && $this->nmgp_cmp_hidden['calificacion_1_'] == 'off') { $sStyleHidden_calificacion_1_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_1_']) || $this->nmgp_cmp_hidden['calificacion_1_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_1_'])) {
          $this->nm_new_label['calificacion_1_'] = "Calificacion 1"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_1__label" id="hidden_field_label_calificacion_1_" style="<?php echo $sStyleHidden_calificacion_1_; ?>" > <?php echo $this->nm_new_label['calificacion_1_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_1_']) && $this->nmgp_cmp_hidden['calificacion_nivel_1_'] == 'off') { $sStyleHidden_calificacion_nivel_1_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_1_']) || $this->nmgp_cmp_hidden['calificacion_nivel_1_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_1_'])) {
          $this->nm_new_label['calificacion_nivel_1_'] = "Calificacion Nivel 1"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_1__label" id="hidden_field_label_calificacion_nivel_1_" style="<?php echo $sStyleHidden_calificacion_nivel_1_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_1_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_2_']) && $this->nmgp_cmp_hidden['calificacion_2_'] == 'off') { $sStyleHidden_calificacion_2_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_2_']) || $this->nmgp_cmp_hidden['calificacion_2_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_2_'])) {
          $this->nm_new_label['calificacion_2_'] = "Calificacion 2"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_2__label" id="hidden_field_label_calificacion_2_" style="<?php echo $sStyleHidden_calificacion_2_; ?>" > <?php echo $this->nm_new_label['calificacion_2_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_2_']) && $this->nmgp_cmp_hidden['calificacion_nivel_2_'] == 'off') { $sStyleHidden_calificacion_nivel_2_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_2_']) || $this->nmgp_cmp_hidden['calificacion_nivel_2_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_2_'])) {
          $this->nm_new_label['calificacion_nivel_2_'] = "Calificacion Nivel 2"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_2__label" id="hidden_field_label_calificacion_nivel_2_" style="<?php echo $sStyleHidden_calificacion_nivel_2_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_2_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_3_']) && $this->nmgp_cmp_hidden['calificacion_3_'] == 'off') { $sStyleHidden_calificacion_3_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_3_']) || $this->nmgp_cmp_hidden['calificacion_3_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_3_'])) {
          $this->nm_new_label['calificacion_3_'] = "Calificacion 3"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_3__label" id="hidden_field_label_calificacion_3_" style="<?php echo $sStyleHidden_calificacion_3_; ?>" > <?php echo $this->nm_new_label['calificacion_3_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_3_']) && $this->nmgp_cmp_hidden['calificacion_nivel_3_'] == 'off') { $sStyleHidden_calificacion_nivel_3_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_3_']) || $this->nmgp_cmp_hidden['calificacion_nivel_3_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_3_'])) {
          $this->nm_new_label['calificacion_nivel_3_'] = "Calificacion Nivel 3"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_3__label" id="hidden_field_label_calificacion_nivel_3_" style="<?php echo $sStyleHidden_calificacion_nivel_3_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_3_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_4_']) && $this->nmgp_cmp_hidden['calificacion_4_'] == 'off') { $sStyleHidden_calificacion_4_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_4_']) || $this->nmgp_cmp_hidden['calificacion_4_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_4_'])) {
          $this->nm_new_label['calificacion_4_'] = "Calificacion 4"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_4__label" id="hidden_field_label_calificacion_4_" style="<?php echo $sStyleHidden_calificacion_4_; ?>" > <?php echo $this->nm_new_label['calificacion_4_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_4_']) && $this->nmgp_cmp_hidden['calificacion_nivel_4_'] == 'off') { $sStyleHidden_calificacion_nivel_4_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_4_']) || $this->nmgp_cmp_hidden['calificacion_nivel_4_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_4_'])) {
          $this->nm_new_label['calificacion_nivel_4_'] = "Calificacion Nivel 4"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_4__label" id="hidden_field_label_calificacion_nivel_4_" style="<?php echo $sStyleHidden_calificacion_nivel_4_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_4_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_5_']) && $this->nmgp_cmp_hidden['calificacion_5_'] == 'off') { $sStyleHidden_calificacion_5_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_5_']) || $this->nmgp_cmp_hidden['calificacion_5_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_5_'])) {
          $this->nm_new_label['calificacion_5_'] = "Calificacion 5"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_5__label" id="hidden_field_label_calificacion_5_" style="<?php echo $sStyleHidden_calificacion_5_; ?>" > <?php echo $this->nm_new_label['calificacion_5_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_5_']) && $this->nmgp_cmp_hidden['calificacion_nivel_5_'] == 'off') { $sStyleHidden_calificacion_nivel_5_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_5_']) || $this->nmgp_cmp_hidden['calificacion_nivel_5_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_5_'])) {
          $this->nm_new_label['calificacion_nivel_5_'] = "Calificacion Nivel 5"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_5__label" id="hidden_field_label_calificacion_nivel_5_" style="<?php echo $sStyleHidden_calificacion_nivel_5_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_5_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_6_']) && $this->nmgp_cmp_hidden['calificacion_6_'] == 'off') { $sStyleHidden_calificacion_6_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_6_']) || $this->nmgp_cmp_hidden['calificacion_6_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_6_'])) {
          $this->nm_new_label['calificacion_6_'] = "Calificacion 6"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_6__label" id="hidden_field_label_calificacion_6_" style="<?php echo $sStyleHidden_calificacion_6_; ?>" > <?php echo $this->nm_new_label['calificacion_6_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_6_']) && $this->nmgp_cmp_hidden['calificacion_nivel_6_'] == 'off') { $sStyleHidden_calificacion_nivel_6_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_6_']) || $this->nmgp_cmp_hidden['calificacion_nivel_6_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_6_'])) {
          $this->nm_new_label['calificacion_nivel_6_'] = "Calificacion Nivel 6"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_6__label" id="hidden_field_label_calificacion_nivel_6_" style="<?php echo $sStyleHidden_calificacion_nivel_6_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_6_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_7_']) && $this->nmgp_cmp_hidden['calificacion_7_'] == 'off') { $sStyleHidden_calificacion_7_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_7_']) || $this->nmgp_cmp_hidden['calificacion_7_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_7_'])) {
          $this->nm_new_label['calificacion_7_'] = "Calificacion 7"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_7__label" id="hidden_field_label_calificacion_7_" style="<?php echo $sStyleHidden_calificacion_7_; ?>" > <?php echo $this->nm_new_label['calificacion_7_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_7_']) && $this->nmgp_cmp_hidden['calificacion_nivel_7_'] == 'off') { $sStyleHidden_calificacion_nivel_7_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_7_']) || $this->nmgp_cmp_hidden['calificacion_nivel_7_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_7_'])) {
          $this->nm_new_label['calificacion_nivel_7_'] = "Calificacion Nivel 7"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_7__label" id="hidden_field_label_calificacion_nivel_7_" style="<?php echo $sStyleHidden_calificacion_nivel_7_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_7_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_8_']) && $this->nmgp_cmp_hidden['calificacion_8_'] == 'off') { $sStyleHidden_calificacion_8_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_8_']) || $this->nmgp_cmp_hidden['calificacion_8_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_8_'])) {
          $this->nm_new_label['calificacion_8_'] = "Calificacion 8"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_8__label" id="hidden_field_label_calificacion_8_" style="<?php echo $sStyleHidden_calificacion_8_; ?>" > <?php echo $this->nm_new_label['calificacion_8_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_8_']) && $this->nmgp_cmp_hidden['calificacion_nivel_8_'] == 'off') { $sStyleHidden_calificacion_nivel_8_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_8_']) || $this->nmgp_cmp_hidden['calificacion_nivel_8_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_8_'])) {
          $this->nm_new_label['calificacion_nivel_8_'] = "Calificacion Nivel 8"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_8__label" id="hidden_field_label_calificacion_nivel_8_" style="<?php echo $sStyleHidden_calificacion_nivel_8_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_8_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_9_']) && $this->nmgp_cmp_hidden['calificacion_9_'] == 'off') { $sStyleHidden_calificacion_9_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_9_']) || $this->nmgp_cmp_hidden['calificacion_9_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_9_'])) {
          $this->nm_new_label['calificacion_9_'] = "Calificacion 9"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_9__label" id="hidden_field_label_calificacion_9_" style="<?php echo $sStyleHidden_calificacion_9_; ?>" > <?php echo $this->nm_new_label['calificacion_9_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_9_']) && $this->nmgp_cmp_hidden['calificacion_nivel_9_'] == 'off') { $sStyleHidden_calificacion_nivel_9_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_nivel_9_']) || $this->nmgp_cmp_hidden['calificacion_nivel_9_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_nivel_9_'])) {
          $this->nm_new_label['calificacion_nivel_9_'] = "Calificacion Nivel 9"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_nivel_9__label" id="hidden_field_label_calificacion_nivel_9_" style="<?php echo $sStyleHidden_calificacion_nivel_9_; ?>" > <?php echo $this->nm_new_label['calificacion_nivel_9_'] ?> </TD>
   <?php } ?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_final_']) && $this->nmgp_cmp_hidden['calificacion_final_'] == 'off') { $sStyleHidden_calificacion_final_ = 'display: none'; }
      if (1 || !isset($this->nmgp_cmp_hidden['calificacion_final_']) || $this->nmgp_cmp_hidden['calificacion_final_'] == 'on') {
      if (!isset($this->nm_new_label['calificacion_final_'])) {
          $this->nm_new_label['calificacion_final_'] = "Calificacion Final"; } ?>

    <TD class="scFormLabelOddMult css_calificacion_final__label" id="hidden_field_label_calificacion_final_" style="<?php echo $sStyleHidden_calificacion_final_; ?>" > <?php echo $this->nm_new_label['calificacion_final_'] ?> </TD>
   <?php } ?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert; 
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_form_calificaciones);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_calificaciones = $this->form_vert_form_calificaciones;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_calificaciones))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['estudiante_id_']))
           {
               $this->nmgp_cmp_readonly['estudiante_id_'] = 'on';
           }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['asignatura_id_']))
           {
               $this->nmgp_cmp_readonly['asignatura_id_'] = 'on';
           }
   foreach ($this->form_vert_form_calificaciones as $sc_seq_vert => $sc_lixo)
   {
       $this->loadRecordState($sc_seq_vert);
       $this->colegio_id_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['colegio_id_'];
       $this->periodo_id_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['periodo_id_'];
       $this->curso_id_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['curso_id_'];
       $this->descripcion_1_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_1_'];
       $this->publicada_1_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_1_'];
       $this->descripcion_2_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_2_'];
       $this->publicada_2_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_2_'];
       $this->descripcion_3_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_3_'];
       $this->publicada_3_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_3_'];
       $this->descripcion_4_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_4_'];
       $this->publicada_4_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_4_'];
       $this->descripcion_5_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_5_'];
       $this->publicada_5_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_5_'];
       $this->descripcion_6_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_6_'];
       $this->publicada_6_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_6_'];
       $this->descripcion_7_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_7_'];
       $this->publicada_7_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_7_'];
       $this->descripcion_8_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_8_'];
       $this->publicada_8_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_8_'];
       $this->descripcion_9_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_9_'];
       $this->publicada_9_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_9_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['estudiante_id_'] = true;
           $this->nmgp_cmp_readonly['asignatura_id_'] = true;
           $this->nmgp_cmp_readonly['tipo_calificacion_id_'] = true;
           $this->nmgp_cmp_readonly['calificacion_1_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_1_'] = true;
           $this->nmgp_cmp_readonly['calificacion_2_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_2_'] = true;
           $this->nmgp_cmp_readonly['calificacion_3_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_3_'] = true;
           $this->nmgp_cmp_readonly['calificacion_4_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_4_'] = true;
           $this->nmgp_cmp_readonly['calificacion_5_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_5_'] = true;
           $this->nmgp_cmp_readonly['calificacion_6_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_6_'] = true;
           $this->nmgp_cmp_readonly['calificacion_7_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_7_'] = true;
           $this->nmgp_cmp_readonly['calificacion_8_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_8_'] = true;
           $this->nmgp_cmp_readonly['calificacion_9_'] = true;
           $this->nmgp_cmp_readonly['calificacion_nivel_9_'] = true;
           $this->nmgp_cmp_readonly['calificacion_final_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['estudiante_id_']) || $this->nmgp_cmp_readonly['estudiante_id_'] != "on") {$this->nmgp_cmp_readonly['estudiante_id_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['asignatura_id_']) || $this->nmgp_cmp_readonly['asignatura_id_'] != "on") {$this->nmgp_cmp_readonly['asignatura_id_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['tipo_calificacion_id_']) || $this->nmgp_cmp_readonly['tipo_calificacion_id_'] != "on") {$this->nmgp_cmp_readonly['tipo_calificacion_id_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_1_']) || $this->nmgp_cmp_readonly['calificacion_1_'] != "on") {$this->nmgp_cmp_readonly['calificacion_1_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_1_']) || $this->nmgp_cmp_readonly['calificacion_nivel_1_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_1_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_2_']) || $this->nmgp_cmp_readonly['calificacion_2_'] != "on") {$this->nmgp_cmp_readonly['calificacion_2_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_2_']) || $this->nmgp_cmp_readonly['calificacion_nivel_2_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_2_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_3_']) || $this->nmgp_cmp_readonly['calificacion_3_'] != "on") {$this->nmgp_cmp_readonly['calificacion_3_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_3_']) || $this->nmgp_cmp_readonly['calificacion_nivel_3_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_3_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_4_']) || $this->nmgp_cmp_readonly['calificacion_4_'] != "on") {$this->nmgp_cmp_readonly['calificacion_4_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_4_']) || $this->nmgp_cmp_readonly['calificacion_nivel_4_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_4_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_5_']) || $this->nmgp_cmp_readonly['calificacion_5_'] != "on") {$this->nmgp_cmp_readonly['calificacion_5_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_5_']) || $this->nmgp_cmp_readonly['calificacion_nivel_5_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_5_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_6_']) || $this->nmgp_cmp_readonly['calificacion_6_'] != "on") {$this->nmgp_cmp_readonly['calificacion_6_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_6_']) || $this->nmgp_cmp_readonly['calificacion_nivel_6_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_6_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_7_']) || $this->nmgp_cmp_readonly['calificacion_7_'] != "on") {$this->nmgp_cmp_readonly['calificacion_7_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_7_']) || $this->nmgp_cmp_readonly['calificacion_nivel_7_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_7_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_8_']) || $this->nmgp_cmp_readonly['calificacion_8_'] != "on") {$this->nmgp_cmp_readonly['calificacion_8_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_8_']) || $this->nmgp_cmp_readonly['calificacion_nivel_8_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_8_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_9_']) || $this->nmgp_cmp_readonly['calificacion_9_'] != "on") {$this->nmgp_cmp_readonly['calificacion_9_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_nivel_9_']) || $this->nmgp_cmp_readonly['calificacion_nivel_9_'] != "on") {$this->nmgp_cmp_readonly['calificacion_nivel_9_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['calificacion_final_']) || $this->nmgp_cmp_readonly['calificacion_final_'] != "on") {$this->nmgp_cmp_readonly['calificacion_final_'] = false;}
       }
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
        $this->estudiante_id_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['estudiante_id_']; 
       $estudiante_id_ = $this->estudiante_id_; 
       $sStyleHidden_estudiante_id_ = '';
       if (isset($sCheckRead_estudiante_id_))
       {
           unset($sCheckRead_estudiante_id_);
       }
       if (isset($this->nmgp_cmp_readonly['estudiante_id_']))
       {
           $sCheckRead_estudiante_id_ = $this->nmgp_cmp_readonly['estudiante_id_'];
       }
       if (isset($this->nmgp_cmp_hidden['estudiante_id_']) && $this->nmgp_cmp_hidden['estudiante_id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['estudiante_id_']);
           $sStyleHidden_estudiante_id_ = 'display: none;';
       }
       $bTestReadOnly_estudiante_id_ = true;
       $sStyleReadLab_estudiante_id_ = 'display: none;';
       $sStyleReadInp_estudiante_id_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["estudiante_id_"]) &&  $this->nmgp_cmp_readonly["estudiante_id_"] == "on"))
       {
           $bTestReadOnly_estudiante_id_ = false;
           unset($this->nmgp_cmp_readonly['estudiante_id_']);
           $sStyleReadLab_estudiante_id_ = '';
           $sStyleReadInp_estudiante_id_ = 'display: none;';
       }
       $this->asignatura_id_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['asignatura_id_']; 
       $asignatura_id_ = $this->asignatura_id_; 
       $sStyleHidden_asignatura_id_ = '';
       if (isset($sCheckRead_asignatura_id_))
       {
           unset($sCheckRead_asignatura_id_);
       }
       if (isset($this->nmgp_cmp_readonly['asignatura_id_']))
       {
           $sCheckRead_asignatura_id_ = $this->nmgp_cmp_readonly['asignatura_id_'];
       }
       if (isset($this->nmgp_cmp_hidden['asignatura_id_']) && $this->nmgp_cmp_hidden['asignatura_id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['asignatura_id_']);
           $sStyleHidden_asignatura_id_ = 'display: none;';
       }
       $bTestReadOnly_asignatura_id_ = true;
       $sStyleReadLab_asignatura_id_ = 'display: none;';
       $sStyleReadInp_asignatura_id_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["asignatura_id_"]) &&  $this->nmgp_cmp_readonly["asignatura_id_"] == "on"))
       {
           $bTestReadOnly_asignatura_id_ = false;
           unset($this->nmgp_cmp_readonly['asignatura_id_']);
           $sStyleReadLab_asignatura_id_ = '';
           $sStyleReadInp_asignatura_id_ = 'display: none;';
       }
       $this->tipo_calificacion_id_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['tipo_calificacion_id_']; 
       $tipo_calificacion_id_ = $this->tipo_calificacion_id_; 
       $sStyleHidden_tipo_calificacion_id_ = '';
       if (isset($sCheckRead_tipo_calificacion_id_))
       {
           unset($sCheckRead_tipo_calificacion_id_);
       }
       if (isset($this->nmgp_cmp_readonly['tipo_calificacion_id_']))
       {
           $sCheckRead_tipo_calificacion_id_ = $this->nmgp_cmp_readonly['tipo_calificacion_id_'];
       }
       if (isset($this->nmgp_cmp_hidden['tipo_calificacion_id_']) && $this->nmgp_cmp_hidden['tipo_calificacion_id_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['tipo_calificacion_id_']);
           $sStyleHidden_tipo_calificacion_id_ = 'display: none;';
       }
       $bTestReadOnly_tipo_calificacion_id_ = true;
       $sStyleReadLab_tipo_calificacion_id_ = 'display: none;';
       $sStyleReadInp_tipo_calificacion_id_ = '';
       if (isset($this->nmgp_cmp_readonly['tipo_calificacion_id_']) && $this->nmgp_cmp_readonly['tipo_calificacion_id_'] == 'on')
       {
           $bTestReadOnly_tipo_calificacion_id_ = false;
           unset($this->nmgp_cmp_readonly['tipo_calificacion_id_']);
           $sStyleReadLab_tipo_calificacion_id_ = '';
           $sStyleReadInp_tipo_calificacion_id_ = 'display: none;';
       }
       $this->calificacion_1_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_1_']; 
       $calificacion_1_ = $this->calificacion_1_; 
       $sStyleHidden_calificacion_1_ = '';
       if (isset($sCheckRead_calificacion_1_))
       {
           unset($sCheckRead_calificacion_1_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_1_']))
       {
           $sCheckRead_calificacion_1_ = $this->nmgp_cmp_readonly['calificacion_1_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_1_']) && $this->nmgp_cmp_hidden['calificacion_1_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_1_']);
           $sStyleHidden_calificacion_1_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_1_ = true;
       $sStyleReadLab_calificacion_1_ = 'display: none;';
       $sStyleReadInp_calificacion_1_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_1_']) && $this->nmgp_cmp_readonly['calificacion_1_'] == 'on')
       {
           $bTestReadOnly_calificacion_1_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_1_']);
           $sStyleReadLab_calificacion_1_ = '';
           $sStyleReadInp_calificacion_1_ = 'display: none;';
       }
       $this->calificacion_nivel_1_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_1_']; 
       $calificacion_nivel_1_ = $this->calificacion_nivel_1_; 
       $sStyleHidden_calificacion_nivel_1_ = '';
       if (isset($sCheckRead_calificacion_nivel_1_))
       {
           unset($sCheckRead_calificacion_nivel_1_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_1_']))
       {
           $sCheckRead_calificacion_nivel_1_ = $this->nmgp_cmp_readonly['calificacion_nivel_1_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_1_']) && $this->nmgp_cmp_hidden['calificacion_nivel_1_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_1_']);
           $sStyleHidden_calificacion_nivel_1_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_1_ = true;
       $sStyleReadLab_calificacion_nivel_1_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_1_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_1_']) && $this->nmgp_cmp_readonly['calificacion_nivel_1_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_1_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_1_']);
           $sStyleReadLab_calificacion_nivel_1_ = '';
           $sStyleReadInp_calificacion_nivel_1_ = 'display: none;';
       }
       $this->calificacion_2_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_2_']; 
       $calificacion_2_ = $this->calificacion_2_; 
       $sStyleHidden_calificacion_2_ = '';
       if (isset($sCheckRead_calificacion_2_))
       {
           unset($sCheckRead_calificacion_2_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_2_']))
       {
           $sCheckRead_calificacion_2_ = $this->nmgp_cmp_readonly['calificacion_2_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_2_']) && $this->nmgp_cmp_hidden['calificacion_2_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_2_']);
           $sStyleHidden_calificacion_2_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_2_ = true;
       $sStyleReadLab_calificacion_2_ = 'display: none;';
       $sStyleReadInp_calificacion_2_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_2_']) && $this->nmgp_cmp_readonly['calificacion_2_'] == 'on')
       {
           $bTestReadOnly_calificacion_2_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_2_']);
           $sStyleReadLab_calificacion_2_ = '';
           $sStyleReadInp_calificacion_2_ = 'display: none;';
       }
       $this->calificacion_nivel_2_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_2_']; 
       $calificacion_nivel_2_ = $this->calificacion_nivel_2_; 
       $sStyleHidden_calificacion_nivel_2_ = '';
       if (isset($sCheckRead_calificacion_nivel_2_))
       {
           unset($sCheckRead_calificacion_nivel_2_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_2_']))
       {
           $sCheckRead_calificacion_nivel_2_ = $this->nmgp_cmp_readonly['calificacion_nivel_2_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_2_']) && $this->nmgp_cmp_hidden['calificacion_nivel_2_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_2_']);
           $sStyleHidden_calificacion_nivel_2_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_2_ = true;
       $sStyleReadLab_calificacion_nivel_2_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_2_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_2_']) && $this->nmgp_cmp_readonly['calificacion_nivel_2_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_2_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_2_']);
           $sStyleReadLab_calificacion_nivel_2_ = '';
           $sStyleReadInp_calificacion_nivel_2_ = 'display: none;';
       }
       $this->calificacion_3_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_3_']; 
       $calificacion_3_ = $this->calificacion_3_; 
       $sStyleHidden_calificacion_3_ = '';
       if (isset($sCheckRead_calificacion_3_))
       {
           unset($sCheckRead_calificacion_3_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_3_']))
       {
           $sCheckRead_calificacion_3_ = $this->nmgp_cmp_readonly['calificacion_3_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_3_']) && $this->nmgp_cmp_hidden['calificacion_3_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_3_']);
           $sStyleHidden_calificacion_3_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_3_ = true;
       $sStyleReadLab_calificacion_3_ = 'display: none;';
       $sStyleReadInp_calificacion_3_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_3_']) && $this->nmgp_cmp_readonly['calificacion_3_'] == 'on')
       {
           $bTestReadOnly_calificacion_3_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_3_']);
           $sStyleReadLab_calificacion_3_ = '';
           $sStyleReadInp_calificacion_3_ = 'display: none;';
       }
       $this->calificacion_nivel_3_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_3_']; 
       $calificacion_nivel_3_ = $this->calificacion_nivel_3_; 
       $sStyleHidden_calificacion_nivel_3_ = '';
       if (isset($sCheckRead_calificacion_nivel_3_))
       {
           unset($sCheckRead_calificacion_nivel_3_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_3_']))
       {
           $sCheckRead_calificacion_nivel_3_ = $this->nmgp_cmp_readonly['calificacion_nivel_3_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_3_']) && $this->nmgp_cmp_hidden['calificacion_nivel_3_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_3_']);
           $sStyleHidden_calificacion_nivel_3_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_3_ = true;
       $sStyleReadLab_calificacion_nivel_3_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_3_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_3_']) && $this->nmgp_cmp_readonly['calificacion_nivel_3_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_3_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_3_']);
           $sStyleReadLab_calificacion_nivel_3_ = '';
           $sStyleReadInp_calificacion_nivel_3_ = 'display: none;';
       }
       $this->calificacion_4_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_4_']; 
       $calificacion_4_ = $this->calificacion_4_; 
       $sStyleHidden_calificacion_4_ = '';
       if (isset($sCheckRead_calificacion_4_))
       {
           unset($sCheckRead_calificacion_4_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_4_']))
       {
           $sCheckRead_calificacion_4_ = $this->nmgp_cmp_readonly['calificacion_4_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_4_']) && $this->nmgp_cmp_hidden['calificacion_4_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_4_']);
           $sStyleHidden_calificacion_4_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_4_ = true;
       $sStyleReadLab_calificacion_4_ = 'display: none;';
       $sStyleReadInp_calificacion_4_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_4_']) && $this->nmgp_cmp_readonly['calificacion_4_'] == 'on')
       {
           $bTestReadOnly_calificacion_4_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_4_']);
           $sStyleReadLab_calificacion_4_ = '';
           $sStyleReadInp_calificacion_4_ = 'display: none;';
       }
       $this->calificacion_nivel_4_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_4_']; 
       $calificacion_nivel_4_ = $this->calificacion_nivel_4_; 
       $sStyleHidden_calificacion_nivel_4_ = '';
       if (isset($sCheckRead_calificacion_nivel_4_))
       {
           unset($sCheckRead_calificacion_nivel_4_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_4_']))
       {
           $sCheckRead_calificacion_nivel_4_ = $this->nmgp_cmp_readonly['calificacion_nivel_4_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_4_']) && $this->nmgp_cmp_hidden['calificacion_nivel_4_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_4_']);
           $sStyleHidden_calificacion_nivel_4_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_4_ = true;
       $sStyleReadLab_calificacion_nivel_4_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_4_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_4_']) && $this->nmgp_cmp_readonly['calificacion_nivel_4_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_4_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_4_']);
           $sStyleReadLab_calificacion_nivel_4_ = '';
           $sStyleReadInp_calificacion_nivel_4_ = 'display: none;';
       }
       $this->calificacion_5_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_5_']; 
       $calificacion_5_ = $this->calificacion_5_; 
       $sStyleHidden_calificacion_5_ = '';
       if (isset($sCheckRead_calificacion_5_))
       {
           unset($sCheckRead_calificacion_5_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_5_']))
       {
           $sCheckRead_calificacion_5_ = $this->nmgp_cmp_readonly['calificacion_5_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_5_']) && $this->nmgp_cmp_hidden['calificacion_5_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_5_']);
           $sStyleHidden_calificacion_5_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_5_ = true;
       $sStyleReadLab_calificacion_5_ = 'display: none;';
       $sStyleReadInp_calificacion_5_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_5_']) && $this->nmgp_cmp_readonly['calificacion_5_'] == 'on')
       {
           $bTestReadOnly_calificacion_5_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_5_']);
           $sStyleReadLab_calificacion_5_ = '';
           $sStyleReadInp_calificacion_5_ = 'display: none;';
       }
       $this->calificacion_nivel_5_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_5_']; 
       $calificacion_nivel_5_ = $this->calificacion_nivel_5_; 
       $sStyleHidden_calificacion_nivel_5_ = '';
       if (isset($sCheckRead_calificacion_nivel_5_))
       {
           unset($sCheckRead_calificacion_nivel_5_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_5_']))
       {
           $sCheckRead_calificacion_nivel_5_ = $this->nmgp_cmp_readonly['calificacion_nivel_5_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_5_']) && $this->nmgp_cmp_hidden['calificacion_nivel_5_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_5_']);
           $sStyleHidden_calificacion_nivel_5_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_5_ = true;
       $sStyleReadLab_calificacion_nivel_5_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_5_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_5_']) && $this->nmgp_cmp_readonly['calificacion_nivel_5_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_5_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_5_']);
           $sStyleReadLab_calificacion_nivel_5_ = '';
           $sStyleReadInp_calificacion_nivel_5_ = 'display: none;';
       }
       $this->calificacion_6_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_6_']; 
       $calificacion_6_ = $this->calificacion_6_; 
       $sStyleHidden_calificacion_6_ = '';
       if (isset($sCheckRead_calificacion_6_))
       {
           unset($sCheckRead_calificacion_6_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_6_']))
       {
           $sCheckRead_calificacion_6_ = $this->nmgp_cmp_readonly['calificacion_6_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_6_']) && $this->nmgp_cmp_hidden['calificacion_6_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_6_']);
           $sStyleHidden_calificacion_6_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_6_ = true;
       $sStyleReadLab_calificacion_6_ = 'display: none;';
       $sStyleReadInp_calificacion_6_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_6_']) && $this->nmgp_cmp_readonly['calificacion_6_'] == 'on')
       {
           $bTestReadOnly_calificacion_6_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_6_']);
           $sStyleReadLab_calificacion_6_ = '';
           $sStyleReadInp_calificacion_6_ = 'display: none;';
       }
       $this->calificacion_nivel_6_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_6_']; 
       $calificacion_nivel_6_ = $this->calificacion_nivel_6_; 
       $sStyleHidden_calificacion_nivel_6_ = '';
       if (isset($sCheckRead_calificacion_nivel_6_))
       {
           unset($sCheckRead_calificacion_nivel_6_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_6_']))
       {
           $sCheckRead_calificacion_nivel_6_ = $this->nmgp_cmp_readonly['calificacion_nivel_6_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_6_']) && $this->nmgp_cmp_hidden['calificacion_nivel_6_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_6_']);
           $sStyleHidden_calificacion_nivel_6_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_6_ = true;
       $sStyleReadLab_calificacion_nivel_6_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_6_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_6_']) && $this->nmgp_cmp_readonly['calificacion_nivel_6_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_6_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_6_']);
           $sStyleReadLab_calificacion_nivel_6_ = '';
           $sStyleReadInp_calificacion_nivel_6_ = 'display: none;';
       }
       $this->calificacion_7_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_7_']; 
       $calificacion_7_ = $this->calificacion_7_; 
       $sStyleHidden_calificacion_7_ = '';
       if (isset($sCheckRead_calificacion_7_))
       {
           unset($sCheckRead_calificacion_7_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_7_']))
       {
           $sCheckRead_calificacion_7_ = $this->nmgp_cmp_readonly['calificacion_7_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_7_']) && $this->nmgp_cmp_hidden['calificacion_7_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_7_']);
           $sStyleHidden_calificacion_7_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_7_ = true;
       $sStyleReadLab_calificacion_7_ = 'display: none;';
       $sStyleReadInp_calificacion_7_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_7_']) && $this->nmgp_cmp_readonly['calificacion_7_'] == 'on')
       {
           $bTestReadOnly_calificacion_7_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_7_']);
           $sStyleReadLab_calificacion_7_ = '';
           $sStyleReadInp_calificacion_7_ = 'display: none;';
       }
       $this->calificacion_nivel_7_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_7_']; 
       $calificacion_nivel_7_ = $this->calificacion_nivel_7_; 
       $sStyleHidden_calificacion_nivel_7_ = '';
       if (isset($sCheckRead_calificacion_nivel_7_))
       {
           unset($sCheckRead_calificacion_nivel_7_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_7_']))
       {
           $sCheckRead_calificacion_nivel_7_ = $this->nmgp_cmp_readonly['calificacion_nivel_7_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_7_']) && $this->nmgp_cmp_hidden['calificacion_nivel_7_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_7_']);
           $sStyleHidden_calificacion_nivel_7_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_7_ = true;
       $sStyleReadLab_calificacion_nivel_7_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_7_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_7_']) && $this->nmgp_cmp_readonly['calificacion_nivel_7_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_7_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_7_']);
           $sStyleReadLab_calificacion_nivel_7_ = '';
           $sStyleReadInp_calificacion_nivel_7_ = 'display: none;';
       }
       $this->calificacion_8_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_8_']; 
       $calificacion_8_ = $this->calificacion_8_; 
       $sStyleHidden_calificacion_8_ = '';
       if (isset($sCheckRead_calificacion_8_))
       {
           unset($sCheckRead_calificacion_8_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_8_']))
       {
           $sCheckRead_calificacion_8_ = $this->nmgp_cmp_readonly['calificacion_8_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_8_']) && $this->nmgp_cmp_hidden['calificacion_8_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_8_']);
           $sStyleHidden_calificacion_8_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_8_ = true;
       $sStyleReadLab_calificacion_8_ = 'display: none;';
       $sStyleReadInp_calificacion_8_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_8_']) && $this->nmgp_cmp_readonly['calificacion_8_'] == 'on')
       {
           $bTestReadOnly_calificacion_8_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_8_']);
           $sStyleReadLab_calificacion_8_ = '';
           $sStyleReadInp_calificacion_8_ = 'display: none;';
       }
       $this->calificacion_nivel_8_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_8_']; 
       $calificacion_nivel_8_ = $this->calificacion_nivel_8_; 
       $sStyleHidden_calificacion_nivel_8_ = '';
       if (isset($sCheckRead_calificacion_nivel_8_))
       {
           unset($sCheckRead_calificacion_nivel_8_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_8_']))
       {
           $sCheckRead_calificacion_nivel_8_ = $this->nmgp_cmp_readonly['calificacion_nivel_8_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_8_']) && $this->nmgp_cmp_hidden['calificacion_nivel_8_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_8_']);
           $sStyleHidden_calificacion_nivel_8_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_8_ = true;
       $sStyleReadLab_calificacion_nivel_8_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_8_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_8_']) && $this->nmgp_cmp_readonly['calificacion_nivel_8_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_8_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_8_']);
           $sStyleReadLab_calificacion_nivel_8_ = '';
           $sStyleReadInp_calificacion_nivel_8_ = 'display: none;';
       }
       $this->calificacion_9_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_9_']; 
       $calificacion_9_ = $this->calificacion_9_; 
       $sStyleHidden_calificacion_9_ = '';
       if (isset($sCheckRead_calificacion_9_))
       {
           unset($sCheckRead_calificacion_9_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_9_']))
       {
           $sCheckRead_calificacion_9_ = $this->nmgp_cmp_readonly['calificacion_9_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_9_']) && $this->nmgp_cmp_hidden['calificacion_9_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_9_']);
           $sStyleHidden_calificacion_9_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_9_ = true;
       $sStyleReadLab_calificacion_9_ = 'display: none;';
       $sStyleReadInp_calificacion_9_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_9_']) && $this->nmgp_cmp_readonly['calificacion_9_'] == 'on')
       {
           $bTestReadOnly_calificacion_9_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_9_']);
           $sStyleReadLab_calificacion_9_ = '';
           $sStyleReadInp_calificacion_9_ = 'display: none;';
       }
       $this->calificacion_nivel_9_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_9_']; 
       $calificacion_nivel_9_ = $this->calificacion_nivel_9_; 
       $sStyleHidden_calificacion_nivel_9_ = '';
       if (isset($sCheckRead_calificacion_nivel_9_))
       {
           unset($sCheckRead_calificacion_nivel_9_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_9_']))
       {
           $sCheckRead_calificacion_nivel_9_ = $this->nmgp_cmp_readonly['calificacion_nivel_9_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_nivel_9_']) && $this->nmgp_cmp_hidden['calificacion_nivel_9_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_nivel_9_']);
           $sStyleHidden_calificacion_nivel_9_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_nivel_9_ = true;
       $sStyleReadLab_calificacion_nivel_9_ = 'display: none;';
       $sStyleReadInp_calificacion_nivel_9_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_nivel_9_']) && $this->nmgp_cmp_readonly['calificacion_nivel_9_'] == 'on')
       {
           $bTestReadOnly_calificacion_nivel_9_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_nivel_9_']);
           $sStyleReadLab_calificacion_nivel_9_ = '';
           $sStyleReadInp_calificacion_nivel_9_ = 'display: none;';
       }
       $this->calificacion_final_ = $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_final_']; 
       $calificacion_final_ = $this->calificacion_final_; 
       $sStyleHidden_calificacion_final_ = '';
       if (isset($sCheckRead_calificacion_final_))
       {
           unset($sCheckRead_calificacion_final_);
       }
       if (isset($this->nmgp_cmp_readonly['calificacion_final_']))
       {
           $sCheckRead_calificacion_final_ = $this->nmgp_cmp_readonly['calificacion_final_'];
       }
       if (isset($this->nmgp_cmp_hidden['calificacion_final_']) && $this->nmgp_cmp_hidden['calificacion_final_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['calificacion_final_']);
           $sStyleHidden_calificacion_final_ = 'display: none;';
       }
       $bTestReadOnly_calificacion_final_ = true;
       $sStyleReadLab_calificacion_final_ = 'display: none;';
       $sStyleReadInp_calificacion_final_ = '';
       if (isset($this->nmgp_cmp_readonly['calificacion_final_']) && $this->nmgp_cmp_readonly['calificacion_final_'] == 'on')
       {
           $bTestReadOnly_calificacion_final_ = false;
           unset($this->nmgp_cmp_readonly['calificacion_final_']);
           $sStyleReadLab_calificacion_final_ = '';
           $sStyleReadInp_calificacion_final_ = 'display: none;';
       }

       $nm_cor_fun_vert = ($nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?>>


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao != "novo" && $this->nmgp_botoes['delete'] == "on") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\""; if (in_array($sc_seq_vert, $sc_check_excl)) { echo " checked";} ?> onclick="if (this.checked) {sc_quant_excl++; } else {sc_quant_excl--; }" class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if (!$this->Embutida_form && $this->nmgp_opcao == "novo") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\"" ; if (in_array($sc_seq_vert, $sc_check_incl) || !empty($this->nm_todas_criticas)) { echo " checked ";} ?> class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['delete'] == "off") {
        $sDisplayDelete = 'display: none';
    }
    else {
        $sDisplayDelete = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayDelete. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['update'] == "off") {
        $sDisplayUpdate = 'display: none';
    }
    else {
        $sDisplayUpdate = '';
    }
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayUpdate. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = $sDisplayUpdate;
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_calificaciones_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_calificaciones_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_calificaciones_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_calificaciones_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_calificaciones_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_calificaciones_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['estudiante_id_']) && $this->nmgp_cmp_hidden['estudiante_id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="estudiante_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($estudiante_id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_estudiante_id__line" id="hidden_field_data_estudiante_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_estudiante_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_estudiante_id__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_estudiante_id_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["estudiante_id_"]) &&  $this->nmgp_cmp_readonly["estudiante_id_"] == "on")) { 

 ?>
<input type="hidden" name="estudiante_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($estudiante_id_) . "\"><span id=\"id_ajax_label_estudiante_id_" . $sc_seq_vert . "\">" . $estudiante_id_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_estudiante_id_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-estudiante_id_<?php echo $sc_seq_vert ?> css_estudiante_id__line" style="<?php echo $sStyleReadLab_estudiante_id_; ?>"><?php echo $this->form_encode_input($this->estudiante_id_); ?></span><span id="id_read_off_estudiante_id_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_estudiante_id_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_estudiante_id__obj" style="" id="id_sc_field_estudiante_id_<?php echo $sc_seq_vert ?>" type=text name="estudiante_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($estudiante_id_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['estudiante_id_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['estudiante_id_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['estudiante_id_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_estudiante_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_estudiante_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['asignatura_id_']) && $this->nmgp_cmp_hidden['asignatura_id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="asignatura_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($asignatura_id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_asignatura_id__line" id="hidden_field_data_asignatura_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_asignatura_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_asignatura_id__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_asignatura_id_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["asignatura_id_"]) &&  $this->nmgp_cmp_readonly["asignatura_id_"] == "on")) { 

 ?>
<input type="hidden" name="asignatura_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($asignatura_id_) . "\"><span id=\"id_ajax_label_asignatura_id_" . $sc_seq_vert . "\">" . $asignatura_id_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_asignatura_id_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-asignatura_id_<?php echo $sc_seq_vert ?> css_asignatura_id__line" style="<?php echo $sStyleReadLab_asignatura_id_; ?>"><?php echo $this->form_encode_input($this->asignatura_id_); ?></span><span id="id_read_off_asignatura_id_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_asignatura_id_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_asignatura_id__obj" style="" id="id_sc_field_asignatura_id_<?php echo $sc_seq_vert ?>" type=text name="asignatura_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($asignatura_id_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['asignatura_id_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['asignatura_id_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['asignatura_id_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_asignatura_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_asignatura_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['tipo_calificacion_id_']) && $this->nmgp_cmp_hidden['tipo_calificacion_id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tipo_calificacion_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($tipo_calificacion_id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_tipo_calificacion_id__line" id="hidden_field_data_tipo_calificacion_id_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_tipo_calificacion_id_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_tipo_calificacion_id__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_tipo_calificacion_id_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tipo_calificacion_id_"]) &&  $this->nmgp_cmp_readonly["tipo_calificacion_id_"] == "on") { 

 ?>
<input type="hidden" name="tipo_calificacion_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($tipo_calificacion_id_) . "\">" . $tipo_calificacion_id_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_tipo_calificacion_id_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-tipo_calificacion_id_<?php echo $sc_seq_vert ?> css_tipo_calificacion_id__line" style="<?php echo $sStyleReadLab_tipo_calificacion_id_; ?>"><?php echo $this->form_encode_input($this->tipo_calificacion_id_); ?></span><span id="id_read_off_tipo_calificacion_id_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tipo_calificacion_id_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_tipo_calificacion_id__obj" style="" id="id_sc_field_tipo_calificacion_id_<?php echo $sc_seq_vert ?>" type=text name="tipo_calificacion_id_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($tipo_calificacion_id_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['tipo_calificacion_id_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['tipo_calificacion_id_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['tipo_calificacion_id_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tipo_calificacion_id_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tipo_calificacion_id_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_1_']) && $this->nmgp_cmp_hidden['calificacion_1_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_1_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_1_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_1__line" id="hidden_field_data_calificacion_1_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_1_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_1__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_1_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_1_"]) &&  $this->nmgp_cmp_readonly["calificacion_1_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_1_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_1_) . "\">" . $calificacion_1_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_1_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_1_<?php echo $sc_seq_vert ?> css_calificacion_1__line" style="<?php echo $sStyleReadLab_calificacion_1_; ?>"><?php echo $this->form_encode_input($this->calificacion_1_); ?></span><span id="id_read_off_calificacion_1_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_1_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_1__obj" style="" id="id_sc_field_calificacion_1_<?php echo $sc_seq_vert ?>" type=text name="calificacion_1_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_1_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_1_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_1_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_1_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_1_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_1_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_1_']) && $this->nmgp_cmp_hidden['calificacion_nivel_1_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_1_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_1_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_1__line" id="hidden_field_data_calificacion_nivel_1_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_1_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_1__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_1_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_1_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_1_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_1_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_1_) . "\">" . $calificacion_nivel_1_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_1_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_1_<?php echo $sc_seq_vert ?> css_calificacion_nivel_1__line" style="<?php echo $sStyleReadLab_calificacion_nivel_1_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_1_); ?></span><span id="id_read_off_calificacion_nivel_1_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_1_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_1__obj" style="" id="id_sc_field_calificacion_nivel_1_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_1_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_1_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_1_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_1_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_2_']) && $this->nmgp_cmp_hidden['calificacion_2_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_2_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_2_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_2__line" id="hidden_field_data_calificacion_2_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_2_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_2__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_2_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_2_"]) &&  $this->nmgp_cmp_readonly["calificacion_2_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_2_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_2_) . "\">" . $calificacion_2_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_2_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_2_<?php echo $sc_seq_vert ?> css_calificacion_2__line" style="<?php echo $sStyleReadLab_calificacion_2_; ?>"><?php echo $this->form_encode_input($this->calificacion_2_); ?></span><span id="id_read_off_calificacion_2_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_2_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_2__obj" style="" id="id_sc_field_calificacion_2_<?php echo $sc_seq_vert ?>" type=text name="calificacion_2_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_2_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_2_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_2_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_2_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_2_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_2_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_2_']) && $this->nmgp_cmp_hidden['calificacion_nivel_2_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_2_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_2_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_2__line" id="hidden_field_data_calificacion_nivel_2_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_2_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_2__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_2_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_2_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_2_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_2_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_2_) . "\">" . $calificacion_nivel_2_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_2_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_2_<?php echo $sc_seq_vert ?> css_calificacion_nivel_2__line" style="<?php echo $sStyleReadLab_calificacion_nivel_2_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_2_); ?></span><span id="id_read_off_calificacion_nivel_2_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_2_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_2__obj" style="" id="id_sc_field_calificacion_nivel_2_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_2_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_2_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_2_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_2_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_3_']) && $this->nmgp_cmp_hidden['calificacion_3_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_3_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_3_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_3__line" id="hidden_field_data_calificacion_3_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_3_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_3__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_3_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_3_"]) &&  $this->nmgp_cmp_readonly["calificacion_3_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_3_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_3_) . "\">" . $calificacion_3_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_3_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_3_<?php echo $sc_seq_vert ?> css_calificacion_3__line" style="<?php echo $sStyleReadLab_calificacion_3_; ?>"><?php echo $this->form_encode_input($this->calificacion_3_); ?></span><span id="id_read_off_calificacion_3_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_3_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_3__obj" style="" id="id_sc_field_calificacion_3_<?php echo $sc_seq_vert ?>" type=text name="calificacion_3_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_3_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_3_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_3_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_3_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_3_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_3_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_3_']) && $this->nmgp_cmp_hidden['calificacion_nivel_3_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_3_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_3_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_3__line" id="hidden_field_data_calificacion_nivel_3_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_3_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_3__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_3_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_3_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_3_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_3_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_3_) . "\">" . $calificacion_nivel_3_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_3_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_3_<?php echo $sc_seq_vert ?> css_calificacion_nivel_3__line" style="<?php echo $sStyleReadLab_calificacion_nivel_3_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_3_); ?></span><span id="id_read_off_calificacion_nivel_3_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_3_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_3__obj" style="" id="id_sc_field_calificacion_nivel_3_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_3_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_3_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_3_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_3_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_4_']) && $this->nmgp_cmp_hidden['calificacion_4_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_4_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_4_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_4__line" id="hidden_field_data_calificacion_4_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_4_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_4__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_4_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_4_"]) &&  $this->nmgp_cmp_readonly["calificacion_4_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_4_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_4_) . "\">" . $calificacion_4_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_4_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_4_<?php echo $sc_seq_vert ?> css_calificacion_4__line" style="<?php echo $sStyleReadLab_calificacion_4_; ?>"><?php echo $this->form_encode_input($this->calificacion_4_); ?></span><span id="id_read_off_calificacion_4_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_4_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_4__obj" style="" id="id_sc_field_calificacion_4_<?php echo $sc_seq_vert ?>" type=text name="calificacion_4_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_4_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_4_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_4_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_4_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_4_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_4_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_4_']) && $this->nmgp_cmp_hidden['calificacion_nivel_4_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_4_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_4_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_4__line" id="hidden_field_data_calificacion_nivel_4_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_4_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_4__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_4_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_4_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_4_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_4_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_4_) . "\">" . $calificacion_nivel_4_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_4_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_4_<?php echo $sc_seq_vert ?> css_calificacion_nivel_4__line" style="<?php echo $sStyleReadLab_calificacion_nivel_4_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_4_); ?></span><span id="id_read_off_calificacion_nivel_4_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_4_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_4__obj" style="" id="id_sc_field_calificacion_nivel_4_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_4_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_4_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_4_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_4_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_5_']) && $this->nmgp_cmp_hidden['calificacion_5_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_5_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_5_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_5__line" id="hidden_field_data_calificacion_5_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_5_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_5__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_5_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_5_"]) &&  $this->nmgp_cmp_readonly["calificacion_5_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_5_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_5_) . "\">" . $calificacion_5_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_5_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_5_<?php echo $sc_seq_vert ?> css_calificacion_5__line" style="<?php echo $sStyleReadLab_calificacion_5_; ?>"><?php echo $this->form_encode_input($this->calificacion_5_); ?></span><span id="id_read_off_calificacion_5_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_5_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_5__obj" style="" id="id_sc_field_calificacion_5_<?php echo $sc_seq_vert ?>" type=text name="calificacion_5_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_5_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_5_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_5_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_5_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_5_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_5_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_5_']) && $this->nmgp_cmp_hidden['calificacion_nivel_5_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_5_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_5_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_5__line" id="hidden_field_data_calificacion_nivel_5_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_5_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_5__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_5_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_5_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_5_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_5_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_5_) . "\">" . $calificacion_nivel_5_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_5_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_5_<?php echo $sc_seq_vert ?> css_calificacion_nivel_5__line" style="<?php echo $sStyleReadLab_calificacion_nivel_5_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_5_); ?></span><span id="id_read_off_calificacion_nivel_5_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_5_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_5__obj" style="" id="id_sc_field_calificacion_nivel_5_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_5_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_5_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_5_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_5_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_6_']) && $this->nmgp_cmp_hidden['calificacion_6_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_6_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_6_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_6__line" id="hidden_field_data_calificacion_6_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_6_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_6__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_6_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_6_"]) &&  $this->nmgp_cmp_readonly["calificacion_6_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_6_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_6_) . "\">" . $calificacion_6_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_6_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_6_<?php echo $sc_seq_vert ?> css_calificacion_6__line" style="<?php echo $sStyleReadLab_calificacion_6_; ?>"><?php echo $this->form_encode_input($this->calificacion_6_); ?></span><span id="id_read_off_calificacion_6_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_6_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_6__obj" style="" id="id_sc_field_calificacion_6_<?php echo $sc_seq_vert ?>" type=text name="calificacion_6_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_6_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_6_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_6_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_6_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_6_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_6_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_6_']) && $this->nmgp_cmp_hidden['calificacion_nivel_6_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_6_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_6_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_6__line" id="hidden_field_data_calificacion_nivel_6_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_6_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_6__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_6_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_6_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_6_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_6_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_6_) . "\">" . $calificacion_nivel_6_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_6_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_6_<?php echo $sc_seq_vert ?> css_calificacion_nivel_6__line" style="<?php echo $sStyleReadLab_calificacion_nivel_6_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_6_); ?></span><span id="id_read_off_calificacion_nivel_6_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_6_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_6__obj" style="" id="id_sc_field_calificacion_nivel_6_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_6_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_6_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_6_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_6_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_7_']) && $this->nmgp_cmp_hidden['calificacion_7_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_7_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_7_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_7__line" id="hidden_field_data_calificacion_7_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_7_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_7__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_7_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_7_"]) &&  $this->nmgp_cmp_readonly["calificacion_7_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_7_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_7_) . "\">" . $calificacion_7_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_7_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_7_<?php echo $sc_seq_vert ?> css_calificacion_7__line" style="<?php echo $sStyleReadLab_calificacion_7_; ?>"><?php echo $this->form_encode_input($this->calificacion_7_); ?></span><span id="id_read_off_calificacion_7_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_7_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_7__obj" style="" id="id_sc_field_calificacion_7_<?php echo $sc_seq_vert ?>" type=text name="calificacion_7_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_7_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_7_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_7_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_7_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_7_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_7_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_7_']) && $this->nmgp_cmp_hidden['calificacion_nivel_7_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_7_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_7_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_7__line" id="hidden_field_data_calificacion_nivel_7_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_7_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_7__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_7_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_7_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_7_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_7_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_7_) . "\">" . $calificacion_nivel_7_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_7_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_7_<?php echo $sc_seq_vert ?> css_calificacion_nivel_7__line" style="<?php echo $sStyleReadLab_calificacion_nivel_7_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_7_); ?></span><span id="id_read_off_calificacion_nivel_7_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_7_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_7__obj" style="" id="id_sc_field_calificacion_nivel_7_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_7_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_7_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_7_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_7_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_8_']) && $this->nmgp_cmp_hidden['calificacion_8_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_8_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_8_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_8__line" id="hidden_field_data_calificacion_8_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_8_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_8__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_8_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_8_"]) &&  $this->nmgp_cmp_readonly["calificacion_8_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_8_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_8_) . "\">" . $calificacion_8_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_8_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_8_<?php echo $sc_seq_vert ?> css_calificacion_8__line" style="<?php echo $sStyleReadLab_calificacion_8_; ?>"><?php echo $this->form_encode_input($this->calificacion_8_); ?></span><span id="id_read_off_calificacion_8_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_8_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_8__obj" style="" id="id_sc_field_calificacion_8_<?php echo $sc_seq_vert ?>" type=text name="calificacion_8_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_8_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_8_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_8_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_8_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_8_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_8_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_8_']) && $this->nmgp_cmp_hidden['calificacion_nivel_8_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_8_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_8_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_8__line" id="hidden_field_data_calificacion_nivel_8_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_8_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_8__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_8_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_8_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_8_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_8_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_8_) . "\">" . $calificacion_nivel_8_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_8_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_8_<?php echo $sc_seq_vert ?> css_calificacion_nivel_8__line" style="<?php echo $sStyleReadLab_calificacion_nivel_8_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_8_); ?></span><span id="id_read_off_calificacion_nivel_8_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_8_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_8__obj" style="" id="id_sc_field_calificacion_nivel_8_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_8_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_8_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_8_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_8_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_9_']) && $this->nmgp_cmp_hidden['calificacion_9_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_9_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_9_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_9__line" id="hidden_field_data_calificacion_9_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_9_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_9__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_9_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_9_"]) &&  $this->nmgp_cmp_readonly["calificacion_9_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_9_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_9_) . "\">" . $calificacion_9_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_9_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_9_<?php echo $sc_seq_vert ?> css_calificacion_9__line" style="<?php echo $sStyleReadLab_calificacion_9_; ?>"><?php echo $this->form_encode_input($this->calificacion_9_); ?></span><span id="id_read_off_calificacion_9_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_9_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_9__obj" style="" id="id_sc_field_calificacion_9_<?php echo $sc_seq_vert ?>" type=text name="calificacion_9_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_9_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_9_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_9_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_9_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_9_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_9_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_nivel_9_']) && $this->nmgp_cmp_hidden['calificacion_nivel_9_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_nivel_9_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_9_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_nivel_9__line" id="hidden_field_data_calificacion_nivel_9_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_nivel_9_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_nivel_9__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_nivel_9_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_nivel_9_"]) &&  $this->nmgp_cmp_readonly["calificacion_nivel_9_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_nivel_9_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_9_) . "\">" . $calificacion_nivel_9_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_nivel_9_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_nivel_9_<?php echo $sc_seq_vert ?> css_calificacion_nivel_9__line" style="<?php echo $sStyleReadLab_calificacion_nivel_9_; ?>"><?php echo $this->form_encode_input($this->calificacion_nivel_9_); ?></span><span id="id_read_off_calificacion_nivel_9_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_nivel_9_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_nivel_9__obj" style="" id="id_sc_field_calificacion_nivel_9_<?php echo $sc_seq_vert ?>" type=text name="calificacion_nivel_9_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_nivel_9_) ?>"
 size=10 maxlength=10 alt="{datatype: 'text', maxLength: 10, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_nivel_9_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_nivel_9_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['calificacion_final_']) && $this->nmgp_cmp_hidden['calificacion_final_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="calificacion_final_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_final_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_calificacion_final__line" id="hidden_field_data_calificacion_final_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_calificacion_final_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_calificacion_final__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_calificacion_final_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["calificacion_final_"]) &&  $this->nmgp_cmp_readonly["calificacion_final_"] == "on") { 

 ?>
<input type="hidden" name="calificacion_final_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_final_) . "\">" . $calificacion_final_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_calificacion_final_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-calificacion_final_<?php echo $sc_seq_vert ?> css_calificacion_final__line" style="<?php echo $sStyleReadLab_calificacion_final_; ?>"><?php echo $this->form_encode_input($this->calificacion_final_); ?></span><span id="id_read_off_calificacion_final_<?php echo $sc_seq_vert ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_calificacion_final_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_calificacion_final__obj" style="" id="id_sc_field_calificacion_final_<?php echo $sc_seq_vert ?>" type=text name="calificacion_final_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($calificacion_final_) ?>"
 size=11 alt="{datatype: 'integer', maxLength: 11, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['calificacion_final_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['calificacion_final_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['calificacion_final_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_calificacion_final_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_calificacion_final_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_estudiante_id_))
       {
           $this->nmgp_cmp_readonly['estudiante_id_'] = $sCheckRead_estudiante_id_;
       }
       if ('display: none;' == $sStyleHidden_estudiante_id_)
       {
           $this->nmgp_cmp_hidden['estudiante_id_'] = 'off';
       }
       if (isset($sCheckRead_asignatura_id_))
       {
           $this->nmgp_cmp_readonly['asignatura_id_'] = $sCheckRead_asignatura_id_;
       }
       if ('display: none;' == $sStyleHidden_asignatura_id_)
       {
           $this->nmgp_cmp_hidden['asignatura_id_'] = 'off';
       }
       if (isset($sCheckRead_tipo_calificacion_id_))
       {
           $this->nmgp_cmp_readonly['tipo_calificacion_id_'] = $sCheckRead_tipo_calificacion_id_;
       }
       if ('display: none;' == $sStyleHidden_tipo_calificacion_id_)
       {
           $this->nmgp_cmp_hidden['tipo_calificacion_id_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_1_))
       {
           $this->nmgp_cmp_readonly['calificacion_1_'] = $sCheckRead_calificacion_1_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_1_)
       {
           $this->nmgp_cmp_hidden['calificacion_1_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_1_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_1_'] = $sCheckRead_calificacion_nivel_1_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_1_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_1_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_2_))
       {
           $this->nmgp_cmp_readonly['calificacion_2_'] = $sCheckRead_calificacion_2_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_2_)
       {
           $this->nmgp_cmp_hidden['calificacion_2_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_2_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_2_'] = $sCheckRead_calificacion_nivel_2_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_2_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_2_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_3_))
       {
           $this->nmgp_cmp_readonly['calificacion_3_'] = $sCheckRead_calificacion_3_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_3_)
       {
           $this->nmgp_cmp_hidden['calificacion_3_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_3_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_3_'] = $sCheckRead_calificacion_nivel_3_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_3_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_3_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_4_))
       {
           $this->nmgp_cmp_readonly['calificacion_4_'] = $sCheckRead_calificacion_4_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_4_)
       {
           $this->nmgp_cmp_hidden['calificacion_4_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_4_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_4_'] = $sCheckRead_calificacion_nivel_4_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_4_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_4_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_5_))
       {
           $this->nmgp_cmp_readonly['calificacion_5_'] = $sCheckRead_calificacion_5_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_5_)
       {
           $this->nmgp_cmp_hidden['calificacion_5_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_5_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_5_'] = $sCheckRead_calificacion_nivel_5_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_5_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_5_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_6_))
       {
           $this->nmgp_cmp_readonly['calificacion_6_'] = $sCheckRead_calificacion_6_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_6_)
       {
           $this->nmgp_cmp_hidden['calificacion_6_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_6_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_6_'] = $sCheckRead_calificacion_nivel_6_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_6_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_6_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_7_))
       {
           $this->nmgp_cmp_readonly['calificacion_7_'] = $sCheckRead_calificacion_7_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_7_)
       {
           $this->nmgp_cmp_hidden['calificacion_7_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_7_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_7_'] = $sCheckRead_calificacion_nivel_7_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_7_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_7_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_8_))
       {
           $this->nmgp_cmp_readonly['calificacion_8_'] = $sCheckRead_calificacion_8_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_8_)
       {
           $this->nmgp_cmp_hidden['calificacion_8_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_8_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_8_'] = $sCheckRead_calificacion_nivel_8_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_8_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_8_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_9_))
       {
           $this->nmgp_cmp_readonly['calificacion_9_'] = $sCheckRead_calificacion_9_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_9_)
       {
           $this->nmgp_cmp_hidden['calificacion_9_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_nivel_9_))
       {
           $this->nmgp_cmp_readonly['calificacion_nivel_9_'] = $sCheckRead_calificacion_nivel_9_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_nivel_9_)
       {
           $this->nmgp_cmp_hidden['calificacion_nivel_9_'] = 'off';
       }
       if (isset($sCheckRead_calificacion_final_))
       {
           $this->nmgp_cmp_readonly['calificacion_final_'] = $sCheckRead_calificacion_final_;
       }
       if ('display: none;' == $sStyleHidden_calificacion_final_)
       {
           $this->nmgp_cmp_hidden['calificacion_final_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_calificaciones = $guarda_form_vert_form_calificaciones;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div> 
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; text-align: center; font-weight: bold">
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColorMult">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['goto'] == "on")
      {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "birpara", "scBtnFn_sys_GridPermiteSeq()", "scBtnFn_sys_GridPermiteSeq()", "brec_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
?> 
   <input type="text" class="scFormToolbarInput" name="nmgp_rec_b" value="" style="width:25px;vertical-align: middle;"/> 
<?php 
      }
      if ($opcao_botoes != "novo" && $this->nmgp_botoes['qtline'] == "on")
      {
?> 
          <span class="<?php echo $this->css_css_toolbar_obj ?>" style="border: 0px;"><?php echo $this->Ini->Nm_lang['lang_btns_rows'] ?></span>
          <select class="scFormToolbarInput" name="nmgp_quant_linhas_b" onchange="document.F7.nmgp_max_line.value = this.value; document.F7.submit();"> 
<?php 
              $obj_sel = ($this->sc_max_reg == '10') ? " selected" : "";
?> 
           <option value="10" <?php echo $obj_sel ?>>10</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '20') ? " selected" : "";
?> 
           <option value="20" <?php echo $obj_sel ?>>20</option>
<?php 
              $obj_sel = ($this->sc_max_reg == '50') ? " selected" : "";
?> 
           <option value="50" <?php echo $obj_sel ?>>50</option>
          </select>
<?php 
      }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio_off", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-12", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-13", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna_off", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-14", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-15", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca_off", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-16", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-17", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal_off", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_off_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-18", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

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
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_calificaciones");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_calificaciones");
 parent.scAjaxDetailHeight("form_calificaciones", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_calificaciones", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_calificaciones", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_modal'])
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
			do_ajax_form_calificaciones_add_new_line(); return false;
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
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
	}
	function scBtnFn_sys_GridPermiteSeq() {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
			nm_navpage(document.F1.nmgp_rec_b.value, 'P'); document.F1.nmgp_rec_b.value = '';
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
	}
</script>
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
<?php 
 } 
} 
?> 
