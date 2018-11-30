<?php
//
class form_estudiantes_apl
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
   var $colegio_id;
   var $colegio_id_1;
   var $estudiante_id;
   var $codigo_estudiante;
   var $numero_carnet;
   var $estatus;
   var $estatus_1;
   var $primer_apellido;
   var $segundo_apellido;
   var $nombres;
   var $sexo;
   var $sexo_1;
   var $fecha_nacimiento;
   var $fecha_ingreso;
   var $grado_id;
   var $grado_id_1;
   var $direccion_linea1;
   var $direccion_linea2;
   var $telefono;
   var $fotografia;
   var $fotografia_scfile_name;
   var $fotografia_ul_name;
   var $fotografia_scfile_type;
   var $fotografia_ul_type;
   var $fotografia_limpa;
   var $fotografia_salva;
   var $out_fotografia;
   var $out1_fotografia;
   var $nombre_padre;
   var $nombre_madre;
   var $comentarios;
   var $padres_estudiante;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
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
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
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
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['codigo_estudiante']))
          {
              $this->codigo_estudiante = $this->NM_ajax_info['param']['codigo_estudiante'];
          }
          if (isset($this->NM_ajax_info['param']['colegio_id']))
          {
              $this->colegio_id = $this->NM_ajax_info['param']['colegio_id'];
          }
          if (isset($this->NM_ajax_info['param']['comentarios']))
          {
              $this->comentarios = $this->NM_ajax_info['param']['comentarios'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['direccion_linea1']))
          {
              $this->direccion_linea1 = $this->NM_ajax_info['param']['direccion_linea1'];
          }
          if (isset($this->NM_ajax_info['param']['direccion_linea2']))
          {
              $this->direccion_linea2 = $this->NM_ajax_info['param']['direccion_linea2'];
          }
          if (isset($this->NM_ajax_info['param']['estatus']))
          {
              $this->estatus = $this->NM_ajax_info['param']['estatus'];
          }
          if (isset($this->NM_ajax_info['param']['estudiante_id']))
          {
              $this->estudiante_id = $this->NM_ajax_info['param']['estudiante_id'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_ingreso']))
          {
              $this->fecha_ingreso = $this->NM_ajax_info['param']['fecha_ingreso'];
          }
          if (isset($this->NM_ajax_info['param']['fecha_nacimiento']))
          {
              $this->fecha_nacimiento = $this->NM_ajax_info['param']['fecha_nacimiento'];
          }
          if (isset($this->NM_ajax_info['param']['fotografia']))
          {
              $this->fotografia = $this->NM_ajax_info['param']['fotografia'];
          }
          if (isset($this->NM_ajax_info['param']['fotografia_limpa']))
          {
              $this->fotografia_limpa = $this->NM_ajax_info['param']['fotografia_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fotografia_salva']))
          {
              $this->fotografia_salva = $this->NM_ajax_info['param']['fotografia_salva'];
          }
          if (isset($this->NM_ajax_info['param']['fotografia_ul_name']))
          {
              $this->fotografia_ul_name = $this->NM_ajax_info['param']['fotografia_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fotografia_ul_type']))
          {
              $this->fotografia_ul_type = $this->NM_ajax_info['param']['fotografia_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['grado_id']))
          {
              $this->grado_id = $this->NM_ajax_info['param']['grado_id'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nombre_madre']))
          {
              $this->nombre_madre = $this->NM_ajax_info['param']['nombre_madre'];
          }
          if (isset($this->NM_ajax_info['param']['nombre_padre']))
          {
              $this->nombre_padre = $this->NM_ajax_info['param']['nombre_padre'];
          }
          if (isset($this->NM_ajax_info['param']['nombres']))
          {
              $this->nombres = $this->NM_ajax_info['param']['nombres'];
          }
          if (isset($this->NM_ajax_info['param']['numero_carnet']))
          {
              $this->numero_carnet = $this->NM_ajax_info['param']['numero_carnet'];
          }
          if (isset($this->NM_ajax_info['param']['padres_estudiante']))
          {
              $this->padres_estudiante = $this->NM_ajax_info['param']['padres_estudiante'];
          }
          if (isset($this->NM_ajax_info['param']['primer_apellido']))
          {
              $this->primer_apellido = $this->NM_ajax_info['param']['primer_apellido'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['segundo_apellido']))
          {
              $this->segundo_apellido = $this->NM_ajax_info['param']['segundo_apellido'];
          }
          if (isset($this->NM_ajax_info['param']['sexo']))
          {
              $this->sexo = $this->NM_ajax_info['param']['sexo'];
          }
          if (isset($this->NM_ajax_info['param']['telefono']))
          {
              $this->telefono = $this->NM_ajax_info['param']['telefono'];
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
      if (isset($_POST["vglo_colegio"]) && isset($this->vglo_colegio)) 
      {
          $_SESSION['vglo_colegio'] = $this->vglo_colegio;
      }
      if (isset($_GET["vglo_colegio"]) && isset($this->vglo_colegio)) 
      {
          $_SESSION['vglo_colegio'] = $this->vglo_colegio;
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_estudiantes']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_estudiantes']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
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
                 nm_limpa_str_form_estudiantes($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->vglo_colegio)) 
          {
              $_SESSION['vglo_colegio'] = $this->vglo_colegio;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_estudiantes']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->vglo_colegio)) 
          {
              $_SESSION['vglo_colegio'] = $this->vglo_colegio;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_estudiantes']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_estudiantes']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_estudiantes_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_estudiantes']['upload_field_info']['fotografia'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_estudiantes',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '360',
          'upload_file_width'  => '190',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_estudiantes']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_estudiantes'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_estudiantes']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_estudiantes']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_estudiantes') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_estudiantes']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " estudiantes";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_estudiantes")
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
      $this->Ini->Img_status_ok   = "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err  = "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status      = "scFormInputError";
      $this->Ini->Error_icon_span = "" == trim($str_error_icon_span) ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);



      $_SESSION['scriptcase']['error_icon']['form_estudiantes']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_estudiantes'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['fotografia_ul_name']) && '' != $this->NM_ajax_info['param']['fotografia_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_field_ul_name'][$this->fotografia_ul_name]))
          {
              $this->NM_ajax_info['param']['fotografia_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_field_ul_name'][$this->fotografia_ul_name];
          }
          $this->fotografia = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fotografia_ul_name'];
          $this->fotografia_scfile_name = substr($this->NM_ajax_info['param']['fotografia_ul_name'], 12);
          $this->fotografia_scfile_type = $this->NM_ajax_info['param']['fotografia_ul_type'];
          $this->fotografia_ul_name = $this->NM_ajax_info['param']['fotografia_ul_name'];
          $this->fotografia_ul_type = $this->NM_ajax_info['param']['fotografia_ul_type'];
      }
      elseif (isset($this->fotografia_ul_name) && '' != $this->fotografia_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_field_ul_name'][$this->fotografia_ul_name]))
          {
              $this->fotografia_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_field_ul_name'][$this->fotografia_ul_name];
          }
          $this->fotografia = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fotografia_ul_name;
          $this->fotografia_scfile_name = substr($this->fotografia_ul_name, 12);
          $this->fotografia_scfile_type = $this->fotografia_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['goto']      = 'on';
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
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_orig'] = " where colegio_id = " . $_SESSION['vglo_colegio'] . "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_pesq'] = " where colegio_id = " . $_SESSION['vglo_colegio'] . "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_estudiantes']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_estudiantes'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_estudiantes'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_form'];
          if (!isset($this->colegio_id)){$this->colegio_id = $this->nmgp_dados_form['colegio_id'];} 
          if (!isset($this->estudiante_id)){$this->estudiante_id = $this->nmgp_dados_form['estudiante_id'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_estudiantes", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_estudiantes/form_estudiantes_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_estudiantes_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_estudiantes_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_estudiantes_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_estudiantes/form_estudiantes_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_estudiantes_erro.class.php"); 
      }
      $this->Erro      = new form_estudiantes_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao']))
         { 
             if ($this->colegio_id != "" || $this->estudiante_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_estudiantes']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      if ($this->nmgp_opcao == "excluir")
      {
          $GLOBALS['script_case_init'] = $this->Ini->sc_page;
      }
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
      if (isset($this->codigo_estudiante)) { $this->nm_limpa_alfa($this->codigo_estudiante); }
      if (isset($this->numero_carnet)) { $this->nm_limpa_alfa($this->numero_carnet); }
      if (isset($this->estatus)) { $this->nm_limpa_alfa($this->estatus); }
      if (isset($this->primer_apellido)) { $this->nm_limpa_alfa($this->primer_apellido); }
      if (isset($this->segundo_apellido)) { $this->nm_limpa_alfa($this->segundo_apellido); }
      if (isset($this->nombres)) { $this->nm_limpa_alfa($this->nombres); }
      if (isset($this->sexo)) { $this->nm_limpa_alfa($this->sexo); }
      if (isset($this->grado_id)) { $this->nm_limpa_alfa($this->grado_id); }
      if (isset($this->direccion_linea1)) { $this->nm_limpa_alfa($this->direccion_linea1); }
      if (isset($this->direccion_linea2)) { $this->nm_limpa_alfa($this->direccion_linea2); }
      if (isset($this->telefono)) { $this->nm_limpa_alfa($this->telefono); }
      if (isset($this->nombre_padre)) { $this->nm_limpa_alfa($this->nombre_padre); }
      if (isset($this->nombre_madre)) { $this->nm_limpa_alfa($this->nombre_madre); }
      if (isset($this->padres_estudiante)) { $this->nm_limpa_alfa($this->padres_estudiante); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fecha_nacimiento
      $this->field_config['fecha_nacimiento']                 = array();
      $this->field_config['fecha_nacimiento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_nacimiento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_nacimiento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_nacimiento');
      //-- fecha_ingreso
      $this->field_config['fecha_ingreso']                 = array();
      $this->field_config['fecha_ingreso']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fecha_ingreso']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fecha_ingreso']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fecha_ingreso');
      //-- estudiante_id
      $this->field_config['estudiante_id']               = array();
      $this->field_config['estudiante_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['estudiante_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['estudiante_id']['symbol_dec'] = '';
      $this->field_config['estudiante_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['estudiante_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

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

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_fotografia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fotografia');
          }
          if ('validate_codigo_estudiante' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'codigo_estudiante');
          }
          if ('validate_numero_carnet' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'numero_carnet');
          }
          if ('validate_estatus' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estatus');
          }
          if ('validate_primer_apellido' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'primer_apellido');
          }
          if ('validate_segundo_apellido' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'segundo_apellido');
          }
          if ('validate_nombres' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombres');
          }
          if ('validate_sexo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sexo');
          }
          if ('validate_grado_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'grado_id');
          }
          if ('validate_fecha_nacimiento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha_nacimiento');
          }
          if ('validate_fecha_ingreso' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fecha_ingreso');
          }
          if ('validate_direccion_linea1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion_linea1');
          }
          if ('validate_direccion_linea2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion_linea2');
          }
          if ('validate_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'telefono');
          }
          if ('validate_nombre_padre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombre_padre');
          }
          if ('validate_nombre_madre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nombre_madre');
          }
          if ('validate_comentarios' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'comentarios');
          }
          if ('validate_padres_estudiante' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'padres_estudiante');
          }
          form_estudiantes_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_estudiantes_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_estudiantes']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_estudiantes_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
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
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_estudiantes_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_estudiantes_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
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
           case 'fotografia':
               return "Fotografia";
               break;
           case 'codigo_estudiante':
               return "Codigo Estudiante";
               break;
           case 'numero_carnet':
               return "Numero Carnet";
               break;
           case 'estatus':
               return "Estatus";
               break;
           case 'primer_apellido':
               return "Primer Apellido";
               break;
           case 'segundo_apellido':
               return "Segundo Apellido";
               break;
           case 'nombres':
               return "Nombres";
               break;
           case 'sexo':
               return "Sexo";
               break;
           case 'grado_id':
               return "Grado";
               break;
           case 'fecha_nacimiento':
               return "Fecha Nacimiento";
               break;
           case 'fecha_ingreso':
               return "Fecha Ingreso";
               break;
           case 'direccion_linea1':
               return "Direccion Linea 1";
               break;
           case 'direccion_linea2':
               return "Direccion Linea 2";
               break;
           case 'telefono':
               return "Telefono";
               break;
           case 'nombre_padre':
               return "Nombre Padre";
               break;
           case 'nombre_madre':
               return "Nombre Madre";
               break;
           case 'comentarios':
               return "Comentarios";
               break;
           case 'padres_estudiante':
               return "Padres";
               break;
           case 'colegio_id':
               return "Colegio Id";
               break;
           case 'estudiante_id':
               return "Estudiante Id";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_estudiantes']) || !is_array($this->NM_ajax_info['errList']['geral_form_estudiantes']))
              {
                  $this->NM_ajax_info['errList']['geral_form_estudiantes'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_estudiantes'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'fotografia' == $filtro)
        $this->ValidateField_fotografia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'codigo_estudiante' == $filtro)
        $this->ValidateField_codigo_estudiante($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'numero_carnet' == $filtro)
        $this->ValidateField_numero_carnet($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estatus' == $filtro)
        $this->ValidateField_estatus($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'primer_apellido' == $filtro)
        $this->ValidateField_primer_apellido($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'segundo_apellido' == $filtro)
        $this->ValidateField_segundo_apellido($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombres' == $filtro)
        $this->ValidateField_nombres($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sexo' == $filtro)
        $this->ValidateField_sexo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'grado_id' == $filtro)
        $this->ValidateField_grado_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fecha_nacimiento' == $filtro)
        $this->ValidateField_fecha_nacimiento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fecha_ingreso' == $filtro)
        $this->ValidateField_fecha_ingreso($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'direccion_linea1' == $filtro)
        $this->ValidateField_direccion_linea1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'direccion_linea2' == $filtro)
        $this->ValidateField_direccion_linea2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'telefono' == $filtro)
        $this->ValidateField_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombre_padre' == $filtro)
        $this->ValidateField_nombre_padre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'nombre_madre' == $filtro)
        $this->ValidateField_nombre_madre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'comentarios' == $filtro)
        $this->ValidateField_comentarios($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'padres_estudiante' == $filtro)
        $this->ValidateField_padres_estudiante($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
//-- converter datas   
          $this->nm_converte_datas();
//---
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

    function ValidateField_fotografia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fotografia;
            if ("" != $this->fotografia && "S" != $this->fotografia_limpa && !$teste_validade->ArqExtensao($this->fotografia, array()))
            {
                $Campos_Crit .= "Fotografia: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fotografia']))
                {
                    $Campos_Erros['fotografia'] = array();
                }
                $Campos_Erros['fotografia'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fotografia']) || !is_array($this->NM_ajax_info['errList']['fotografia']))
                {
                    $this->NM_ajax_info['errList']['fotografia'] = array();
                }
                $this->NM_ajax_info['errList']['fotografia'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_fotografia

    function ValidateField_codigo_estudiante(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['codigo_estudiante']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['codigo_estudiante'] == "on")) 
      { 
          if ($this->codigo_estudiante == "")  
          { 
              $Campos_Falta[] =  "Codigo Estudiante" ; 
              if (!isset($Campos_Erros['codigo_estudiante']))
              {
                  $Campos_Erros['codigo_estudiante'] = array();
              }
              $Campos_Erros['codigo_estudiante'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['codigo_estudiante']) || !is_array($this->NM_ajax_info['errList']['codigo_estudiante']))
                  {
                      $this->NM_ajax_info['errList']['codigo_estudiante'] = array();
                  }
                  $this->NM_ajax_info['errList']['codigo_estudiante'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->codigo_estudiante) > 15) 
          { 
              $Campos_Crit .= "Codigo Estudiante " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['codigo_estudiante']))
              {
                  $Campos_Erros['codigo_estudiante'] = array();
              }
              $Campos_Erros['codigo_estudiante'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['codigo_estudiante']) || !is_array($this->NM_ajax_info['errList']['codigo_estudiante']))
              {
                  $this->NM_ajax_info['errList']['codigo_estudiante'] = array();
              }
              $this->NM_ajax_info['errList']['codigo_estudiante'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_codigo_estudiante

    function ValidateField_numero_carnet(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->numero_carnet) > 15) 
          { 
              $Campos_Crit .= "Numero Carnet " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['numero_carnet']))
              {
                  $Campos_Erros['numero_carnet'] = array();
              }
              $Campos_Erros['numero_carnet'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['numero_carnet']) || !is_array($this->NM_ajax_info['errList']['numero_carnet']))
              {
                  $this->NM_ajax_info['errList']['numero_carnet'] = array();
              }
              $this->NM_ajax_info['errList']['numero_carnet'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_numero_carnet

    function ValidateField_estatus(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->estatus == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['estatus']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['estatus'] == "on"))
      {
          $Campos_Falta[] = "Estatus" ; 
          if (!isset($Campos_Erros['estatus']))
          {
              $Campos_Erros['estatus'] = array();
          }
          $Campos_Erros['estatus'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['estatus']) || !is_array($this->NM_ajax_info['errList']['estatus']))
          {
              $this->NM_ajax_info['errList']['estatus'] = array();
          }
          $this->NM_ajax_info['errList']['estatus'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->estatus) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']) && !in_array($this->estatus, $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']))
          {
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['estatus']))
              {
                  $Campos_Erros['estatus'] = array();
              }
              $Campos_Erros['estatus'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['estatus']) || !is_array($this->NM_ajax_info['errList']['estatus']))
              {
                  $this->NM_ajax_info['errList']['estatus'] = array();
              }
              $this->NM_ajax_info['errList']['estatus'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
    } // ValidateField_estatus

    function ValidateField_primer_apellido(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['primer_apellido']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['primer_apellido'] == "on")) 
      { 
          if ($this->primer_apellido == "")  
          { 
              $Campos_Falta[] =  "Primer Apellido" ; 
              if (!isset($Campos_Erros['primer_apellido']))
              {
                  $Campos_Erros['primer_apellido'] = array();
              }
              $Campos_Erros['primer_apellido'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['primer_apellido']) || !is_array($this->NM_ajax_info['errList']['primer_apellido']))
                  {
                      $this->NM_ajax_info['errList']['primer_apellido'] = array();
                  }
                  $this->NM_ajax_info['errList']['primer_apellido'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->primer_apellido) > 50) 
          { 
              $Campos_Crit .= "Primer Apellido " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['primer_apellido']))
              {
                  $Campos_Erros['primer_apellido'] = array();
              }
              $Campos_Erros['primer_apellido'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['primer_apellido']) || !is_array($this->NM_ajax_info['errList']['primer_apellido']))
              {
                  $this->NM_ajax_info['errList']['primer_apellido'] = array();
              }
              $this->NM_ajax_info['errList']['primer_apellido'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_primer_apellido

    function ValidateField_segundo_apellido(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['segundo_apellido']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['segundo_apellido'] == "on")) 
      { 
          if ($this->segundo_apellido == "")  
          { 
              $Campos_Falta[] =  "Segundo Apellido" ; 
              if (!isset($Campos_Erros['segundo_apellido']))
              {
                  $Campos_Erros['segundo_apellido'] = array();
              }
              $Campos_Erros['segundo_apellido'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['segundo_apellido']) || !is_array($this->NM_ajax_info['errList']['segundo_apellido']))
                  {
                      $this->NM_ajax_info['errList']['segundo_apellido'] = array();
                  }
                  $this->NM_ajax_info['errList']['segundo_apellido'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->segundo_apellido) > 50) 
          { 
              $Campos_Crit .= "Segundo Apellido " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['segundo_apellido']))
              {
                  $Campos_Erros['segundo_apellido'] = array();
              }
              $Campos_Erros['segundo_apellido'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['segundo_apellido']) || !is_array($this->NM_ajax_info['errList']['segundo_apellido']))
              {
                  $this->NM_ajax_info['errList']['segundo_apellido'] = array();
              }
              $this->NM_ajax_info['errList']['segundo_apellido'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 50 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_segundo_apellido

    function ValidateField_nombres(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['nombres']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['nombres'] == "on")) 
      { 
          if ($this->nombres == "")  
          { 
              $Campos_Falta[] =  "Nombres" ; 
              if (!isset($Campos_Erros['nombres']))
              {
                  $Campos_Erros['nombres'] = array();
              }
              $Campos_Erros['nombres'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['nombres']) || !is_array($this->NM_ajax_info['errList']['nombres']))
                  {
                      $this->NM_ajax_info['errList']['nombres'] = array();
                  }
                  $this->NM_ajax_info['errList']['nombres'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nombres) > 70) 
          { 
              $Campos_Crit .= "Nombres " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nombres']))
              {
                  $Campos_Erros['nombres'] = array();
              }
              $Campos_Erros['nombres'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nombres']) || !is_array($this->NM_ajax_info['errList']['nombres']))
              {
                  $this->NM_ajax_info['errList']['nombres'] = array();
              }
              $this->NM_ajax_info['errList']['nombres'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 70 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nombres

    function ValidateField_sexo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->sexo == "" && $this->nmgp_opcao != "excluir")
      { 
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['sexo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['sexo'] == "on")
        { 
          $Campos_Falta[] = "Sexo" ;
          if (!isset($Campos_Erros['sexo']))
          {
              $Campos_Erros['sexo'] = array();
          }
          $Campos_Erros['sexo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['sexo']) || !is_array($this->NM_ajax_info['errList']['sexo']))
                  {
                      $this->NM_ajax_info['errList']['sexo'] = array();
                  }
                  $this->NM_ajax_info['errList']['sexo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
        } 
      } 
    } // ValidateField_sexo

    function ValidateField_grado_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
               if (!empty($this->grado_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']) && !in_array($this->grado_id, $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']))
               {
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['grado_id']))
                   {
                       $Campos_Erros['grado_id'] = array();
                   }
                   $Campos_Erros['grado_id'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['grado_id']) || !is_array($this->NM_ajax_info['errList']['grado_id']))
                   {
                       $this->NM_ajax_info['errList']['grado_id'] = array();
                   }
                   $this->NM_ajax_info['errList']['grado_id'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
    } // ValidateField_grado_id

    function ValidateField_fecha_nacimiento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fecha_nacimiento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecha_nacimiento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecha_nacimiento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecha_nacimiento']['date_sep']) ; 
          if (trim($this->fecha_nacimiento) != "")  
          { 
              if ($teste_validade->Data($this->fecha_nacimiento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Fecha Nacimiento; " ; 
                  if (!isset($Campos_Erros['fecha_nacimiento']))
                  {
                      $Campos_Erros['fecha_nacimiento'] = array();
                  }
                  $Campos_Erros['fecha_nacimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha_nacimiento']) || !is_array($this->NM_ajax_info['errList']['fecha_nacimiento']))
                  {
                      $this->NM_ajax_info['errList']['fecha_nacimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_nacimiento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['fecha_nacimiento']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['fecha_nacimiento'] == "on") 
           { 
              $Campos_Falta[] = "Fecha Nacimiento" ; 
              if (!isset($Campos_Erros['fecha_nacimiento']))
              {
                  $Campos_Erros['fecha_nacimiento'] = array();
              }
              $Campos_Erros['fecha_nacimiento'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fecha_nacimiento']) || !is_array($this->NM_ajax_info['errList']['fecha_nacimiento']))
                  {
                      $this->NM_ajax_info['errList']['fecha_nacimiento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_nacimiento'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['fecha_nacimiento']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_fecha_nacimiento

    function ValidateField_fecha_ingreso(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      nm_limpa_data($this->fecha_ingreso, $this->field_config['fecha_ingreso']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['fecha_ingreso']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fecha_ingreso']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fecha_ingreso']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fecha_ingreso']['date_sep']) ; 
          if (trim($this->fecha_ingreso) != "")  
          { 
              if ($teste_validade->Data($this->fecha_ingreso, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $Campos_Crit .= "Fecha Ingreso; " ; 
                  if (!isset($Campos_Erros['fecha_ingreso']))
                  {
                      $Campos_Erros['fecha_ingreso'] = array();
                  }
                  $Campos_Erros['fecha_ingreso'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fecha_ingreso']) || !is_array($this->NM_ajax_info['errList']['fecha_ingreso']))
                  {
                      $this->NM_ajax_info['errList']['fecha_ingreso'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_ingreso'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['fecha_ingreso']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['php_cmp_required']['fecha_ingreso'] == "on") 
           { 
              $Campos_Falta[] = "Fecha Ingreso" ; 
              if (!isset($Campos_Erros['fecha_ingreso']))
              {
                  $Campos_Erros['fecha_ingreso'] = array();
              }
              $Campos_Erros['fecha_ingreso'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fecha_ingreso']) || !is_array($this->NM_ajax_info['errList']['fecha_ingreso']))
                  {
                      $this->NM_ajax_info['errList']['fecha_ingreso'] = array();
                  }
                  $this->NM_ajax_info['errList']['fecha_ingreso'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['fecha_ingreso']['date_format'] = $guarda_datahora; 
       } 
    } // ValidateField_fecha_ingreso

    function ValidateField_direccion_linea1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->direccion_linea1) > 250) 
          { 
              $Campos_Crit .= "Direccion Linea 1 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['direccion_linea1']))
              {
                  $Campos_Erros['direccion_linea1'] = array();
              }
              $Campos_Erros['direccion_linea1'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['direccion_linea1']) || !is_array($this->NM_ajax_info['errList']['direccion_linea1']))
              {
                  $this->NM_ajax_info['errList']['direccion_linea1'] = array();
              }
              $this->NM_ajax_info['errList']['direccion_linea1'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_direccion_linea1

    function ValidateField_direccion_linea2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->direccion_linea2) > 250) 
          { 
              $Campos_Crit .= "Direccion Linea 2 " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['direccion_linea2']))
              {
                  $Campos_Erros['direccion_linea2'] = array();
              }
              $Campos_Erros['direccion_linea2'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['direccion_linea2']) || !is_array($this->NM_ajax_info['errList']['direccion_linea2']))
              {
                  $this->NM_ajax_info['errList']['direccion_linea2'] = array();
              }
              $this->NM_ajax_info['errList']['direccion_linea2'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_direccion_linea2

    function ValidateField_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->telefono) > 45) 
          { 
              $Campos_Crit .= "Telefono " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['telefono']))
              {
                  $Campos_Erros['telefono'] = array();
              }
              $Campos_Erros['telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['telefono']) || !is_array($this->NM_ajax_info['errList']['telefono']))
              {
                  $this->NM_ajax_info['errList']['telefono'] = array();
              }
              $this->NM_ajax_info['errList']['telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_telefono

    function ValidateField_nombre_padre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nombre_padre) > 250) 
          { 
              $Campos_Crit .= "Nombre Padre " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nombre_padre']))
              {
                  $Campos_Erros['nombre_padre'] = array();
              }
              $Campos_Erros['nombre_padre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nombre_padre']) || !is_array($this->NM_ajax_info['errList']['nombre_padre']))
              {
                  $this->NM_ajax_info['errList']['nombre_padre'] = array();
              }
              $this->NM_ajax_info['errList']['nombre_padre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nombre_padre

    function ValidateField_nombre_madre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nombre_madre) > 250) 
          { 
              $Campos_Crit .= "Nombre Madre " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nombre_madre']))
              {
                  $Campos_Erros['nombre_madre'] = array();
              }
              $Campos_Erros['nombre_madre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nombre_madre']) || !is_array($this->NM_ajax_info['errList']['nombre_madre']))
              {
                  $this->NM_ajax_info['errList']['nombre_madre'] = array();
              }
              $this->NM_ajax_info['errList']['nombre_madre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 250 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_nombre_madre

    function ValidateField_comentarios(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->comentarios) > 32767) 
          { 
              $Campos_Crit .= "Comentarios " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['comentarios']))
              {
                  $Campos_Erros['comentarios'] = array();
              }
              $Campos_Erros['comentarios'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['comentarios']) || !is_array($this->NM_ajax_info['errList']['comentarios']))
              {
                  $this->NM_ajax_info['errList']['comentarios'] = array();
              }
              $this->NM_ajax_info['errList']['comentarios'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_comentarios

    function ValidateField_padres_estudiante(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->padres_estudiante) != "")  
          { 
          } 
      } 
    } // ValidateField_padres_estudiante
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros) 
   {
     global $nm_browser;
     if (!empty($Campos_Crit) || !empty($Campos_Falta))
     {
          return;
     }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fotografia == "none") 
          { 
              $this->fotografia = ""; 
          } 
          if ($this->fotografia != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_estudiantes_doc_name.php';
              }
              $this->fotografia = sc_upload_unprotect_chars($this->fotografia);
              $this->fotografia_scfile_name = sc_upload_unprotect_chars($this->fotografia_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fotografia_scfile_type = substr($this->fotografia_scfile_type, 0, strpos($this->fotografia_scfile_type, ";")) ; 
              } 
              if ($this->fotografia_scfile_type == "image/pjpeg" || $this->fotografia_scfile_type == "image/jpeg" || $this->fotografia_scfile_type == "image/gif" ||  
                  $this->fotografia_scfile_type == "image/png" || $this->fotografia_scfile_type == "image/x-png" || $this->fotografia_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fotografia))  
                  { 
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_fotografia = $this->fotografia;
                      } 
                      else 
                      { 
                          $arq_fotografia = fopen($this->fotografia, "r") ; 
                          $reg_fotografia = fread($arq_fotografia, filesize($this->fotografia)) ; 
                          fclose($arq_fotografia) ;  
                      } 
                      $this->fotografia =  trim($this->fotografia_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (is_dir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->fotografia_scfile_name, $dir_img, "fotografia");
                          if (trim($this->fotografia_scfile_name) != $_test_file)
                          {
                              $this->fotografia_scfile_name = $_test_file;
                              $this->fotografia = $_test_file;
                          }
                          $arq_fotografia = fopen($dir_img . trim($this->fotografia_scfile_name), "w") ; 
                          fwrite($arq_fotografia, $reg_fotografia) ;  
                          fclose($arq_fotografia) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= "Fotografia: " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                          $this->fotografia = "";
                          if (!isset($Campos_Erros['fotografia']))
                          {
                              $Campos_Erros['fotografia'] = array();
                          }
                          $Campos_Erros['fotografia'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                          if (!isset($this->NM_ajax_info['errList']['fotografia']) || !is_array($this->NM_ajax_info['errList']['fotografia']))
                          {
                              $this->NM_ajax_info['errList']['fotografia'] = array();
                          }
                          $this->NM_ajax_info['errList']['fotografia'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Fotografia " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fotografia = "";
                      if (!isset($Campos_Erros['fotografia']))
                      {
                          $Campos_Erros['fotografia'] = array();
                      }
                      $Campos_Erros['fotografia'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fotografia']) || !is_array($this->NM_ajax_info['errList']['fotografia']))
                      {
                          $this->NM_ajax_info['errList']['fotografia'] = array();
                      }
                      $this->NM_ajax_info['errList']['fotografia'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fotografia = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Fotografia " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['fotografia']))
                      {
                          $Campos_Erros['fotografia'] = array();
                      }
                      $Campos_Erros['fotografia'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['fotografia']) || !is_array($this->NM_ajax_info['errList']['fotografia']))
                      {
                          $this->NM_ajax_info['errList']['fotografia'] = array();
                      }
                      $this->NM_ajax_info['errList']['fotografia'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->fotografia_salva) && $this->fotografia_limpa != "S")
          {
              $this->fotografia = $this->fotografia_salva;
          }
      } 
      elseif (!empty($this->fotografia_salva) && $this->fotografia_limpa != "S")
      {
          $this->fotografia = $this->fotografia_salva;
      }
   }

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
    if (empty($this->fotografia))
    {
        $this->fotografia = $this->nmgp_dados_form['fotografia'];
    }
    $this->nmgp_dados_form['fotografia'] = $this->fotografia;
    $this->nmgp_dados_form['fotografia_limpa'] = $this->fotografia_limpa;
    $this->nmgp_dados_form['codigo_estudiante'] = $this->codigo_estudiante;
    $this->nmgp_dados_form['numero_carnet'] = $this->numero_carnet;
    $this->nmgp_dados_form['estatus'] = $this->estatus;
    $this->nmgp_dados_form['primer_apellido'] = $this->primer_apellido;
    $this->nmgp_dados_form['segundo_apellido'] = $this->segundo_apellido;
    $this->nmgp_dados_form['nombres'] = $this->nombres;
    $this->nmgp_dados_form['sexo'] = $this->sexo;
    $this->nmgp_dados_form['grado_id'] = $this->grado_id;
    $this->nmgp_dados_form['fecha_nacimiento'] = (strlen(trim($this->fecha_nacimiento)) > 19) ? str_replace(".", ":", $this->fecha_nacimiento) : trim($this->fecha_nacimiento);
    $this->nmgp_dados_form['fecha_ingreso'] = (strlen(trim($this->fecha_ingreso)) > 19) ? str_replace(".", ":", $this->fecha_ingreso) : trim($this->fecha_ingreso);
    $this->nmgp_dados_form['direccion_linea1'] = $this->direccion_linea1;
    $this->nmgp_dados_form['direccion_linea2'] = $this->direccion_linea2;
    $this->nmgp_dados_form['telefono'] = $this->telefono;
    $this->nmgp_dados_form['nombre_padre'] = $this->nombre_padre;
    $this->nmgp_dados_form['nombre_madre'] = $this->nombre_madre;
    $this->nmgp_dados_form['comentarios'] = $this->comentarios;
    $this->nmgp_dados_form['padres_estudiante'] = $this->padres_estudiante;
    $this->nmgp_dados_form['colegio_id'] = $this->colegio_id;
    $this->nmgp_dados_form['estudiante_id'] = $this->estudiante_id;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_sep']) ; 
      nm_limpa_data($this->fecha_ingreso, $this->field_config['fecha_ingreso']['date_sep']) ; 
      nm_limpa_numero($this->estudiante_id, $this->field_config['estudiante_id']['symbol_grp']) ; 
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
      if ($Nome_Campo == "estudiante_id")
      {
          nm_limpa_numero($this->estudiante_id, $this->field_config['estudiante_id']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ((!empty($this->fecha_nacimiento) && 'null' != $this->fecha_nacimiento) || (!empty($format_fields) && isset($format_fields['fecha_nacimiento'])))
      {
          nm_volta_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_format']) ; 
          nmgp_Form_Datas($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_format'], $this->field_config['fecha_nacimiento']['date_sep']) ;  
      }
      elseif ('null' == $this->fecha_nacimiento || '' == $this->fecha_nacimiento)
      {
          $this->fecha_nacimiento = '';
      }
      if ((!empty($this->fecha_ingreso) && 'null' != $this->fecha_ingreso) || (!empty($format_fields) && isset($format_fields['fecha_ingreso'])))
      {
          nm_volta_data($this->fecha_ingreso, $this->field_config['fecha_ingreso']['date_format']) ; 
          nmgp_Form_Datas($this->fecha_ingreso, $this->field_config['fecha_ingreso']['date_format'], $this->field_config['fecha_ingreso']['date_sep']) ;  
      }
      elseif ('null' == $this->fecha_ingreso || '' == $this->fecha_ingreso)
      {
          $this->fecha_ingreso = '';
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
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['fecha_nacimiento']['date_format'];
      if ($this->fecha_nacimiento != "")  
      { 
          nm_conv_data($this->fecha_nacimiento, $this->field_config['fecha_nacimiento']['date_format']) ; 
          $this->fecha_nacimiento_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fecha_nacimiento_hora = substr($this->fecha_nacimiento_hora, 0, -4);
          }
      } 
      if ($this->fecha_nacimiento == "" && $use_null)  
      { 
          $this->fecha_nacimiento = "null" ; 
      } 
      $this->field_config['fecha_nacimiento']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['fecha_ingreso']['date_format'];
      if ($this->fecha_ingreso != "")  
      { 
          nm_conv_data($this->fecha_ingreso, $this->field_config['fecha_ingreso']['date_format']) ; 
          $this->fecha_ingreso_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fecha_ingreso_hora = substr($this->fecha_ingreso_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fecha_ingreso_hora = substr($this->fecha_ingreso_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fecha_ingreso_hora = substr($this->fecha_ingreso_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fecha_ingreso_hora = substr($this->fecha_ingreso_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fecha_ingreso_hora = substr($this->fecha_ingreso_hora, 0, -4);
          }
      } 
      if ($this->fecha_ingreso == "" && $use_null)  
      { 
          $this->fecha_ingreso = "null" ; 
      } 
      $this->field_config['fecha_ingreso']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_fotografia();
          $this->ajax_return_values_codigo_estudiante();
          $this->ajax_return_values_numero_carnet();
          $this->ajax_return_values_estatus();
          $this->ajax_return_values_primer_apellido();
          $this->ajax_return_values_segundo_apellido();
          $this->ajax_return_values_nombres();
          $this->ajax_return_values_sexo();
          $this->ajax_return_values_grado_id();
          $this->ajax_return_values_fecha_nacimiento();
          $this->ajax_return_values_fecha_ingreso();
          $this->ajax_return_values_direccion_linea1();
          $this->ajax_return_values_direccion_linea2();
          $this->ajax_return_values_telefono();
          $this->ajax_return_values_nombre_padre();
          $this->ajax_return_values_nombre_madre();
          $this->ajax_return_values_comentarios();
          $this->ajax_return_values_padres_estudiante();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['colegio_id']['keyVal'] = form_estudiantes_pack_protect_string($this->nmgp_dados_form['colegio_id']);
              $this->NM_ajax_info['fldList']['estudiante_id']['keyVal'] = form_estudiantes_pack_protect_string($this->nmgp_dados_form['estudiante_id']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['grid_padres_estudiantes_script_case_init'] ]['grid_padres_estudiantes']['embutida_form_full'] = true;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['grid_padres_estudiantes_script_case_init'] ]['grid_padres_estudiantes']['embutida_form']       = true;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['grid_padres_estudiantes_script_case_init'] ]['grid_padres_estudiantes']['embutida_pai']        = "form_estudiantes";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['grid_padres_estudiantes_script_case_init'] ]['grid_padres_estudiantes']['embutida_form_parms'] = "SC_glo_par_vglo_colegio*scinvglo_colegio*scoutvglo_estudiante*scin" . $this->nmgp_dados_form['colegio_id'] . "*scoutNMSC_cab*scinN*scout";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['grid_padres_estudiantes_script_case_init'] ]['grid_padres_estudiantes']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['grid_padres_estudiantes_script_case_init'] ]['grid_padres_estudiantes']['total']);
          }
   } // ajax_return_values

          //----- fotografia
   function ajax_return_values_fotografia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fotografia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fotografia);
              $aLookup = array();
   $out_fotografia = '';
   $out1_fotografia = '';
   if ($this->fotografia != "" && $this->fotografia != "none")   
   { 
       $path_fotografia = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->fotografia;
       $md5_fotografia  = md5("" . $this->fotografia);
       if (is_file($path_fotografia))  
       { 
           $NM_ler_img = true;
           $out_fotografia = $this->Ini->path_imag_temp . "/sc_fotografia_" . $md5_fotografia . ".gif" ;  
           $out1_fotografia = $out_fotografia; 
           if (is_file($this->Ini->root . $out_fotografia))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fotografia) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_fotografia = fopen($path_fotografia, "r") ; 
               $reg_fotografia = fread($tmp_fotografia, filesize($path_fotografia)) ; 
               fclose($tmp_fotografia) ;  
               $arq_fotografia = fopen($this->Ini->root . $out_fotografia, "w") ;  
               fwrite($arq_fotografia, $reg_fotografia) ;  
               fclose($arq_fotografia) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fotografia);
           $this->nmgp_return_img['fotografia'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['fotografia'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_fotografia  = md5($this->fotografia);
           $out_fotografia = $this->Ini->path_imag_temp . "/sc_fotografia_190360" . $md5_fotografia . ".gif" ;  
           if (is_file($this->Ini->root . $out_fotografia))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fotografia) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_fotografia);
                   $sc_obj_img->setWidth(190);
                   $sc_obj_img->setHeight(360);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_fotografia);
               } 
               else 
               { 
                   $out_fotografia = $out1_fotografia;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fotografia'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_fotografia,
               'imgOrig' => $out1_fotografia,
               'keepImg' => $sKeepImage,
               'hideName' => 'S',
              );
          }
   }

          //----- codigo_estudiante
   function ajax_return_values_codigo_estudiante($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("codigo_estudiante", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->codigo_estudiante);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['codigo_estudiante'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- numero_carnet
   function ajax_return_values_numero_carnet($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("numero_carnet", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->numero_carnet);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['numero_carnet'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- estatus
   function ajax_return_values_estatus($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estatus", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estatus);
              $aLookup = array();
              $this->_tmp_lookup_estatus = $this->estatus;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $old_value_fecha_ingreso = $this->fecha_ingreso;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;
   $unformatted_value_fecha_ingreso = $this->fecha_ingreso;

   $nm_comando = "SELECT estatus_id, descripcion  FROM estatus_estudiantes  ORDER BY descripcion";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;
   $this->fecha_ingreso = $old_value_fecha_ingreso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_estudiantes_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_estudiantes_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"estatus\"";
          if (isset($this->NM_ajax_info['select_html']['estatus']) && !empty($this->NM_ajax_info['select_html']['estatus']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['estatus'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->estatus == $sValue)
                  {
                      $this->_tmp_lookup_estatus = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['estatus'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['estatus']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['estatus']['valList'][$i] = form_estudiantes_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['estatus']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['estatus']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['estatus']['labList'] = $aLabel;
          }
   }

          //----- primer_apellido
   function ajax_return_values_primer_apellido($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("primer_apellido", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->primer_apellido);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['primer_apellido'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- segundo_apellido
   function ajax_return_values_segundo_apellido($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("segundo_apellido", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->segundo_apellido);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['segundo_apellido'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nombres
   function ajax_return_values_nombres($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombres", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombres);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombres'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- sexo
   function ajax_return_values_sexo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sexo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sexo);
              $aLookup = array();
              $this->_tmp_lookup_sexo = $this->sexo;

$aLookup[] = array(form_estudiantes_pack_protect_string('M') => form_estudiantes_pack_protect_string("Masculino"));
$aLookup[] = array(form_estudiantes_pack_protect_string('F') => form_estudiantes_pack_protect_string("Femenino"));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_sexo'][] = 'M';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_sexo'][] = 'F';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"sexo\"";
          if (isset($this->NM_ajax_info['select_html']['sexo']) && !empty($this->NM_ajax_info['select_html']['sexo']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['sexo'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->sexo == $sValue)
                  {
                      $this->_tmp_lookup_sexo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['sexo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['sexo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['sexo']['valList'][$i] = form_estudiantes_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['sexo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['sexo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['sexo']['labList'] = $aLabel;
          }
   }

          //----- grado_id
   function ajax_return_values_grado_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("grado_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->grado_id);
              $aLookup = array();
              $this->_tmp_lookup_grado_id = $this->grado_id;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $old_value_fecha_ingreso = $this->fecha_ingreso;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;
   $unformatted_value_fecha_ingreso = $this->fecha_ingreso;

   $nm_comando = "SELECT grado_id, grado_nombre  FROM grados Where colegio_id = " . $_SESSION['vglo_colegio'] . " ORDER BY grado_nombre";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;
   $this->fecha_ingreso = $old_value_fecha_ingreso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_estudiantes_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_estudiantes_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"grado_id\"";
          if (isset($this->NM_ajax_info['select_html']['grado_id']) && !empty($this->NM_ajax_info['select_html']['grado_id']))
          {
              $sSelComp = $this->NM_ajax_info['select_html']['grado_id'];
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->grado_id == $sValue)
                  {
                      $this->_tmp_lookup_grado_id = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['grado_id'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['grado_id']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['grado_id']['valList'][$i] = form_estudiantes_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['grado_id']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['grado_id']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['grado_id']['labList'] = $aLabel;
          }
   }

          //----- fecha_nacimiento
   function ajax_return_values_fecha_nacimiento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecha_nacimiento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fecha_nacimiento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fecha_nacimiento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fecha_ingreso
   function ajax_return_values_fecha_ingreso($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fecha_ingreso", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fecha_ingreso);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fecha_ingreso'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- direccion_linea1
   function ajax_return_values_direccion_linea1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("direccion_linea1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->direccion_linea1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['direccion_linea1'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- direccion_linea2
   function ajax_return_values_direccion_linea2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("direccion_linea2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->direccion_linea2);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['direccion_linea2'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- telefono
   function ajax_return_values_telefono($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("telefono", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->telefono);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['telefono'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nombre_padre
   function ajax_return_values_nombre_padre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombre_padre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombre_padre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombre_padre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nombre_madre
   function ajax_return_values_nombre_madre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nombre_madre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nombre_madre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nombre_madre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- comentarios
   function ajax_return_values_comentarios($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("comentarios", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->comentarios);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['comentarios'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- padres_estudiante
   function ajax_return_values_padres_estudiante($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("padres_estudiante", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->padres_estudiante);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['padres_estudiante'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['upload_dir'][$fieldName][] = $newName;
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
  function nm_proc_onload($bFormat = true)
  {
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
      global  $nm_form_submit, $teste_validade, $sc_where;
 
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
    if ("incluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_estudiantes']['contr_erro'] = 'on';
  $this->estudiante_id =$this->max_mas_1("estudiantes","estudiante_id");

$_SESSION['scriptcase']['form_estudiantes']['contr_erro'] = 'off'; 
    }
    if ("excluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_estudiantes']['contr_erro'] = 'on';
              /* padres_estudiantes */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id  . " AND estudiante_id = " . $this->estudiante_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id  . " AND estudiante_id = " . $this->estudiante_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id  . " AND estudiante_id = " . $this->estudiante_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id  . " AND estudiante_id = " . $this->estudiante_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id  . " AND estudiante_id = " . $this->estudiante_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_padres_estudiantes = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_padres_estudiantes[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_padres_estudiantes = false;
          $this->dataset_padres_estudiantes_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_padres_estudiantes[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_estudiantes' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }
$_SESSION['scriptcase']['form_estudiantes']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          else
          { 
              $this->sc_evento = ""; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
      }
      $SC_tem_cmp_update = true; 
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
      if ('incluir' == $this->nmgp_opcao && empty($this->colegio_id)) {$this->colegio_id = "" . $_SESSION['vglo_colegio'] . ""; $NM_val_null[] = "colegio_id";}  
      $NM_val_form['fotografia'] = $this->fotografia;
      $NM_val_form['codigo_estudiante'] = $this->codigo_estudiante;
      $NM_val_form['numero_carnet'] = $this->numero_carnet;
      $NM_val_form['estatus'] = $this->estatus;
      $NM_val_form['primer_apellido'] = $this->primer_apellido;
      $NM_val_form['segundo_apellido'] = $this->segundo_apellido;
      $NM_val_form['nombres'] = $this->nombres;
      $NM_val_form['sexo'] = $this->sexo;
      $NM_val_form['grado_id'] = $this->grado_id;
      $NM_val_form['fecha_nacimiento'] = $this->fecha_nacimiento;
      $NM_val_form['fecha_ingreso'] = $this->fecha_ingreso;
      $NM_val_form['direccion_linea1'] = $this->direccion_linea1;
      $NM_val_form['direccion_linea2'] = $this->direccion_linea2;
      $NM_val_form['telefono'] = $this->telefono;
      $NM_val_form['nombre_padre'] = $this->nombre_padre;
      $NM_val_form['nombre_madre'] = $this->nombre_madre;
      $NM_val_form['comentarios'] = $this->comentarios;
      $NM_val_form['padres_estudiante'] = $this->padres_estudiante;
      $NM_val_form['colegio_id'] = $this->colegio_id;
      $NM_val_form['estudiante_id'] = $this->estudiante_id;
      if ($this->colegio_id == "")  
      { 
          $this->colegio_id = 0;
      } 
      if ($this->estudiante_id == "")  
      { 
          $this->estudiante_id = 0;
      } 
      if ($this->grado_id == "")  
      { 
          $this->grado_id = 0;
          $this->sc_force_zero[] = 'grado_id';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->codigo_estudiante_before_qstr = $this->codigo_estudiante;
          $this->codigo_estudiante = substr($this->Db->qstr($this->codigo_estudiante), 1, -1); 
          if ($this->codigo_estudiante == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->codigo_estudiante = "null"; 
              $NM_val_null[] = "codigo_estudiante";
          } 
          $this->numero_carnet_before_qstr = $this->numero_carnet;
          $this->numero_carnet = substr($this->Db->qstr($this->numero_carnet), 1, -1); 
          if ($this->numero_carnet == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numero_carnet = "null"; 
              $NM_val_null[] = "numero_carnet";
          } 
          $this->estatus_before_qstr = $this->estatus;
          $this->estatus = substr($this->Db->qstr($this->estatus), 1, -1); 
          if ($this->estatus == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estatus = "null"; 
              $NM_val_null[] = "estatus";
          } 
          $this->primer_apellido_before_qstr = $this->primer_apellido;
          $this->primer_apellido = substr($this->Db->qstr($this->primer_apellido), 1, -1); 
          if ($this->primer_apellido == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->primer_apellido = "null"; 
              $NM_val_null[] = "primer_apellido";
          } 
          $this->segundo_apellido_before_qstr = $this->segundo_apellido;
          $this->segundo_apellido = substr($this->Db->qstr($this->segundo_apellido), 1, -1); 
          if ($this->segundo_apellido == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->segundo_apellido = "null"; 
              $NM_val_null[] = "segundo_apellido";
          } 
          $this->nombres_before_qstr = $this->nombres;
          $this->nombres = substr($this->Db->qstr($this->nombres), 1, -1); 
          if ($this->nombres == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nombres = "null"; 
              $NM_val_null[] = "nombres";
          } 
          $this->sexo_before_qstr = $this->sexo;
          $this->sexo = substr($this->Db->qstr($this->sexo), 1, -1); 
          if ($this->sexo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->sexo = "null"; 
              $NM_val_null[] = "sexo";
          } 
          if ($this->fecha_nacimiento == "")  
          { 
              $this->fecha_nacimiento = "null"; 
              $NM_val_null[] = "fecha_nacimiento";
          } 
          if ($this->fecha_ingreso == "")  
          { 
              $this->fecha_ingreso = "null"; 
              $NM_val_null[] = "fecha_ingreso";
          } 
          $this->direccion_linea1_before_qstr = $this->direccion_linea1;
          $this->direccion_linea1 = substr($this->Db->qstr($this->direccion_linea1), 1, -1); 
          if ($this->direccion_linea1 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->direccion_linea1 = "null"; 
              $NM_val_null[] = "direccion_linea1";
          } 
          $this->direccion_linea2_before_qstr = $this->direccion_linea2;
          $this->direccion_linea2 = substr($this->Db->qstr($this->direccion_linea2), 1, -1); 
          if ($this->direccion_linea2 == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->direccion_linea2 = "null"; 
              $NM_val_null[] = "direccion_linea2";
          } 
          $this->telefono_before_qstr = $this->telefono;
          $this->telefono = substr($this->Db->qstr($this->telefono), 1, -1); 
          if ($this->telefono == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->telefono = "null"; 
              $NM_val_null[] = "telefono";
          } 
          $this->fotografia_before_qstr = $this->fotografia;
          $this->fotografia = substr($this->Db->qstr($this->fotografia), 1, -1); 
          if ($this->fotografia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fotografia = "null"; 
              $NM_val_null[] = "fotografia";
          } 
          $this->nombre_padre_before_qstr = $this->nombre_padre;
          $this->nombre_padre = substr($this->Db->qstr($this->nombre_padre), 1, -1); 
          if ($this->nombre_padre == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nombre_padre = "null"; 
              $NM_val_null[] = "nombre_padre";
          } 
          $this->nombre_madre_before_qstr = $this->nombre_madre;
          $this->nombre_madre = substr($this->Db->qstr($this->nombre_madre), 1, -1); 
          if ($this->nombre_madre == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nombre_madre = "null"; 
              $NM_val_null[] = "nombre_madre";
          } 
          $this->comentarios_before_qstr = $this->comentarios;
          $this->comentarios = substr($this->Db->qstr($this->comentarios), 1, -1); 
          if ($this->comentarios == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->comentarios = "null"; 
              $NM_val_null[] = "comentarios";
          } 
          $this->padres_estudiante_before_qstr = $this->padres_estudiante;
          $this->padres_estudiante = substr($this->Db->qstr($this->padres_estudiante), 1, -1); 
          if ($this->padres_estudiante == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->padres_estudiante = "null"; 
              $NM_val_null[] = "padres_estudiante";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_estudiantes_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
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
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET codigo_estudiante = '$this->codigo_estudiante', numero_carnet = '$this->numero_carnet', estatus = '$this->estatus', primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', nombres = '$this->nombres', sexo = '$this->sexo', fecha_nacimiento = #$this->fecha_nacimiento#, fecha_ingreso = #$this->fecha_ingreso#, grado_id = $this->grado_id, direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefono = '$this->telefono', nombre_padre = '$this->nombre_padre', nombre_madre = '$this->nombre_madre', comentarios = '$this->comentarios'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET codigo_estudiante = '$this->codigo_estudiante', numero_carnet = '$this->numero_carnet', estatus = '$this->estatus', primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', nombres = '$this->nombres', sexo = '$this->sexo', fecha_nacimiento = " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", fecha_ingreso = " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", grado_id = $this->grado_id, direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefono = '$this->telefono', nombre_padre = '$this->nombre_padre', nombre_madre = '$this->nombre_madre', comentarios = '$this->comentarios'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET codigo_estudiante = '$this->codigo_estudiante', numero_carnet = '$this->numero_carnet', estatus = '$this->estatus', primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', nombres = '$this->nombres', sexo = '$this->sexo', fecha_nacimiento = " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", fecha_ingreso = " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", grado_id = $this->grado_id, direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefono = '$this->telefono', nombre_padre = '$this->nombre_padre', nombre_madre = '$this->nombre_madre', comentarios = '$this->comentarios'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET codigo_estudiante = '$this->codigo_estudiante', numero_carnet = '$this->numero_carnet', estatus = '$this->estatus', primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', nombres = '$this->nombres', sexo = '$this->sexo', fecha_nacimiento = EXTEND('$this->fecha_nacimiento', YEAR TO DAY), fecha_ingreso = EXTEND('$this->fecha_ingreso', YEAR TO DAY), grado_id = $this->grado_id, direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefono = '$this->telefono', nombre_padre = '$this->nombre_padre', nombre_madre = '$this->nombre_madre', comentarios = '$this->comentarios'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET codigo_estudiante = '$this->codigo_estudiante', numero_carnet = '$this->numero_carnet', estatus = '$this->estatus', primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', nombres = '$this->nombres', sexo = '$this->sexo', fecha_nacimiento = " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", fecha_ingreso = " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", grado_id = $this->grado_id, direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefono = '$this->telefono', nombre_padre = '$this->nombre_padre', nombre_madre = '$this->nombre_madre', comentarios = '$this->comentarios'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET codigo_estudiante = '$this->codigo_estudiante', numero_carnet = '$this->numero_carnet', estatus = '$this->estatus', primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', nombres = '$this->nombres', sexo = '$this->sexo', fecha_nacimiento = " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", fecha_ingreso = " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", grado_id = $this->grado_id, direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefono = '$this->telefono', nombre_padre = '$this->nombre_padre', nombre_madre = '$this->nombre_madre', comentarios = '$this->comentarios'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET codigo_estudiante = '$this->codigo_estudiante', numero_carnet = '$this->numero_carnet', estatus = '$this->estatus', primer_apellido = '$this->primer_apellido', segundo_apellido = '$this->segundo_apellido', nombres = '$this->nombres', sexo = '$this->sexo', fecha_nacimiento = " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", fecha_ingreso = " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", grado_id = $this->grado_id, direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefono = '$this->telefono', nombre_padre = '$this->nombre_padre', nombre_madre = '$this->nombre_madre', comentarios = '$this->comentarios'";  
              } 
              $aDoNotUpdate = array();
              $temp_cmd_sql = "";
              if ($this->fotografia_limpa == "S") 
              { 
                  if ($this->fotografia != "null") 
                  { 
                      $this->fotografia = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", fotografia = '" . $this->fotografia . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " fotografia = '" . $this->fotografia . "'"; 
                     $SC_ex_update = true; 
                  } 
                  $this->fotografia = "";
              } 
              else 
              { 
                  if ($this->fotografia != "none" && $this->fotografia != "") 
                  { 
                      $NM_conteudo =  $this->fotografia;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", fotografia = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " fotografia = '$NM_conteudo'" ; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "fotografia";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              if ($this->fotografia_limpa == "S" || ($this->fotografia != "none" && $this->fotografia != "")) 
              { 
                  if ($SC_ex_upd_or) 
                  { 
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                      { 
                          $comando_oracle .= ", fotografia = ''"; 
                      } 
                      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                      { 
                          $comando_oracle .= ", fotografia = ''"; 
                      } 
                      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                      { 
                          $comando_oracle .= ", fotografia = null"; 
                      } 
                      else 
                      { 
                          $comando_oracle .= ", fotografia = empty_blob()"; 
                      } 
                  } 
                  else 
                  { 
                      $SC_ex_upd_or = true; 
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                      { 
                          $comando_oracle .= " fotografia = ''"; 
                      } 
                      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                      { 
                          $comando_oracle .= " fotografia = ''"; 
                      } 
                      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                      { 
                          $comando_oracle .= " fotografia = null"; 
                      } 
                      else 
                      { 
                          $comando_oracle .= " fotografia = empty_blob()"; 
                      } 
                  } 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";  
              }  
              else  
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id ";  
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
                                  form_estudiantes_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if ($this->fotografia_limpa == "S" && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"fotografia\", \"\",  \"colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "fotografia", "",  "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"); 
                  } 
                  else 
                  { 
                      if ($this->fotografia != "none" && $this->fotografia != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob($this->Ini->nm_tabela, \"fotografia\", $this->fotografia,  \"colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "fotografia", $this->fotografia,  "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_estudiantes_pack_ajax_response();
                      }
                      exit;  
                  }   
              }   
              if ($this->fotografia_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fotografia_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          $this->codigo_estudiante = $this->codigo_estudiante_before_qstr;
          $this->numero_carnet = $this->numero_carnet_before_qstr;
          $this->estatus = $this->estatus_before_qstr;
          $this->primer_apellido = $this->primer_apellido_before_qstr;
          $this->segundo_apellido = $this->segundo_apellido_before_qstr;
          $this->nombres = $this->nombres_before_qstr;
          $this->sexo = $this->sexo_before_qstr;
          $this->direccion_linea1 = $this->direccion_linea1_before_qstr;
          $this->direccion_linea2 = $this->direccion_linea2_before_qstr;
          $this->telefono = $this->telefono_before_qstr;
          $this->fotografia = $this->fotografia_before_qstr;
          $this->nombre_padre = $this->nombre_padre_before_qstr;
          $this->nombre_madre = $this->nombre_madre_before_qstr;
          $this->comentarios = $this->comentarios_before_qstr;
          $this->padres_estudiante = $this->padres_estudiante_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['codigo_estudiante'])) { $this->codigo_estudiante = $NM_val_form['codigo_estudiante']; }
              elseif (isset($this->codigo_estudiante)) { $this->nm_limpa_alfa($this->codigo_estudiante); }
              if     (isset($NM_val_form) && isset($NM_val_form['numero_carnet'])) { $this->numero_carnet = $NM_val_form['numero_carnet']; }
              elseif (isset($this->numero_carnet)) { $this->nm_limpa_alfa($this->numero_carnet); }
              if     (isset($NM_val_form) && isset($NM_val_form['estatus'])) { $this->estatus = $NM_val_form['estatus']; }
              elseif (isset($this->estatus)) { $this->nm_limpa_alfa($this->estatus); }
              if     (isset($NM_val_form) && isset($NM_val_form['primer_apellido'])) { $this->primer_apellido = $NM_val_form['primer_apellido']; }
              elseif (isset($this->primer_apellido)) { $this->nm_limpa_alfa($this->primer_apellido); }
              if     (isset($NM_val_form) && isset($NM_val_form['segundo_apellido'])) { $this->segundo_apellido = $NM_val_form['segundo_apellido']; }
              elseif (isset($this->segundo_apellido)) { $this->nm_limpa_alfa($this->segundo_apellido); }
              if     (isset($NM_val_form) && isset($NM_val_form['nombres'])) { $this->nombres = $NM_val_form['nombres']; }
              elseif (isset($this->nombres)) { $this->nm_limpa_alfa($this->nombres); }
              if     (isset($NM_val_form) && isset($NM_val_form['sexo'])) { $this->sexo = $NM_val_form['sexo']; }
              elseif (isset($this->sexo)) { $this->nm_limpa_alfa($this->sexo); }
              if     (isset($NM_val_form) && isset($NM_val_form['grado_id'])) { $this->grado_id = $NM_val_form['grado_id']; }
              elseif (isset($this->grado_id)) { $this->nm_limpa_alfa($this->grado_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['direccion_linea1'])) { $this->direccion_linea1 = $NM_val_form['direccion_linea1']; }
              elseif (isset($this->direccion_linea1)) { $this->nm_limpa_alfa($this->direccion_linea1); }
              if     (isset($NM_val_form) && isset($NM_val_form['direccion_linea2'])) { $this->direccion_linea2 = $NM_val_form['direccion_linea2']; }
              elseif (isset($this->direccion_linea2)) { $this->nm_limpa_alfa($this->direccion_linea2); }
              if     (isset($NM_val_form) && isset($NM_val_form['telefono'])) { $this->telefono = $NM_val_form['telefono']; }
              elseif (isset($this->telefono)) { $this->nm_limpa_alfa($this->telefono); }
              if     (isset($NM_val_form) && isset($NM_val_form['nombre_padre'])) { $this->nombre_padre = $NM_val_form['nombre_padre']; }
              elseif (isset($this->nombre_padre)) { $this->nm_limpa_alfa($this->nombre_padre); }
              if     (isset($NM_val_form) && isset($NM_val_form['nombre_madre'])) { $this->nombre_madre = $NM_val_form['nombre_madre']; }
              elseif (isset($this->nombre_madre)) { $this->nm_limpa_alfa($this->nombre_madre); }
              if     (isset($NM_val_form) && isset($NM_val_form['padres_estudiante'])) { $this->padres_estudiante = $NM_val_form['padres_estudiante']; }
              elseif (isset($this->padres_estudiante)) { $this->nm_limpa_alfa($this->padres_estudiante); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('codigo_estudiante', 'numero_carnet', 'estatus', 'primer_apellido', 'segundo_apellido', 'nombres', 'sexo', 'grado_id', 'fecha_nacimiento', 'fecha_ingreso', 'direccion_linea1', 'direccion_linea2', 'telefono', 'nombre_padre', 'nombre_madre', 'comentarios', 'padres_estudiante'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_pkey']); 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_estudiantes_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->fotografia_scfile_name, $dir_file, "fotografia");
              if (trim($this->fotografia_scfile_name) != $_test_file)
              {
                  $this->fotografia_scfile_name = $_test_file;
                  $this->fotografia = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES ($this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', #$this->fecha_nacimiento#, #$this->fecha_ingreso#, $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', '$this->fotografia', '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES ($this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', '$this->fotografia', '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES ($this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', '$this->fotografia', '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES (" . $NM_seq_auto . "$this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', EMPTY_BLOB(), '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES (" . $NM_seq_auto . "$this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', EXTEND('$this->fecha_nacimiento', YEAR TO DAY), EXTEND('$this->fecha_ingreso', YEAR TO DAY), $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', null, '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES (" . $NM_seq_auto . "$this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', '', '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES (" . $NM_seq_auto . "$this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', '', '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios) VALUES (" . $NM_seq_auto . "$this->colegio_id, $this->estudiante_id, '$this->codigo_estudiante', '$this->numero_carnet', '$this->estatus', '$this->primer_apellido', '$this->segundo_apellido', '$this->nombres', '$this->sexo', " . $this->Ini->date_delim . $this->fecha_nacimiento . $this->Ini->date_delim1 . ", " . $this->Ini->date_delim . $this->fecha_ingreso . $this->Ini->date_delim1 . ", $this->grado_id, '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefono', '$this->fotografia', '$this->nombre_padre', '$this->nombre_madre', '$this->comentarios')"; 
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
                              form_estudiantes_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if (trim($this->fotografia ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  fotografia , $this->fotografia,  \"colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "fotografia", $this->fotografia,  "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_estudiantes_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
              }  
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']);
              }

              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $arq_fotografia = fopen($this->SC_IMG_fotografia, "r") ; 
              $reg_fotografia = fread($arq_fotografia, filesize($this->SC_IMG_fotografia)) ; 
              fclose($arq_fotografia) ;  
              $arq_fotografia = fopen($dir_img . trim($this->fotografia_scfile_name), "w") ; 
              fwrite($arq_fotografia, $reg_fotografia) ;  
              fclose($arq_fotografia) ;  
              $this->sc_evento = "insert"; 
              $this->sc_insert_on = true; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
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
          $this->colegio_id = substr($this->Db->qstr($this->colegio_id), 1, -1); 
          $this->estudiante_id = substr($this->Db->qstr($this->estudiante_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
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
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id "); 
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
                          form_estudiantes_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']);
              }

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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['parms'] = "colegio_id?#?$this->colegio_id?@?estudiante_id?#?$this->estudiante_id?@?"; 
      }
      $this->nmgp_dados_form['fotografia'] = ""; 
      $this->fotografia_limpa = ""; 
      $this->fotografia_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->colegio_id = substr($this->Db->qstr($this->colegio_id), 1, -1); 
          $this->estudiante_id = substr($this->Db->qstr($this->estudiante_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->colegio_id) && empty($this->estudiante_id)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->colegio_id) == "" || trim($this->estudiante_id) == "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("colegio_id = " . $_SESSION['vglo_colegio'] . "");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']))
      { 
          $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_estudiantes = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total'] = $qt_geral_reg_form_estudiantes;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->colegio_id) && !empty($this->estudiante_id))
          {
              $Reg_OK      = false;
              $Count_start = -1;
              $sc_order_by = "";
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Sel_Chave = "colegio_id, estudiante_id"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Sel_Chave = "colegio_id, estudiante_id"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Sel_Chave = "colegio_id, estudiante_id"; 
              }
              else  
              {
                  $Sel_Chave = "colegio_id, estudiante_id"; 
              }
              $nmgp_select = "SELECT " . $Sel_Chave . " from " . $this->Ini->nm_tabela . $sc_where; 
              $sc_order_by = "colegio_id, estudiante_id";
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
                  if ($rt->fields[0] == $this->colegio_id && $rt->fields[1] == $this->estudiante_id)
                  { 
                      $Reg_OK = true;
                  }  
                  $Count_start++;
                  $rt->MoveNext();
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = $Count_start;
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_estudiantes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] > $qt_geral_reg_form_estudiantes)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = $qt_geral_reg_form_estudiantes; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = $qt_geral_reg_form_estudiantes; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_estudiantes) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total'] + 1; 
      $this->NM_gera_nav_page(); 
      $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, str_replace (convert(char(10),fecha_nacimiento,102), '.', '-') + ' ' + convert(char(8),fecha_nacimiento,20), str_replace (convert(char(10),fecha_ingreso,102), '.', '-') + ' ' + convert(char(8),fecha_ingreso,20), grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, convert(char(23),fecha_nacimiento,121), convert(char(23),fecha_ingreso,121), grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, EXTEND(fecha_nacimiento, YEAR TO DAY), EXTEND(fecha_ingreso, YEAR TO DAY), grado_id, direccion_linea1, direccion_linea2, telefono, LOTOFILE(fotografia, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_fotografia', 'client'), nombre_padre, nombre_madre, comentarios from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT colegio_id, estudiante_id, codigo_estudiante, numero_carnet, estatus, primer_apellido, segundo_apellido, nombres, sexo, fecha_nacimiento, fecha_ingreso, grado_id, direccion_linea1, direccion_linea2, telefono, fotografia, nombre_padre, nombre_madre, comentarios from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = "colegio_id = " . $_SESSION['vglo_colegio'] . "";
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_adm_clientes']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (!empty($sc_where))
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
                  }  
                  else  
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id and estudiante_id = $this->estudiante_id"; 
                  }
              } 
              else
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                      $aWhere[] = "estudiante_id = $this->estudiante_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                      $aWhere[] = "estudiante_id = $this->estudiante_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                      $aWhere[] = "estudiante_id = $this->estudiante_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                      $aWhere[] = "estudiante_id = $this->estudiante_id"; 
                  }  
                  else  
                  {
                      $aWhere[] = "estudiante_id = $this->estudiante_id"; 
                  }
              } 
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "colegio_id, estudiante_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start']) ;  
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
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->colegio_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['colegio_id'] = $this->colegio_id;
              $this->estudiante_id = $rs->fields[1] ; 
              $this->nmgp_dados_select['estudiante_id'] = $this->estudiante_id;
              $this->codigo_estudiante = $rs->fields[2] ; 
              $this->nmgp_dados_select['codigo_estudiante'] = $this->codigo_estudiante;
              $this->numero_carnet = $rs->fields[3] ; 
              $this->nmgp_dados_select['numero_carnet'] = $this->numero_carnet;
              $this->estatus = $rs->fields[4] ; 
              $this->nmgp_dados_select['estatus'] = $this->estatus;
              $this->primer_apellido = $rs->fields[5] ; 
              $this->nmgp_dados_select['primer_apellido'] = $this->primer_apellido;
              $this->segundo_apellido = $rs->fields[6] ; 
              $this->nmgp_dados_select['segundo_apellido'] = $this->segundo_apellido;
              $this->nombres = $rs->fields[7] ; 
              $this->nmgp_dados_select['nombres'] = $this->nombres;
              $this->sexo = $rs->fields[8] ; 
              $this->nmgp_dados_select['sexo'] = $this->sexo;
              $this->fecha_nacimiento = $rs->fields[9] ; 
              $this->nmgp_dados_select['fecha_nacimiento'] = $this->fecha_nacimiento;
              $this->fecha_ingreso = $rs->fields[10] ; 
              $this->nmgp_dados_select['fecha_ingreso'] = $this->fecha_ingreso;
              $this->grado_id = $rs->fields[11] ; 
              $this->nmgp_dados_select['grado_id'] = $this->grado_id;
              $this->direccion_linea1 = $rs->fields[12] ; 
              $this->nmgp_dados_select['direccion_linea1'] = $this->direccion_linea1;
              $this->direccion_linea2 = $rs->fields[13] ; 
              $this->nmgp_dados_select['direccion_linea2'] = $this->direccion_linea2;
              $this->telefono = $rs->fields[14] ; 
              $this->nmgp_dados_select['telefono'] = $this->telefono;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->fotografia = $this->Db->BlobDecode($rs->fields[15]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[15]) && !empty($rs->fields[15]) && is_file($rs->fields[15])) 
                  { 
                     $this->fotografia = file_get_contents($rs->fields[15]);
                  }else 
                  { 
                     $this->fotografia = ''; 
                  } 
              } 
              else
              { 
                  $this->fotografia = $rs->fields[15] ; 
              } 
              $this->nmgp_dados_select['fotografia'] = $this->fotografia;
              $this->nombre_padre = $rs->fields[16] ; 
              $this->nmgp_dados_select['nombre_padre'] = $this->nombre_padre;
              $this->nombre_madre = $rs->fields[17] ; 
              $this->nmgp_dados_select['nombre_madre'] = $this->nombre_madre;
              $this->comentarios = $rs->fields[18] ; 
              $this->nmgp_dados_select['comentarios'] = $this->comentarios;
              $this->padres_estudiante = $rs->fields[19] ; 
              $this->nmgp_dados_select['padres_estudiante'] = $this->padres_estudiante;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->colegio_id = (string)$this->colegio_id; 
              $this->estudiante_id = (string)$this->estudiante_id; 
              $this->grado_id = (string)$this->grado_id; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['parms'] = "colegio_id?#?$this->colegio_id?@?estudiante_id?#?$this->estudiante_id?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sub_dir'][0]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] < $qt_geral_reg_form_estudiantes;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->colegio_id = "";  
              $this->nmgp_dados_form["colegio_id"] = $this->colegio_id;
              $this->estudiante_id = "";  
              $this->nmgp_dados_form["estudiante_id"] = $this->estudiante_id;
              $this->codigo_estudiante = "";  
              $this->nmgp_dados_form["codigo_estudiante"] = $this->codigo_estudiante;
              $this->numero_carnet = "";  
              $this->nmgp_dados_form["numero_carnet"] = $this->numero_carnet;
              $this->estatus = "";  
              $this->nmgp_dados_form["estatus"] = $this->estatus;
              $this->primer_apellido = "";  
              $this->nmgp_dados_form["primer_apellido"] = $this->primer_apellido;
              $this->segundo_apellido = "";  
              $this->nmgp_dados_form["segundo_apellido"] = $this->segundo_apellido;
              $this->nombres = "";  
              $this->nmgp_dados_form["nombres"] = $this->nombres;
              $this->sexo = "";  
              $this->nmgp_dados_form["sexo"] = $this->sexo;
              $this->fecha_nacimiento = "";  
              $this->fecha_nacimiento_hora = "" ;  
              $this->nmgp_dados_form["fecha_nacimiento"] = $this->fecha_nacimiento;
              $this->fecha_ingreso = "";  
              $this->fecha_ingreso_hora = "" ;  
              $this->nmgp_dados_form["fecha_ingreso"] = $this->fecha_ingreso;
              $this->grado_id = "";  
              $this->nmgp_dados_form["grado_id"] = $this->grado_id;
              $this->direccion_linea1 = "";  
              $this->nmgp_dados_form["direccion_linea1"] = $this->direccion_linea1;
              $this->direccion_linea2 = "";  
              $this->nmgp_dados_form["direccion_linea2"] = $this->direccion_linea2;
              $this->telefono = "";  
              $this->nmgp_dados_form["telefono"] = $this->telefono;
              $this->fotografia = "";  
              $this->fotografia_ul_name = "" ;  
              $this->fotografia_ul_type = "" ;  
              $this->nmgp_dados_form["fotografia"] = $this->fotografia;
              $this->nombre_padre = "";  
              $this->nmgp_dados_form["nombre_padre"] = $this->nombre_padre;
              $this->nombre_madre = "";  
              $this->nmgp_dados_form["nombre_madre"] = $this->nombre_madre;
              $this->comentarios = "";  
              $this->nmgp_dados_form["comentarios"] = $this->comentarios;
              $this->padres_estudiante = "";  
              $this->nmgp_dados_form["padres_estudiante"] = $this->padres_estudiante;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['grid_padres_estudiantes_script_case_init'] ]['grid_padres_estudiantes']['embutida_parms'] = "SC_glo_par_vglo_colegio*scinvglo_colegio*scoutvglo_estudiante*scin" . $this->nmgp_dados_form['colegio_id'] . "*scoutNMSC_cab*scinN*scout";
  }
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = 1;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['reg_start'] + 1;
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function max_mas_1($str_tabla,$str_campo){
$_SESSION['scriptcase']['form_estudiantes']['contr_erro'] = 'on';
if (!isset($this->sc_temp_vglo_colegio)) {$this->sc_temp_vglo_colegio = (isset($_SESSION['vglo_colegio'])) ? $_SESSION['vglo_colegio'] : "";}
  
	 
      $nm_select = "select max($str_campo) from $str_tabla where colegio_id=$this->sc_temp_vglo_colegio"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->mn = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->mn[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->mn = false;
          $this->mn_erro = $this->Db->ErrorMsg();
      } 
;
	if(!empty($this->mn )){
		if($this->mn[0][0]==null){
			$max=0;
		}else{
			$max=$this->mn[0][0];
		}
	}else {
		$max=0;
	}
	$max++;
	return $max;
if (isset($this->sc_temp_vglo_colegio)) { $_SESSION['vglo_colegio'] = $this->sc_temp_vglo_colegio;}
$_SESSION['scriptcase']['form_estudiantes']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_estudiantes_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fotografia = "";  
   } 
   else 
   { 
       $out_fotografia = $this->fotografia;  
   } 
   if ($this->fotografia != "" && $this->fotografia != "none")   
   { 
       $path_fotografia = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->fotografia;
       $md5_fotografia  = md5("" . $this->fotografia);
       if (is_file($path_fotografia))  
       { 
           $NM_ler_img = true;
           $out_fotografia = $this->Ini->path_imag_temp . "/sc_fotografia_" . $md5_fotografia . ".gif" ;  
           if (is_file($this->Ini->root . $out_fotografia))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fotografia) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_fotografia = fopen($path_fotografia, "r") ; 
               $reg_fotografia = fread($tmp_fotografia, filesize($path_fotografia)) ; 
               fclose($tmp_fotografia) ;  
               $arq_fotografia = fopen($this->Ini->root . $out_fotografia, "w") ;  
               fwrite($arq_fotografia, $reg_fotografia) ;  
               fclose($arq_fotografia) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fotografia);
           $this->nmgp_return_img['fotografia'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['fotografia'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $out1_fotografia = $out_fotografia; 
           $md5_fotografia  = md5("" . $this->fotografia);
           $out_fotografia = $this->Ini->path_imag_temp . "/sc_fotografia_190360" . $md5_fotografia . ".gif" ;  
           if (is_file($this->Ini->root . $out_fotografia))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fotografia) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_fotografia);
                   $sc_obj_img->setWidth(190);
                   $sc_obj_img->setHeight(360);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_fotografia);
               } 
               else 
               { 
                   $out_fotografia = $out1_fotografia;
               } 
           } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fotografia;
       if (isset($temp_out_fotografia))
       {
           $out_fotografia = $temp_out_fotografia;
       }
       global $temp_out1_fotografia;
       if (isset($temp_out1_fotografia))
       {
           $out1_fotografia = $temp_out1_fotografia;
       }
   }
        $this->initFormPages();
    include_once("form_estudiantes_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['csrf_token'];
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

   function Form_lookup_estatus()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $old_value_fecha_ingreso = $this->fecha_ingreso;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;
   $unformatted_value_fecha_ingreso = $this->fecha_ingreso;

   $nm_comando = "SELECT estatus_id, descripcion  FROM estatus_estudiantes  ORDER BY descripcion";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;
   $this->fecha_ingreso = $old_value_fecha_ingreso;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_estatus'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_sexo()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "Masculino?#?M?#?N?@?";
       $nmgp_def_dados .= "Femenino?#?F?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_grado_id()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'] = array(); 
    }

   $old_value_fecha_nacimiento = $this->fecha_nacimiento;
   $old_value_fecha_ingreso = $this->fecha_ingreso;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_fecha_nacimiento = $this->fecha_nacimiento;
   $unformatted_value_fecha_ingreso = $this->fecha_ingreso;

   $nm_comando = "SELECT grado_id, grado_nombre  FROM grados Where colegio_id = " . $_SESSION['vglo_colegio'] . " ORDER BY grado_nombre";

   $this->fecha_nacimiento = $old_value_fecha_nacimiento;
   $this->fecha_ingreso = $old_value_fecha_ingreso;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['Lookup_grado_id'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function SC_fast_search($field, $arg_search, $data_search)
   {
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_estudiantes_pack_ajax_response();
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
          $data_lookup = $this->SC_lookup_colegio_id($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "colegio_id", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "estudiante_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "codigo_estudiante", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "numero_carnet", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_estatus($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "estatus", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "primer_apellido", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "segundo_apellido", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nombres", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_sexo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "sexo", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_grado_id($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "grado_id", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "direccion_linea1", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "direccion_linea2", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "telefono", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nombre_padre", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "nombre_madre", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "comentarios", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter_form'] . " and (colegio_id = " . $_SESSION['vglo_colegio'] . ") and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where colegio_id = " . $_SESSION['vglo_colegio'] . " and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_estudiantes = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['total'] = $qt_geral_reg_form_estudiantes;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_estudiantes_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_estudiantes_pack_ajax_response();
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
      $nm_numeric[] = "colegio_id";$nm_numeric[] = "estudiante_id";$nm_numeric[] = "grado_id";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['decimal_db'] == ".")
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
      $Nm_datas['fecha_nacimiento'] = "date";$Nm_datas['fecha_ingreso'] = "date";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
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
   function SC_lookup_colegio_id($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT colegio_id, colegio_id FROM estatus_estudiantes WHERE (CAST (colegio_id AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT colegio_id, colegio_id FROM estatus_estudiantes WHERE (colegio_id LIKE '%$campo%')" ; 
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
   function SC_lookup_estatus($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT descripcion, estatus_id FROM estatus_estudiantes WHERE (descripcion LIKE '%$campo%')" ; 
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
   function SC_lookup_sexo($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['M'] = "Masculino";
       $data_look['F'] = "Femenino";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
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
          
       }
       return $result;
   }
   function SC_lookup_grado_id($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT grado_nombre, grado_id FROM grados WHERE (CAST (grado_id AS TEXT) LIKE '%$campo%') AND (colegio_id = " . $_SESSION['vglo_colegio'] . ")" ; 
       }
       else
       {
           $nm_comando = "SELECT grado_nombre, grado_id FROM grados WHERE (grado_nombre LIKE '%$campo%') AND (colegio_id = " . $_SESSION['vglo_colegio'] . ")" ; 
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
       $nmgp_saida_form = "form_estudiantes_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_estudiantes_fim.php";
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
       form_estudiantes_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_estudiantes']['masterValue']);
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
