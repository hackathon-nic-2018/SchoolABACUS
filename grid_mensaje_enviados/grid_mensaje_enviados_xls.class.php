<?php

class grid_mensaje_enviados_xls
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Xls_dados;
   var $Xls_workbook;
   var $Xls_col;
   var $Xls_row;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();
   var $Arquivo;
   var $Tit_doc;
   //---- 
   function __construct()
   {
   }

   //---- 
   function monta_xls()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida']) {
          if ($this->Ini->sc_export_ajax)
          {
              $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Xls_f);
              $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
              $Temp = ob_get_clean();
              if ($Temp !== false && trim($Temp) != "")
              {
                  $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
              }
              $oJson = new Services_JSON();
              echo $oJson->encode($this->Arr_result);
              exit;
          }
          else
          {
              $this->monta_html();
          }
      }
      else { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['opcao'] = "";
      }
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $this->Xls_row = 1;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
      { 
          set_include_path(get_include_path() . PATH_SEPARATOR . $this->Ini->path_third . '/phpexcel/');
          require_once $this->Ini->path_third . '/phpexcel/PHPExcel.php';
          require_once $this->Ini->path_third . '/phpexcel/PHPExcel/IOFactory.php';
          require_once $this->Ini->path_third . '/phpexcel/PHPExcel/Cell/AdvancedValueBinder.php';
      } 
      $orig_form_dt = strtoupper($_SESSION['scriptcase']['reg_conf']['date_format']);
      $this->SC_date_conf_region = "";
      for ($i = 0; $i < 8; $i++)
      {
          if ($i > 0 && substr($orig_form_dt, $i, 1) != substr($this->SC_date_conf_region, -1, 1)) {
              $this->SC_date_conf_region .= $_SESSION['scriptcase']['reg_conf']['date_sep'];
          }
          $this->SC_date_conf_region .= substr($orig_form_dt, $i, 1);
      }
      $this->Xls_tp     = ".xlsx";
      $this->Xls_col    = 0;
      $this->nm_data    = new nm_data("es");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
      { 
          $this->Arquivo    = "sc_xls";
          $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
          $this->Arquivo   .= "_grid_mensaje_enviados";
          $this->Arquivo   .= $this->Xls_tp;
          $this->Tit_doc    = "grid_mensaje_enviados" . $this->Xls_tp;
          $this->Xls_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
          PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );;
          $this->Xls_dados = new PHPExcel();
          $this->Xls_dados->setActiveSheetIndex(0);
          $this->Nm_ActiveSheet = $this->Xls_dados->getActiveSheet();
          if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
          {
              $this->Nm_ActiveSheet->setRightToLeft(true);
          }
      }
   }

   //----- 
   function grava_arquivo()
   {
      global $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['xls_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['xls_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['xls_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['xls_name']);
          $this->Xls_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_mensaje_enviados']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_mensaje_enviados']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_mensaje_enviados']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['where_pesq_filtro'];
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();
      $this->count_span = 0;

      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['fecha_hora_enviado'])) ? $this->New_label['fecha_hora_enviado'] : "Fecha Hora Enviado"; 
          if ($Cada_col == "fecha_hora_enviado" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['enviado_a'])) ? $this->New_label['enviado_a'] : "Enviado A"; 
          if ($Cada_col == "enviado_a" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['titulo'])) ? $this->New_label['titulo'] : "Asunto"; 
          if ($Cada_col == "titulo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['fecha_hora_recibido'])) ? $this->New_label['fecha_hora_recibido'] : "Fecha Hora Recibido"; 
          if ($Cada_col == "fecha_hora_recibido" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['colegio_id'])) ? $this->New_label['colegio_id'] : "Colegio Id"; 
          if ($Cada_col == "colegio_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['notificacion_id'])) ? $this->New_label['notificacion_id'] : "Notificacion Id"; 
          if ($Cada_col == "notificacion_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['enviado_por'])) ? $this->New_label['enviado_por'] : "Enviado Por"; 
          if ($Cada_col == "enviado_por" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['mensaje'])) ? $this->New_label['mensaje'] : "Mensaje"; 
          if ($Cada_col == "mensaje" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                  $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $SC_Label);
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida_label']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida_label'])
      { 
          $_SESSION['scriptcase']['export_return'] = $this->arr_export;
          return;
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->enviado_a = $Busca_temp['enviado_a']; 
          $tmp_pos = strpos($this->enviado_a, "##@@");
          if ($tmp_pos !== false && !is_array($this->enviado_a))
          {
              $this->enviado_a = substr($this->enviado_a, 0, $tmp_pos);
          }
          $this->colegio_id = $Busca_temp['colegio_id']; 
          $tmp_pos = strpos($this->colegio_id, "##@@");
          if ($tmp_pos !== false && !is_array($this->colegio_id))
          {
              $this->colegio_id = substr($this->colegio_id, 0, $tmp_pos);
          }
          $this->notificacion_id = $Busca_temp['notificacion_id']; 
          $tmp_pos = strpos($this->notificacion_id, "##@@");
          if ($tmp_pos !== false && !is_array($this->notificacion_id))
          {
              $this->notificacion_id = substr($this->notificacion_id, 0, $tmp_pos);
          }
          $this->enviado_por = $Busca_temp['enviado_por']; 
          $tmp_pos = strpos($this->enviado_por, "##@@");
          if ($tmp_pos !== false && !is_array($this->enviado_por))
          {
              $this->enviado_por = substr($this->enviado_por, 0, $tmp_pos);
          }
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT str_replace (convert(char(10),fecha_hora_enviado,102), '.', '-') + ' ' + convert(char(8),fecha_hora_enviado,20), enviado_a, titulo, str_replace (convert(char(10),fecha_hora_recibido,102), '.', '-') + ' ' + convert(char(8),fecha_hora_recibido,20), colegio_id, notificacion_id, enviado_por, mensaje from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT fecha_hora_enviado, enviado_a, titulo, fecha_hora_recibido, colegio_id, notificacion_id, enviado_por, mensaje from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),fecha_hora_enviado,121), enviado_a, titulo, convert(char(23),fecha_hora_recibido,121), colegio_id, notificacion_id, enviado_por, mensaje from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT fecha_hora_enviado, enviado_a, titulo, fecha_hora_recibido, colegio_id, notificacion_id, enviado_por, mensaje from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(fecha_hora_enviado, YEAR TO FRACTION), enviado_a, titulo, EXTEND(fecha_hora_recibido, YEAR TO FRACTION), colegio_id, notificacion_id, enviado_por, mensaje from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT fecha_hora_enviado, enviado_a, titulo, fecha_hora_recibido, colegio_id, notificacion_id, enviado_por, mensaje from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->SC_seq_register = 0;
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         $this->Xls_col = 0;
         $this->Xls_row++;
         $this->fecha_hora_enviado = $rs->fields[0] ;  
         $this->enviado_a = $rs->fields[1] ;  
         $this->titulo = $rs->fields[2] ;  
         $this->fecha_hora_recibido = $rs->fields[3] ;  
         $this->colegio_id = $rs->fields[4] ;  
         $this->colegio_id = (string)$this->colegio_id;
         $this->notificacion_id = $rs->fields[5] ;  
         $this->notificacion_id = (string)$this->notificacion_id;
         $this->enviado_por = $rs->fields[6] ;  
         $this->mensaje = $rs->fields[7] ;  
         //----- lookup - enviado_a
         $this->look_enviado_a = $this->enviado_a; 
         $this->Lookup->lookup_enviado_a($this->look_enviado_a, $this->enviado_a) ; 
         $this->look_enviado_a = ($this->look_enviado_a == "&nbsp;") ? "" : $this->look_enviado_a; 
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
                { 
                    $NM_func_exp = "NM_sub_cons_" . $Cada_col;
                    $this->$NM_func_exp();
                } 
                else 
                { 
                    $NM_func_exp = "NM_export_" . $Cada_col;
                    $this->$NM_func_exp();
                } 
            } 
         } 
         if (isset($this->NM_Row_din) && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
         { 
             foreach ($this->NM_Row_din as $row => $height) 
             { 
                 $this->Nm_ActiveSheet->getRowDimension($row)->setRowHeight($height);
             } 
         } 
         $rs->MoveNext();
      }
      if (isset($this->NM_Col_din) && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
      { 
          foreach ($this->NM_Col_din as $col => $width)
          { 
              $this->Nm_ActiveSheet->getColumnDimension($col)->setWidth($width / 5);
          } 
      } 
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['embutida'])
      { 
          $objWriter = new PHPExcel_Writer_Excel2007($this->Xls_dados);
          $objWriter->save($this->Xls_f);
      } 
      else 
      { 
          $_SESSION['scriptcase']['export_return'] = $this->arr_export;
      } 
      $rs->Close();
   }
   //----- fecha_hora_enviado
   function NM_export_fecha_hora_enviado()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
      if (!empty($this->fecha_hora_enviado))
      {
         if (substr($this->fecha_hora_enviado, 10, 1) == "-") 
         { 
             $this->fecha_hora_enviado = substr($this->fecha_hora_enviado, 0, 10) . " " . substr($this->fecha_hora_enviado, 11);
         } 
         if (substr($this->fecha_hora_enviado, 13, 1) == ".") 
         { 
            $this->fecha_hora_enviado = substr($this->fecha_hora_enviado, 0, 13) . ":" . substr($this->fecha_hora_enviado, 14, 2) . ":" . substr($this->fecha_hora_enviado, 17);
         } 
         $conteudo_x =  $this->fecha_hora_enviado;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
         { 
             $this->nm_data->SetaData($this->fecha_hora_enviado, "YYYY-MM-DD HH:II:SS  ");
             $this->fecha_hora_enviado = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
      }
         if (!NM_is_utf8($this->fecha_hora_enviado))
         {
             $this->fecha_hora_enviado = sc_convert_encoding($this->fecha_hora_enviado, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->fecha_hora_enviado, PHPExcel_Cell_DataType::TYPE_STRING);
         $this->Xls_col++;
   }
   //----- enviado_a
   function NM_export_enviado_a()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         $this->look_enviado_a = html_entity_decode($this->look_enviado_a, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->look_enviado_a = strip_tags($this->look_enviado_a);
         if (!NM_is_utf8($this->look_enviado_a))
         {
             $this->look_enviado_a = sc_convert_encoding($this->look_enviado_a, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->look_enviado_a, PHPExcel_Cell_DataType::TYPE_STRING);
         $this->Xls_col++;
   }
   //----- titulo
   function NM_export_titulo()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         $this->titulo = html_entity_decode($this->titulo, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->titulo = strip_tags($this->titulo);
         if (!NM_is_utf8($this->titulo))
         {
             $this->titulo = sc_convert_encoding($this->titulo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->titulo, PHPExcel_Cell_DataType::TYPE_STRING);
         $this->Xls_col++;
   }
   //----- fecha_hora_recibido
   function NM_export_fecha_hora_recibido()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
      if (!empty($this->fecha_hora_recibido))
      {
         if (substr($this->fecha_hora_recibido, 10, 1) == "-") 
         { 
             $this->fecha_hora_recibido = substr($this->fecha_hora_recibido, 0, 10) . " " . substr($this->fecha_hora_recibido, 11);
         } 
         if (substr($this->fecha_hora_recibido, 13, 1) == ".") 
         { 
            $this->fecha_hora_recibido = substr($this->fecha_hora_recibido, 0, 13) . ":" . substr($this->fecha_hora_recibido, 14, 2) . ":" . substr($this->fecha_hora_recibido, 17);
         } 
         $conteudo_x =  $this->fecha_hora_recibido;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
         { 
             $this->nm_data->SetaData($this->fecha_hora_recibido, "YYYY-MM-DD HH:II:SS  ");
             $this->fecha_hora_recibido = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
      }
         if (!NM_is_utf8($this->fecha_hora_recibido))
         {
             $this->fecha_hora_recibido = sc_convert_encoding($this->fecha_hora_recibido, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->fecha_hora_recibido, PHPExcel_Cell_DataType::TYPE_STRING);
         $this->Xls_col++;
   }
   //----- colegio_id
   function NM_export_colegio_id()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!NM_is_utf8($this->colegio_id))
         {
             $this->colegio_id = sc_convert_encoding($this->colegio_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
         if (is_numeric($this->colegio_id))
         {
             $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getNumberFormat()->setFormatCode('###0');
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->colegio_id);
         $this->Xls_col++;
   }
   //----- notificacion_id
   function NM_export_notificacion_id()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!NM_is_utf8($this->notificacion_id))
         {
             $this->notificacion_id = sc_convert_encoding($this->notificacion_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
         if (is_numeric($this->notificacion_id))
         {
             $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getNumberFormat()->setFormatCode('###0');
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->notificacion_id);
         $this->Xls_col++;
   }
   //----- enviado_por
   function NM_export_enviado_por()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         $this->enviado_por = html_entity_decode($this->enviado_por, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->enviado_por = strip_tags($this->enviado_por);
         if (!NM_is_utf8($this->enviado_por))
         {
             $this->enviado_por = sc_convert_encoding($this->enviado_por, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->enviado_por, PHPExcel_Cell_DataType::TYPE_STRING);
         $this->Xls_col++;
   }
   //----- mensaje
   function NM_export_mensaje()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         $this->mensaje = html_entity_decode($this->mensaje, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->mensaje = strip_tags($this->mensaje);
         if (!NM_is_utf8($this->mensaje))
         {
             $this->mensaje = sc_convert_encoding($this->mensaje, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->mensaje, PHPExcel_Cell_DataType::TYPE_STRING);
         $this->Xls_col++;
   }
   //----- fecha_hora_enviado
   function NM_sub_cons_fecha_hora_enviado()
   {
      if (!empty($this->fecha_hora_enviado))
      {
         if (substr($this->fecha_hora_enviado, 10, 1) == "-") 
         { 
             $this->fecha_hora_enviado = substr($this->fecha_hora_enviado, 0, 10) . " " . substr($this->fecha_hora_enviado, 11);
         } 
         if (substr($this->fecha_hora_enviado, 13, 1) == ".") 
         { 
            $this->fecha_hora_enviado = substr($this->fecha_hora_enviado, 0, 13) . ":" . substr($this->fecha_hora_enviado, 14, 2) . ":" . substr($this->fecha_hora_enviado, 17);
         } 
         $conteudo_x =  $this->fecha_hora_enviado;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
         { 
             $this->nm_data->SetaData($this->fecha_hora_enviado, "YYYY-MM-DD HH:II:SS  ");
             $this->fecha_hora_enviado = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
      }
         if (!NM_is_utf8($this->fecha_hora_enviado))
         {
             $this->fecha_hora_enviado = sc_convert_encoding($this->fecha_hora_enviado, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->fecha_hora_enviado;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- enviado_a
   function NM_sub_cons_enviado_a()
   {
         $this->look_enviado_a = html_entity_decode($this->look_enviado_a, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->look_enviado_a = strip_tags($this->look_enviado_a);
         if (!NM_is_utf8($this->look_enviado_a))
         {
             $this->look_enviado_a = sc_convert_encoding($this->look_enviado_a, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->look_enviado_a;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- titulo
   function NM_sub_cons_titulo()
   {
         $this->titulo = html_entity_decode($this->titulo, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->titulo = strip_tags($this->titulo);
         if (!NM_is_utf8($this->titulo))
         {
             $this->titulo = sc_convert_encoding($this->titulo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->titulo;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- fecha_hora_recibido
   function NM_sub_cons_fecha_hora_recibido()
   {
      if (!empty($this->fecha_hora_recibido))
      {
         if (substr($this->fecha_hora_recibido, 10, 1) == "-") 
         { 
             $this->fecha_hora_recibido = substr($this->fecha_hora_recibido, 0, 10) . " " . substr($this->fecha_hora_recibido, 11);
         } 
         if (substr($this->fecha_hora_recibido, 13, 1) == ".") 
         { 
            $this->fecha_hora_recibido = substr($this->fecha_hora_recibido, 0, 13) . ":" . substr($this->fecha_hora_recibido, 14, 2) . ":" . substr($this->fecha_hora_recibido, 17);
         } 
         $conteudo_x =  $this->fecha_hora_recibido;
         nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD HH:II:SS");
         if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
         { 
             $this->nm_data->SetaData($this->fecha_hora_recibido, "YYYY-MM-DD HH:II:SS  ");
             $this->fecha_hora_recibido = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DH", "ddmmaaaa;hhiiss"));
         } 
      }
         if (!NM_is_utf8($this->fecha_hora_recibido))
         {
             $this->fecha_hora_recibido = sc_convert_encoding($this->fecha_hora_recibido, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->fecha_hora_recibido;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- colegio_id
   function NM_sub_cons_colegio_id()
   {
         if (!NM_is_utf8($this->colegio_id))
         {
             $this->colegio_id = sc_convert_encoding($this->colegio_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->colegio_id;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "###0";
         $this->Xls_col++;
   }
   //----- notificacion_id
   function NM_sub_cons_notificacion_id()
   {
         if (!NM_is_utf8($this->notificacion_id))
         {
             $this->notificacion_id = sc_convert_encoding($this->notificacion_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->notificacion_id;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "###0";
         $this->Xls_col++;
   }
   //----- enviado_por
   function NM_sub_cons_enviado_por()
   {
         $this->enviado_por = html_entity_decode($this->enviado_por, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->enviado_por = strip_tags($this->enviado_por);
         if (!NM_is_utf8($this->enviado_por))
         {
             $this->enviado_por = sc_convert_encoding($this->enviado_por, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->enviado_por;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- mensaje
   function NM_sub_cons_mensaje()
   {
         $this->mensaje = html_entity_decode($this->mensaje, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->mensaje = strip_tags($this->mensaje);
         if (!NM_is_utf8($this->mensaje))
         {
             $this->mensaje = sc_convert_encoding($this->mensaje, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->mensaje;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }

   function calc_cell($col)
   {
       $arr_alfa = array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
       $val_ret = "";
       $result = $col + 1;
       while ($result > 26)
       {
           $cel      = $result % 26;
           $result   = $result / 26;
           if ($cel == 0)
           {
               $cel    = 26;
               $result--;
           }
           $val_ret = $arr_alfa[$cel] . $val_ret;
       }
       $val_ret = $arr_alfa[$result] . $val_ret;
       return $val_ret;
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT")
       {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT")
       {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       nm_conv_form_data($dt_out, $form_in, $form_out);
       return $dt_out;
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['xls_file']);
      if (is_file($this->Xls_f))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados']['xls_file'] = $this->Xls_f;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_enviados'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_title'] ?> notificaciones :: Excel</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">XLS</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_mensaje_enviados_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_mensaje_enviados"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="script_case_session" value="<?php echo NM_encode_input(session_id()); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont2 >= $tam_campo)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
}

?>
