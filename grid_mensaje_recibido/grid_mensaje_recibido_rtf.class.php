<?php

class grid_mensaje_recibido_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function __construct()
   {
      $this->nm_data   = new nm_data("es");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      if ($this->Ini->sc_export_ajax)
      {
          $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Rtf_f);
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

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_mensaje_recibido";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_mensaje_recibido.rtf";
   }

   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['rtf_name']))
      {
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['rtf_name']);
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_mensaje_recibido']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_mensaje_recibido']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_mensaje_recibido']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['where_pesq_filtro'];
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();
      $this->count_span = 0;

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['fecha_hora_enviado'])) ? $this->New_label['fecha_hora_enviado'] : "Fecha Hora Enviado"; 
          if ($Cada_col == "fecha_hora_enviado" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['enviado_por'])) ? $this->New_label['enviado_por'] : "Enviado Por"; 
          if ($Cada_col == "enviado_por" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['titulo'])) ? $this->New_label['titulo'] : "Asunto"; 
          if ($Cada_col == "titulo" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['colegio_id'])) ? $this->New_label['colegio_id'] : "Colegio Id"; 
          if ($Cada_col == "colegio_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['notificacion_id'])) ? $this->New_label['notificacion_id'] : "Notificacion Id"; 
          if ($Cada_col == "notificacion_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['enviado_a'])) ? $this->New_label['enviado_a'] : "Enviado A"; 
          if ($Cada_col == "enviado_a" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['mensaje'])) ? $this->New_label['mensaje'] : "Mensaje"; 
          if ($Cada_col == "mensaje" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              if (!NM_is_utf8($SC_Label))
              {
                  $SC_Label = sc_convert_encoding($SC_Label, "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['campos_busca'];
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
          $nmgp_select = "SELECT str_replace (convert(char(10),fecha_hora_enviado,102), '.', '-') + ' ' + convert(char(8),fecha_hora_enviado,20), enviado_por, titulo, colegio_id, notificacion_id, enviado_a, mensaje, str_replace (convert(char(10),fecha_hora_recibido,102), '.', '-') + ' ' + convert(char(8),fecha_hora_recibido,20) from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT fecha_hora_enviado, enviado_por, titulo, colegio_id, notificacion_id, enviado_a, mensaje, fecha_hora_recibido from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),fecha_hora_enviado,121), enviado_por, titulo, colegio_id, notificacion_id, enviado_a, mensaje, convert(char(23),fecha_hora_recibido,121) from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT fecha_hora_enviado, enviado_por, titulo, colegio_id, notificacion_id, enviado_a, mensaje, fecha_hora_recibido from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(fecha_hora_enviado, YEAR TO FRACTION), enviado_por, titulo, colegio_id, notificacion_id, enviado_a, mensaje, EXTEND(fecha_hora_recibido, YEAR TO FRACTION) from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT fecha_hora_enviado, enviado_por, titulo, colegio_id, notificacion_id, enviado_a, mensaje, fecha_hora_recibido from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['order_grid'];
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
         $this->Texto_tag .= "<tr>\r\n";
         $this->fecha_hora_enviado = $rs->fields[0] ;  
         $this->enviado_por = $rs->fields[1] ;  
         $this->titulo = $rs->fields[2] ;  
         $this->colegio_id = $rs->fields[3] ;  
         $this->colegio_id = (string)$this->colegio_id;
         $this->notificacion_id = $rs->fields[4] ;  
         $this->notificacion_id = (string)$this->notificacion_id;
         $this->enviado_a = $rs->fields[5] ;  
         $this->mensaje = $rs->fields[6] ;  
         $this->fecha_hora_recibido = $rs->fields[7] ;  
         //----- lookup - enviado_por
         $this->look_enviado_por = $this->enviado_por; 
         $this->Lookup->lookup_enviado_por($this->look_enviado_por, $this->enviado_por) ; 
         $this->look_enviado_por = ($this->look_enviado_por == "&nbsp;") ? "" : $this->look_enviado_por; 
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['grid_mensaje_recibido']['contr_erro'] = 'on';
 if ($this->fecha_hora_recibido == null) {
	$this->NM_field_style["enviado_por"] = "background-color:;font-weight:bold;";
	$this->NM_field_style["titulo"] = "background-color:;font-weight:bold;";
	$this->NM_field_style["fecha_hora_recibido"] = "background-color:;font-weight:bold;";

}
$_SESSION['scriptcase']['grid_mensaje_recibido']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";
      $rs->Close();
   }
   //----- fecha_hora_enviado
   function NM_export_fecha_hora_enviado()
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
         if (!NM_is_utf8($this->fecha_hora_enviado))
         {
             $this->fecha_hora_enviado = sc_convert_encoding($this->fecha_hora_enviado, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->fecha_hora_enviado = str_replace('<', '&lt;', $this->fecha_hora_enviado);
         $this->fecha_hora_enviado = str_replace('>', '&gt;', $this->fecha_hora_enviado);
         $this->Texto_tag .= "<td>" . $this->fecha_hora_enviado . "</td>\r\n";
   }
   //----- enviado_por
   function NM_export_enviado_por()
   {
         $this->look_enviado_por = html_entity_decode($this->look_enviado_por, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->look_enviado_por = strip_tags($this->look_enviado_por);
         if (!NM_is_utf8($this->look_enviado_por))
         {
             $this->look_enviado_por = sc_convert_encoding($this->look_enviado_por, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->look_enviado_por = str_replace('<', '&lt;', $this->look_enviado_por);
         $this->look_enviado_por = str_replace('>', '&gt;', $this->look_enviado_por);
         $this->Texto_tag .= "<td>" . $this->look_enviado_por . "</td>\r\n";
   }
   //----- titulo
   function NM_export_titulo()
   {
         $this->titulo = html_entity_decode($this->titulo, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->titulo = strip_tags($this->titulo);
         if (!NM_is_utf8($this->titulo))
         {
             $this->titulo = sc_convert_encoding($this->titulo, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->titulo = str_replace('<', '&lt;', $this->titulo);
         $this->titulo = str_replace('>', '&gt;', $this->titulo);
         $this->Texto_tag .= "<td>" . $this->titulo . "</td>\r\n";
   }
   //----- colegio_id
   function NM_export_colegio_id()
   {
         nmgp_Form_Num_Val($this->colegio_id, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->colegio_id))
         {
             $this->colegio_id = sc_convert_encoding($this->colegio_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->colegio_id = str_replace('<', '&lt;', $this->colegio_id);
         $this->colegio_id = str_replace('>', '&gt;', $this->colegio_id);
         $this->Texto_tag .= "<td>" . $this->colegio_id . "</td>\r\n";
   }
   //----- notificacion_id
   function NM_export_notificacion_id()
   {
         nmgp_Form_Num_Val($this->notificacion_id, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         if (!NM_is_utf8($this->notificacion_id))
         {
             $this->notificacion_id = sc_convert_encoding($this->notificacion_id, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->notificacion_id = str_replace('<', '&lt;', $this->notificacion_id);
         $this->notificacion_id = str_replace('>', '&gt;', $this->notificacion_id);
         $this->Texto_tag .= "<td>" . $this->notificacion_id . "</td>\r\n";
   }
   //----- enviado_a
   function NM_export_enviado_a()
   {
         $this->enviado_a = html_entity_decode($this->enviado_a, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->enviado_a = strip_tags($this->enviado_a);
         if (!NM_is_utf8($this->enviado_a))
         {
             $this->enviado_a = sc_convert_encoding($this->enviado_a, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->enviado_a = str_replace('<', '&lt;', $this->enviado_a);
         $this->enviado_a = str_replace('>', '&gt;', $this->enviado_a);
         $this->Texto_tag .= "<td>" . $this->enviado_a . "</td>\r\n";
   }
   //----- mensaje
   function NM_export_mensaje()
   {
         $this->mensaje = html_entity_decode($this->mensaje, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->mensaje = strip_tags($this->mensaje);
         if (!NM_is_utf8($this->mensaje))
         {
             $this->mensaje = sc_convert_encoding($this->mensaje, "UTF-8", $_SESSION['scriptcase']['charset']);
         }
         $this->mensaje = str_replace('<', '&lt;', $this->mensaje);
         $this->mensaje = str_replace('>', '&gt;', $this->mensaje);
         $this->Texto_tag .= "<td>" . $this->mensaje . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $this->Rtf_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $rtf_f       = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_mensaje_recibido'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_title'] ?> notificaciones :: RTF</TITLE>
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
   <td class="scExportTitle" style="height: 25px">RTF</td>
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
<form name="Fdown" method="get" action="grid_mensaje_recibido_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_mensaje_recibido"> 
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
