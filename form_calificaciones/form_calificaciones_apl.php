<?php
//
class form_calificaciones_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'navSummary'        => array(),
                                'navPage'           => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => '',
                                'ajaxMessage'       => '',
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $colegio_id_;
   var $colegio_id__1;
   var $periodo_id_;
   var $curso_id_;
   var $estudiante_id_;
   var $asignatura_id_;
   var $tipo_calificacion_id_;
   var $calificacion_final_;
   var $descripcion_1_;
   var $calificacion_1_;
   var $calificacion_nivel_1_;
   var $publicada_1_;
   var $descripcion_2_;
   var $calificacion_2_;
   var $calificacion_nivel_2_;
   var $publicada_2_;
   var $descripcion_3_;
   var $calificacion_3_;
   var $calificacion_nivel_3_;
   var $publicada_3_;
   var $descripcion_4_;
   var $calificacion_4_;
   var $calificacion_nivel_4_;
   var $publicada_4_;
   var $descripcion_5_;
   var $calificacion_5_;
   var $calificacion_nivel_5_;
   var $publicada_5_;
   var $descripcion_6_;
   var $calificacion_6_;
   var $calificacion_nivel_6_;
   var $publicada_6_;
   var $descripcion_7_;
   var $calificacion_7_;
   var $calificacion_nivel_7_;
   var $publicada_7_;
   var $descripcion_8_;
   var $calificacion_8_;
   var $calificacion_nivel_8_;
   var $publicada_8_;
   var $descripcion_9_;
   var $calificacion_9_;
   var $calificacion_nivel_9_;
   var $publicada_9_;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $sc_teve_incl = false;
   var $sc_teve_excl = false;
   var $sc_teve_alt  = false;
   var $sc_after_all_insert = false;
   var $sc_after_all_update = false;
   var $sc_after_all_delete = false;
   var $sc_max_reg = 10; 
   var $sc_max_reg_incl = 10; 
   var $form_vert_form_calificaciones = array();
   var $form_paginacao = 'total';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = true;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['asignatura_id_']))
          {
              $this->asignatura_id_ = $this->NM_ajax_info['param']['asignatura_id_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_1_']))
          {
              $this->calificacion_1_ = $this->NM_ajax_info['param']['calificacion_1_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_2_']))
          {
              $this->calificacion_2_ = $this->NM_ajax_info['param']['calificacion_2_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_3_']))
          {
              $this->calificacion_3_ = $this->NM_ajax_info['param']['calificacion_3_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_4_']))
          {
              $this->calificacion_4_ = $this->NM_ajax_info['param']['calificacion_4_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_5_']))
          {
              $this->calificacion_5_ = $this->NM_ajax_info['param']['calificacion_5_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_6_']))
          {
              $this->calificacion_6_ = $this->NM_ajax_info['param']['calificacion_6_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_7_']))
          {
              $this->calificacion_7_ = $this->NM_ajax_info['param']['calificacion_7_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_8_']))
          {
              $this->calificacion_8_ = $this->NM_ajax_info['param']['calificacion_8_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_9_']))
          {
              $this->calificacion_9_ = $this->NM_ajax_info['param']['calificacion_9_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_final_']))
          {
              $this->calificacion_final_ = $this->NM_ajax_info['param']['calificacion_final_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_1_']))
          {
              $this->calificacion_nivel_1_ = $this->NM_ajax_info['param']['calificacion_nivel_1_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_2_']))
          {
              $this->calificacion_nivel_2_ = $this->NM_ajax_info['param']['calificacion_nivel_2_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_3_']))
          {
              $this->calificacion_nivel_3_ = $this->NM_ajax_info['param']['calificacion_nivel_3_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_4_']))
          {
              $this->calificacion_nivel_4_ = $this->NM_ajax_info['param']['calificacion_nivel_4_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_5_']))
          {
              $this->calificacion_nivel_5_ = $this->NM_ajax_info['param']['calificacion_nivel_5_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_6_']))
          {
              $this->calificacion_nivel_6_ = $this->NM_ajax_info['param']['calificacion_nivel_6_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_7_']))
          {
              $this->calificacion_nivel_7_ = $this->NM_ajax_info['param']['calificacion_nivel_7_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_8_']))
          {
              $this->calificacion_nivel_8_ = $this->NM_ajax_info['param']['calificacion_nivel_8_'];
          }
          if (isset($this->NM_ajax_info['param']['calificacion_nivel_9_']))
          {
              $this->calificacion_nivel_9_ = $this->NM_ajax_info['param']['calificacion_nivel_9_'];
          }
          if (isset($this->NM_ajax_info['param']['colegio_id_']))
          {
              $this->colegio_id_ = $this->NM_ajax_info['param']['colegio_id_'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['curso_id_']))
          {
              $this->curso_id_ = $this->NM_ajax_info['param']['curso_id_'];
          }
          if (isset($this->NM_ajax_info['param']['estudiante_id_']))
          {
              $this->estudiante_id_ = $this->NM_ajax_info['param']['estudiante_id_'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_row']))
          {
              $this->nmgp_refresh_row = $this->NM_ajax_info['param']['nmgp_refresh_row'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['periodo_id_']))
          {
              $this->periodo_id_ = $this->NM_ajax_info['param']['periodo_id_'];
          }
          if (isset($this->NM_ajax_info['param']['sc_clone']))
          {
              $this->sc_clone = $this->NM_ajax_info['param']['sc_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_clone']))
          {
              $this->sc_seq_clone = $this->NM_ajax_info['param']['sc_seq_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_vert']))
          {
              $this->sc_seq_vert = $this->NM_ajax_info['param']['sc_seq_vert'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['tipo_calificacion_id_']))
          {
              $this->tipo_calificacion_id_ = $this->NM_ajax_info['param']['tipo_calificacion_id_'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->sc_conv_var = array();
      $this->sc_conv_var['colegio_id'] = "colegio_id_";
      $this->sc_conv_var['periodo_id'] = "periodo_id_";
      $this->sc_conv_var['curso_id'] = "curso_id_";
      $this->sc_conv_var['estudiante_id'] = "estudiante_id_";
      $this->sc_conv_var['asignatura_id'] = "asignatura_id_";
      $this->sc_conv_var['tipo_calificacion_id'] = "tipo_calificacion_id_";
      $this->sc_conv_var['calificacion_final'] = "calificacion_final_";
      $this->sc_conv_var['descripcion_1'] = "descripcion_1_";
      $this->sc_conv_var['calificacion_1'] = "calificacion_1_";
      $this->sc_conv_var['calificacion_nivel_1'] = "calificacion_nivel_1_";
      $this->sc_conv_var['publicada_1'] = "publicada_1_";
      $this->sc_conv_var['descripcion_2'] = "descripcion_2_";
      $this->sc_conv_var['calificacion_2'] = "calificacion_2_";
      $this->sc_conv_var['calificacion_nivel_2'] = "calificacion_nivel_2_";
      $this->sc_conv_var['publicada_2'] = "publicada_2_";
      $this->sc_conv_var['descripcion_3'] = "descripcion_3_";
      $this->sc_conv_var['calificacion_3'] = "calificacion_3_";
      $this->sc_conv_var['calificacion_nivel_3'] = "calificacion_nivel_3_";
      $this->sc_conv_var['publicada_3'] = "publicada_3_";
      $this->sc_conv_var['descripcion_4'] = "descripcion_4_";
      $this->sc_conv_var['calificacion_4'] = "calificacion_4_";
      $this->sc_conv_var['calificacion_nivel_4'] = "calificacion_nivel_4_";
      $this->sc_conv_var['publicada_4'] = "publicada_4_";
      $this->sc_conv_var['descripcion_5'] = "descripcion_5_";
      $this->sc_conv_var['calificacion_5'] = "calificacion_5_";
      $this->sc_conv_var['calificacion_nivel_5'] = "calificacion_nivel_5_";
      $this->sc_conv_var['publicada_5'] = "publicada_5_";
      $this->sc_conv_var['descripcion_6'] = "descripcion_6_";
      $this->sc_conv_var['calificacion_6'] = "calificacion_6_";
      $this->sc_conv_var['calificacion_nivel_6'] = "calificacion_nivel_6_";
      $this->sc_conv_var['publicada_6'] = "publicada_6_";
      $this->sc_conv_var['descripcion_7'] = "descripcion_7_";
      $this->sc_conv_var['calificacion_7'] = "calificacion_7_";
      $this->sc_conv_var['calificacion_nivel_7'] = "calificacion_nivel_7_";
      $this->sc_conv_var['publicada_7'] = "publicada_7_";
      $this->sc_conv_var['descripcion_8'] = "descripcion_8_";
      $this->sc_conv_var['calificacion_8'] = "calificacion_8_";
      $this->sc_conv_var['calificacion_nivel_8'] = "calificacion_nivel_8_";
      $this->sc_conv_var['publicada_8'] = "publicada_8_";
      $this->sc_conv_var['descripcion_9'] = "descripcion_9_";
      $this->sc_conv_var['calificacion_9'] = "calificacion_9_";
      $this->sc_conv_var['calificacion_nivel_9'] = "calificacion_nivel_9_";
      $this->sc_conv_var['publicada_9'] = "publicada_9_";
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (isset($this->sc_conv_var[$nmgp_campo]))
               {
                   $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
               {
                   $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (isset($this->sc_conv_var[$nmgp_var]))
               {
                   $nmgp_var = $this->sc_conv_var[$nmgp_var];
               }
               elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
               {
                   $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->vglo_colegio) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['vglo_colegio'] = $this->vglo_colegio;
      }
      if (isset($this->vglo_periodo) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['vglo_periodo'] = $this->vglo_periodo;
      }
      if (isset($this->vglo_curso) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['vglo_curso'] = $this->vglo_curso;
      }
      if (isset($_POST["vglo_colegio"]) && isset($this->vglo_colegio)) 
      {
          $_SESSION['vglo_colegio'] = $this->vglo_colegio;
      }
      if (isset($_POST["vglo_periodo"]) && isset($this->vglo_periodo)) 
      {
          $_SESSION['vglo_periodo'] = $this->vglo_periodo;
      }
      if (isset($_POST["vglo_curso"]) && isset($this->vglo_curso)) 
      {
          $_SESSION['vglo_curso'] = $this->vglo_curso;
      }
      if (isset($_GET["vglo_colegio"]) && isset($this->vglo_colegio)) 
      {
          $_SESSION['vglo_colegio'] = $this->vglo_colegio;
      }
      if (isset($_GET["vglo_periodo"]) && isset($this->vglo_periodo)) 
      {
          $_SESSION['vglo_periodo'] = $this->vglo_periodo;
      }
      if (isset($_GET["vglo_curso"]) && isset($this->vglo_curso)) 
      {
          $_SESSION['vglo_curso'] = $this->vglo_curso;
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_calificaciones']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_calificaciones']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $this->NM_where_filter = "";
          $tem_where_parms       = false;
          $nmgp_parms = NM_decode_input($nmgp_parms);
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_calificaciones($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 if ($cadapar[0] == "colegio_id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "colegio_id = " . $this->colegio_id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
                 if ($cadapar[0] == "periodo_id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "periodo_id = " . $this->periodo_id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
                 if ($cadapar[0] == "curso_id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "curso_id = " . $this->curso_id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
                 if ($cadapar[0] == "estudiante_id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "estudiante_id = " . $this->estudiante_id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
                 if ($cadapar[0] == "asignatura_id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "asignatura_id = " . $this->asignatura_id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
             }
             $ix++;
          }
          if (isset($this->vglo_colegio)) 
          {
              $_SESSION['vglo_colegio'] = $this->vglo_colegio;
          }
          if (isset($this->vglo_periodo)) 
          {
              $_SESSION['vglo_periodo'] = $this->vglo_periodo;
          }
          if (isset($this->vglo_curso)) 
          {
              $_SESSION['vglo_curso'] = $this->vglo_curso;
          }
          if ($tem_where_parms)
          {
              $this->NM_where_filter .= ")";
          }
          elseif (empty($this->NM_where_filter))
          {
              unset($this->NM_where_filter);
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_calificaciones']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->vglo_colegio)) 
          {
              $_SESSION['vglo_colegio'] = $this->vglo_colegio;
          }
          if (isset($this->vglo_periodo)) 
          {
              $_SESSION['vglo_periodo'] = $this->vglo_periodo;
          }
          if (isset($this->vglo_curso)) 
          {
              $_SESSION['vglo_curso'] = $this->vglo_curso;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_calificaciones']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_calificaciones']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_calificaciones_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_calificaciones']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_calificaciones']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_calificaciones'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_calificaciones']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_calificaciones']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_calificaciones') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_calificaciones']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " calificaciones";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_calificaciones")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $this->Db = $this->Ini->Db; 
      $this->nm_new_label['calificacion_1_'] = 'Calificacion 1';
      $this->nm_new_label['calificacion_2_'] = 'Calificacion 2';
      $this->nm_new_label['calificacion_3_'] = 'Calificacion 3';
      $this->nm_new_label['calificacion_4_'] = 'Calificacion 4';
      $this->nm_new_label['calificacion_5_'] = 'Calificacion 5';
      $this->nm_new_label['calificacion_6_'] = 'Calificacion 6';
      $this->nm_new_label['calificacion_7_'] = 'Calificacion 7';
      $this->nm_new_label['calificacion_8_'] = 'Calificacion 8';
      $this->nm_new_label['calificacion_9_'] = 'Calificacion 9';

      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok_mult)   ? ""     : $str_img_status_ok_mult;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err_mult)  ? ""     : $str_img_status_err_mult;
      $this->Ini->Css_status      = "scFormInputErrorMult";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);



      $_SESSION['scriptcase']['error_icon']['form_calificaciones']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_calificaciones'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      if ('total' == $this->form_paginacao)
      {
          $this->nmgp_botoes['first']   = "off";
          $this->nmgp_botoes['back']    = "off";
          $this->nmgp_botoes['forward'] = "off";
          $this->nmgp_botoes['last']    = "off";
          $this->nmgp_botoes['navpage'] = "off";
          $this->nmgp_botoes['goto']    = "off";
          $this->nmgp_botoes['qtline']  = "off";
          $this->nmgp_botoes['summary'] = "on";
      }
      else
      {
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "on";
      }
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_calificaciones']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_calificaciones'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_calificaciones'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field . "_"] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field . "_"] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['exit'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_calificaciones", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'form_calificaciones_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_calificaciones_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_calificaciones/form_calificaciones_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_calificaciones_erro.class.php"); 
      }
      $this->Erro      = new form_calificaciones_erro();
      $this->Erro->Ini = $this->Ini;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_max_reg']) && strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_max_reg']) == "all")
      {
          $this->form_paginacao = "total";
      }
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao']))
         { 
             if ($this->colegio_id_ != "" || $this->periodo_id_ != "" || $this->curso_id_ != "" || $this->estudiante_id_ != "" || $this->asignatura_id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->sc_evento = $this->nmgp_opcao;
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- estudiante_id_
      $this->field_config['estudiante_id_']               = array();
      $this->field_config['estudiante_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['estudiante_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['estudiante_id_']['symbol_dec'] = '';
      $this->field_config['estudiante_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['estudiante_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- asignatura_id_
      $this->field_config['asignatura_id_']               = array();
      $this->field_config['asignatura_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['asignatura_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['asignatura_id_']['symbol_dec'] = '';
      $this->field_config['asignatura_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['asignatura_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- tipo_calificacion_id_
      $this->field_config['tipo_calificacion_id_']               = array();
      $this->field_config['tipo_calificacion_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['tipo_calificacion_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['tipo_calificacion_id_']['symbol_dec'] = '';
      $this->field_config['tipo_calificacion_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['tipo_calificacion_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_1_
      $this->field_config['calificacion_1_']               = array();
      $this->field_config['calificacion_1_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_1_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_1_']['symbol_dec'] = '';
      $this->field_config['calificacion_1_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_1_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_2_
      $this->field_config['calificacion_2_']               = array();
      $this->field_config['calificacion_2_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_2_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_2_']['symbol_dec'] = '';
      $this->field_config['calificacion_2_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_2_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_3_
      $this->field_config['calificacion_3_']               = array();
      $this->field_config['calificacion_3_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_3_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_3_']['symbol_dec'] = '';
      $this->field_config['calificacion_3_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_3_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_4_
      $this->field_config['calificacion_4_']               = array();
      $this->field_config['calificacion_4_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_4_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_4_']['symbol_dec'] = '';
      $this->field_config['calificacion_4_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_4_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_5_
      $this->field_config['calificacion_5_']               = array();
      $this->field_config['calificacion_5_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_5_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_5_']['symbol_dec'] = '';
      $this->field_config['calificacion_5_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_5_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_6_
      $this->field_config['calificacion_6_']               = array();
      $this->field_config['calificacion_6_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_6_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_6_']['symbol_dec'] = '';
      $this->field_config['calificacion_6_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_6_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_7_
      $this->field_config['calificacion_7_']               = array();
      $this->field_config['calificacion_7_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_7_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_7_']['symbol_dec'] = '';
      $this->field_config['calificacion_7_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_7_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_8_
      $this->field_config['calificacion_8_']               = array();
      $this->field_config['calificacion_8_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_8_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_8_']['symbol_dec'] = '';
      $this->field_config['calificacion_8_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_8_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_9_
      $this->field_config['calificacion_9_']               = array();
      $this->field_config['calificacion_9_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_9_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_9_']['symbol_dec'] = '';
      $this->field_config['calificacion_9_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_9_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- calificacion_final_
      $this->field_config['calificacion_final_']               = array();
      $this->field_config['calificacion_final_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['calificacion_final_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['calificacion_final_']['symbol_dec'] = '';
      $this->field_config['calificacion_final_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['calificacion_final_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- periodo_id_
      $this->field_config['periodo_id_']               = array();
      $this->field_config['periodo_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['periodo_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['periodo_id_']['symbol_dec'] = '';
      $this->field_config['periodo_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['periodo_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- curso_id_
      $this->field_config['curso_id_']               = array();
      $this->field_config['curso_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['curso_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['curso_id_']['symbol_dec'] = '';
      $this->field_config['curso_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['curso_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_1_
      $this->field_config['publicada_1_']               = array();
      $this->field_config['publicada_1_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_1_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_1_']['symbol_dec'] = '';
      $this->field_config['publicada_1_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_1_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_2_
      $this->field_config['publicada_2_']               = array();
      $this->field_config['publicada_2_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_2_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_2_']['symbol_dec'] = '';
      $this->field_config['publicada_2_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_2_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_3_
      $this->field_config['publicada_3_']               = array();
      $this->field_config['publicada_3_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_3_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_3_']['symbol_dec'] = '';
      $this->field_config['publicada_3_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_3_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_4_
      $this->field_config['publicada_4_']               = array();
      $this->field_config['publicada_4_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_4_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_4_']['symbol_dec'] = '';
      $this->field_config['publicada_4_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_4_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_5_
      $this->field_config['publicada_5_']               = array();
      $this->field_config['publicada_5_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_5_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_5_']['symbol_dec'] = '';
      $this->field_config['publicada_5_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_5_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_6_
      $this->field_config['publicada_6_']               = array();
      $this->field_config['publicada_6_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_6_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_6_']['symbol_dec'] = '';
      $this->field_config['publicada_6_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_6_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_7_
      $this->field_config['publicada_7_']               = array();
      $this->field_config['publicada_7_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_7_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_7_']['symbol_dec'] = '';
      $this->field_config['publicada_7_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_7_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_8_
      $this->field_config['publicada_8_']               = array();
      $this->field_config['publicada_8_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_8_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_8_']['symbol_dec'] = '';
      $this->field_config['publicada_8_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_8_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- publicada_9_
      $this->field_config['publicada_9_']               = array();
      $this->field_config['publicada_9_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['publicada_9_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['publicada_9_']['symbol_dec'] = '';
      $this->field_config['publicada_9_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['publicada_9_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($this->nmgp_opcao == "change_qtd_line")
      {
          $this->NM_btn_navega = "N";
          if (strtolower($this->nmgp_max_line) == "all")
          {
              $this->nmgp_opcao = "inicio";
              $this->form_paginacao = "total";
          }
          else
          {
              $this->nmgp_opcao = "igual";
              $this->form_paginacao = "parcial";
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_max_reg'] = $this->nmgp_max_line;
      }
      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opc_edit'] = true;  
      $sc_contr_vert = $GLOBALS["sc_contr_vert"];
      $sc_seq_vert   = 1; 
      $sc_opc_salva  = $this->nmgp_opcao; 
      $sc_todas_Crit = "";
      $sc_check_excl = array(); 
      $sc_check_incl = array(); 
      if (is_array($GLOBALS["sc_check_vert"])) 
      { 
          if ($this->nmgp_opcao == "incluir" || ($this->nmgp_opcao == "recarga" && $this->nmgp_opc_ant == "novo"))
          {
              $sc_check_incl = $GLOBALS["sc_check_vert"]; 
          }
          elseif ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir" || $this->nmgp_opcao == "recarga")
          {
              $sc_check_excl = $GLOBALS["sc_check_vert"]; 
          }
      } 
      elseif ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $sc_check_incl = array($_POST['upload_file_row']);
      }
      if (empty($this->nmgp_opcao)) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "novo";
         $this->nm_select_banco();
         $this->nm_gera_html();
         $this->NM_ajax_info['newline'] = NM_utf8_urldecode($this->New_Line);
         $this->NM_close_db();
         form_calificaciones_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_calificaciones_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'submit_form' == $this->NM_ajax_opcao)
      {
         if (isset($this->estudiante_id_)) { $this->nm_limpa_alfa($this->estudiante_id_); }
         if (isset($this->asignatura_id_)) { $this->nm_limpa_alfa($this->asignatura_id_); }
         if (isset($this->tipo_calificacion_id_)) { $this->nm_limpa_alfa($this->tipo_calificacion_id_); }
         if (isset($this->calificacion_final_)) { $this->nm_limpa_alfa($this->calificacion_final_); }
         if (isset($this->calificacion_1_)) { $this->nm_limpa_alfa($this->calificacion_1_); }
         if (isset($this->calificacion_nivel_1_)) { $this->nm_limpa_alfa($this->calificacion_nivel_1_); }
         if (isset($this->calificacion_2_)) { $this->nm_limpa_alfa($this->calificacion_2_); }
         if (isset($this->calificacion_nivel_2_)) { $this->nm_limpa_alfa($this->calificacion_nivel_2_); }
         if (isset($this->calificacion_3_)) { $this->nm_limpa_alfa($this->calificacion_3_); }
         if (isset($this->calificacion_nivel_3_)) { $this->nm_limpa_alfa($this->calificacion_nivel_3_); }
         if (isset($this->calificacion_4_)) { $this->nm_limpa_alfa($this->calificacion_4_); }
         if (isset($this->calificacion_nivel_4_)) { $this->nm_limpa_alfa($this->calificacion_nivel_4_); }
         if (isset($this->calificacion_5_)) { $this->nm_limpa_alfa($this->calificacion_5_); }
         if (isset($this->calificacion_nivel_5_)) { $this->nm_limpa_alfa($this->calificacion_nivel_5_); }
         if (isset($this->calificacion_6_)) { $this->nm_limpa_alfa($this->calificacion_6_); }
         if (isset($this->calificacion_nivel_6_)) { $this->nm_limpa_alfa($this->calificacion_nivel_6_); }
         if (isset($this->calificacion_7_)) { $this->nm_limpa_alfa($this->calificacion_7_); }
         if (isset($this->calificacion_nivel_7_)) { $this->nm_limpa_alfa($this->calificacion_nivel_7_); }
         if (isset($this->calificacion_8_)) { $this->nm_limpa_alfa($this->calificacion_8_); }
         if (isset($this->calificacion_nivel_8_)) { $this->nm_limpa_alfa($this->calificacion_nivel_8_); }
         if (isset($this->calificacion_9_)) { $this->nm_limpa_alfa($this->calificacion_9_); }
         if (isset($this->calificacion_nivel_9_)) { $this->nm_limpa_alfa($this->calificacion_nivel_9_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_form'][$sc_seq_vert];
             $this->colegio_id_ = $this->nmgp_dados_form['colegio_id_']; 
             $this->periodo_id_ = $this->nmgp_dados_form['periodo_id_']; 
             $this->curso_id_ = $this->nmgp_dados_form['curso_id_']; 
             $this->descripcion_1_ = $this->nmgp_dados_form['descripcion_1_']; 
             $this->publicada_1_ = $this->nmgp_dados_form['publicada_1_']; 
             $this->descripcion_2_ = $this->nmgp_dados_form['descripcion_2_']; 
             $this->publicada_2_ = $this->nmgp_dados_form['publicada_2_']; 
             $this->descripcion_3_ = $this->nmgp_dados_form['descripcion_3_']; 
             $this->publicada_3_ = $this->nmgp_dados_form['publicada_3_']; 
             $this->descripcion_4_ = $this->nmgp_dados_form['descripcion_4_']; 
             $this->publicada_4_ = $this->nmgp_dados_form['publicada_4_']; 
             $this->descripcion_5_ = $this->nmgp_dados_form['descripcion_5_']; 
             $this->publicada_5_ = $this->nmgp_dados_form['publicada_5_']; 
             $this->descripcion_6_ = $this->nmgp_dados_form['descripcion_6_']; 
             $this->publicada_6_ = $this->nmgp_dados_form['publicada_6_']; 
             $this->descripcion_7_ = $this->nmgp_dados_form['descripcion_7_']; 
             $this->publicada_7_ = $this->nmgp_dados_form['publicada_7_']; 
             $this->descripcion_8_ = $this->nmgp_dados_form['descripcion_8_']; 
             $this->publicada_8_ = $this->nmgp_dados_form['publicada_8_']; 
             $this->descripcion_9_ = $this->nmgp_dados_form['descripcion_9_']; 
             $this->publicada_9_ = $this->nmgp_dados_form['publicada_9_']; 
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_calificaciones']) || !is_array($this->NM_ajax_info['errList']['geral_form_calificaciones']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_calificaciones'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_calificaciones'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_calificaciones'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_calificaciones'][] = $this->Campos_Mens_erro;
                  }
                  $this->NM_gera_nav_page(); 
                  $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              }
         }
         else
         {
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
         }
         $this->NM_close_db();
         form_calificaciones_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_estudiante_id_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estudiante_id_');
          }
          if ('validate_asignatura_id_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'asignatura_id_');
          }
          if ('validate_tipo_calificacion_id_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipo_calificacion_id_');
          }
          if ('validate_calificacion_1_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_1_');
          }
          if ('validate_calificacion_nivel_1_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_1_');
          }
          if ('validate_calificacion_2_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_2_');
          }
          if ('validate_calificacion_nivel_2_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_2_');
          }
          if ('validate_calificacion_3_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_3_');
          }
          if ('validate_calificacion_nivel_3_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_3_');
          }
          if ('validate_calificacion_4_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_4_');
          }
          if ('validate_calificacion_nivel_4_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_4_');
          }
          if ('validate_calificacion_5_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_5_');
          }
          if ('validate_calificacion_nivel_5_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_5_');
          }
          if ('validate_calificacion_6_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_6_');
          }
          if ('validate_calificacion_nivel_6_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_6_');
          }
          if ('validate_calificacion_7_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_7_');
          }
          if ('validate_calificacion_nivel_7_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_7_');
          }
          if ('validate_calificacion_8_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_8_');
          }
          if ('validate_calificacion_nivel_8_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_8_');
          }
          if ('validate_calificacion_9_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_9_');
          }
          if ('validate_calificacion_nivel_9_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_nivel_9_');
          }
          if ('validate_calificacion_final_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'calificacion_final_');
          }
          form_calificaciones_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         $this->estudiante_id_ = $GLOBALS["estudiante_id_" . $sc_seq_vert]; 
         $this->asignatura_id_ = $GLOBALS["asignatura_id_" . $sc_seq_vert]; 
         $this->tipo_calificacion_id_ = $GLOBALS["tipo_calificacion_id_" . $sc_seq_vert]; 
         $this->calificacion_1_ = $GLOBALS["calificacion_1_" . $sc_seq_vert]; 
         $this->calificacion_nivel_1_ = $GLOBALS["calificacion_nivel_1_" . $sc_seq_vert]; 
         $this->calificacion_2_ = $GLOBALS["calificacion_2_" . $sc_seq_vert]; 
         $this->calificacion_nivel_2_ = $GLOBALS["calificacion_nivel_2_" . $sc_seq_vert]; 
         $this->calificacion_3_ = $GLOBALS["calificacion_3_" . $sc_seq_vert]; 
         $this->calificacion_nivel_3_ = $GLOBALS["calificacion_nivel_3_" . $sc_seq_vert]; 
         $this->calificacion_4_ = $GLOBALS["calificacion_4_" . $sc_seq_vert]; 
         $this->calificacion_nivel_4_ = $GLOBALS["calificacion_nivel_4_" . $sc_seq_vert]; 
         $this->calificacion_5_ = $GLOBALS["calificacion_5_" . $sc_seq_vert]; 
         $this->calificacion_nivel_5_ = $GLOBALS["calificacion_nivel_5_" . $sc_seq_vert]; 
         $this->calificacion_6_ = $GLOBALS["calificacion_6_" . $sc_seq_vert]; 
         $this->calificacion_nivel_6_ = $GLOBALS["calificacion_nivel_6_" . $sc_seq_vert]; 
         $this->calificacion_7_ = $GLOBALS["calificacion_7_" . $sc_seq_vert]; 
         $this->calificacion_nivel_7_ = $GLOBALS["calificacion_nivel_7_" . $sc_seq_vert]; 
         $this->calificacion_8_ = $GLOBALS["calificacion_8_" . $sc_seq_vert]; 
         $this->calificacion_nivel_8_ = $GLOBALS["calificacion_nivel_8_" . $sc_seq_vert]; 
         $this->calificacion_9_ = $GLOBALS["calificacion_9_" . $sc_seq_vert]; 
         $this->calificacion_nivel_9_ = $GLOBALS["calificacion_nivel_9_" . $sc_seq_vert]; 
         $this->calificacion_final_ = $GLOBALS["calificacion_final_" . $sc_seq_vert]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_form'][$sc_seq_vert];
             $this->colegio_id_ = $this->nmgp_dados_form['colegio_id_']; 
             $this->periodo_id_ = $this->nmgp_dados_form['periodo_id_']; 
             $this->curso_id_ = $this->nmgp_dados_form['curso_id_']; 
             $this->descripcion_1_ = $this->nmgp_dados_form['descripcion_1_']; 
             $this->publicada_1_ = $this->nmgp_dados_form['publicada_1_']; 
             $this->descripcion_2_ = $this->nmgp_dados_form['descripcion_2_']; 
             $this->publicada_2_ = $this->nmgp_dados_form['publicada_2_']; 
             $this->descripcion_3_ = $this->nmgp_dados_form['descripcion_3_']; 
             $this->publicada_3_ = $this->nmgp_dados_form['publicada_3_']; 
             $this->descripcion_4_ = $this->nmgp_dados_form['descripcion_4_']; 
             $this->publicada_4_ = $this->nmgp_dados_form['publicada_4_']; 
             $this->descripcion_5_ = $this->nmgp_dados_form['descripcion_5_']; 
             $this->publicada_5_ = $this->nmgp_dados_form['publicada_5_']; 
             $this->descripcion_6_ = $this->nmgp_dados_form['descripcion_6_']; 
             $this->publicada_6_ = $this->nmgp_dados_form['publicada_6_']; 
             $this->descripcion_7_ = $this->nmgp_dados_form['descripcion_7_']; 
             $this->publicada_7_ = $this->nmgp_dados_form['publicada_7_']; 
             $this->descripcion_8_ = $this->nmgp_dados_form['descripcion_8_']; 
             $this->publicada_8_ = $this->nmgp_dados_form['publicada_8_']; 
             $this->descripcion_9_ = $this->nmgp_dados_form['descripcion_9_']; 
             $this->publicada_9_ = $this->nmgp_dados_form['publicada_9_']; 
         }
         if (isset($this->estudiante_id_)) { $this->nm_limpa_alfa($this->estudiante_id_); }
         if (isset($this->asignatura_id_)) { $this->nm_limpa_alfa($this->asignatura_id_); }
         if (isset($this->tipo_calificacion_id_)) { $this->nm_limpa_alfa($this->tipo_calificacion_id_); }
         if (isset($this->calificacion_final_)) { $this->nm_limpa_alfa($this->calificacion_final_); }
         if (isset($this->calificacion_1_)) { $this->nm_limpa_alfa($this->calificacion_1_); }
         if (isset($this->calificacion_nivel_1_)) { $this->nm_limpa_alfa($this->calificacion_nivel_1_); }
         if (isset($this->calificacion_2_)) { $this->nm_limpa_alfa($this->calificacion_2_); }
         if (isset($this->calificacion_nivel_2_)) { $this->nm_limpa_alfa($this->calificacion_nivel_2_); }
         if (isset($this->calificacion_3_)) { $this->nm_limpa_alfa($this->calificacion_3_); }
         if (isset($this->calificacion_nivel_3_)) { $this->nm_limpa_alfa($this->calificacion_nivel_3_); }
         if (isset($this->calificacion_4_)) { $this->nm_limpa_alfa($this->calificacion_4_); }
         if (isset($this->calificacion_nivel_4_)) { $this->nm_limpa_alfa($this->calificacion_nivel_4_); }
         if (isset($this->calificacion_5_)) { $this->nm_limpa_alfa($this->calificacion_5_); }
         if (isset($this->calificacion_nivel_5_)) { $this->nm_limpa_alfa($this->calificacion_nivel_5_); }
         if (isset($this->calificacion_6_)) { $this->nm_limpa_alfa($this->calificacion_6_); }
         if (isset($this->calificacion_nivel_6_)) { $this->nm_limpa_alfa($this->calificacion_nivel_6_); }
         if (isset($this->calificacion_7_)) { $this->nm_limpa_alfa($this->calificacion_7_); }
         if (isset($this->calificacion_nivel_7_)) { $this->nm_limpa_alfa($this->calificacion_nivel_7_); }
         if (isset($this->calificacion_8_)) { $this->nm_limpa_alfa($this->calificacion_8_); }
         if (isset($this->calificacion_nivel_8_)) { $this->nm_limpa_alfa($this->calificacion_nivel_8_); }
         if (isset($this->calificacion_9_)) { $this->nm_limpa_alfa($this->calificacion_9_); }
         if (isset($this->calificacion_nivel_9_)) { $this->nm_limpa_alfa($this->calificacion_nivel_9_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && in_array($sc_seq_vert, $sc_check_excl))
         {
             $this->nmgp_opcao = "excluir";
         }
         if ($this->nmgp_opcao == "incluir" && !in_array($sc_seq_vert, $sc_check_incl))
         { }
         else
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_disabled'] = array();
             $this->controle_form_vert(); 
             $this->nmgp_opcao = $sc_opc_salva; 
             if ($this->nmgp_opcao != "recarga"  && $this->nmgp_opcao != "muda_form" && ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != ""))
             {
                 $sc_todas_Crit .= (!empty($sc_todas_Crit)) ? "<br>" : ""; 
                 $sc_todas_Crit .= "<B>" . $this->Ini->Nm_lang['lang_errm_line'] . $sc_seq_vert . "</B>: "; 
                 $sc_todas_Crit .= $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
                 $this->Campos_Mens_erro = ""; 
             }
             if ($this->nmgp_opcao != "recarga") 
             {
                $this->nm_guardar_campos();
                $this->nm_formatar_campos();
             }
             $this->form_vert_form_calificaciones[$sc_seq_vert]['estudiante_id_'] =  $this->estudiante_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['asignatura_id_'] =  $this->asignatura_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['tipo_calificacion_id_'] =  $this->tipo_calificacion_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_1_'] =  $this->calificacion_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_1_'] =  $this->calificacion_nivel_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_2_'] =  $this->calificacion_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_2_'] =  $this->calificacion_nivel_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_3_'] =  $this->calificacion_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_3_'] =  $this->calificacion_nivel_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_4_'] =  $this->calificacion_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_4_'] =  $this->calificacion_nivel_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_5_'] =  $this->calificacion_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_5_'] =  $this->calificacion_nivel_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_6_'] =  $this->calificacion_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_6_'] =  $this->calificacion_nivel_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_7_'] =  $this->calificacion_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_7_'] =  $this->calificacion_nivel_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_8_'] =  $this->calificacion_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_8_'] =  $this->calificacion_nivel_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_9_'] =  $this->calificacion_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_9_'] =  $this->calificacion_nivel_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_final_'] =  $this->calificacion_final_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['colegio_id_'] =  $this->colegio_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['periodo_id_'] =  $this->periodo_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['curso_id_'] =  $this->curso_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_1_'] =  $this->descripcion_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_1_'] =  $this->publicada_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_2_'] =  $this->descripcion_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_2_'] =  $this->publicada_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_3_'] =  $this->descripcion_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_3_'] =  $this->publicada_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_4_'] =  $this->descripcion_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_4_'] =  $this->publicada_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_5_'] =  $this->descripcion_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_5_'] =  $this->publicada_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_6_'] =  $this->descripcion_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_6_'] =  $this->publicada_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_7_'] =  $this->descripcion_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_7_'] =  $this->publicada_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_8_'] =  $this->descripcion_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_8_'] =  $this->publicada_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_9_'] =  $this->descripcion_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_9_'] =  $this->publicada_9_; 
         }
         $sc_seq_vert++; 
      } 
      if (!empty($sc_todas_Crit)) 
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sc_todas_Crit); 
          if ($this->nmgp_opcao == "incluir")
          { 
              $this->nmgp_opcao = "novo"; 
          }
      } 
      elseif ($this->nmgp_opcao == "incluir")
      { 
          $this->nmgp_opcao = "novo"; 
      }
      if ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $this->nmgp_opcao = 'igual';
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && (!$this->NM_ajax_flag || 'event_' != substr($this->NM_ajax_opcao, 0, 6))) 
      { 
          if ($this->sc_teve_incl) 
          { 
              $this->sc_after_all_insert = true;
          }
          if ($this->sc_teve_alt) 
          { 
              $this->sc_after_all_update = true;
          }
          if ($this->sc_teve_excl) 
          { 
              $this->sc_after_all_delete = true;
          }
          if (empty($sc_todas_Crit)) 
          { 
              $this->NM_commit_db(); 
              $this->nm_select_banco();
              $sc_check_excl = array(); 
          } 
          else
          { 
              $this->NM_rollback_db(); 
          } 
      } 
      if ($this->nmgp_opcao == "recarga") 
      { 
          $this->NM_gera_nav_page(); 
      } 
      if ($this->NM_ajax_flag && ('navigate_form' == $this->NM_ajax_opcao || !empty($this->nmgp_refresh_fields)))
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          $this->NM_close_db();
          form_calificaciones_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_calificaciones);
          $this->NM_ajax_info['fldList']['colegio_id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['colegio_id_']);
          $this->NM_ajax_info['fldList']['periodo_id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['periodo_id_']);
          $this->NM_ajax_info['fldList']['curso_id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['curso_id_']);
          $this->NM_ajax_info['fldList']['estudiante_id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['estudiante_id_']);
          $this->NM_ajax_info['fldList']['asignatura_id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['asignatura_id_']);
          $this->NM_close_db();
          form_calificaciones_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_calificacion_1__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_1__onChange();
          }
          if ('event_calificacion_2__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_2__onChange();
          }
          if ('event_calificacion_3__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_3__onChange();
          }
          if ('event_calificacion_4__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_4__onChange();
          }
          if ('event_calificacion_5__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_5__onChange();
          }
          if ('event_calificacion_6__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_6__onChange();
          }
          if ('event_calificacion_7__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_7__onChange();
          }
          if ('event_calificacion_8__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_8__onChange();
          }
          if ('event_calificacion_9__onchange' == $this->NM_ajax_opcao)
          {
              $this->calificacion_9__onChange();
          }
          $this->NM_close_db();
          form_calificaciones_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      $this->nm_todas_criticas = $sc_todas_Crit;
      $this->nm_gera_html();
      $this->NM_close_db(); 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "&script_case_session=" . session_id() . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
   function controle_form_vert()
   {
     global $nm_opc_lookup,$Campos_Crit, $Campos_Falta, $Campos_Erros, 
            $glo_senha_protect, $nm_apl_dependente, $nm_form_submit;

//
//-----> 
//
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_calificaciones_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
   }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'estudiante_id_':
               return "Estudiante Id";
               break;
           case 'asignatura_id_':
               return "Asignatura Id";
               break;
           case 'tipo_calificacion_id_':
               return "Tipo Calificacion Id";
               break;
           case 'calificacion_1_':
               return "Calificacion 1";
               break;
           case 'calificacion_nivel_1_':
               return "Calificacion Nivel 1";
               break;
           case 'calificacion_2_':
               return "Calificacion 2";
               break;
           case 'calificacion_nivel_2_':
               return "Calificacion Nivel 2";
               break;
           case 'calificacion_3_':
               return "Calificacion 3";
               break;
           case 'calificacion_nivel_3_':
               return "Calificacion Nivel 3";
               break;
           case 'calificacion_4_':
               return "Calificacion 4";
               break;
           case 'calificacion_nivel_4_':
               return "Calificacion Nivel 4";
               break;
           case 'calificacion_5_':
               return "Calificacion 5";
               break;
           case 'calificacion_nivel_5_':
               return "Calificacion Nivel 5";
               break;
           case 'calificacion_6_':
               return "Calificacion 6";
               break;
           case 'calificacion_nivel_6_':
               return "Calificacion Nivel 6";
               break;
           case 'calificacion_7_':
               return "Calificacion 7";
               break;
           case 'calificacion_nivel_7_':
               return "Calificacion Nivel 7";
               break;
           case 'calificacion_8_':
               return "Calificacion 8";
               break;
           case 'calificacion_nivel_8_':
               return "Calificacion Nivel 8";
               break;
           case 'calificacion_9_':
               return "Calificacion 9";
               break;
           case 'calificacion_nivel_9_':
               return "Calificacion Nivel 9";
               break;
           case 'calificacion_final_':
               return "Calificacion Final";
               break;
           case 'colegio_id_':
               return "Colegio Id";
               break;
           case 'periodo_id_':
               return "Periodo Id";
               break;
           case 'curso_id_':
               return "Curso Id";
               break;
           case 'descripcion_1_':
               return "Descripcion 1";
               break;
           case 'publicada_1_':
               return "Publicada 1";
               break;
           case 'descripcion_2_':
               return "Descripcion 2";
               break;
           case 'publicada_2_':
               return "Publicada 2";
               break;
           case 'descripcion_3_':
               return "Descripcion 3";
               break;
           case 'publicada_3_':
               return "Publicada 3";
               break;
           case 'descripcion_4_':
               return "Descripcion 4";
               break;
           case 'publicada_4_':
               return "Publicada 4";
               break;
           case 'descripcion_5_':
               return "Descripcion 5";
               break;
           case 'publicada_5_':
               return "Publicada 5";
               break;
           case 'descripcion_6_':
               return "Descripcion 6";
               break;
           case 'publicada_6_':
               return "Publicada 6";
               break;
           case 'descripcion_7_':
               return "Descripcion 7";
               break;
           case 'publicada_7_':
               return "Publicada 7";
               break;
           case 'descripcion_8_':
               return "Descripcion 8";
               break;
           case 'publicada_8_':
               return "Publicada 8";
               break;
           case 'descripcion_9_':
               return "Descripcion 9";
               break;
           case 'publicada_9_':
               return "Publicada 9";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if ('' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_calificaciones']) || !is_array($this->NM_ajax_info['errList']['geral_form_calificaciones']))
              {
                  $this->NM_ajax_info['errList']['geral_form_calificaciones'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_calificaciones'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'estudiante_id_' == $filtro)
        $this->ValidateField_estudiante_id_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'asignatura_id_' == $filtro)
        $this->ValidateField_asignatura_id_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipo_calificacion_id_' == $filtro)
        $this->ValidateField_tipo_calificacion_id_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_1_' == $filtro)
        $this->ValidateField_calificacion_1_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_1_' == $filtro)
        $this->ValidateField_calificacion_nivel_1_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_2_' == $filtro)
        $this->ValidateField_calificacion_2_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_2_' == $filtro)
        $this->ValidateField_calificacion_nivel_2_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_3_' == $filtro)
        $this->ValidateField_calificacion_3_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_3_' == $filtro)
        $this->ValidateField_calificacion_nivel_3_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_4_' == $filtro)
        $this->ValidateField_calificacion_4_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_4_' == $filtro)
        $this->ValidateField_calificacion_nivel_4_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_5_' == $filtro)
        $this->ValidateField_calificacion_5_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_5_' == $filtro)
        $this->ValidateField_calificacion_nivel_5_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_6_' == $filtro)
        $this->ValidateField_calificacion_6_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_6_' == $filtro)
        $this->ValidateField_calificacion_nivel_6_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_7_' == $filtro)
        $this->ValidateField_calificacion_7_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_7_' == $filtro)
        $this->ValidateField_calificacion_nivel_7_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_8_' == $filtro)
        $this->ValidateField_calificacion_8_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_8_' == $filtro)
        $this->ValidateField_calificacion_nivel_8_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_9_' == $filtro)
        $this->ValidateField_calificacion_9_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_nivel_9_' == $filtro)
        $this->ValidateField_calificacion_nivel_9_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'calificacion_final_' == $filtro)
        $this->ValidateField_calificacion_final_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_estudiante_id_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_numero($this->estudiante_id_, $this->field_config['estudiante_id_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->estudiante_id_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->estudiante_id_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Estudiante Id: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['estudiante_id_']))
                  {
                      $Campos_Erros['estudiante_id_'] = array();
                  }
                  $Campos_Erros['estudiante_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['estudiante_id_']) || !is_array($this->NM_ajax_info['errList']['estudiante_id_']))
                  {
                      $this->NM_ajax_info['errList']['estudiante_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['estudiante_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->estudiante_id_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Estudiante Id; " ; 
                  if (!isset($Campos_Erros['estudiante_id_']))
                  {
                      $Campos_Erros['estudiante_id_'] = array();
                  }
                  $Campos_Erros['estudiante_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['estudiante_id_']) || !is_array($this->NM_ajax_info['errList']['estudiante_id_']))
                  {
                      $this->NM_ajax_info['errList']['estudiante_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['estudiante_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['php_cmp_required']['estudiante_id_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['php_cmp_required']['estudiante_id_'] == "on") 
           { 
              $Campos_Falta[] = "Estudiante Id" ; 
              if (!isset($Campos_Erros['estudiante_id_']))
              {
                  $Campos_Erros['estudiante_id_'] = array();
              }
              $Campos_Erros['estudiante_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['estudiante_id_']) || !is_array($this->NM_ajax_info['errList']['estudiante_id_']))
                  {
                      $this->NM_ajax_info['errList']['estudiante_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['estudiante_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
    } // ValidateField_estudiante_id_

    function ValidateField_asignatura_id_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_numero($this->asignatura_id_, $this->field_config['asignatura_id_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->asignatura_id_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->asignatura_id_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Asignatura Id: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['asignatura_id_']))
                  {
                      $Campos_Erros['asignatura_id_'] = array();
                  }
                  $Campos_Erros['asignatura_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['asignatura_id_']) || !is_array($this->NM_ajax_info['errList']['asignatura_id_']))
                  {
                      $this->NM_ajax_info['errList']['asignatura_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['asignatura_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->asignatura_id_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Asignatura Id; " ; 
                  if (!isset($Campos_Erros['asignatura_id_']))
                  {
                      $Campos_Erros['asignatura_id_'] = array();
                  }
                  $Campos_Erros['asignatura_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['asignatura_id_']) || !is_array($this->NM_ajax_info['errList']['asignatura_id_']))
                  {
                      $this->NM_ajax_info['errList']['asignatura_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['asignatura_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['php_cmp_required']['asignatura_id_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['php_cmp_required']['asignatura_id_'] == "on") 
           { 
              $Campos_Falta[] = "Asignatura Id" ; 
              if (!isset($Campos_Erros['asignatura_id_']))
              {
                  $Campos_Erros['asignatura_id_'] = array();
              }
              $Campos_Erros['asignatura_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['asignatura_id_']) || !is_array($this->NM_ajax_info['errList']['asignatura_id_']))
                  {
                      $this->NM_ajax_info['errList']['asignatura_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['asignatura_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
    } // ValidateField_asignatura_id_

    function ValidateField_tipo_calificacion_id_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->tipo_calificacion_id_ == "")  
      { 
          $this->tipo_calificacion_id_ = 0;
          $this->sc_force_zero[] = 'tipo_calificacion_id_';
      } 
      nm_limpa_numero($this->tipo_calificacion_id_, $this->field_config['tipo_calificacion_id_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->tipo_calificacion_id_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->tipo_calificacion_id_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Tipo Calificacion Id: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['tipo_calificacion_id_']))
                  {
                      $Campos_Erros['tipo_calificacion_id_'] = array();
                  }
                  $Campos_Erros['tipo_calificacion_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['tipo_calificacion_id_']) || !is_array($this->NM_ajax_info['errList']['tipo_calificacion_id_']))
                  {
                      $this->NM_ajax_info['errList']['tipo_calificacion_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['tipo_calificacion_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->tipo_calificacion_id_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Tipo Calificacion Id; " ; 
                  if (!isset($Campos_Erros['tipo_calificacion_id_']))
                  {
                      $Campos_Erros['tipo_calificacion_id_'] = array();
                  }
                  $Campos_Erros['tipo_calificacion_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['tipo_calificacion_id_']) || !is_array($this->NM_ajax_info['errList']['tipo_calificacion_id_']))
                  {
                      $this->NM_ajax_info['errList']['tipo_calificacion_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['tipo_calificacion_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_tipo_calificacion_id_

    function ValidateField_calificacion_1_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_1_ == "")  
      { 
          $this->calificacion_1_ = 0;
          $this->sc_force_zero[] = 'calificacion_1_';
      } 
      nm_limpa_numero($this->calificacion_1_, $this->field_config['calificacion_1_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_1_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_1_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 1: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_1_']))
                  {
                      $Campos_Erros['calificacion_1_'] = array();
                  }
                  $Campos_Erros['calificacion_1_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_1_']) || !is_array($this->NM_ajax_info['errList']['calificacion_1_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_1_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_1_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_1_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 1; " ; 
                  if (!isset($Campos_Erros['calificacion_1_']))
                  {
                      $Campos_Erros['calificacion_1_'] = array();
                  }
                  $Campos_Erros['calificacion_1_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_1_']) || !is_array($this->NM_ajax_info['errList']['calificacion_1_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_1_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_1_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_1_

    function ValidateField_calificacion_nivel_1_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_1_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 1 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_1_']))
              {
                  $Campos_Erros['calificacion_nivel_1_'] = array();
              }
              $Campos_Erros['calificacion_nivel_1_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_1_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_1_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_1_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_1_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_1_

    function ValidateField_calificacion_2_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_2_ == "")  
      { 
          $this->calificacion_2_ = 0;
          $this->sc_force_zero[] = 'calificacion_2_';
      } 
      nm_limpa_numero($this->calificacion_2_, $this->field_config['calificacion_2_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_2_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_2_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 2: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_2_']))
                  {
                      $Campos_Erros['calificacion_2_'] = array();
                  }
                  $Campos_Erros['calificacion_2_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_2_']) || !is_array($this->NM_ajax_info['errList']['calificacion_2_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_2_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_2_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_2_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 2; " ; 
                  if (!isset($Campos_Erros['calificacion_2_']))
                  {
                      $Campos_Erros['calificacion_2_'] = array();
                  }
                  $Campos_Erros['calificacion_2_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_2_']) || !is_array($this->NM_ajax_info['errList']['calificacion_2_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_2_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_2_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_2_

    function ValidateField_calificacion_nivel_2_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_2_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 2 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_2_']))
              {
                  $Campos_Erros['calificacion_nivel_2_'] = array();
              }
              $Campos_Erros['calificacion_nivel_2_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_2_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_2_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_2_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_2_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_2_

    function ValidateField_calificacion_3_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_3_ == "")  
      { 
          $this->calificacion_3_ = 0;
          $this->sc_force_zero[] = 'calificacion_3_';
      } 
      nm_limpa_numero($this->calificacion_3_, $this->field_config['calificacion_3_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_3_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_3_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 3: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_3_']))
                  {
                      $Campos_Erros['calificacion_3_'] = array();
                  }
                  $Campos_Erros['calificacion_3_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_3_']) || !is_array($this->NM_ajax_info['errList']['calificacion_3_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_3_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_3_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_3_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 3; " ; 
                  if (!isset($Campos_Erros['calificacion_3_']))
                  {
                      $Campos_Erros['calificacion_3_'] = array();
                  }
                  $Campos_Erros['calificacion_3_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_3_']) || !is_array($this->NM_ajax_info['errList']['calificacion_3_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_3_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_3_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_3_

    function ValidateField_calificacion_nivel_3_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_3_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 3 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_3_']))
              {
                  $Campos_Erros['calificacion_nivel_3_'] = array();
              }
              $Campos_Erros['calificacion_nivel_3_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_3_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_3_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_3_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_3_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_3_

    function ValidateField_calificacion_4_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_4_ == "")  
      { 
          $this->calificacion_4_ = 0;
          $this->sc_force_zero[] = 'calificacion_4_';
      } 
      nm_limpa_numero($this->calificacion_4_, $this->field_config['calificacion_4_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_4_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_4_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 4: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_4_']))
                  {
                      $Campos_Erros['calificacion_4_'] = array();
                  }
                  $Campos_Erros['calificacion_4_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_4_']) || !is_array($this->NM_ajax_info['errList']['calificacion_4_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_4_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_4_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_4_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 4; " ; 
                  if (!isset($Campos_Erros['calificacion_4_']))
                  {
                      $Campos_Erros['calificacion_4_'] = array();
                  }
                  $Campos_Erros['calificacion_4_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_4_']) || !is_array($this->NM_ajax_info['errList']['calificacion_4_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_4_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_4_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_4_

    function ValidateField_calificacion_nivel_4_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_4_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 4 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_4_']))
              {
                  $Campos_Erros['calificacion_nivel_4_'] = array();
              }
              $Campos_Erros['calificacion_nivel_4_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_4_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_4_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_4_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_4_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_4_

    function ValidateField_calificacion_5_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_5_ == "")  
      { 
          $this->calificacion_5_ = 0;
          $this->sc_force_zero[] = 'calificacion_5_';
      } 
      nm_limpa_numero($this->calificacion_5_, $this->field_config['calificacion_5_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_5_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_5_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 5: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_5_']))
                  {
                      $Campos_Erros['calificacion_5_'] = array();
                  }
                  $Campos_Erros['calificacion_5_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_5_']) || !is_array($this->NM_ajax_info['errList']['calificacion_5_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_5_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_5_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_5_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 5; " ; 
                  if (!isset($Campos_Erros['calificacion_5_']))
                  {
                      $Campos_Erros['calificacion_5_'] = array();
                  }
                  $Campos_Erros['calificacion_5_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_5_']) || !is_array($this->NM_ajax_info['errList']['calificacion_5_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_5_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_5_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_5_

    function ValidateField_calificacion_nivel_5_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_5_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 5 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_5_']))
              {
                  $Campos_Erros['calificacion_nivel_5_'] = array();
              }
              $Campos_Erros['calificacion_nivel_5_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_5_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_5_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_5_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_5_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_5_

    function ValidateField_calificacion_6_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_6_ == "")  
      { 
          $this->calificacion_6_ = 0;
          $this->sc_force_zero[] = 'calificacion_6_';
      } 
      nm_limpa_numero($this->calificacion_6_, $this->field_config['calificacion_6_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_6_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_6_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 6: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_6_']))
                  {
                      $Campos_Erros['calificacion_6_'] = array();
                  }
                  $Campos_Erros['calificacion_6_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_6_']) || !is_array($this->NM_ajax_info['errList']['calificacion_6_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_6_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_6_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_6_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 6; " ; 
                  if (!isset($Campos_Erros['calificacion_6_']))
                  {
                      $Campos_Erros['calificacion_6_'] = array();
                  }
                  $Campos_Erros['calificacion_6_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_6_']) || !is_array($this->NM_ajax_info['errList']['calificacion_6_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_6_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_6_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_6_

    function ValidateField_calificacion_nivel_6_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_6_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 6 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_6_']))
              {
                  $Campos_Erros['calificacion_nivel_6_'] = array();
              }
              $Campos_Erros['calificacion_nivel_6_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_6_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_6_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_6_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_6_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_6_

    function ValidateField_calificacion_7_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_7_ == "")  
      { 
          $this->calificacion_7_ = 0;
          $this->sc_force_zero[] = 'calificacion_7_';
      } 
      nm_limpa_numero($this->calificacion_7_, $this->field_config['calificacion_7_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_7_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_7_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 7: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_7_']))
                  {
                      $Campos_Erros['calificacion_7_'] = array();
                  }
                  $Campos_Erros['calificacion_7_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_7_']) || !is_array($this->NM_ajax_info['errList']['calificacion_7_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_7_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_7_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_7_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 7; " ; 
                  if (!isset($Campos_Erros['calificacion_7_']))
                  {
                      $Campos_Erros['calificacion_7_'] = array();
                  }
                  $Campos_Erros['calificacion_7_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_7_']) || !is_array($this->NM_ajax_info['errList']['calificacion_7_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_7_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_7_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_7_

    function ValidateField_calificacion_nivel_7_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_7_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 7 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_7_']))
              {
                  $Campos_Erros['calificacion_nivel_7_'] = array();
              }
              $Campos_Erros['calificacion_nivel_7_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_7_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_7_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_7_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_7_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_7_

    function ValidateField_calificacion_8_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_8_ == "")  
      { 
          $this->calificacion_8_ = 0;
          $this->sc_force_zero[] = 'calificacion_8_';
      } 
      nm_limpa_numero($this->calificacion_8_, $this->field_config['calificacion_8_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_8_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_8_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 8: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_8_']))
                  {
                      $Campos_Erros['calificacion_8_'] = array();
                  }
                  $Campos_Erros['calificacion_8_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_8_']) || !is_array($this->NM_ajax_info['errList']['calificacion_8_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_8_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_8_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_8_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 8; " ; 
                  if (!isset($Campos_Erros['calificacion_8_']))
                  {
                      $Campos_Erros['calificacion_8_'] = array();
                  }
                  $Campos_Erros['calificacion_8_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_8_']) || !is_array($this->NM_ajax_info['errList']['calificacion_8_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_8_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_8_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_8_

    function ValidateField_calificacion_nivel_8_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_8_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 8 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_8_']))
              {
                  $Campos_Erros['calificacion_nivel_8_'] = array();
              }
              $Campos_Erros['calificacion_nivel_8_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_8_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_8_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_8_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_8_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_8_

    function ValidateField_calificacion_9_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_9_ == "")  
      { 
          $this->calificacion_9_ = 0;
          $this->sc_force_zero[] = 'calificacion_9_';
      } 
      nm_limpa_numero($this->calificacion_9_, $this->field_config['calificacion_9_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_9_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_9_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion 9: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_9_']))
                  {
                      $Campos_Erros['calificacion_9_'] = array();
                  }
                  $Campos_Erros['calificacion_9_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_9_']) || !is_array($this->NM_ajax_info['errList']['calificacion_9_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_9_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_9_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_9_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion 9; " ; 
                  if (!isset($Campos_Erros['calificacion_9_']))
                  {
                      $Campos_Erros['calificacion_9_'] = array();
                  }
                  $Campos_Erros['calificacion_9_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_9_']) || !is_array($this->NM_ajax_info['errList']['calificacion_9_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_9_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_9_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_9_

    function ValidateField_calificacion_nivel_9_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->calificacion_nivel_9_) > 10) 
          { 
              $Campos_Crit .= "Calificacion Nivel 9 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['calificacion_nivel_9_']))
              {
                  $Campos_Erros['calificacion_nivel_9_'] = array();
              }
              $Campos_Erros['calificacion_nivel_9_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['calificacion_nivel_9_']) || !is_array($this->NM_ajax_info['errList']['calificacion_nivel_9_']))
              {
                  $this->NM_ajax_info['errList']['calificacion_nivel_9_'] = array();
              }
              $this->NM_ajax_info['errList']['calificacion_nivel_9_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_calificacion_nivel_9_

    function ValidateField_calificacion_final_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->calificacion_final_ == "")  
      { 
          $this->calificacion_final_ = 0;
          $this->sc_force_zero[] = 'calificacion_final_';
      } 
      nm_limpa_numero($this->calificacion_final_, $this->field_config['calificacion_final_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->calificacion_final_ != '')  
          { 
              $iTestSize = 11;
              if (strlen($this->calificacion_final_) > $iTestSize)  
              { 
                  $Campos_Crit .= "Calificacion Final: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['calificacion_final_']))
                  {
                      $Campos_Erros['calificacion_final_'] = array();
                  }
                  $Campos_Erros['calificacion_final_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['calificacion_final_']) || !is_array($this->NM_ajax_info['errList']['calificacion_final_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_final_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_final_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->calificacion_final_, 11, 0, 0, 0, "N") == false)  
              { 
                  $Campos_Crit .= "Calificacion Final; " ; 
                  if (!isset($Campos_Erros['calificacion_final_']))
                  {
                      $Campos_Erros['calificacion_final_'] = array();
                  }
                  $Campos_Erros['calificacion_final_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['calificacion_final_']) || !is_array($this->NM_ajax_info['errList']['calificacion_final_']))
                  {
                      $this->NM_ajax_info['errList']['calificacion_final_'] = array();
                  }
                  $this->NM_ajax_info['errList']['calificacion_final_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
    } // ValidateField_calificacion_final_

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['estudiante_id_'] = $this->estudiante_id_;
    $this->nmgp_dados_form['asignatura_id_'] = $this->asignatura_id_;
    $this->nmgp_dados_form['tipo_calificacion_id_'] = $this->tipo_calificacion_id_;
    $this->nmgp_dados_form['calificacion_1_'] = $this->calificacion_1_;
    $this->nmgp_dados_form['calificacion_nivel_1_'] = $this->calificacion_nivel_1_;
    $this->nmgp_dados_form['calificacion_2_'] = $this->calificacion_2_;
    $this->nmgp_dados_form['calificacion_nivel_2_'] = $this->calificacion_nivel_2_;
    $this->nmgp_dados_form['calificacion_3_'] = $this->calificacion_3_;
    $this->nmgp_dados_form['calificacion_nivel_3_'] = $this->calificacion_nivel_3_;
    $this->nmgp_dados_form['calificacion_4_'] = $this->calificacion_4_;
    $this->nmgp_dados_form['calificacion_nivel_4_'] = $this->calificacion_nivel_4_;
    $this->nmgp_dados_form['calificacion_5_'] = $this->calificacion_5_;
    $this->nmgp_dados_form['calificacion_nivel_5_'] = $this->calificacion_nivel_5_;
    $this->nmgp_dados_form['calificacion_6_'] = $this->calificacion_6_;
    $this->nmgp_dados_form['calificacion_nivel_6_'] = $this->calificacion_nivel_6_;
    $this->nmgp_dados_form['calificacion_7_'] = $this->calificacion_7_;
    $this->nmgp_dados_form['calificacion_nivel_7_'] = $this->calificacion_nivel_7_;
    $this->nmgp_dados_form['calificacion_8_'] = $this->calificacion_8_;
    $this->nmgp_dados_form['calificacion_nivel_8_'] = $this->calificacion_nivel_8_;
    $this->nmgp_dados_form['calificacion_9_'] = $this->calificacion_9_;
    $this->nmgp_dados_form['calificacion_nivel_9_'] = $this->calificacion_nivel_9_;
    $this->nmgp_dados_form['calificacion_final_'] = $this->calificacion_final_;
    $this->nmgp_dados_form['colegio_id_'] = $this->colegio_id_;
    $this->nmgp_dados_form['periodo_id_'] = $this->periodo_id_;
    $this->nmgp_dados_form['curso_id_'] = $this->curso_id_;
    $this->nmgp_dados_form['descripcion_1_'] = $this->descripcion_1_;
    $this->nmgp_dados_form['publicada_1_'] = $this->publicada_1_;
    $this->nmgp_dados_form['descripcion_2_'] = $this->descripcion_2_;
    $this->nmgp_dados_form['publicada_2_'] = $this->publicada_2_;
    $this->nmgp_dados_form['descripcion_3_'] = $this->descripcion_3_;
    $this->nmgp_dados_form['publicada_3_'] = $this->publicada_3_;
    $this->nmgp_dados_form['descripcion_4_'] = $this->descripcion_4_;
    $this->nmgp_dados_form['publicada_4_'] = $this->publicada_4_;
    $this->nmgp_dados_form['descripcion_5_'] = $this->descripcion_5_;
    $this->nmgp_dados_form['publicada_5_'] = $this->publicada_5_;
    $this->nmgp_dados_form['descripcion_6_'] = $this->descripcion_6_;
    $this->nmgp_dados_form['publicada_6_'] = $this->publicada_6_;
    $this->nmgp_dados_form['descripcion_7_'] = $this->descripcion_7_;
    $this->nmgp_dados_form['publicada_7_'] = $this->publicada_7_;
    $this->nmgp_dados_form['descripcion_8_'] = $this->descripcion_8_;
    $this->nmgp_dados_form['publicada_8_'] = $this->publicada_8_;
    $this->nmgp_dados_form['descripcion_9_'] = $this->descripcion_9_;
    $this->nmgp_dados_form['publicada_9_'] = $this->publicada_9_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_numero($this->estudiante_id_, $this->field_config['estudiante_id_']['symbol_grp']) ; 
      nm_limpa_numero($this->asignatura_id_, $this->field_config['asignatura_id_']['symbol_grp']) ; 
      nm_limpa_numero($this->tipo_calificacion_id_, $this->field_config['tipo_calificacion_id_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_1_, $this->field_config['calificacion_1_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_2_, $this->field_config['calificacion_2_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_3_, $this->field_config['calificacion_3_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_4_, $this->field_config['calificacion_4_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_5_, $this->field_config['calificacion_5_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_6_, $this->field_config['calificacion_6_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_7_, $this->field_config['calificacion_7_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_8_, $this->field_config['calificacion_8_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_9_, $this->field_config['calificacion_9_']['symbol_grp']) ; 
      nm_limpa_numero($this->calificacion_final_, $this->field_config['calificacion_final_']['symbol_grp']) ; 
      nm_limpa_numero($this->periodo_id_, $this->field_config['periodo_id_']['symbol_grp']) ; 
      nm_limpa_numero($this->curso_id_, $this->field_config['curso_id_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_1_, $this->field_config['publicada_1_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_2_, $this->field_config['publicada_2_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_3_, $this->field_config['publicada_3_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_4_, $this->field_config['publicada_4_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_5_, $this->field_config['publicada_5_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_6_, $this->field_config['publicada_6_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_7_, $this->field_config['publicada_7_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_8_, $this->field_config['publicada_8_']['symbol_grp']) ; 
      nm_limpa_numero($this->publicada_9_, $this->field_config['publicada_9_']['symbol_grp']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "estudiante_id_")
      {
          nm_limpa_numero($this->estudiante_id_, $this->field_config['estudiante_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "asignatura_id_")
      {
          nm_limpa_numero($this->asignatura_id_, $this->field_config['asignatura_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "tipo_calificacion_id_")
      {
          nm_limpa_numero($this->tipo_calificacion_id_, $this->field_config['tipo_calificacion_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_1_")
      {
          nm_limpa_numero($this->calificacion_1_, $this->field_config['calificacion_1_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_2_")
      {
          nm_limpa_numero($this->calificacion_2_, $this->field_config['calificacion_2_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_3_")
      {
          nm_limpa_numero($this->calificacion_3_, $this->field_config['calificacion_3_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_4_")
      {
          nm_limpa_numero($this->calificacion_4_, $this->field_config['calificacion_4_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_5_")
      {
          nm_limpa_numero($this->calificacion_5_, $this->field_config['calificacion_5_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_6_")
      {
          nm_limpa_numero($this->calificacion_6_, $this->field_config['calificacion_6_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_7_")
      {
          nm_limpa_numero($this->calificacion_7_, $this->field_config['calificacion_7_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_8_")
      {
          nm_limpa_numero($this->calificacion_8_, $this->field_config['calificacion_8_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_9_")
      {
          nm_limpa_numero($this->calificacion_9_, $this->field_config['calificacion_9_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "calificacion_final_")
      {
          nm_limpa_numero($this->calificacion_final_, $this->field_config['calificacion_final_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "periodo_id_")
      {
          nm_limpa_numero($this->periodo_id_, $this->field_config['periodo_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "curso_id_")
      {
          nm_limpa_numero($this->curso_id_, $this->field_config['curso_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_1_")
      {
          nm_limpa_numero($this->publicada_1_, $this->field_config['publicada_1_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_2_")
      {
          nm_limpa_numero($this->publicada_2_, $this->field_config['publicada_2_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_3_")
      {
          nm_limpa_numero($this->publicada_3_, $this->field_config['publicada_3_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_4_")
      {
          nm_limpa_numero($this->publicada_4_, $this->field_config['publicada_4_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_5_")
      {
          nm_limpa_numero($this->publicada_5_, $this->field_config['publicada_5_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_6_")
      {
          nm_limpa_numero($this->publicada_6_, $this->field_config['publicada_6_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_7_")
      {
          nm_limpa_numero($this->publicada_7_, $this->field_config['publicada_7_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_8_")
      {
          nm_limpa_numero($this->publicada_8_, $this->field_config['publicada_8_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "publicada_9_")
      {
          nm_limpa_numero($this->publicada_9_, $this->field_config['publicada_9_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
      if ('' !== $this->estudiante_id_ || (!empty($format_fields) && isset($format_fields['estudiante_id_'])))
      {
          nmgp_Form_Num_Val($this->estudiante_id_, $this->field_config['estudiante_id_']['symbol_grp'], $this->field_config['estudiante_id_']['symbol_dec'], "0", "S", $this->field_config['estudiante_id_']['format_neg'], "", "", "-", $this->field_config['estudiante_id_']['symbol_fmt']) ; 
      }
      if ('' !== $this->asignatura_id_ || (!empty($format_fields) && isset($format_fields['asignatura_id_'])))
      {
          nmgp_Form_Num_Val($this->asignatura_id_, $this->field_config['asignatura_id_']['symbol_grp'], $this->field_config['asignatura_id_']['symbol_dec'], "0", "S", $this->field_config['asignatura_id_']['format_neg'], "", "", "-", $this->field_config['asignatura_id_']['symbol_fmt']) ; 
      }
      if ('' !== $this->tipo_calificacion_id_ || (!empty($format_fields) && isset($format_fields['tipo_calificacion_id_'])))
      {
          nmgp_Form_Num_Val($this->tipo_calificacion_id_, $this->field_config['tipo_calificacion_id_']['symbol_grp'], $this->field_config['tipo_calificacion_id_']['symbol_dec'], "0", "S", $this->field_config['tipo_calificacion_id_']['format_neg'], "", "", "-", $this->field_config['tipo_calificacion_id_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_1_ || (!empty($format_fields) && isset($format_fields['calificacion_1_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_1_, $this->field_config['calificacion_1_']['symbol_grp'], $this->field_config['calificacion_1_']['symbol_dec'], "0", "S", $this->field_config['calificacion_1_']['format_neg'], "", "", "-", $this->field_config['calificacion_1_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_2_ || (!empty($format_fields) && isset($format_fields['calificacion_2_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_2_, $this->field_config['calificacion_2_']['symbol_grp'], $this->field_config['calificacion_2_']['symbol_dec'], "0", "S", $this->field_config['calificacion_2_']['format_neg'], "", "", "-", $this->field_config['calificacion_2_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_3_ || (!empty($format_fields) && isset($format_fields['calificacion_3_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_3_, $this->field_config['calificacion_3_']['symbol_grp'], $this->field_config['calificacion_3_']['symbol_dec'], "0", "S", $this->field_config['calificacion_3_']['format_neg'], "", "", "-", $this->field_config['calificacion_3_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_4_ || (!empty($format_fields) && isset($format_fields['calificacion_4_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_4_, $this->field_config['calificacion_4_']['symbol_grp'], $this->field_config['calificacion_4_']['symbol_dec'], "0", "S", $this->field_config['calificacion_4_']['format_neg'], "", "", "-", $this->field_config['calificacion_4_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_5_ || (!empty($format_fields) && isset($format_fields['calificacion_5_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_5_, $this->field_config['calificacion_5_']['symbol_grp'], $this->field_config['calificacion_5_']['symbol_dec'], "0", "S", $this->field_config['calificacion_5_']['format_neg'], "", "", "-", $this->field_config['calificacion_5_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_6_ || (!empty($format_fields) && isset($format_fields['calificacion_6_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_6_, $this->field_config['calificacion_6_']['symbol_grp'], $this->field_config['calificacion_6_']['symbol_dec'], "0", "S", $this->field_config['calificacion_6_']['format_neg'], "", "", "-", $this->field_config['calificacion_6_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_7_ || (!empty($format_fields) && isset($format_fields['calificacion_7_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_7_, $this->field_config['calificacion_7_']['symbol_grp'], $this->field_config['calificacion_7_']['symbol_dec'], "0", "S", $this->field_config['calificacion_7_']['format_neg'], "", "", "-", $this->field_config['calificacion_7_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_8_ || (!empty($format_fields) && isset($format_fields['calificacion_8_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_8_, $this->field_config['calificacion_8_']['symbol_grp'], $this->field_config['calificacion_8_']['symbol_dec'], "0", "S", $this->field_config['calificacion_8_']['format_neg'], "", "", "-", $this->field_config['calificacion_8_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_9_ || (!empty($format_fields) && isset($format_fields['calificacion_9_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_9_, $this->field_config['calificacion_9_']['symbol_grp'], $this->field_config['calificacion_9_']['symbol_dec'], "0", "S", $this->field_config['calificacion_9_']['format_neg'], "", "", "-", $this->field_config['calificacion_9_']['symbol_fmt']) ; 
      }
      if ('' !== $this->calificacion_final_ || (!empty($format_fields) && isset($format_fields['calificacion_final_'])))
      {
          nmgp_Form_Num_Val($this->calificacion_final_, $this->field_config['calificacion_final_']['symbol_grp'], $this->field_config['calificacion_final_']['symbol_dec'], "0", "S", $this->field_config['calificacion_final_']['format_neg'], "", "", "-", $this->field_config['calificacion_final_']['symbol_fmt']) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

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
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
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
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

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
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
       if (get_magic_quotes_gpc())
       {
           if (is_array($str))
           {
               $x = 0;
               foreach ($str as $cada_str)
               {
                   $str[$x] = stripslashes($str[$x]);
                   $x++;
               }
           }
           else
           {
               $str = stripslashes($str);
           }
       }
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
       nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
       return $dt_out;
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_all_vert();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['colegio_id_']['keyVal'] = form_calificaciones_pack_protect_string($this->nmgp_dados_form['colegio_id_']);
              $this->NM_ajax_info['fldList']['periodo_id_']['keyVal'] = form_calificaciones_pack_protect_string($this->nmgp_dados_form['periodo_id_']);
              $this->NM_ajax_info['fldList']['curso_id_']['keyVal'] = form_calificaciones_pack_protect_string($this->nmgp_dados_form['curso_id_']);
              $this->NM_ajax_info['fldList']['estudiante_id_']['keyVal'] = form_calificaciones_pack_protect_string($this->nmgp_dados_form['estudiante_id_']);
              $this->NM_ajax_info['fldList']['asignatura_id_']['keyVal'] = form_calificaciones_pack_protect_string($this->nmgp_dados_form['asignatura_id_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if ((isset($this->Embutida_ronly) && $this->Embutida_ronly) || $this->NM_ajax_force_values)
              {
                  if (isset($this->NM_ajax_changed['estudiante_id_']) && $this->NM_ajax_changed['estudiante_id_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['estudiante_id_'] = $this->estudiante_id_;
                  }
                  if (isset($this->NM_ajax_changed['asignatura_id_']) && $this->NM_ajax_changed['asignatura_id_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['asignatura_id_'] = $this->asignatura_id_;
                  }
                  if (isset($this->NM_ajax_changed['tipo_calificacion_id_']) && $this->NM_ajax_changed['tipo_calificacion_id_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['tipo_calificacion_id_'] = $this->tipo_calificacion_id_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_1_']) && $this->NM_ajax_changed['calificacion_1_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_1_'] = $this->calificacion_1_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_1_']) && $this->NM_ajax_changed['calificacion_nivel_1_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_1_'] = $this->calificacion_nivel_1_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_2_']) && $this->NM_ajax_changed['calificacion_2_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_2_'] = $this->calificacion_2_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_2_']) && $this->NM_ajax_changed['calificacion_nivel_2_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_2_'] = $this->calificacion_nivel_2_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_3_']) && $this->NM_ajax_changed['calificacion_3_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_3_'] = $this->calificacion_3_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_3_']) && $this->NM_ajax_changed['calificacion_nivel_3_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_3_'] = $this->calificacion_nivel_3_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_4_']) && $this->NM_ajax_changed['calificacion_4_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_4_'] = $this->calificacion_4_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_4_']) && $this->NM_ajax_changed['calificacion_nivel_4_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_4_'] = $this->calificacion_nivel_4_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_5_']) && $this->NM_ajax_changed['calificacion_5_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_5_'] = $this->calificacion_5_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_5_']) && $this->NM_ajax_changed['calificacion_nivel_5_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_5_'] = $this->calificacion_nivel_5_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_6_']) && $this->NM_ajax_changed['calificacion_6_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_6_'] = $this->calificacion_6_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_6_']) && $this->NM_ajax_changed['calificacion_nivel_6_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_6_'] = $this->calificacion_nivel_6_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_7_']) && $this->NM_ajax_changed['calificacion_7_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_7_'] = $this->calificacion_7_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_7_']) && $this->NM_ajax_changed['calificacion_nivel_7_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_7_'] = $this->calificacion_nivel_7_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_8_']) && $this->NM_ajax_changed['calificacion_8_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_8_'] = $this->calificacion_8_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_8_']) && $this->NM_ajax_changed['calificacion_nivel_8_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_8_'] = $this->calificacion_nivel_8_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_9_']) && $this->NM_ajax_changed['calificacion_9_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_9_'] = $this->calificacion_9_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_nivel_9_']) && $this->NM_ajax_changed['calificacion_nivel_9_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_9_'] = $this->calificacion_nivel_9_;
                  }
                  if (isset($this->NM_ajax_changed['calificacion_final_']) && $this->NM_ajax_changed['calificacion_final_'])
                  {
                      $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_final_'] = $this->calificacion_final_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_1_'] = $this->calificacion_nivel_1_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_2_'] = $this->calificacion_nivel_2_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_3_'] = $this->calificacion_nivel_3_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_4_'] = $this->calificacion_nivel_4_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_5_'] = $this->calificacion_nivel_5_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_6_'] = $this->calificacion_nivel_6_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_7_'] = $this->calificacion_nivel_7_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_8_'] = $this->calificacion_nivel_8_;
              $this->form_vert_form_calificaciones[$this->nmgp_refresh_row]['calificacion_nivel_9_'] = $this->calificacion_nivel_9_;
          }
          $this->NM_ajax_info['rsSize']            = sizeof($this->form_vert_form_calificaciones);
          $this->NM_ajax_info['buttonDisplayVert'] = array();
          foreach($this->form_vert_form_calificaciones as $sc_seq_vert => $aRecData)
          {
              $this->loadRecordState($sc_seq_vert);
              if ('navigate_form' == $this->NM_ajax_opcao) {
                  $this->NM_ajax_info['buttonDisplayVert'][] = array(
                      'seq'      => $sc_seq_vert,
                      'gridView' => false,
                      'delete'   => $this->nmgp_botoes['delete'],
                      'update'   => $this->nmgp_botoes['update'],
                  );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estudiante_id_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['estudiante_id_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['estudiante_id_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("asignatura_id_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['asignatura_id_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['asignatura_id_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipo_calificacion_id_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['tipo_calificacion_id_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['tipo_calificacion_id_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_1_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_1_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_1_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_1_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_1_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_1_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_2_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_2_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_2_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_2_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_2_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_2_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_3_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_3_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_3_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_3_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_3_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_3_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_4_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_4_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_4_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_4_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_4_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_4_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_5_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_5_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_5_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_5_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_5_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_5_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_6_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_6_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_6_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_6_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_6_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_6_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_7_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_7_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_7_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_7_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_7_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_7_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_8_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_8_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_8_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_8_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_8_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_8_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_9_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_9_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_9_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_nivel_9_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_nivel_9_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_nivel_9_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("calificacion_final_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['calificacion_final_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['calificacion_final_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload_record($sc_seq_vert=0)
  {
          if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
          $_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_calificacion_1_ = $this->calificacion_1_;
    $original_calificacion_2_ = $this->calificacion_2_;
    $original_calificacion_3_ = $this->calificacion_3_;
    $original_calificacion_4_ = $this->calificacion_4_;
    $original_calificacion_5_ = $this->calificacion_5_;
    $original_calificacion_6_ = $this->calificacion_6_;
    $original_calificacion_7_ = $this->calificacion_7_;
    $original_calificacion_8_ = $this->calificacion_8_;
    $original_calificacion_9_ = $this->calificacion_9_;
}
  if($this->descripcion_1_  !=null) {
	$sc_tmp_field_name = $this->calificacion_1_ ;
if (isset($this->sc_conv_var[$this->calificacion_1_ ]) && '' != $this->sc_conv_var[$this->calificacion_1_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_1_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_1_ ;
}

if($this->descripcion_2_  !=null) {
	$sc_tmp_field_name = $this->calificacion_2_ ;
if (isset($this->sc_conv_var[$this->calificacion_2_ ]) && '' != $this->sc_conv_var[$this->calificacion_2_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_2_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_2_ ;
}

if($this->descripcion_3_  !=null) {
	$sc_tmp_field_name = $this->calificacion_3_ ;
if (isset($this->sc_conv_var[$this->calificacion_3_ ]) && '' != $this->sc_conv_var[$this->calificacion_3_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_3_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_3_ ;
}

if($this->descripcion_4_  !=null) {
	$sc_tmp_field_name = $this->calificacion_4_ ;
if (isset($this->sc_conv_var[$this->calificacion_4_ ]) && '' != $this->sc_conv_var[$this->calificacion_4_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_4_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_4_ ;
}

if($this->descripcion_5_  !=null) {
	$sc_tmp_field_name = $this->calificacion_5_ ;
if (isset($this->sc_conv_var[$this->calificacion_5_ ]) && '' != $this->sc_conv_var[$this->calificacion_5_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_5_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_5_ ;
}

if($this->descripcion_6_  !=null) {
	$sc_tmp_field_name = $this->calificacion_6_ ;
if (isset($this->sc_conv_var[$this->calificacion_6_ ]) && '' != $this->sc_conv_var[$this->calificacion_6_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_6_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_6_ ;
}

if($this->descripcion_7_  !=null) {
	$sc_tmp_field_name = $this->calificacion_7_ ;
if (isset($this->sc_conv_var[$this->calificacion_7_ ]) && '' != $this->sc_conv_var[$this->calificacion_7_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_7_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_7_ ;
}

if($this->descripcion_8_  !=null) {
	$sc_tmp_field_name = $this->calificacion_8_ ;
if (isset($this->sc_conv_var[$this->calificacion_8_ ]) && '' != $this->sc_conv_var[$this->calificacion_8_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_8_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_8_ ;
}

if($this->descripcion_9_  !=null) {
	$sc_tmp_field_name = $this->calificacion_9_ ;
if (isset($this->sc_conv_var[$this->calificacion_9_ ]) && '' != $this->sc_conv_var[$this->calificacion_9_ ])
{
    $sc_tmp_field_name = $this->sc_conv_var[$this->calificacion_9_ ];
}
$this->NM_ajax_info['fieldLabel'][$sc_tmp_field_name] = $this->nm_new_label[$sc_tmp_field_name] =$this->descripcion_9_ ;
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_calificacion_1_ != $this->calificacion_1_ || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_1_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_1_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_1_);
        $this->NM_ajax_changed['calificacion_1_'] = true;
    }
    if (($original_calificacion_2_ != $this->calificacion_2_ || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_2_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_2_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_2_);
        $this->NM_ajax_changed['calificacion_2_'] = true;
    }
    if (($original_calificacion_3_ != $this->calificacion_3_ || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_3_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_3_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_3_);
        $this->NM_ajax_changed['calificacion_3_'] = true;
    }
    if (($original_calificacion_4_ != $this->calificacion_4_ || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_4_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_4_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_4_);
        $this->NM_ajax_changed['calificacion_4_'] = true;
    }
    if (($original_calificacion_5_ != $this->calificacion_5_ || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_5_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_5_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_5_);
        $this->NM_ajax_changed['calificacion_5_'] = true;
    }
    if (($original_calificacion_6_ != $this->calificacion_6_ || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_6_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_6_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_6_);
        $this->NM_ajax_changed['calificacion_6_'] = true;
    }
    if (($original_calificacion_7_ != $this->calificacion_7_ || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_7_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_7_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_7_);
        $this->NM_ajax_changed['calificacion_7_'] = true;
    }
    if (($original_calificacion_8_ != $this->calificacion_8_ || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_8_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_8_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_8_);
        $this->NM_ajax_changed['calificacion_8_'] = true;
    }
    if (($original_calificacion_9_ != $this->calificacion_9_ || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_9_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_9_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_9_);
        $this->NM_ajax_changed['calificacion_9_'] = true;
    }
}
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off'; 
          }
  }
  function nm_proc_onload($bFormat = true)
  {
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_calificacion_1_ = $this->calificacion_1_;
    $original_calificacion_2_ = $this->calificacion_2_;
    $original_calificacion_3_ = $this->calificacion_3_;
    $original_calificacion_4_ = $this->calificacion_4_;
    $original_calificacion_5_ = $this->calificacion_5_;
    $original_calificacion_6_ = $this->calificacion_6_;
    $original_calificacion_7_ = $this->calificacion_7_;
    $original_calificacion_8_ = $this->calificacion_8_;
    $original_calificacion_9_ = $this->calificacion_9_;
    $original_calificacion_nivel_1_ = $this->calificacion_nivel_1_;
    $original_calificacion_nivel_2_ = $this->calificacion_nivel_2_;
    $original_calificacion_nivel_3_ = $this->calificacion_nivel_3_;
    $original_calificacion_nivel_4_ = $this->calificacion_nivel_4_;
    $original_calificacion_nivel_5_ = $this->calificacion_nivel_5_;
    $original_calificacion_nivel_6_ = $this->calificacion_nivel_6_;
    $original_calificacion_nivel_7_ = $this->calificacion_nivel_7_;
    $original_calificacion_nivel_8_ = $this->calificacion_nivel_8_;
    $original_calificacion_nivel_9_ = $this->calificacion_nivel_9_;
}
if (!isset($this->sc_temp_vglo_curso)) {$this->sc_temp_vglo_curso = (isset($_SESSION['vglo_curso'])) ? $_SESSION['vglo_curso'] : "";}
if (!isset($this->sc_temp_vglo_periodo)) {$this->sc_temp_vglo_periodo = (isset($_SESSION['vglo_periodo'])) ? $_SESSION['vglo_periodo'] : "";}
if (!isset($this->sc_temp_vglo_colegio)) {$this->sc_temp_vglo_colegio = (isset($_SESSION['vglo_colegio'])) ? $_SESSION['vglo_colegio'] : "";}
   
      $nm_select = "SELECT ifnull(descripcion_1, ''), ifnull(descripcion_2, ''), ifnull(descripcion_3, ''),
 ifnull(descripcion_4, ''), ifnull(descripcion_5, ''), ifnull(descripcion_6, ''), 
 ifnull(descripcion_7, ''), ifnull(descripcion_8, ''), ifnull(descripcion_9, '') 
 FROM calificaciones WHERE colegio_id=$this->sc_temp_vglo_colegio and periodo_id=$this->sc_temp_vglo_periodo and curso_id=$this->sc_temp_vglo_curso 
 GROUP BY ifnull(descripcion_1, ''), ifnull(descripcion_2, ''), ifnull(descripcion_3, ''),
 ifnull(descripcion_4, ''), ifnull(descripcion_5, ''), ifnull(descripcion_6, ''), 
 ifnull(descripcion_7, ''), ifnull(descripcion_8, ''), ifnull(descripcion_9, '') "; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->rs[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;

if($this->rs[0][0] == '') {
	$this->nmgp_cmp_hidden["calificacion_1_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_1_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_1_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_1_'] = 'off';
	}

if($this->rs[0][1] == '') {
	$this->nmgp_cmp_hidden["calificacion_2_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_2_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_2_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_2_'] = 'off';
	}

if($this->rs[0][2] == '') {
	$this->nmgp_cmp_hidden["calificacion_3_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_3_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_3_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_3_'] = 'off';
	}

if($this->rs[0][3] == '') {
	$this->nmgp_cmp_hidden["calificacion_4_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_4_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_4_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_4_'] = 'off';
	}

if($this->rs[0][4] == '') {
	$this->nmgp_cmp_hidden["calificacion_5_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_5_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_5_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_5_'] = 'off';
	}

if($this->rs[0][5] == '') {
	$this->nmgp_cmp_hidden["calificacion_6_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_6_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_6_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_6_'] = 'off';
	}

if($this->rs[0][6] == '') {
	$this->nmgp_cmp_hidden["calificacion_7_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_7_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_7_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_7_'] = 'off';
	}

if($this->rs[0][7] == '') {
	$this->nmgp_cmp_hidden["calificacion_8_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_8_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_8_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_8_'] = 'off';
	}

if($this->rs[0][8] == '') {
	$this->nmgp_cmp_hidden["calificacion_9_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_9_'] = 'off';
	$this->nmgp_cmp_hidden["calificacion_nivel_9_"] = "off"; $this->NM_ajax_info['fieldDisplay']['calificacion_nivel_9_'] = 'off';
	}
if (isset($this->sc_temp_vglo_colegio)) { $_SESSION['vglo_colegio'] = $this->sc_temp_vglo_colegio;}
if (isset($this->sc_temp_vglo_periodo)) { $_SESSION['vglo_periodo'] = $this->sc_temp_vglo_periodo;}
if (isset($this->sc_temp_vglo_curso)) { $_SESSION['vglo_curso'] = $this->sc_temp_vglo_curso;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_calificacion_1_ != $this->calificacion_1_ || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_1_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_1_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_1_);
        $this->NM_ajax_changed['calificacion_1_'] = true;
    }
    if (($original_calificacion_2_ != $this->calificacion_2_ || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_2_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_2_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_2_);
        $this->NM_ajax_changed['calificacion_2_'] = true;
    }
    if (($original_calificacion_3_ != $this->calificacion_3_ || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_3_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_3_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_3_);
        $this->NM_ajax_changed['calificacion_3_'] = true;
    }
    if (($original_calificacion_4_ != $this->calificacion_4_ || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_4_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_4_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_4_);
        $this->NM_ajax_changed['calificacion_4_'] = true;
    }
    if (($original_calificacion_5_ != $this->calificacion_5_ || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_5_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_5_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_5_);
        $this->NM_ajax_changed['calificacion_5_'] = true;
    }
    if (($original_calificacion_6_ != $this->calificacion_6_ || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_6_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_6_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_6_);
        $this->NM_ajax_changed['calificacion_6_'] = true;
    }
    if (($original_calificacion_7_ != $this->calificacion_7_ || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_7_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_7_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_7_);
        $this->NM_ajax_changed['calificacion_7_'] = true;
    }
    if (($original_calificacion_8_ != $this->calificacion_8_ || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_8_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_8_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_8_);
        $this->NM_ajax_changed['calificacion_8_'] = true;
    }
    if (($original_calificacion_9_ != $this->calificacion_9_ || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_9_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_9_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_9_);
        $this->NM_ajax_changed['calificacion_9_'] = true;
    }
    if (($original_calificacion_nivel_1_ != $this->calificacion_nivel_1_ || (isset($bFlagRead_calificacion_nivel_1_) && $bFlagRead_calificacion_nivel_1_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_1_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_1_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_1_);
        $this->NM_ajax_changed['calificacion_nivel_1_'] = true;
    }
    if (($original_calificacion_nivel_2_ != $this->calificacion_nivel_2_ || (isset($bFlagRead_calificacion_nivel_2_) && $bFlagRead_calificacion_nivel_2_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_2_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_2_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_2_);
        $this->NM_ajax_changed['calificacion_nivel_2_'] = true;
    }
    if (($original_calificacion_nivel_3_ != $this->calificacion_nivel_3_ || (isset($bFlagRead_calificacion_nivel_3_) && $bFlagRead_calificacion_nivel_3_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_3_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_3_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_3_);
        $this->NM_ajax_changed['calificacion_nivel_3_'] = true;
    }
    if (($original_calificacion_nivel_4_ != $this->calificacion_nivel_4_ || (isset($bFlagRead_calificacion_nivel_4_) && $bFlagRead_calificacion_nivel_4_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_4_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_4_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_4_);
        $this->NM_ajax_changed['calificacion_nivel_4_'] = true;
    }
    if (($original_calificacion_nivel_5_ != $this->calificacion_nivel_5_ || (isset($bFlagRead_calificacion_nivel_5_) && $bFlagRead_calificacion_nivel_5_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_5_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_5_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_5_);
        $this->NM_ajax_changed['calificacion_nivel_5_'] = true;
    }
    if (($original_calificacion_nivel_6_ != $this->calificacion_nivel_6_ || (isset($bFlagRead_calificacion_nivel_6_) && $bFlagRead_calificacion_nivel_6_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_6_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_6_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_6_);
        $this->NM_ajax_changed['calificacion_nivel_6_'] = true;
    }
    if (($original_calificacion_nivel_7_ != $this->calificacion_nivel_7_ || (isset($bFlagRead_calificacion_nivel_7_) && $bFlagRead_calificacion_nivel_7_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_7_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_7_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_7_);
        $this->NM_ajax_changed['calificacion_nivel_7_'] = true;
    }
    if (($original_calificacion_nivel_8_ != $this->calificacion_nivel_8_ || (isset($bFlagRead_calificacion_nivel_8_) && $bFlagRead_calificacion_nivel_8_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_8_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_8_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_8_);
        $this->NM_ajax_changed['calificacion_nivel_8_'] = true;
    }
    if (($original_calificacion_nivel_9_ != $this->calificacion_nivel_9_ || (isset($bFlagRead_calificacion_nivel_9_) && $bFlagRead_calificacion_nivel_9_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['calificacion_nivel_9_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['calificacion_nivel_9_' . $this->nmgp_refresh_row]['valList'] = array($this->calificacion_nivel_9_);
        $this->NM_ajax_changed['calificacion_nivel_9_'] = true;
    }
}
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros

   function nm_acessa_banco() 
   { 
      global $sc_seq_vert,  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      $SC_tem_cmp_update = true; 
      if ($this->nmgp_opcao == "alterar")
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['estudiante_id_'] == $this->estudiante_id_ &&
              $this->nmgp_dados_select['asignatura_id_'] == $this->asignatura_id_ &&
              $this->nmgp_dados_select['tipo_calificacion_id_'] == $this->tipo_calificacion_id_ &&
              $this->nmgp_dados_select['calificacion_1_'] == $this->calificacion_1_ &&
              $this->nmgp_dados_select['calificacion_nivel_1_'] == $this->calificacion_nivel_1_ &&
              $this->nmgp_dados_select['calificacion_2_'] == $this->calificacion_2_ &&
              $this->nmgp_dados_select['calificacion_nivel_2_'] == $this->calificacion_nivel_2_ &&
              $this->nmgp_dados_select['calificacion_3_'] == $this->calificacion_3_ &&
              $this->nmgp_dados_select['calificacion_nivel_3_'] == $this->calificacion_nivel_3_ &&
              $this->nmgp_dados_select['calificacion_4_'] == $this->calificacion_4_ &&
              $this->nmgp_dados_select['calificacion_nivel_4_'] == $this->calificacion_nivel_4_ &&
              $this->nmgp_dados_select['calificacion_5_'] == $this->calificacion_5_ &&
              $this->nmgp_dados_select['calificacion_nivel_5_'] == $this->calificacion_nivel_5_ &&
              $this->nmgp_dados_select['calificacion_6_'] == $this->calificacion_6_ &&
              $this->nmgp_dados_select['calificacion_nivel_6_'] == $this->calificacion_nivel_6_ &&
              $this->nmgp_dados_select['calificacion_7_'] == $this->calificacion_7_ &&
              $this->nmgp_dados_select['calificacion_nivel_7_'] == $this->calificacion_nivel_7_ &&
              $this->nmgp_dados_select['calificacion_8_'] == $this->calificacion_8_ &&
              $this->nmgp_dados_select['calificacion_nivel_8_'] == $this->calificacion_nivel_8_ &&
              $this->nmgp_dados_select['calificacion_9_'] == $this->calificacion_9_ &&
              $this->nmgp_dados_select['calificacion_nivel_9_'] == $this->calificacion_nivel_9_ &&
              $this->nmgp_dados_select['calificacion_final_'] == $this->calificacion_final_)
          {
              $SC_ex_update = false; 
              $SC_ex_upd_or = false; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['estudiante_id_'] = $this->estudiante_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['asignatura_id_'] = $this->asignatura_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['tipo_calificacion_id_'] = $this->tipo_calificacion_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_1_'] = $this->calificacion_1_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_1_'] = $this->calificacion_nivel_1_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_2_'] = $this->calificacion_2_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_2_'] = $this->calificacion_nivel_2_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_3_'] = $this->calificacion_3_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_3_'] = $this->calificacion_nivel_3_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_4_'] = $this->calificacion_4_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_4_'] = $this->calificacion_nivel_4_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_5_'] = $this->calificacion_5_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_5_'] = $this->calificacion_nivel_5_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_6_'] = $this->calificacion_6_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_6_'] = $this->calificacion_nivel_6_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_7_'] = $this->calificacion_7_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_7_'] = $this->calificacion_nivel_7_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_8_'] = $this->calificacion_8_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_8_'] = $this->calificacion_nivel_8_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_9_'] = $this->calificacion_9_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_9_'] = $this->calificacion_nivel_9_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_final_'] = $this->calificacion_final_;
          }
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if (!in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Db->BeginTrans(); 
          $this->Ini->sc_tem_trans_banco = true; 
      } 
      $NM_val_form['estudiante_id_'] = $this->estudiante_id_;
      $NM_val_form['asignatura_id_'] = $this->asignatura_id_;
      $NM_val_form['tipo_calificacion_id_'] = $this->tipo_calificacion_id_;
      $NM_val_form['calificacion_1_'] = $this->calificacion_1_;
      $NM_val_form['calificacion_nivel_1_'] = $this->calificacion_nivel_1_;
      $NM_val_form['calificacion_2_'] = $this->calificacion_2_;
      $NM_val_form['calificacion_nivel_2_'] = $this->calificacion_nivel_2_;
      $NM_val_form['calificacion_3_'] = $this->calificacion_3_;
      $NM_val_form['calificacion_nivel_3_'] = $this->calificacion_nivel_3_;
      $NM_val_form['calificacion_4_'] = $this->calificacion_4_;
      $NM_val_form['calificacion_nivel_4_'] = $this->calificacion_nivel_4_;
      $NM_val_form['calificacion_5_'] = $this->calificacion_5_;
      $NM_val_form['calificacion_nivel_5_'] = $this->calificacion_nivel_5_;
      $NM_val_form['calificacion_6_'] = $this->calificacion_6_;
      $NM_val_form['calificacion_nivel_6_'] = $this->calificacion_nivel_6_;
      $NM_val_form['calificacion_7_'] = $this->calificacion_7_;
      $NM_val_form['calificacion_nivel_7_'] = $this->calificacion_nivel_7_;
      $NM_val_form['calificacion_8_'] = $this->calificacion_8_;
      $NM_val_form['calificacion_nivel_8_'] = $this->calificacion_nivel_8_;
      $NM_val_form['calificacion_9_'] = $this->calificacion_9_;
      $NM_val_form['calificacion_nivel_9_'] = $this->calificacion_nivel_9_;
      $NM_val_form['calificacion_final_'] = $this->calificacion_final_;
      $NM_val_form['colegio_id_'] = $this->colegio_id_;
      $NM_val_form['periodo_id_'] = $this->periodo_id_;
      $NM_val_form['curso_id_'] = $this->curso_id_;
      $NM_val_form['descripcion_1_'] = $this->descripcion_1_;
      $NM_val_form['publicada_1_'] = $this->publicada_1_;
      $NM_val_form['descripcion_2_'] = $this->descripcion_2_;
      $NM_val_form['publicada_2_'] = $this->publicada_2_;
      $NM_val_form['descripcion_3_'] = $this->descripcion_3_;
      $NM_val_form['publicada_3_'] = $this->publicada_3_;
      $NM_val_form['descripcion_4_'] = $this->descripcion_4_;
      $NM_val_form['publicada_4_'] = $this->publicada_4_;
      $NM_val_form['descripcion_5_'] = $this->descripcion_5_;
      $NM_val_form['publicada_5_'] = $this->publicada_5_;
      $NM_val_form['descripcion_6_'] = $this->descripcion_6_;
      $NM_val_form['publicada_6_'] = $this->publicada_6_;
      $NM_val_form['descripcion_7_'] = $this->descripcion_7_;
      $NM_val_form['publicada_7_'] = $this->publicada_7_;
      $NM_val_form['descripcion_8_'] = $this->descripcion_8_;
      $NM_val_form['publicada_8_'] = $this->publicada_8_;
      $NM_val_form['descripcion_9_'] = $this->descripcion_9_;
      $NM_val_form['publicada_9_'] = $this->publicada_9_;
      if ($this->colegio_id_ == "")  
      { 
          $this->colegio_id_ = 0;
      } 
      if ($this->periodo_id_ == "")  
      { 
          $this->periodo_id_ = 0;
      } 
      if ($this->curso_id_ == "")  
      { 
          $this->curso_id_ = 0;
      } 
      if ($this->estudiante_id_ == "")  
      { 
          $this->estudiante_id_ = 0;
      } 
      if ($this->asignatura_id_ == "")  
      { 
          $this->asignatura_id_ = 0;
      } 
      if ($this->tipo_calificacion_id_ == "")  
      { 
          $this->tipo_calificacion_id_ = 0;
          $this->sc_force_zero[] = 'tipo_calificacion_id_';
      } 
      if ($this->calificacion_final_ == "")  
      { 
          $this->calificacion_final_ = 0;
          $this->sc_force_zero[] = 'calificacion_final_';
      } 
      if ($this->calificacion_1_ == "")  
      { 
          $this->calificacion_1_ = 0;
          $this->sc_force_zero[] = 'calificacion_1_';
      } 
      if ($this->publicada_1_ == "")  
      { 
          $this->publicada_1_ = 0;
          $this->sc_force_zero[] = 'publicada_1_';
      } 
      if ($this->calificacion_2_ == "")  
      { 
          $this->calificacion_2_ = 0;
          $this->sc_force_zero[] = 'calificacion_2_';
      } 
      if ($this->publicada_2_ == "")  
      { 
          $this->publicada_2_ = 0;
          $this->sc_force_zero[] = 'publicada_2_';
      } 
      if ($this->calificacion_3_ == "")  
      { 
          $this->calificacion_3_ = 0;
          $this->sc_force_zero[] = 'calificacion_3_';
      } 
      if ($this->publicada_3_ == "")  
      { 
          $this->publicada_3_ = 0;
          $this->sc_force_zero[] = 'publicada_3_';
      } 
      if ($this->calificacion_4_ == "")  
      { 
          $this->calificacion_4_ = 0;
          $this->sc_force_zero[] = 'calificacion_4_';
      } 
      if ($this->publicada_4_ == "")  
      { 
          $this->publicada_4_ = 0;
          $this->sc_force_zero[] = 'publicada_4_';
      } 
      if ($this->calificacion_5_ == "")  
      { 
          $this->calificacion_5_ = 0;
          $this->sc_force_zero[] = 'calificacion_5_';
      } 
      if ($this->publicada_5_ == "")  
      { 
          $this->publicada_5_ = 0;
          $this->sc_force_zero[] = 'publicada_5_';
      } 
      if ($this->calificacion_6_ == "")  
      { 
          $this->calificacion_6_ = 0;
          $this->sc_force_zero[] = 'calificacion_6_';
      } 
      if ($this->publicada_6_ == "")  
      { 
          $this->publicada_6_ = 0;
          $this->sc_force_zero[] = 'publicada_6_';
      } 
      if ($this->calificacion_7_ == "")  
      { 
          $this->calificacion_7_ = 0;
          $this->sc_force_zero[] = 'calificacion_7_';
      } 
      if ($this->publicada_7_ == "")  
      { 
          $this->publicada_7_ = 0;
          $this->sc_force_zero[] = 'publicada_7_';
      } 
      if ($this->calificacion_8_ == "")  
      { 
          $this->calificacion_8_ = 0;
          $this->sc_force_zero[] = 'calificacion_8_';
      } 
      if ($this->publicada_8_ == "")  
      { 
          $this->publicada_8_ = 0;
          $this->sc_force_zero[] = 'publicada_8_';
      } 
      if ($this->calificacion_9_ == "")  
      { 
          $this->calificacion_9_ = 0;
          $this->sc_force_zero[] = 'calificacion_9_';
      } 
      if ($this->publicada_9_ == "")  
      { 
          $this->publicada_9_ = 0;
          $this->sc_force_zero[] = 'publicada_9_';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->descripcion_1__before_qstr = $this->descripcion_1_;
          $this->descripcion_1_ = substr($this->Db->qstr($this->descripcion_1_), 1, -1); 
          if ($this->descripcion_1_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_1_ = "null"; 
              $NM_val_null[] = "descripcion_1_";
          } 
          $this->calificacion_nivel_1__before_qstr = $this->calificacion_nivel_1_;
          $this->calificacion_nivel_1_ = substr($this->Db->qstr($this->calificacion_nivel_1_), 1, -1); 
          if ($this->calificacion_nivel_1_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_1_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_1_";
          } 
          $this->descripcion_2__before_qstr = $this->descripcion_2_;
          $this->descripcion_2_ = substr($this->Db->qstr($this->descripcion_2_), 1, -1); 
          if ($this->descripcion_2_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_2_ = "null"; 
              $NM_val_null[] = "descripcion_2_";
          } 
          $this->calificacion_nivel_2__before_qstr = $this->calificacion_nivel_2_;
          $this->calificacion_nivel_2_ = substr($this->Db->qstr($this->calificacion_nivel_2_), 1, -1); 
          if ($this->calificacion_nivel_2_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_2_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_2_";
          } 
          $this->descripcion_3__before_qstr = $this->descripcion_3_;
          $this->descripcion_3_ = substr($this->Db->qstr($this->descripcion_3_), 1, -1); 
          if ($this->descripcion_3_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_3_ = "null"; 
              $NM_val_null[] = "descripcion_3_";
          } 
          $this->calificacion_nivel_3__before_qstr = $this->calificacion_nivel_3_;
          $this->calificacion_nivel_3_ = substr($this->Db->qstr($this->calificacion_nivel_3_), 1, -1); 
          if ($this->calificacion_nivel_3_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_3_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_3_";
          } 
          $this->descripcion_4__before_qstr = $this->descripcion_4_;
          $this->descripcion_4_ = substr($this->Db->qstr($this->descripcion_4_), 1, -1); 
          if ($this->descripcion_4_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_4_ = "null"; 
              $NM_val_null[] = "descripcion_4_";
          } 
          $this->calificacion_nivel_4__before_qstr = $this->calificacion_nivel_4_;
          $this->calificacion_nivel_4_ = substr($this->Db->qstr($this->calificacion_nivel_4_), 1, -1); 
          if ($this->calificacion_nivel_4_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_4_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_4_";
          } 
          $this->descripcion_5__before_qstr = $this->descripcion_5_;
          $this->descripcion_5_ = substr($this->Db->qstr($this->descripcion_5_), 1, -1); 
          if ($this->descripcion_5_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_5_ = "null"; 
              $NM_val_null[] = "descripcion_5_";
          } 
          $this->calificacion_nivel_5__before_qstr = $this->calificacion_nivel_5_;
          $this->calificacion_nivel_5_ = substr($this->Db->qstr($this->calificacion_nivel_5_), 1, -1); 
          if ($this->calificacion_nivel_5_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_5_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_5_";
          } 
          $this->descripcion_6__before_qstr = $this->descripcion_6_;
          $this->descripcion_6_ = substr($this->Db->qstr($this->descripcion_6_), 1, -1); 
          if ($this->descripcion_6_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_6_ = "null"; 
              $NM_val_null[] = "descripcion_6_";
          } 
          $this->calificacion_nivel_6__before_qstr = $this->calificacion_nivel_6_;
          $this->calificacion_nivel_6_ = substr($this->Db->qstr($this->calificacion_nivel_6_), 1, -1); 
          if ($this->calificacion_nivel_6_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_6_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_6_";
          } 
          $this->descripcion_7__before_qstr = $this->descripcion_7_;
          $this->descripcion_7_ = substr($this->Db->qstr($this->descripcion_7_), 1, -1); 
          if ($this->descripcion_7_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_7_ = "null"; 
              $NM_val_null[] = "descripcion_7_";
          } 
          $this->calificacion_nivel_7__before_qstr = $this->calificacion_nivel_7_;
          $this->calificacion_nivel_7_ = substr($this->Db->qstr($this->calificacion_nivel_7_), 1, -1); 
          if ($this->calificacion_nivel_7_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_7_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_7_";
          } 
          $this->descripcion_8__before_qstr = $this->descripcion_8_;
          $this->descripcion_8_ = substr($this->Db->qstr($this->descripcion_8_), 1, -1); 
          if ($this->descripcion_8_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_8_ = "null"; 
              $NM_val_null[] = "descripcion_8_";
          } 
          $this->calificacion_nivel_8__before_qstr = $this->calificacion_nivel_8_;
          $this->calificacion_nivel_8_ = substr($this->Db->qstr($this->calificacion_nivel_8_), 1, -1); 
          if ($this->calificacion_nivel_8_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_8_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_8_";
          } 
          $this->descripcion_9__before_qstr = $this->descripcion_9_;
          $this->descripcion_9_ = substr($this->Db->qstr($this->descripcion_9_), 1, -1); 
          if ($this->descripcion_9_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->descripcion_9_ = "null"; 
              $NM_val_null[] = "descripcion_9_";
          } 
          $this->calificacion_nivel_9__before_qstr = $this->calificacion_nivel_9_;
          $this->calificacion_nivel_9_ = substr($this->Db->qstr($this->calificacion_nivel_9_), 1, -1); 
          if ($this->calificacion_nivel_9_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->calificacion_nivel_9_ = "null"; 
              $NM_val_null[] = "calificacion_nivel_9_";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_calificaciones_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET tipo_calificacion_id = $this->tipo_calificacion_id_, calificacion_final = $this->calificacion_final_, calificacion_1 = $this->calificacion_1_, calificacion_nivel_1 = '$this->calificacion_nivel_1_', calificacion_2 = $this->calificacion_2_, calificacion_nivel_2 = '$this->calificacion_nivel_2_', calificacion_3 = $this->calificacion_3_, calificacion_nivel_3 = '$this->calificacion_nivel_3_', calificacion_4 = $this->calificacion_4_, calificacion_nivel_4 = '$this->calificacion_nivel_4_', calificacion_5 = $this->calificacion_5_, calificacion_nivel_5 = '$this->calificacion_nivel_5_', calificacion_6 = $this->calificacion_6_, calificacion_nivel_6 = '$this->calificacion_nivel_6_', calificacion_7 = $this->calificacion_7_, calificacion_nivel_7 = '$this->calificacion_nivel_7_', calificacion_8 = $this->calificacion_8_, calificacion_nivel_8 = '$this->calificacion_nivel_8_', calificacion_9 = $this->calificacion_9_, calificacion_nivel_9 = '$this->calificacion_nivel_9_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET tipo_calificacion_id = $this->tipo_calificacion_id_, calificacion_final = $this->calificacion_final_, calificacion_1 = $this->calificacion_1_, calificacion_nivel_1 = '$this->calificacion_nivel_1_', calificacion_2 = $this->calificacion_2_, calificacion_nivel_2 = '$this->calificacion_nivel_2_', calificacion_3 = $this->calificacion_3_, calificacion_nivel_3 = '$this->calificacion_nivel_3_', calificacion_4 = $this->calificacion_4_, calificacion_nivel_4 = '$this->calificacion_nivel_4_', calificacion_5 = $this->calificacion_5_, calificacion_nivel_5 = '$this->calificacion_nivel_5_', calificacion_6 = $this->calificacion_6_, calificacion_nivel_6 = '$this->calificacion_nivel_6_', calificacion_7 = $this->calificacion_7_, calificacion_nivel_7 = '$this->calificacion_nivel_7_', calificacion_8 = $this->calificacion_8_, calificacion_nivel_8 = '$this->calificacion_nivel_8_', calificacion_9 = $this->calificacion_9_, calificacion_nivel_9 = '$this->calificacion_nivel_9_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET tipo_calificacion_id = $this->tipo_calificacion_id_, calificacion_final = $this->calificacion_final_, calificacion_1 = $this->calificacion_1_, calificacion_nivel_1 = '$this->calificacion_nivel_1_', calificacion_2 = $this->calificacion_2_, calificacion_nivel_2 = '$this->calificacion_nivel_2_', calificacion_3 = $this->calificacion_3_, calificacion_nivel_3 = '$this->calificacion_nivel_3_', calificacion_4 = $this->calificacion_4_, calificacion_nivel_4 = '$this->calificacion_nivel_4_', calificacion_5 = $this->calificacion_5_, calificacion_nivel_5 = '$this->calificacion_nivel_5_', calificacion_6 = $this->calificacion_6_, calificacion_nivel_6 = '$this->calificacion_nivel_6_', calificacion_7 = $this->calificacion_7_, calificacion_nivel_7 = '$this->calificacion_nivel_7_', calificacion_8 = $this->calificacion_8_, calificacion_nivel_8 = '$this->calificacion_nivel_8_', calificacion_9 = $this->calificacion_9_, calificacion_nivel_9 = '$this->calificacion_nivel_9_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET tipo_calificacion_id = $this->tipo_calificacion_id_, calificacion_final = $this->calificacion_final_, calificacion_1 = $this->calificacion_1_, calificacion_nivel_1 = '$this->calificacion_nivel_1_', calificacion_2 = $this->calificacion_2_, calificacion_nivel_2 = '$this->calificacion_nivel_2_', calificacion_3 = $this->calificacion_3_, calificacion_nivel_3 = '$this->calificacion_nivel_3_', calificacion_4 = $this->calificacion_4_, calificacion_nivel_4 = '$this->calificacion_nivel_4_', calificacion_5 = $this->calificacion_5_, calificacion_nivel_5 = '$this->calificacion_nivel_5_', calificacion_6 = $this->calificacion_6_, calificacion_nivel_6 = '$this->calificacion_nivel_6_', calificacion_7 = $this->calificacion_7_, calificacion_nivel_7 = '$this->calificacion_nivel_7_', calificacion_8 = $this->calificacion_8_, calificacion_nivel_8 = '$this->calificacion_nivel_8_', calificacion_9 = $this->calificacion_9_, calificacion_nivel_9 = '$this->calificacion_nivel_9_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET tipo_calificacion_id = $this->tipo_calificacion_id_, calificacion_final = $this->calificacion_final_, calificacion_1 = $this->calificacion_1_, calificacion_nivel_1 = '$this->calificacion_nivel_1_', calificacion_2 = $this->calificacion_2_, calificacion_nivel_2 = '$this->calificacion_nivel_2_', calificacion_3 = $this->calificacion_3_, calificacion_nivel_3 = '$this->calificacion_nivel_3_', calificacion_4 = $this->calificacion_4_, calificacion_nivel_4 = '$this->calificacion_nivel_4_', calificacion_5 = $this->calificacion_5_, calificacion_nivel_5 = '$this->calificacion_nivel_5_', calificacion_6 = $this->calificacion_6_, calificacion_nivel_6 = '$this->calificacion_nivel_6_', calificacion_7 = $this->calificacion_7_, calificacion_nivel_7 = '$this->calificacion_nivel_7_', calificacion_8 = $this->calificacion_8_, calificacion_nivel_8 = '$this->calificacion_nivel_8_', calificacion_9 = $this->calificacion_9_, calificacion_nivel_9 = '$this->calificacion_nivel_9_'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET tipo_calificacion_id = $this->tipo_calificacion_id_, calificacion_final = $this->calificacion_final_, calificacion_1 = $this->calificacion_1_, calificacion_nivel_1 = '$this->calificacion_nivel_1_', calificacion_2 = $this->calificacion_2_, calificacion_nivel_2 = '$this->calificacion_nivel_2_', calificacion_3 = $this->calificacion_3_, calificacion_nivel_3 = '$this->calificacion_nivel_3_', calificacion_4 = $this->calificacion_4_, calificacion_nivel_4 = '$this->calificacion_nivel_4_', calificacion_5 = $this->calificacion_5_, calificacion_nivel_5 = '$this->calificacion_nivel_5_', calificacion_6 = $this->calificacion_6_, calificacion_nivel_6 = '$this->calificacion_nivel_6_', calificacion_7 = $this->calificacion_7_, calificacion_nivel_7 = '$this->calificacion_nivel_7_', calificacion_8 = $this->calificacion_8_, calificacion_nivel_8 = '$this->calificacion_nivel_8_', calificacion_9 = $this->calificacion_9_, calificacion_nivel_9 = '$this->calificacion_nivel_9_'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET tipo_calificacion_id = $this->tipo_calificacion_id_, calificacion_final = $this->calificacion_final_, calificacion_1 = $this->calificacion_1_, calificacion_nivel_1 = '$this->calificacion_nivel_1_', calificacion_2 = $this->calificacion_2_, calificacion_nivel_2 = '$this->calificacion_nivel_2_', calificacion_3 = $this->calificacion_3_, calificacion_nivel_3 = '$this->calificacion_nivel_3_', calificacion_4 = $this->calificacion_4_, calificacion_nivel_4 = '$this->calificacion_nivel_4_', calificacion_5 = $this->calificacion_5_, calificacion_nivel_5 = '$this->calificacion_nivel_5_', calificacion_6 = $this->calificacion_6_, calificacion_nivel_6 = '$this->calificacion_nivel_6_', calificacion_7 = $this->calificacion_7_, calificacion_nivel_7 = '$this->calificacion_nivel_7_', calificacion_8 = $this->calificacion_8_, calificacion_nivel_8 = '$this->calificacion_nivel_8_', calificacion_9 = $this->calificacion_9_, calificacion_nivel_9 = '$this->calificacion_nivel_9_'";  
              } 
              if (isset($NM_val_form['descripcion_1_']) && $NM_val_form['descripcion_1_'] != $this->nmgp_dados_select['descripcion_1_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_1 = '$this->descripcion_1_'"; 
                  $comando_oracle        .= " descripcion_1 = '$this->descripcion_1_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_1_']) && $NM_val_form['publicada_1_'] != $this->nmgp_dados_select['publicada_1_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_1 = $this->publicada_1_"; 
                  $comando_oracle        .= " publicada_1 = $this->publicada_1_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_2_']) && $NM_val_form['descripcion_2_'] != $this->nmgp_dados_select['descripcion_2_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_2 = '$this->descripcion_2_'"; 
                  $comando_oracle        .= " descripcion_2 = '$this->descripcion_2_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_2_']) && $NM_val_form['publicada_2_'] != $this->nmgp_dados_select['publicada_2_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_2 = $this->publicada_2_"; 
                  $comando_oracle        .= " publicada_2 = $this->publicada_2_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_3_']) && $NM_val_form['descripcion_3_'] != $this->nmgp_dados_select['descripcion_3_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_3 = '$this->descripcion_3_'"; 
                  $comando_oracle        .= " descripcion_3 = '$this->descripcion_3_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_3_']) && $NM_val_form['publicada_3_'] != $this->nmgp_dados_select['publicada_3_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_3 = $this->publicada_3_"; 
                  $comando_oracle        .= " publicada_3 = $this->publicada_3_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_4_']) && $NM_val_form['descripcion_4_'] != $this->nmgp_dados_select['descripcion_4_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_4 = '$this->descripcion_4_'"; 
                  $comando_oracle        .= " descripcion_4 = '$this->descripcion_4_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_4_']) && $NM_val_form['publicada_4_'] != $this->nmgp_dados_select['publicada_4_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_4 = $this->publicada_4_"; 
                  $comando_oracle        .= " publicada_4 = $this->publicada_4_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_5_']) && $NM_val_form['descripcion_5_'] != $this->nmgp_dados_select['descripcion_5_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_5 = '$this->descripcion_5_'"; 
                  $comando_oracle        .= " descripcion_5 = '$this->descripcion_5_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_5_']) && $NM_val_form['publicada_5_'] != $this->nmgp_dados_select['publicada_5_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_5 = $this->publicada_5_"; 
                  $comando_oracle        .= " publicada_5 = $this->publicada_5_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_6_']) && $NM_val_form['descripcion_6_'] != $this->nmgp_dados_select['descripcion_6_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_6 = '$this->descripcion_6_'"; 
                  $comando_oracle        .= " descripcion_6 = '$this->descripcion_6_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_6_']) && $NM_val_form['publicada_6_'] != $this->nmgp_dados_select['publicada_6_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_6 = $this->publicada_6_"; 
                  $comando_oracle        .= " publicada_6 = $this->publicada_6_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_7_']) && $NM_val_form['descripcion_7_'] != $this->nmgp_dados_select['descripcion_7_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_7 = '$this->descripcion_7_'"; 
                  $comando_oracle        .= " descripcion_7 = '$this->descripcion_7_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_7_']) && $NM_val_form['publicada_7_'] != $this->nmgp_dados_select['publicada_7_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_7 = $this->publicada_7_"; 
                  $comando_oracle        .= " publicada_7 = $this->publicada_7_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_8_']) && $NM_val_form['descripcion_8_'] != $this->nmgp_dados_select['descripcion_8_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_8 = '$this->descripcion_8_'"; 
                  $comando_oracle        .= " descripcion_8 = '$this->descripcion_8_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_8_']) && $NM_val_form['publicada_8_'] != $this->nmgp_dados_select['publicada_8_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_8 = $this->publicada_8_"; 
                  $comando_oracle        .= " publicada_8 = $this->publicada_8_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['descripcion_9_']) && $NM_val_form['descripcion_9_'] != $this->nmgp_dados_select['descripcion_9_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " descripcion_9 = '$this->descripcion_9_'"; 
                  $comando_oracle        .= " descripcion_9 = '$this->descripcion_9_'"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              if (isset($NM_val_form['publicada_9_']) && $NM_val_form['publicada_9_'] != $this->nmgp_dados_select['publicada_9_']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " publicada_9 = $this->publicada_9_"; 
                  $comando_oracle        .= " publicada_9 = $this->publicada_9_"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";  
              }  
              else  
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              if ($SC_ex_update || $SC_tem_cmp_update)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg(), true); 
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $this->Db->ErrorMsg();  
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_calificaciones_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
          $this->descripcion_1_ = $this->descripcion_1__before_qstr;
          $this->calificacion_nivel_1_ = $this->calificacion_nivel_1__before_qstr;
          $this->descripcion_2_ = $this->descripcion_2__before_qstr;
          $this->calificacion_nivel_2_ = $this->calificacion_nivel_2__before_qstr;
          $this->descripcion_3_ = $this->descripcion_3__before_qstr;
          $this->calificacion_nivel_3_ = $this->calificacion_nivel_3__before_qstr;
          $this->descripcion_4_ = $this->descripcion_4__before_qstr;
          $this->calificacion_nivel_4_ = $this->calificacion_nivel_4__before_qstr;
          $this->descripcion_5_ = $this->descripcion_5__before_qstr;
          $this->calificacion_nivel_5_ = $this->calificacion_nivel_5__before_qstr;
          $this->descripcion_6_ = $this->descripcion_6__before_qstr;
          $this->calificacion_nivel_6_ = $this->calificacion_nivel_6__before_qstr;
          $this->descripcion_7_ = $this->descripcion_7__before_qstr;
          $this->calificacion_nivel_7_ = $this->calificacion_nivel_7__before_qstr;
          $this->descripcion_8_ = $this->descripcion_8__before_qstr;
          $this->calificacion_nivel_8_ = $this->calificacion_nivel_8__before_qstr;
          $this->descripcion_9_ = $this->descripcion_9__before_qstr;
          $this->calificacion_nivel_9_ = $this->calificacion_nivel_9__before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['db_changed'] = true;

              $this->sc_teve_alt = true; 
              if     (isset($NM_val_form) && isset($NM_val_form['estudiante_id_'])) { $this->estudiante_id_ = $NM_val_form['estudiante_id_']; }
              elseif (isset($this->estudiante_id_)) { $this->nm_limpa_alfa($this->estudiante_id_); }
              if     (isset($NM_val_form) && isset($NM_val_form['asignatura_id_'])) { $this->asignatura_id_ = $NM_val_form['asignatura_id_']; }
              elseif (isset($this->asignatura_id_)) { $this->nm_limpa_alfa($this->asignatura_id_); }
              if     (isset($NM_val_form) && isset($NM_val_form['tipo_calificacion_id_'])) { $this->tipo_calificacion_id_ = $NM_val_form['tipo_calificacion_id_']; }
              elseif (isset($this->tipo_calificacion_id_)) { $this->nm_limpa_alfa($this->tipo_calificacion_id_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_final_'])) { $this->calificacion_final_ = $NM_val_form['calificacion_final_']; }
              elseif (isset($this->calificacion_final_)) { $this->nm_limpa_alfa($this->calificacion_final_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_1_'])) { $this->calificacion_1_ = $NM_val_form['calificacion_1_']; }
              elseif (isset($this->calificacion_1_)) { $this->nm_limpa_alfa($this->calificacion_1_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_1_'])) { $this->calificacion_nivel_1_ = $NM_val_form['calificacion_nivel_1_']; }
              elseif (isset($this->calificacion_nivel_1_)) { $this->nm_limpa_alfa($this->calificacion_nivel_1_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_2_'])) { $this->calificacion_2_ = $NM_val_form['calificacion_2_']; }
              elseif (isset($this->calificacion_2_)) { $this->nm_limpa_alfa($this->calificacion_2_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_2_'])) { $this->calificacion_nivel_2_ = $NM_val_form['calificacion_nivel_2_']; }
              elseif (isset($this->calificacion_nivel_2_)) { $this->nm_limpa_alfa($this->calificacion_nivel_2_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_3_'])) { $this->calificacion_3_ = $NM_val_form['calificacion_3_']; }
              elseif (isset($this->calificacion_3_)) { $this->nm_limpa_alfa($this->calificacion_3_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_3_'])) { $this->calificacion_nivel_3_ = $NM_val_form['calificacion_nivel_3_']; }
              elseif (isset($this->calificacion_nivel_3_)) { $this->nm_limpa_alfa($this->calificacion_nivel_3_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_4_'])) { $this->calificacion_4_ = $NM_val_form['calificacion_4_']; }
              elseif (isset($this->calificacion_4_)) { $this->nm_limpa_alfa($this->calificacion_4_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_4_'])) { $this->calificacion_nivel_4_ = $NM_val_form['calificacion_nivel_4_']; }
              elseif (isset($this->calificacion_nivel_4_)) { $this->nm_limpa_alfa($this->calificacion_nivel_4_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_5_'])) { $this->calificacion_5_ = $NM_val_form['calificacion_5_']; }
              elseif (isset($this->calificacion_5_)) { $this->nm_limpa_alfa($this->calificacion_5_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_5_'])) { $this->calificacion_nivel_5_ = $NM_val_form['calificacion_nivel_5_']; }
              elseif (isset($this->calificacion_nivel_5_)) { $this->nm_limpa_alfa($this->calificacion_nivel_5_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_6_'])) { $this->calificacion_6_ = $NM_val_form['calificacion_6_']; }
              elseif (isset($this->calificacion_6_)) { $this->nm_limpa_alfa($this->calificacion_6_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_6_'])) { $this->calificacion_nivel_6_ = $NM_val_form['calificacion_nivel_6_']; }
              elseif (isset($this->calificacion_nivel_6_)) { $this->nm_limpa_alfa($this->calificacion_nivel_6_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_7_'])) { $this->calificacion_7_ = $NM_val_form['calificacion_7_']; }
              elseif (isset($this->calificacion_7_)) { $this->nm_limpa_alfa($this->calificacion_7_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_7_'])) { $this->calificacion_nivel_7_ = $NM_val_form['calificacion_nivel_7_']; }
              elseif (isset($this->calificacion_nivel_7_)) { $this->nm_limpa_alfa($this->calificacion_nivel_7_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_8_'])) { $this->calificacion_8_ = $NM_val_form['calificacion_8_']; }
              elseif (isset($this->calificacion_8_)) { $this->nm_limpa_alfa($this->calificacion_8_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_8_'])) { $this->calificacion_nivel_8_ = $NM_val_form['calificacion_nivel_8_']; }
              elseif (isset($this->calificacion_nivel_8_)) { $this->nm_limpa_alfa($this->calificacion_nivel_8_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_9_'])) { $this->calificacion_9_ = $NM_val_form['calificacion_9_']; }
              elseif (isset($this->calificacion_9_)) { $this->nm_limpa_alfa($this->calificacion_9_); }
              if     (isset($NM_val_form) && isset($NM_val_form['calificacion_nivel_9_'])) { $this->calificacion_nivel_9_ = $NM_val_form['calificacion_nivel_9_']; }
              elseif (isset($this->calificacion_nivel_9_)) { $this->nm_limpa_alfa($this->calificacion_nivel_9_); }
              $this->nm_proc_onload_record($this->nmgp_refresh_row);

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('estudiante_id_', 'asignatura_id_', 'tipo_calificacion_id_', 'calificacion_1_', 'calificacion_nivel_1_', 'calificacion_2_', 'calificacion_nivel_2_', 'calificacion_3_', 'calificacion_nivel_3_', 'calificacion_4_', 'calificacion_nivel_4_', 'calificacion_5_', 'calificacion_nivel_5_', 'calificacion_6_', 'calificacion_nivel_6_', 'calificacion_7_', 'calificacion_nivel_7_', 'calificacion_8_', 'calificacion_nivel_8_', 'calificacion_9_', 'calificacion_nivel_9_', 'calificacion_final_'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['estudiante_id_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['asignatura_id_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['tipo_calificacion_id_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_1_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_1_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_2_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_2_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_3_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_3_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_4_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_4_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_5_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_5_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_6_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_6_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_7_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_7_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_8_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_8_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_9_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_nivel_9_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['calificacion_final_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_pkey']; 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9) VALUES ($this->colegio_id_, $this->periodo_id_, $this->curso_id_, $this->estudiante_id_, $this->asignatura_id_, $this->tipo_calificacion_id_, $this->calificacion_final_, '$this->descripcion_1_', $this->calificacion_1_, '$this->calificacion_nivel_1_', $this->publicada_1_, '$this->descripcion_2_', $this->calificacion_2_, '$this->calificacion_nivel_2_', $this->publicada_2_, '$this->descripcion_3_', $this->calificacion_3_, '$this->calificacion_nivel_3_', $this->publicada_3_, '$this->descripcion_4_', $this->calificacion_4_, '$this->calificacion_nivel_4_', $this->publicada_4_, '$this->descripcion_5_', $this->calificacion_5_, '$this->calificacion_nivel_5_', $this->publicada_5_, '$this->descripcion_6_', $this->calificacion_6_, '$this->calificacion_nivel_6_', $this->publicada_6_, '$this->descripcion_7_', $this->calificacion_7_, '$this->calificacion_nivel_7_', $this->publicada_7_, '$this->descripcion_8_', $this->calificacion_8_, '$this->calificacion_nivel_8_', $this->publicada_8_, '$this->descripcion_9_', $this->calificacion_9_, '$this->calificacion_nivel_9_', $this->publicada_9_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9) VALUES (" . $NM_seq_auto . "$this->colegio_id_, $this->periodo_id_, $this->curso_id_, $this->estudiante_id_, $this->asignatura_id_, $this->tipo_calificacion_id_, $this->calificacion_final_, '$this->descripcion_1_', $this->calificacion_1_, '$this->calificacion_nivel_1_', $this->publicada_1_, '$this->descripcion_2_', $this->calificacion_2_, '$this->calificacion_nivel_2_', $this->publicada_2_, '$this->descripcion_3_', $this->calificacion_3_, '$this->calificacion_nivel_3_', $this->publicada_3_, '$this->descripcion_4_', $this->calificacion_4_, '$this->calificacion_nivel_4_', $this->publicada_4_, '$this->descripcion_5_', $this->calificacion_5_, '$this->calificacion_nivel_5_', $this->publicada_5_, '$this->descripcion_6_', $this->calificacion_6_, '$this->calificacion_nivel_6_', $this->publicada_6_, '$this->descripcion_7_', $this->calificacion_7_, '$this->calificacion_nivel_7_', $this->publicada_7_, '$this->descripcion_8_', $this->calificacion_8_, '$this->calificacion_nivel_8_', $this->publicada_8_, '$this->descripcion_9_', $this->calificacion_9_, '$this->calificacion_nivel_9_', $this->publicada_9_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9) VALUES (" . $NM_seq_auto . "$this->colegio_id_, $this->periodo_id_, $this->curso_id_, $this->estudiante_id_, $this->asignatura_id_, $this->tipo_calificacion_id_, $this->calificacion_final_, '$this->descripcion_1_', $this->calificacion_1_, '$this->calificacion_nivel_1_', $this->publicada_1_, '$this->descripcion_2_', $this->calificacion_2_, '$this->calificacion_nivel_2_', $this->publicada_2_, '$this->descripcion_3_', $this->calificacion_3_, '$this->calificacion_nivel_3_', $this->publicada_3_, '$this->descripcion_4_', $this->calificacion_4_, '$this->calificacion_nivel_4_', $this->publicada_4_, '$this->descripcion_5_', $this->calificacion_5_, '$this->calificacion_nivel_5_', $this->publicada_5_, '$this->descripcion_6_', $this->calificacion_6_, '$this->calificacion_nivel_6_', $this->publicada_6_, '$this->descripcion_7_', $this->calificacion_7_, '$this->calificacion_nivel_7_', $this->publicada_7_, '$this->descripcion_8_', $this->calificacion_8_, '$this->calificacion_nivel_8_', $this->publicada_8_, '$this->descripcion_9_', $this->calificacion_9_, '$this->calificacion_nivel_9_', $this->publicada_9_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9) VALUES (" . $NM_seq_auto . "$this->colegio_id_, $this->periodo_id_, $this->curso_id_, $this->estudiante_id_, $this->asignatura_id_, $this->tipo_calificacion_id_, $this->calificacion_final_, '$this->descripcion_1_', $this->calificacion_1_, '$this->calificacion_nivel_1_', $this->publicada_1_, '$this->descripcion_2_', $this->calificacion_2_, '$this->calificacion_nivel_2_', $this->publicada_2_, '$this->descripcion_3_', $this->calificacion_3_, '$this->calificacion_nivel_3_', $this->publicada_3_, '$this->descripcion_4_', $this->calificacion_4_, '$this->calificacion_nivel_4_', $this->publicada_4_, '$this->descripcion_5_', $this->calificacion_5_, '$this->calificacion_nivel_5_', $this->publicada_5_, '$this->descripcion_6_', $this->calificacion_6_, '$this->calificacion_nivel_6_', $this->publicada_6_, '$this->descripcion_7_', $this->calificacion_7_, '$this->calificacion_nivel_7_', $this->publicada_7_, '$this->descripcion_8_', $this->calificacion_8_, '$this->calificacion_nivel_8_', $this->publicada_8_, '$this->descripcion_9_', $this->calificacion_9_, '$this->calificacion_nivel_9_', $this->publicada_9_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9) VALUES (" . $NM_seq_auto . "$this->colegio_id_, $this->periodo_id_, $this->curso_id_, $this->estudiante_id_, $this->asignatura_id_, $this->tipo_calificacion_id_, $this->calificacion_final_, '$this->descripcion_1_', $this->calificacion_1_, '$this->calificacion_nivel_1_', $this->publicada_1_, '$this->descripcion_2_', $this->calificacion_2_, '$this->calificacion_nivel_2_', $this->publicada_2_, '$this->descripcion_3_', $this->calificacion_3_, '$this->calificacion_nivel_3_', $this->publicada_3_, '$this->descripcion_4_', $this->calificacion_4_, '$this->calificacion_nivel_4_', $this->publicada_4_, '$this->descripcion_5_', $this->calificacion_5_, '$this->calificacion_nivel_5_', $this->publicada_5_, '$this->descripcion_6_', $this->calificacion_6_, '$this->calificacion_nivel_6_', $this->publicada_6_, '$this->descripcion_7_', $this->calificacion_7_, '$this->calificacion_nivel_7_', $this->publicada_7_, '$this->descripcion_8_', $this->calificacion_8_, '$this->calificacion_nivel_8_', $this->publicada_8_, '$this->descripcion_9_', $this->calificacion_9_, '$this->calificacion_nivel_9_', $this->publicada_9_)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9) VALUES (" . $NM_seq_auto . "$this->colegio_id_, $this->periodo_id_, $this->curso_id_, $this->estudiante_id_, $this->asignatura_id_, $this->tipo_calificacion_id_, $this->calificacion_final_, '$this->descripcion_1_', $this->calificacion_1_, '$this->calificacion_nivel_1_', $this->publicada_1_, '$this->descripcion_2_', $this->calificacion_2_, '$this->calificacion_nivel_2_', $this->publicada_2_, '$this->descripcion_3_', $this->calificacion_3_, '$this->calificacion_nivel_3_', $this->publicada_3_, '$this->descripcion_4_', $this->calificacion_4_, '$this->calificacion_nivel_4_', $this->publicada_4_, '$this->descripcion_5_', $this->calificacion_5_, '$this->calificacion_nivel_5_', $this->publicada_5_, '$this->descripcion_6_', $this->calificacion_6_, '$this->calificacion_nivel_6_', $this->publicada_6_, '$this->descripcion_7_', $this->calificacion_7_, '$this->calificacion_nivel_7_', $this->publicada_7_, '$this->descripcion_8_', $this->calificacion_8_, '$this->calificacion_nivel_8_', $this->publicada_8_, '$this->descripcion_9_', $this->calificacion_9_, '$this->calificacion_nivel_9_', $this->publicada_9_)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9) VALUES (" . $NM_seq_auto . "$this->colegio_id_, $this->periodo_id_, $this->curso_id_, $this->estudiante_id_, $this->asignatura_id_, $this->tipo_calificacion_id_, $this->calificacion_final_, '$this->descripcion_1_', $this->calificacion_1_, '$this->calificacion_nivel_1_', $this->publicada_1_, '$this->descripcion_2_', $this->calificacion_2_, '$this->calificacion_nivel_2_', $this->publicada_2_, '$this->descripcion_3_', $this->calificacion_3_, '$this->calificacion_nivel_3_', $this->publicada_3_, '$this->descripcion_4_', $this->calificacion_4_, '$this->calificacion_nivel_4_', $this->publicada_4_, '$this->descripcion_5_', $this->calificacion_5_, '$this->calificacion_nivel_5_', $this->publicada_5_, '$this->descripcion_6_', $this->calificacion_6_, '$this->calificacion_nivel_6_', $this->publicada_6_, '$this->descripcion_7_', $this->calificacion_7_, '$this->calificacion_nivel_7_', $this->publicada_7_, '$this->descripcion_8_', $this->calificacion_8_, '$this->calificacion_nivel_8_', $this->publicada_8_, '$this->descripcion_9_', $this->calificacion_9_, '$this->calificacion_nivel_9_', $this->publicada_9_)"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg(), true); 
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                      { 
                          $this->sc_erro_insert = $this->Db->ErrorMsg();  
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_calificaciones_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['db_changed'] = true;

              $this->sc_evento = "insert"; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_qtd']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_I_E']++; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['estudiante_id_'] = $this->estudiante_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['asignatura_id_'] = $this->asignatura_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['tipo_calificacion_id_'] = $this->tipo_calificacion_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_1_'] = $this->calificacion_1_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_1_'] = $this->calificacion_nivel_1_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_2_'] = $this->calificacion_2_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_2_'] = $this->calificacion_nivel_2_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_3_'] = $this->calificacion_3_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_3_'] = $this->calificacion_nivel_3_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_4_'] = $this->calificacion_4_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_4_'] = $this->calificacion_nivel_4_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_5_'] = $this->calificacion_5_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_5_'] = $this->calificacion_nivel_5_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_6_'] = $this->calificacion_6_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_6_'] = $this->calificacion_nivel_6_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_7_'] = $this->calificacion_7_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_7_'] = $this->calificacion_nivel_7_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_8_'] = $this->calificacion_8_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_8_'] = $this->calificacion_nivel_8_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_9_'] = $this->calificacion_9_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_nivel_9_'] = $this->calificacion_nivel_9_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert]['calificacion_final_'] = $this->calificacion_final_;
              if (!empty($this->sc_force_zero))
              {
                  foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
                  {
                      eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
                  }
              }
              $this->sc_force_zero = array();
              if (!empty($NM_val_null))
              {
                  foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
                  {
                      eval('$this->' . $sc_val_null_field . ' = "";');
                  }
              }
              if (isset($this->estudiante_id_)) { $this->nm_limpa_alfa($this->estudiante_id_); }
              if (isset($this->asignatura_id_)) { $this->nm_limpa_alfa($this->asignatura_id_); }
              if (isset($this->tipo_calificacion_id_)) { $this->nm_limpa_alfa($this->tipo_calificacion_id_); }
              if (isset($this->calificacion_final_)) { $this->nm_limpa_alfa($this->calificacion_final_); }
              if (isset($this->calificacion_1_)) { $this->nm_limpa_alfa($this->calificacion_1_); }
              if (isset($this->calificacion_nivel_1_)) { $this->nm_limpa_alfa($this->calificacion_nivel_1_); }
              if (isset($this->calificacion_2_)) { $this->nm_limpa_alfa($this->calificacion_2_); }
              if (isset($this->calificacion_nivel_2_)) { $this->nm_limpa_alfa($this->calificacion_nivel_2_); }
              if (isset($this->calificacion_3_)) { $this->nm_limpa_alfa($this->calificacion_3_); }
              if (isset($this->calificacion_nivel_3_)) { $this->nm_limpa_alfa($this->calificacion_nivel_3_); }
              if (isset($this->calificacion_4_)) { $this->nm_limpa_alfa($this->calificacion_4_); }
              if (isset($this->calificacion_nivel_4_)) { $this->nm_limpa_alfa($this->calificacion_nivel_4_); }
              if (isset($this->calificacion_5_)) { $this->nm_limpa_alfa($this->calificacion_5_); }
              if (isset($this->calificacion_nivel_5_)) { $this->nm_limpa_alfa($this->calificacion_nivel_5_); }
              if (isset($this->calificacion_6_)) { $this->nm_limpa_alfa($this->calificacion_6_); }
              if (isset($this->calificacion_nivel_6_)) { $this->nm_limpa_alfa($this->calificacion_nivel_6_); }
              if (isset($this->calificacion_7_)) { $this->nm_limpa_alfa($this->calificacion_7_); }
              if (isset($this->calificacion_nivel_7_)) { $this->nm_limpa_alfa($this->calificacion_nivel_7_); }
              if (isset($this->calificacion_8_)) { $this->nm_limpa_alfa($this->calificacion_8_); }
              if (isset($this->calificacion_nivel_8_)) { $this->nm_limpa_alfa($this->calificacion_nivel_8_); }
              if (isset($this->calificacion_9_)) { $this->nm_limpa_alfa($this->calificacion_9_); }
              if (isset($this->calificacion_nivel_9_)) { $this->nm_limpa_alfa($this->calificacion_nivel_9_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_proc_onload_record($this->nmgp_refresh_row);
                  $this->nm_formatar_campos();

                  $this->NM_ajax_info['fldList']['estudiante_id_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['estudiante_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->estudiante_id_)));
                  $this->NM_ajax_info['fldList']['estudiante_id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_estudiante_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['estudiante_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['estudiante_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['estudiante_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['estudiante_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['asignatura_id_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['asignatura_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->asignatura_id_)));
                  $this->NM_ajax_info['fldList']['asignatura_id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_asignatura_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['asignatura_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['asignatura_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['asignatura_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['asignatura_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['tipo_calificacion_id_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['tipo_calificacion_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->tipo_calificacion_id_)));
                  $this->NM_ajax_info['fldList']['tipo_calificacion_id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_tipo_calificacion_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['tipo_calificacion_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['tipo_calificacion_id_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['tipo_calificacion_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['tipo_calificacion_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_1_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_1_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_1_)));
                  $this->NM_ajax_info['fldList']['calificacion_1_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_1_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_1_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_1_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_1_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_1_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_1_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_1_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_1_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_1_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_1_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_1_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_1_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_1_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_1_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_2_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_2_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_2_)));
                  $this->NM_ajax_info['fldList']['calificacion_2_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_2_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_2_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_2_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_2_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_2_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_2_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_2_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_2_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_2_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_2_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_2_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_2_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_2_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_2_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_3_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_3_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_3_)));
                  $this->NM_ajax_info['fldList']['calificacion_3_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_3_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_3_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_3_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_3_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_3_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_3_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_3_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_3_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_3_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_3_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_3_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_3_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_3_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_3_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_4_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_4_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_4_)));
                  $this->NM_ajax_info['fldList']['calificacion_4_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_4_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_4_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_4_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_4_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_4_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_4_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_4_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_4_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_4_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_4_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_4_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_4_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_4_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_4_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_5_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_5_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_5_)));
                  $this->NM_ajax_info['fldList']['calificacion_5_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_5_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_5_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_5_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_5_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_5_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_5_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_5_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_5_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_5_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_5_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_5_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_5_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_5_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_5_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_6_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_6_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_6_)));
                  $this->NM_ajax_info['fldList']['calificacion_6_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_6_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_6_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_6_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_6_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_6_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_6_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_6_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_6_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_6_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_6_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_6_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_6_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_6_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_6_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_7_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_7_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_7_)));
                  $this->NM_ajax_info['fldList']['calificacion_7_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_7_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_7_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_7_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_7_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_7_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_7_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_7_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_7_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_7_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_7_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_7_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_7_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_7_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_7_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_8_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_8_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_8_)));
                  $this->NM_ajax_info['fldList']['calificacion_8_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_8_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_8_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_8_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_8_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_8_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_8_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_8_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_8_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_8_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_8_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_8_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_8_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_8_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_8_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_9_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_9_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_9_)));
                  $this->NM_ajax_info['fldList']['calificacion_9_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_9_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_9_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_9_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_9_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_9_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_nivel_9_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_nivel_9_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_nivel_9_)));
                  $this->NM_ajax_info['fldList']['calificacion_nivel_9_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_nivel_9_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_9_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_9_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_nivel_9_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_nivel_9_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['calificacion_final_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['calificacion_final_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->calificacion_final_)));
                  $this->NM_ajax_info['fldList']['calificacion_final_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_calificacion_final_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_final_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_final_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['calificacion_final_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['calificacion_final_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['Lookup_colegio_id_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['Lookup_colegio_id_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['Lookup_colegio_id_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['Lookup_colegio_id_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_estudiante_id_ = $this->estudiante_id_;
   $old_value_asignatura_id_ = $this->asignatura_id_;
   $old_value_tipo_calificacion_id_ = $this->tipo_calificacion_id_;
   $old_value_calificacion_1_ = $this->calificacion_1_;
   $old_value_calificacion_2_ = $this->calificacion_2_;
   $old_value_calificacion_3_ = $this->calificacion_3_;
   $old_value_calificacion_4_ = $this->calificacion_4_;
   $old_value_calificacion_5_ = $this->calificacion_5_;
   $old_value_calificacion_6_ = $this->calificacion_6_;
   $old_value_calificacion_7_ = $this->calificacion_7_;
   $old_value_calificacion_8_ = $this->calificacion_8_;
   $old_value_calificacion_9_ = $this->calificacion_9_;
   $old_value_calificacion_final_ = $this->calificacion_final_;
   $this->nm_tira_formatacao();


   $unformatted_value_estudiante_id_ = $this->estudiante_id_;
   $unformatted_value_asignatura_id_ = $this->asignatura_id_;
   $unformatted_value_tipo_calificacion_id_ = $this->tipo_calificacion_id_;
   $unformatted_value_calificacion_1_ = $this->calificacion_1_;
   $unformatted_value_calificacion_2_ = $this->calificacion_2_;
   $unformatted_value_calificacion_3_ = $this->calificacion_3_;
   $unformatted_value_calificacion_4_ = $this->calificacion_4_;
   $unformatted_value_calificacion_5_ = $this->calificacion_5_;
   $unformatted_value_calificacion_6_ = $this->calificacion_6_;
   $unformatted_value_calificacion_7_ = $this->calificacion_7_;
   $unformatted_value_calificacion_8_ = $this->calificacion_8_;
   $unformatted_value_calificacion_9_ = $this->calificacion_9_;
   $unformatted_value_calificacion_final_ = $this->calificacion_final_;

   $nm_comando = "SELECT colegio_id, colegio_id FROM colegios ORDER BY colegio_id";

   $this->estudiante_id_ = $old_value_estudiante_id_;
   $this->asignatura_id_ = $old_value_asignatura_id_;
   $this->tipo_calificacion_id_ = $old_value_tipo_calificacion_id_;
   $this->calificacion_1_ = $old_value_calificacion_1_;
   $this->calificacion_2_ = $old_value_calificacion_2_;
   $this->calificacion_3_ = $old_value_calificacion_3_;
   $this->calificacion_4_ = $old_value_calificacion_4_;
   $this->calificacion_5_ = $old_value_calificacion_5_;
   $this->calificacion_6_ = $old_value_calificacion_6_;
   $this->calificacion_7_ = $old_value_calificacion_7_;
   $this->calificacion_8_ = $old_value_calificacion_8_;
   $this->calificacion_9_ = $old_value_calificacion_9_;
   $this->calificacion_final_ = $old_value_calificacion_final_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[1] = str_replace(',', '.', $rs->fields[1]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $rs->fields[1] = (strpos(strtolower($rs->fields[1]), "e")) ? (float)$rs->fields[1] : $rs->fields[1];
              $rs->fields[1] = (string)$rs->fields[1];
              $aLookup[] = array(form_calificaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_calificaciones_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['Lookup_colegio_id_'][] = $rs->fields[0];
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
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_calificaciones_pack_protect_string(NM_charset_to_utf8($this->colegio_id_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_colegio_id_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['colegio_id_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['colegio_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->colegio_id_)));
                  $this->NM_ajax_info['fldList']['colegio_id_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_colegio_id_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['colegio_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['colegio_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['colegio_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['colegio_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['periodo_id_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['periodo_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->periodo_id_)));
                  $this->NM_ajax_info['fldList']['periodo_id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_periodo_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['periodo_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['periodo_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['periodo_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['periodo_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['curso_id_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['curso_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->curso_id_)));
                  $this->NM_ajax_info['fldList']['curso_id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_curso_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['curso_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['curso_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['curso_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['curso_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->colegio_id_ = substr($this->Db->qstr($this->colegio_id_), 1, -1); 
          $this->periodo_id_ = substr($this->Db->qstr($this->periodo_id_), 1, -1); 
          $this->curso_id_ = substr($this->Db->qstr($this->curso_id_), 1, -1); 
          $this->estudiante_id_ = substr($this->Db->qstr($this->estudiante_id_), 1, -1); 
          $this->asignatura_id_ = substr($this->Db->qstr($this->asignatura_id_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_dele_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id_ and periodo_id = $this->periodo_id_ and curso_id = $this->curso_id_ and estudiante_id = $this->estudiante_id_ and asignatura_id = $this->asignatura_id_ "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_calificaciones_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['db_changed'] = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_qtd']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_I_E']--; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_excl = true; 
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['parms'] = "colegio_id_?#?$this->colegio_id_?@?periodo_id_?#?$this->periodo_id_?@?curso_id_?#?$this->curso_id_?@?estudiante_id_?#?$this->estudiante_id_?@?asignatura_id_?#?$this->asignatura_id_?@?"; 
      }
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->colegio_id_ = substr($this->Db->qstr($this->colegio_id_), 1, -1); 
          $this->periodo_id_ = substr($this->Db->qstr($this->periodo_id_), 1, -1); 
          $this->curso_id_ = substr($this->Db->qstr($this->curso_id_), 1, -1); 
          $this->estudiante_id_ = substr($this->Db->qstr($this->estudiante_id_), 1, -1); 
          $this->asignatura_id_ = substr($this->Db->qstr($this->asignatura_id_), 1, -1); 
      } 
   }
//---------- 
   function nm_select_banco() 
   { 
      global $nm_form_submit, $sc_seq_vert, $sc_check_incl, $teste_validade, $sc_where;
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_calificaciones']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['embutida_liga_qtd_reg'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_max_reg']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_max_reg'] > 0 || strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_max_reg']) == "all"))
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['sc_max_reg'];
      } 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_calificaciones = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['parms'] = ""; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter'] . ")";
          }
      }
      $sc_where = "";
      if ('' != $sc_where_filter)
      {
          $sc_where = (isset($sc_where) && '' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (((isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao) || (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)) && !$this->has_where_params && 'novo' != $this->nmgp_opcao)
      {
          $aNewWhereCond = array();
          if (null != $this->estudiante_id_)
          {
              $aNewWhereCond[] = "estudiante_id = " . $this->estudiante_id_;
          }
          if (null != $this->asignatura_id_)
          {
              $aNewWhereCond[] = "asignatura_id = " . $this->asignatura_id_;
          }
          if (null != $this->colegio_id_)
          {
              $aNewWhereCond[] = "colegio_id = " . $this->colegio_id_;
          }
          if (null != $this->periodo_id_)
          {
              $aNewWhereCond[] = "periodo_id = " . $this->periodo_id_;
          }
          if (null != $this->curso_id_)
          {
              $aNewWhereCond[] = "curso_id = " . $this->curso_id_;
          }
          if (!$this->NM_ajax_flag)
          {
              $this->NM_btn_navega = "S";
          }
          elseif (!empty($aNewWhereCond))
          {
              if ('' == $sc_where)
              {
                  $sc_where = " where (";
              }
              else
              {
                  $sc_where .= " and (";
              }
              $sc_where .= implode(" and ", $aNewWhereCond) . ")";
          }
      }
      if ('total' != $this->form_paginacao)
      {
          if ($this->app_is_initializing || $this->sc_teve_excl || $this->sc_teve_incl || (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total']))
          {
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where;
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
              $rt = $this->Db->Execute($nmgp_select);
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit;
              }
              $qt_geral_reg_form_calificaciones = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] = $qt_geral_reg_form_calificaciones;
              $rt->Close();
          }
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_I_E'] = 0; 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = 0; 
          } 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->colegio_id_) && !empty($this->periodo_id_) && !empty($this->curso_id_) && !empty($this->estudiante_id_) && !empty($this->asignatura_id_))
          {
              $Reg_OK      = false;
              $Count_start = -1;
              $sc_order_by = "";
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Sel_Chave = "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Sel_Chave = "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Sel_Chave = "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id"; 
              }
              else  
              {
                  $Sel_Chave = "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id"; 
              }
              $nmgp_select = "SELECT " . $Sel_Chave . " from " . $this->Ini->nm_tabela . $sc_where; 
              $sc_order_by = "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id";
              $sc_order_by = str_replace("order by ", "", $sc_order_by);
              $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
              if (!empty($sc_order_by))
              {
                  $nmgp_select .= " order by $sc_order_by "; 
              }
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              while (!$rt->EOF && !$Reg_OK)
              { 
                  if ($rt->fields[0] == $this->colegio_id_ && $rt->fields[1] == $this->periodo_id_ && $rt->fields[2] == $this->curso_id_ && $rt->fields[3] == $this->estudiante_id_ && $rt->fields[4] == $this->asignatura_id_)
                  { 
                      $Reg_OK = true;
                  }  
                  $Count_start++;
                  $rt->MoveNext();
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = $Count_start;
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_calificaciones = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_calificaciones) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] += ($this->sc_max_reg + $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_I_E']); 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] > $qt_geral_reg_form_calificaciones)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = $qt_geral_reg_form_calificaciones - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = ($qt_geral_reg_form_calificaciones + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] = 0; 
          }
      } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_I_E'] = 0; 
      }
      $Cmps_ord_def = array();
      $sc_order_by  = "";
      $sc_order_by = "colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem" && in_array($this->nmgp_ordem, $Cmps_ord_def)) 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_ord'] = ' asc'; 
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['ordem_ord']; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9 from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nmgp_select = "SELECT colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9 from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9 from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9 from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      else 
      { 
          $nmgp_select = "SELECT colegio_id, periodo_id, curso_id, estudiante_id, asignatura_id, tipo_calificacion_id, calificacion_final, descripcion_1, calificacion_1, calificacion_nivel_1, publicada_1, descripcion_2, calificacion_2, calificacion_nivel_2, publicada_2, descripcion_3, calificacion_3, calificacion_nivel_3, publicada_3, descripcion_4, calificacion_4, calificacion_nivel_4, publicada_4, descripcion_5, calificacion_5, calificacion_nivel_5, publicada_5, descripcion_6, calificacion_6, calificacion_nivel_6, publicada_6, descripcion_7, calificacion_7, calificacion_nivel_7, publicada_7, descripcion_8, calificacion_8, calificacion_nivel_8, publicada_8, descripcion_9, calificacion_9, calificacion_nivel_9, publicada_9 from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      if ($this->nmgp_opcao != "novo") 
      { 
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
          $rs = $this->Db->Execute($nmgp_select) ;
      }
      elseif ('total' == $this->form_paginacao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
      }
      else
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start']) ;  
                  } 
              } 
          } 
      }
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF && !$this->proc_fast_search && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter'])) 
          { 
              $this->nm_flag_saida_novo = "S"; 
              $this->nmgp_opcao = "novo"; 
              $this->sc_evento  = "novo"; 
              if ($this->aba_iframe)
              {
                  $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on" && !$this->proc_fast_search)
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter'] = true;
              }
          }
          else
          {
              $sc_seq_vert = 1; 
          }
          if ('total' == $this->form_paginacao)
          {
              $bPagTest = true;
              $this->sc_max_reg = 0;
          }
          else
          {
              $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
          }
          while (!$rs->EOF && $bPagTest)
          { 
              if ('total' == $this->form_paginacao)
              {
                  $this->sc_max_reg++;
              }
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $guard_seq_vert = $sc_seq_vert;
                  $sc_seq_vert    = $this->nmgp_refresh_row;
              }
              if ('total' != $this->form_paginacao)
              {
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R")
              { 
                  $this->sc_max_reg++;
              } 
              }
              $this->colegio_id_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['colegio_id_'] = $this->colegio_id_;
              $this->periodo_id_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['periodo_id_'] = $this->periodo_id_;
              $this->curso_id_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['curso_id_'] = $this->curso_id_;
              $this->estudiante_id_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['estudiante_id_'] = $this->estudiante_id_;
              $this->asignatura_id_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['asignatura_id_'] = $this->asignatura_id_;
              $this->tipo_calificacion_id_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['tipo_calificacion_id_'] = $this->tipo_calificacion_id_;
              $this->calificacion_final_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['calificacion_final_'] = $this->calificacion_final_;
              $this->descripcion_1_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['descripcion_1_'] = $this->descripcion_1_;
              $this->calificacion_1_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['calificacion_1_'] = $this->calificacion_1_;
              $this->calificacion_nivel_1_ = $rs->fields[9] ; 
              $this->nmgp_dados_select['calificacion_nivel_1_'] = $this->calificacion_nivel_1_;
              $this->publicada_1_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['publicada_1_'] = $this->publicada_1_;
              $this->descripcion_2_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['descripcion_2_'] = $this->descripcion_2_;
              $this->calificacion_2_ = $rs->fields[12] ; 
              $this->nmgp_dados_select['calificacion_2_'] = $this->calificacion_2_;
              $this->calificacion_nivel_2_ = $rs->fields[13] ; 
              $this->nmgp_dados_select['calificacion_nivel_2_'] = $this->calificacion_nivel_2_;
              $this->publicada_2_ = $rs->fields[14] ; 
              $this->nmgp_dados_select['publicada_2_'] = $this->publicada_2_;
              $this->descripcion_3_ = $rs->fields[15] ; 
              $this->nmgp_dados_select['descripcion_3_'] = $this->descripcion_3_;
              $this->calificacion_3_ = $rs->fields[16] ; 
              $this->nmgp_dados_select['calificacion_3_'] = $this->calificacion_3_;
              $this->calificacion_nivel_3_ = $rs->fields[17] ; 
              $this->nmgp_dados_select['calificacion_nivel_3_'] = $this->calificacion_nivel_3_;
              $this->publicada_3_ = $rs->fields[18] ; 
              $this->nmgp_dados_select['publicada_3_'] = $this->publicada_3_;
              $this->descripcion_4_ = $rs->fields[19] ; 
              $this->nmgp_dados_select['descripcion_4_'] = $this->descripcion_4_;
              $this->calificacion_4_ = $rs->fields[20] ; 
              $this->nmgp_dados_select['calificacion_4_'] = $this->calificacion_4_;
              $this->calificacion_nivel_4_ = $rs->fields[21] ; 
              $this->nmgp_dados_select['calificacion_nivel_4_'] = $this->calificacion_nivel_4_;
              $this->publicada_4_ = $rs->fields[22] ; 
              $this->nmgp_dados_select['publicada_4_'] = $this->publicada_4_;
              $this->descripcion_5_ = $rs->fields[23] ; 
              $this->nmgp_dados_select['descripcion_5_'] = $this->descripcion_5_;
              $this->calificacion_5_ = $rs->fields[24] ; 
              $this->nmgp_dados_select['calificacion_5_'] = $this->calificacion_5_;
              $this->calificacion_nivel_5_ = $rs->fields[25] ; 
              $this->nmgp_dados_select['calificacion_nivel_5_'] = $this->calificacion_nivel_5_;
              $this->publicada_5_ = $rs->fields[26] ; 
              $this->nmgp_dados_select['publicada_5_'] = $this->publicada_5_;
              $this->descripcion_6_ = $rs->fields[27] ; 
              $this->nmgp_dados_select['descripcion_6_'] = $this->descripcion_6_;
              $this->calificacion_6_ = $rs->fields[28] ; 
              $this->nmgp_dados_select['calificacion_6_'] = $this->calificacion_6_;
              $this->calificacion_nivel_6_ = $rs->fields[29] ; 
              $this->nmgp_dados_select['calificacion_nivel_6_'] = $this->calificacion_nivel_6_;
              $this->publicada_6_ = $rs->fields[30] ; 
              $this->nmgp_dados_select['publicada_6_'] = $this->publicada_6_;
              $this->descripcion_7_ = $rs->fields[31] ; 
              $this->nmgp_dados_select['descripcion_7_'] = $this->descripcion_7_;
              $this->calificacion_7_ = $rs->fields[32] ; 
              $this->nmgp_dados_select['calificacion_7_'] = $this->calificacion_7_;
              $this->calificacion_nivel_7_ = $rs->fields[33] ; 
              $this->nmgp_dados_select['calificacion_nivel_7_'] = $this->calificacion_nivel_7_;
              $this->publicada_7_ = $rs->fields[34] ; 
              $this->nmgp_dados_select['publicada_7_'] = $this->publicada_7_;
              $this->descripcion_8_ = $rs->fields[35] ; 
              $this->nmgp_dados_select['descripcion_8_'] = $this->descripcion_8_;
              $this->calificacion_8_ = $rs->fields[36] ; 
              $this->nmgp_dados_select['calificacion_8_'] = $this->calificacion_8_;
              $this->calificacion_nivel_8_ = $rs->fields[37] ; 
              $this->nmgp_dados_select['calificacion_nivel_8_'] = $this->calificacion_nivel_8_;
              $this->publicada_8_ = $rs->fields[38] ; 
              $this->nmgp_dados_select['publicada_8_'] = $this->publicada_8_;
              $this->descripcion_9_ = $rs->fields[39] ; 
              $this->nmgp_dados_select['descripcion_9_'] = $this->descripcion_9_;
              $this->calificacion_9_ = $rs->fields[40] ; 
              $this->nmgp_dados_select['calificacion_9_'] = $this->calificacion_9_;
              $this->calificacion_nivel_9_ = $rs->fields[41] ; 
              $this->nmgp_dados_select['calificacion_nivel_9_'] = $this->calificacion_nivel_9_;
              $this->publicada_9_ = $rs->fields[42] ; 
              $this->nmgp_dados_select['publicada_9_'] = $this->publicada_9_;
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->colegio_id_ = (string)$this->colegio_id_; 
              $this->periodo_id_ = (string)$this->periodo_id_; 
              $this->curso_id_ = (string)$this->curso_id_; 
              $this->estudiante_id_ = (string)$this->estudiante_id_; 
              $this->asignatura_id_ = (string)$this->asignatura_id_; 
              $this->tipo_calificacion_id_ = (string)$this->tipo_calificacion_id_; 
              $this->calificacion_final_ = (string)$this->calificacion_final_; 
              $this->calificacion_1_ = (string)$this->calificacion_1_; 
              $this->publicada_1_ = (string)$this->publicada_1_; 
              $this->calificacion_2_ = (string)$this->calificacion_2_; 
              $this->publicada_2_ = (string)$this->publicada_2_; 
              $this->calificacion_3_ = (string)$this->calificacion_3_; 
              $this->publicada_3_ = (string)$this->publicada_3_; 
              $this->calificacion_4_ = (string)$this->calificacion_4_; 
              $this->publicada_4_ = (string)$this->publicada_4_; 
              $this->calificacion_5_ = (string)$this->calificacion_5_; 
              $this->publicada_5_ = (string)$this->publicada_5_; 
              $this->calificacion_6_ = (string)$this->calificacion_6_; 
              $this->publicada_6_ = (string)$this->publicada_6_; 
              $this->calificacion_7_ = (string)$this->calificacion_7_; 
              $this->publicada_7_ = (string)$this->publicada_7_; 
              $this->calificacion_8_ = (string)$this->calificacion_8_; 
              $this->publicada_8_ = (string)$this->publicada_8_; 
              $this->calificacion_9_ = (string)$this->calificacion_9_; 
              $this->publicada_9_ = (string)$this->publicada_9_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['parms'] = "colegio_id_?#?$this->colegio_id_?@?periodo_id_?#?$this->periodo_id_?@?curso_id_?#?$this->curso_id_?@?estudiante_id_?#?$this->estudiante_id_?@?asignatura_id_?#?$this->asignatura_id_?@?";
              } 
              $this->nm_proc_onload_record($sc_seq_vert);
              $this->storeRecordState($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_calificaciones[$sc_seq_vert]['estudiante_id_'] =  $this->estudiante_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['asignatura_id_'] =  $this->asignatura_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['tipo_calificacion_id_'] =  $this->tipo_calificacion_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_1_'] =  $this->calificacion_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_1_'] =  $this->calificacion_nivel_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_2_'] =  $this->calificacion_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_2_'] =  $this->calificacion_nivel_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_3_'] =  $this->calificacion_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_3_'] =  $this->calificacion_nivel_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_4_'] =  $this->calificacion_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_4_'] =  $this->calificacion_nivel_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_5_'] =  $this->calificacion_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_5_'] =  $this->calificacion_nivel_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_6_'] =  $this->calificacion_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_6_'] =  $this->calificacion_nivel_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_7_'] =  $this->calificacion_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_7_'] =  $this->calificacion_nivel_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_8_'] =  $this->calificacion_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_8_'] =  $this->calificacion_nivel_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_9_'] =  $this->calificacion_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_9_'] =  $this->calificacion_nivel_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_final_'] =  $this->calificacion_final_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['colegio_id_'] =  $this->colegio_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['periodo_id_'] =  $this->periodo_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['curso_id_'] =  $this->curso_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_1_'] =  $this->descripcion_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_1_'] =  $this->publicada_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_2_'] =  $this->descripcion_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_2_'] =  $this->publicada_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_3_'] =  $this->descripcion_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_3_'] =  $this->publicada_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_4_'] =  $this->descripcion_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_4_'] =  $this->publicada_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_5_'] =  $this->descripcion_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_5_'] =  $this->publicada_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_6_'] =  $this->descripcion_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_6_'] =  $this->publicada_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_7_'] =  $this->descripcion_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_7_'] =  $this->publicada_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_8_'] =  $this->descripcion_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_8_'] =  $this->publicada_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_9_'] =  $this->descripcion_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_9_'] =  $this->publicada_9_; 
              $sc_seq_vert++; 
              $rs->MoveNext() ; 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $sc_seq_vert = $guard_seq_vert;
              }
              if ('total' != $this->form_paginacao)
              {
                  $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
              }
          } 
          if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
              $this->nm_proc_onload(false);
          }
          ksort ($this->form_vert_form_calificaciones); 
          $rs->Close(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_qtd'] = $sc_seq_vert + $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] - 1;
          if ('total' == $this->form_paginacao)
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $this->sc_max_reg; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $this->sc_max_reg; 
          }
          else
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] + 1; 
          }
          if ($this->form_paginacao == "total")
          {
              $this->SC_nav_page = "";
          }
          else
          {
              $this->NM_gera_nav_page(); 
          }
          $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] < (($qt_geral_reg_form_calificaciones + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opcao'] = '';
          }
      } 
      if ($this->nmgp_opcao == "novo") 
      { 
          $sc_seq_vert = 1; 
          $sc_check_incl = array(); 
          if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao) 
          { 
              $sc_seq_vert = $this->sc_seq_vert; 
              $this->sc_evento = "novo"; 
              $this->sc_max_reg_incl = $this->sc_seq_vert; 
          } 
          else 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->estudiante_id_ = "";  
              $this->asignatura_id_ = "";  
              $this->tipo_calificacion_id_ = "";  
              $this->calificacion_final_ = "";  
              $this->calificacion_1_ = "";  
              $this->calificacion_nivel_1_ = "";  
              $this->calificacion_2_ = "";  
              $this->calificacion_nivel_2_ = "";  
              $this->calificacion_3_ = "";  
              $this->calificacion_nivel_3_ = "";  
              $this->calificacion_4_ = "";  
              $this->calificacion_nivel_4_ = "";  
              $this->calificacion_5_ = "";  
              $this->calificacion_nivel_5_ = "";  
              $this->calificacion_6_ = "";  
              $this->calificacion_nivel_6_ = "";  
              $this->calificacion_7_ = "";  
              $this->calificacion_nivel_7_ = "";  
              $this->calificacion_8_ = "";  
              $this->calificacion_nivel_8_ = "";  
              $this->calificacion_9_ = "";  
              $this->calificacion_nivel_9_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['foreign_key'] as $sFKName => $sFKValue)
                  {
                      if (isset($this->sc_conv_var[$sFKName]))
                      {
                          $sFKName = $this->sc_conv_var[$sFKName];
                      }
                      eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
                  }
              }
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_calificaciones[$sc_seq_vert]['estudiante_id_'] =  $this->estudiante_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['asignatura_id_'] =  $this->asignatura_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['tipo_calificacion_id_'] =  $this->tipo_calificacion_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_1_'] =  $this->calificacion_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_1_'] =  $this->calificacion_nivel_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_2_'] =  $this->calificacion_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_2_'] =  $this->calificacion_nivel_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_3_'] =  $this->calificacion_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_3_'] =  $this->calificacion_nivel_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_4_'] =  $this->calificacion_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_4_'] =  $this->calificacion_nivel_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_5_'] =  $this->calificacion_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_5_'] =  $this->calificacion_nivel_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_6_'] =  $this->calificacion_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_6_'] =  $this->calificacion_nivel_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_7_'] =  $this->calificacion_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_7_'] =  $this->calificacion_nivel_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_8_'] =  $this->calificacion_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_8_'] =  $this->calificacion_nivel_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_9_'] =  $this->calificacion_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_nivel_9_'] =  $this->calificacion_nivel_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['calificacion_final_'] =  $this->calificacion_final_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['colegio_id_'] =  $this->colegio_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['periodo_id_'] =  $this->periodo_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['curso_id_'] =  $this->curso_id_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_1_'] =  $this->descripcion_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_1_'] =  $this->publicada_1_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_2_'] =  $this->descripcion_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_2_'] =  $this->publicada_2_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_3_'] =  $this->descripcion_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_3_'] =  $this->publicada_3_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_4_'] =  $this->descripcion_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_4_'] =  $this->publicada_4_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_5_'] =  $this->descripcion_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_5_'] =  $this->publicada_5_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_6_'] =  $this->descripcion_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_6_'] =  $this->publicada_6_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_7_'] =  $this->descripcion_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_7_'] =  $this->publicada_7_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_8_'] =  $this->descripcion_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_8_'] =  $this->publicada_8_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['descripcion_9_'] =  $this->descripcion_9_; 
             $this->form_vert_form_calificaciones[$sc_seq_vert]['publicada_9_'] =  $this->publicada_9_; 
              $sc_seq_vert++; 
          } 
          if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
              $this->nm_proc_onload(false);
          }
      }  
  }
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = $this->sc_max_reg;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['reg_start'] + $this->sc_max_reg;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
   }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function calcular_promedio()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$contador =0;
$total =0;
$promedio=0;

if($this->calificacion_1_  != null){
	$contador++;	
	$total=$total + $this->calificacion_1_ ;
}

if($this->calificacion_2_  != null){
	$contador++;	
	$total=$total + $this->calificacion_2_ ;
}

if($this->calificacion_3_  != null){
	$contador++;	
	$total=$total + $this->calificacion_3_ ;
}

if($this->calificacion_4_  != null){
	$contador++;	
	$total=$total + $this->calificacion_4_ ;
}

if($this->calificacion_5_  != null){
	$contador++;	
	$total=$total + $this->calificacion_5_ ;
}

if($this->calificacion_6_  != null){
	$contador++;	
	$total=$total + $this->calificacion_6_ ;
}

if($this->calificacion_7_  != null){
	$contador++;	
	$total=$total + $this->calificacion_7_ ;
}

if($this->calificacion_8_  != null){
	$contador++;	
	$total=$total + $this->calificacion_8_ ;
}

if($this->calificacion_9_  != null){
	$contador++;	
	$total=$total + $this->calificacion_9_ ;
}


$promedio= $total/$contador;
$this->calificacion_final_ =$promedio;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_1__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_2__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_3__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_4__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_5__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_6__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_7__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_8__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
function calificacion_9__onChange()
{
$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'on';
  
$original_calificacion_1_ = $this->calificacion_1_;
$original_calificacion_2_ = $this->calificacion_2_;
$original_calificacion_3_ = $this->calificacion_3_;
$original_calificacion_4_ = $this->calificacion_4_;
$original_calificacion_5_ = $this->calificacion_5_;
$original_calificacion_6_ = $this->calificacion_6_;
$original_calificacion_7_ = $this->calificacion_7_;
$original_calificacion_8_ = $this->calificacion_8_;
$original_calificacion_9_ = $this->calificacion_9_;
$original_calificacion_final_ = $this->calificacion_final_;

$this->calcular_promedio();

$modificado_calificacion_1_ = $this->calificacion_1_;
$modificado_calificacion_2_ = $this->calificacion_2_;
$modificado_calificacion_3_ = $this->calificacion_3_;
$modificado_calificacion_4_ = $this->calificacion_4_;
$modificado_calificacion_5_ = $this->calificacion_5_;
$modificado_calificacion_6_ = $this->calificacion_6_;
$modificado_calificacion_7_ = $this->calificacion_7_;
$modificado_calificacion_8_ = $this->calificacion_8_;
$modificado_calificacion_9_ = $this->calificacion_9_;
$modificado_calificacion_final_ = $this->calificacion_final_;
$this->nm_formatar_campos('calificacion_1_', 'calificacion_2_', 'calificacion_3_', 'calificacion_4_', 'calificacion_5_', 'calificacion_6_', 'calificacion_7_', 'calificacion_8_', 'calificacion_9_', 'calificacion_final_');
$this->nmgp_refresh_fields = array();
if ($original_calificacion_1_ !== $modificado_calificacion_1_ || isset($this->nmgp_cmp_readonly['calificacion_1_']) || (isset($bFlagRead_calificacion_1_) && $bFlagRead_calificacion_1_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_1_';
    $this->NM_ajax_changed['calificacion_1_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_2_ !== $modificado_calificacion_2_ || isset($this->nmgp_cmp_readonly['calificacion_2_']) || (isset($bFlagRead_calificacion_2_) && $bFlagRead_calificacion_2_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_2_';
    $this->NM_ajax_changed['calificacion_2_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_3_ !== $modificado_calificacion_3_ || isset($this->nmgp_cmp_readonly['calificacion_3_']) || (isset($bFlagRead_calificacion_3_) && $bFlagRead_calificacion_3_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_3_';
    $this->NM_ajax_changed['calificacion_3_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_4_ !== $modificado_calificacion_4_ || isset($this->nmgp_cmp_readonly['calificacion_4_']) || (isset($bFlagRead_calificacion_4_) && $bFlagRead_calificacion_4_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_4_';
    $this->NM_ajax_changed['calificacion_4_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_5_ !== $modificado_calificacion_5_ || isset($this->nmgp_cmp_readonly['calificacion_5_']) || (isset($bFlagRead_calificacion_5_) && $bFlagRead_calificacion_5_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_5_';
    $this->NM_ajax_changed['calificacion_5_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_6_ !== $modificado_calificacion_6_ || isset($this->nmgp_cmp_readonly['calificacion_6_']) || (isset($bFlagRead_calificacion_6_) && $bFlagRead_calificacion_6_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_6_';
    $this->NM_ajax_changed['calificacion_6_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_7_ !== $modificado_calificacion_7_ || isset($this->nmgp_cmp_readonly['calificacion_7_']) || (isset($bFlagRead_calificacion_7_) && $bFlagRead_calificacion_7_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_7_';
    $this->NM_ajax_changed['calificacion_7_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_8_ !== $modificado_calificacion_8_ || isset($this->nmgp_cmp_readonly['calificacion_8_']) || (isset($bFlagRead_calificacion_8_) && $bFlagRead_calificacion_8_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_8_';
    $this->NM_ajax_changed['calificacion_8_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_9_ !== $modificado_calificacion_9_ || isset($this->nmgp_cmp_readonly['calificacion_9_']) || (isset($bFlagRead_calificacion_9_) && $bFlagRead_calificacion_9_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_9_';
    $this->NM_ajax_changed['calificacion_9_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_calificacion_final_ !== $modificado_calificacion_final_ || isset($this->nmgp_cmp_readonly['calificacion_final_']) || (isset($bFlagRead_calificacion_final_) && $bFlagRead_calificacion_final_))
{
    $this->nmgp_refresh_fields[] = 'calificacion_final_';
    $this->NM_ajax_changed['calificacion_final_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'calificacion';
form_calificaciones_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_calificaciones']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_calificaciones_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
   if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
   {
        $this->Form_Corpo(true);
   }
   elseif ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
   {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['table_refresh'] = true;
        $this->Form_Table(true);
        $this->Form_Corpo(false, true);
   }
   else
   {
        $this->Form_Init();
        $this->Form_Table();
        $this->Form_Corpo();
        $this->Form_Fim();
   }
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

 function new_date_format($type, $field)
 {
     $new_date_format = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format .= $time_sep;
         }
         else
         {
             $new_date_format .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format;
     if ('DH' == $type)
     {
         $new_date_format                                      = explode(';', $new_date_format);
         $this->field_config[$field]['date_format_js']        = $new_date_format[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_calificaciones_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_colegio_id_($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "colegio_id", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "periodo_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "curso_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "estudiante_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "asignatura_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "tipo_calificacion_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_final", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_1", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_1", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_1", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_1", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_2", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_2", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_2", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_2", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_3", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_3", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_3", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_3", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_4", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_4", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_4", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_4", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_5", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_5", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_5", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_5", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_6", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_6", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_6", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_6", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_7", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_7", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_7", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_7", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_8", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_8", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_8", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_8", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "descripcion_9", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_9", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "calificacion_nivel_9", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "publicada_9", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_calificaciones = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['total'] = $qt_geral_reg_form_calificaciones;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_calificaciones_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_calificaciones_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="")
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $nm_numeric[] = "colegio_id";$nm_numeric[] = "periodo_id";$nm_numeric[] = "curso_id";$nm_numeric[] = "estudiante_id";$nm_numeric[] = "asignatura_id";$nm_numeric[] = "tipo_calificacion_id";$nm_numeric[] = "calificacion_final";$nm_numeric[] = "calificacion_1";$nm_numeric[] = "publicada_1";$nm_numeric[] = "calificacion_2";$nm_numeric[] = "publicada_2";$nm_numeric[] = "calificacion_3";$nm_numeric[] = "publicada_3";$nm_numeric[] = "calificacion_4";$nm_numeric[] = "publicada_4";$nm_numeric[] = "calificacion_5";$nm_numeric[] = "publicada_5";$nm_numeric[] = "calificacion_6";$nm_numeric[] = "publicada_6";$nm_numeric[] = "calificacion_7";$nm_numeric[] = "publicada_7";$nm_numeric[] = "calificacion_8";$nm_numeric[] = "publicada_8";$nm_numeric[] = "calificacion_9";$nm_numeric[] = "publicada_9";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_aspas . $Cmp . $nm_aspas1;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         switch (strtoupper($condicao))
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " like '" . $campo . "%'";
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." like '%" . $campo . "%'";
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower ." not like '%" . $campo . "%'";
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GT":     // 
               $comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "GE":     // 
               $comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LT":     // 
               $comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
            break;
            case "LE":     // 
               $comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
            break;
         }
   }
   function SC_lookup_colegio_id_($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT colegio_id, colegio_id FROM colegios WHERE (CAST (colegio_id AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT colegio_id, colegio_id FROM colegios WHERE (colegio_id LIKE '%$campo%')" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "LIKE '$campo%'", $nm_comando);
       }
       if ($condicao == "df" || $condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "NOT LIKE '%$campo%'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "> '$campo'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", ">= '$campo'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "< '$campo'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%$campo%'", "<= '$campo'", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_calificaciones_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_calificaciones_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       $this->NM_ajax_info['redir']['script_case_session'] = session_id();
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_calificaciones_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
     <INPUT type="hidden" name="script_case_session" value="<?php echo $this->form_encode_input(session_id()); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_calificaciones']['masterValue']))
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
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
