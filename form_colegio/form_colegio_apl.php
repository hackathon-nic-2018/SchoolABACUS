<?php
//
class form_colegio_apl
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
   var $colegio_nombre;
   var $activo;
   var $activo_1;
   var $pais;
   var $region;
   var $departamento;
   var $ciudad;
   var $municipio;
   var $direccion_linea1;
   var $direccion_linea2;
   var $telefonos;
   var $sitio_web;
   var $correo_oficial;
   var $fondo;
   var $fondo_scfile_name;
   var $fondo_ul_name;
   var $fondo_scfile_type;
   var $fondo_ul_type;
   var $fondo_limpa;
   var $fondo_salva;
   var $out_fondo;
   var $out1_fondo;
   var $logo;
   var $logo_scfile_name;
   var $logo_ul_name;
   var $logo_scfile_type;
   var $logo_ul_type;
   var $logo_limpa;
   var $logo_salva;
   var $out_logo;
   var $out1_logo;
   var $especialidades;
   var $estatus_periodo;
   var $tipos_periodo;
   var $estatus_estudiantes;
   var $tipos_grados;
   var $turnos;
   var $estatus_docentes;
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
          if (isset($this->NM_ajax_info['param']['ciudad']))
          {
              $this->ciudad = $this->NM_ajax_info['param']['ciudad'];
          }
          if (isset($this->NM_ajax_info['param']['colegio_id']))
          {
              $this->colegio_id = $this->NM_ajax_info['param']['colegio_id'];
          }
          if (isset($this->NM_ajax_info['param']['colegio_nombre']))
          {
              $this->colegio_nombre = $this->NM_ajax_info['param']['colegio_nombre'];
          }
          if (isset($this->NM_ajax_info['param']['correo_oficial']))
          {
              $this->correo_oficial = $this->NM_ajax_info['param']['correo_oficial'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['departamento']))
          {
              $this->departamento = $this->NM_ajax_info['param']['departamento'];
          }
          if (isset($this->NM_ajax_info['param']['direccion_linea1']))
          {
              $this->direccion_linea1 = $this->NM_ajax_info['param']['direccion_linea1'];
          }
          if (isset($this->NM_ajax_info['param']['direccion_linea2']))
          {
              $this->direccion_linea2 = $this->NM_ajax_info['param']['direccion_linea2'];
          }
          if (isset($this->NM_ajax_info['param']['especialidades']))
          {
              $this->especialidades = $this->NM_ajax_info['param']['especialidades'];
          }
          if (isset($this->NM_ajax_info['param']['estatus_docentes']))
          {
              $this->estatus_docentes = $this->NM_ajax_info['param']['estatus_docentes'];
          }
          if (isset($this->NM_ajax_info['param']['estatus_estudiantes']))
          {
              $this->estatus_estudiantes = $this->NM_ajax_info['param']['estatus_estudiantes'];
          }
          if (isset($this->NM_ajax_info['param']['estatus_periodo']))
          {
              $this->estatus_periodo = $this->NM_ajax_info['param']['estatus_periodo'];
          }
          if (isset($this->NM_ajax_info['param']['fondo']))
          {
              $this->fondo = $this->NM_ajax_info['param']['fondo'];
          }
          if (isset($this->NM_ajax_info['param']['fondo_limpa']))
          {
              $this->fondo_limpa = $this->NM_ajax_info['param']['fondo_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['fondo_salva']))
          {
              $this->fondo_salva = $this->NM_ajax_info['param']['fondo_salva'];
          }
          if (isset($this->NM_ajax_info['param']['fondo_ul_name']))
          {
              $this->fondo_ul_name = $this->NM_ajax_info['param']['fondo_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['fondo_ul_type']))
          {
              $this->fondo_ul_type = $this->NM_ajax_info['param']['fondo_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['logo']))
          {
              $this->logo = $this->NM_ajax_info['param']['logo'];
          }
          if (isset($this->NM_ajax_info['param']['logo_limpa']))
          {
              $this->logo_limpa = $this->NM_ajax_info['param']['logo_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['logo_salva']))
          {
              $this->logo_salva = $this->NM_ajax_info['param']['logo_salva'];
          }
          if (isset($this->NM_ajax_info['param']['logo_ul_name']))
          {
              $this->logo_ul_name = $this->NM_ajax_info['param']['logo_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['logo_ul_type']))
          {
              $this->logo_ul_type = $this->NM_ajax_info['param']['logo_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['municipio']))
          {
              $this->municipio = $this->NM_ajax_info['param']['municipio'];
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
          if (isset($this->NM_ajax_info['param']['pais']))
          {
              $this->pais = $this->NM_ajax_info['param']['pais'];
          }
          if (isset($this->NM_ajax_info['param']['region']))
          {
              $this->region = $this->NM_ajax_info['param']['region'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['sitio_web']))
          {
              $this->sitio_web = $this->NM_ajax_info['param']['sitio_web'];
          }
          if (isset($this->NM_ajax_info['param']['telefonos']))
          {
              $this->telefonos = $this->NM_ajax_info['param']['telefonos'];
          }
          if (isset($this->NM_ajax_info['param']['tipos_grados']))
          {
              $this->tipos_grados = $this->NM_ajax_info['param']['tipos_grados'];
          }
          if (isset($this->NM_ajax_info['param']['tipos_periodo']))
          {
              $this->tipos_periodo = $this->NM_ajax_info['param']['tipos_periodo'];
          }
          if (isset($this->NM_ajax_info['param']['turnos']))
          {
              $this->turnos = $this->NM_ajax_info['param']['turnos'];
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
      if (isset($_SESSION['sc_session'][$script_case_init]['form_colegio']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_colegio']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_colegio']['embutida_parms']);
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
                 nm_limpa_str_form_colegio($cadapar[1]);
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
              $_SESSION['sc_session'][$script_case_init]['form_colegio']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_colegio']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_colegio']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_colegio']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_colegio']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->vglo_colegio)) 
          {
              $_SESSION['vglo_colegio'] = $this->vglo_colegio;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_colegio']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_colegio']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_colegio']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_colegio']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_colegio']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_colegio']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_colegio']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_colegio']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_colegio']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_colegio']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_colegio_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_colegio']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_colegio']['upload_field_info']['logo'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_colegio',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '350',
          'upload_file_width'  => '190',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_colegio']['upload_field_info']['fondo'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_colegio',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '600',
          'upload_file_width'  => '800',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_colegio']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_colegio'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_colegio']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_colegio']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_colegio') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_colegio']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " colegios";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_colegio")
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



      $_SESSION['scriptcase']['error_icon']['form_colegio']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_colegio'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['fondo_ul_name']) && '' != $this->NM_ajax_info['param']['fondo_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->fondo_ul_name]))
          {
              $this->NM_ajax_info['param']['fondo_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->fondo_ul_name];
          }
          $this->fondo = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['fondo_ul_name'];
          $this->fondo_scfile_name = substr($this->NM_ajax_info['param']['fondo_ul_name'], 12);
          $this->fondo_scfile_type = $this->NM_ajax_info['param']['fondo_ul_type'];
          $this->fondo_ul_name = $this->NM_ajax_info['param']['fondo_ul_name'];
          $this->fondo_ul_type = $this->NM_ajax_info['param']['fondo_ul_type'];
      }
      elseif (isset($this->fondo_ul_name) && '' != $this->fondo_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->fondo_ul_name]))
          {
              $this->fondo_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->fondo_ul_name];
          }
          $this->fondo = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->fondo_ul_name;
          $this->fondo_scfile_name = substr($this->fondo_ul_name, 12);
          $this->fondo_scfile_type = $this->fondo_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['logo_ul_name']) && '' != $this->NM_ajax_info['param']['logo_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->logo_ul_name]))
          {
              $this->NM_ajax_info['param']['logo_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->logo_ul_name];
          }
          $this->logo = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['logo_ul_name'];
          $this->logo_scfile_name = substr($this->NM_ajax_info['param']['logo_ul_name'], 12);
          $this->logo_scfile_type = $this->NM_ajax_info['param']['logo_ul_type'];
          $this->logo_ul_name = $this->NM_ajax_info['param']['logo_ul_name'];
          $this->logo_ul_type = $this->NM_ajax_info['param']['logo_ul_type'];
      }
      elseif (isset($this->logo_ul_name) && '' != $this->logo_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->logo_ul_name]))
          {
              $this->logo_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_field_ul_name'][$this->logo_ul_name];
          }
          $this->logo = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->logo_ul_name;
          $this->logo_scfile_name = substr($this->logo_ul_name, 12);
          $this->logo_scfile_type = $this->logo_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_orig'] = " where colegio_id = " . $_SESSION['vglo_colegio'] . "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_pesq'] = " where colegio_id = " . $_SESSION['vglo_colegio'] . "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_colegio']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_colegio'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_colegio'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['exit'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_form'];
          if (!isset($this->colegio_id)){$this->colegio_id = $this->nmgp_dados_form['colegio_id'];} 
          if (!isset($this->activo)){$this->activo = $this->nmgp_dados_form['activo'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_colegio", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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

      if (is_file($this->Ini->path_aplicacao . 'form_colegio_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_colegio_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_colegio/form_colegio_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_colegio_erro.class.php"); 
      }
      $this->Erro      = new form_colegio_erro();
      $this->Erro->Ini = $this->Ini;
      if ($nm_opc_lookup != "lookup" && $nm_opc_php != "formphp")
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao']))
         { 
             if ($this->colegio_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_colegio']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opc_ant'];
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_form'];
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
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_especialidades') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_especialidades') . "/form_especialidades_apl.php");
          $this->form_especialidades = new form_especialidades_apl;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_estatus_periodos') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_estatus_periodos') . "/form_estatus_periodos_apl.php");
          $this->form_estatus_periodos = new form_estatus_periodos_apl;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_tipo_periodo') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_tipo_periodo') . "/form_tipo_periodo_apl.php");
          $this->form_tipo_periodo = new form_tipo_periodo_apl;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_estatus_estudiantes') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_estatus_estudiantes') . "/form_estatus_estudiantes_apl.php");
          $this->form_estatus_estudiantes = new form_estatus_estudiantes_apl;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_tipo_grados') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_tipo_grados') . "/form_tipo_grados_apl.php");
          $this->form_tipo_grados = new form_tipo_grados_apl;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_turnos') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_turnos') . "/form_turnos_apl.php");
          $this->form_turnos = new form_turnos_apl;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_estatus_docentes') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_estatus_docentes') . "/form_estatus_docentes_apl.php");
          $this->form_estatus_docentes = new form_estatus_docentes_apl;
      }
      $this->sc_evento = $this->nmgp_opcao;
      if (isset($this->colegio_nombre)) { $this->nm_limpa_alfa($this->colegio_nombre); }
      if (isset($this->pais)) { $this->nm_limpa_alfa($this->pais); }
      if (isset($this->region)) { $this->nm_limpa_alfa($this->region); }
      if (isset($this->departamento)) { $this->nm_limpa_alfa($this->departamento); }
      if (isset($this->ciudad)) { $this->nm_limpa_alfa($this->ciudad); }
      if (isset($this->municipio)) { $this->nm_limpa_alfa($this->municipio); }
      if (isset($this->direccion_linea1)) { $this->nm_limpa_alfa($this->direccion_linea1); }
      if (isset($this->direccion_linea2)) { $this->nm_limpa_alfa($this->direccion_linea2); }
      if (isset($this->telefonos)) { $this->nm_limpa_alfa($this->telefonos); }
      if (isset($this->sitio_web)) { $this->nm_limpa_alfa($this->sitio_web); }
      if (isset($this->correo_oficial)) { $this->nm_limpa_alfa($this->correo_oficial); }
      if (isset($this->especialidades)) { $this->nm_limpa_alfa($this->especialidades); }
      if (isset($this->estatus_periodo)) { $this->nm_limpa_alfa($this->estatus_periodo); }
      if (isset($this->tipos_periodo)) { $this->nm_limpa_alfa($this->tipos_periodo); }
      if (isset($this->estatus_estudiantes)) { $this->nm_limpa_alfa($this->estatus_estudiantes); }
      if (isset($this->tipos_grados)) { $this->nm_limpa_alfa($this->tipos_grados); }
      if (isset($this->turnos)) { $this->nm_limpa_alfa($this->turnos); }
      if (isset($this->estatus_docentes)) { $this->nm_limpa_alfa($this->estatus_docentes); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- colegio_id
      $this->field_config['colegio_id']               = array();
      $this->field_config['colegio_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['colegio_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['colegio_id']['symbol_dec'] = '';
      $this->field_config['colegio_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['colegio_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
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
          if ('validate_logo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'logo');
          }
          if ('validate_colegio_nombre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'colegio_nombre');
          }
          if ('validate_pais' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pais');
          }
          if ('validate_region' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'region');
          }
          if ('validate_departamento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'departamento');
          }
          if ('validate_ciudad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'ciudad');
          }
          if ('validate_municipio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'municipio');
          }
          if ('validate_direccion_linea1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion_linea1');
          }
          if ('validate_direccion_linea2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'direccion_linea2');
          }
          if ('validate_telefonos' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'telefonos');
          }
          if ('validate_sitio_web' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sitio_web');
          }
          if ('validate_correo_oficial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'correo_oficial');
          }
          if ('validate_fondo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fondo');
          }
          if ('validate_especialidades' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'especialidades');
          }
          if ('validate_estatus_periodo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estatus_periodo');
          }
          if ('validate_tipos_periodo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipos_periodo');
          }
          if ('validate_estatus_estudiantes' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estatus_estudiantes');
          }
          if ('validate_tipos_grados' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tipos_grados');
          }
          if ('validate_turnos' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'turnos');
          }
          if ('validate_estatus_docentes' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'estatus_docentes');
          }
          form_colegio_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->activo))
          {
              $x = 0; 
              $this->activo_1 = $this->activo;
              $this->activo = ""; 
              if ($this->activo_1 != "") 
              { 
                  foreach ($this->activo_1 as $dados_activo_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->activo .= ";";
                      } 
                      $this->activo .= $dados_activo_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_colegio_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_colegio']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_colegio_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_redir_atualiz'] == "ok")
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
          form_colegio_pack_ajax_response();
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
          form_colegio_pack_ajax_response();
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
           case 'logo':
               return "Logo";
               break;
           case 'colegio_nombre':
               return "Nombre del Colegio";
               break;
           case 'pais':
               return "País";
               break;
           case 'region':
               return "Región";
               break;
           case 'departamento':
               return "Departamento";
               break;
           case 'ciudad':
               return "Ciudad";
               break;
           case 'municipio':
               return "Municipio";
               break;
           case 'direccion_linea1':
               return "Direccion Linea 1";
               break;
           case 'direccion_linea2':
               return "Direccion Linea 2";
               break;
           case 'telefonos':
               return "Telefonos";
               break;
           case 'sitio_web':
               return "Sitio Web";
               break;
           case 'correo_oficial':
               return "Correo Oficial";
               break;
           case 'fondo':
               return "Fondo";
               break;
           case 'especialidades':
               return "Especialidades";
               break;
           case 'estatus_periodo':
               return "Estatus de Periodos";
               break;
           case 'tipos_periodo':
               return "Tipos de Periodos";
               break;
           case 'estatus_estudiantes':
               return "Estatus de estudiantes";
               break;
           case 'tipos_grados':
               return "Tipos de Grado";
               break;
           case 'turnos':
               return "Turnos";
               break;
           case 'estatus_docentes':
               return "Estatus de Docentes";
               break;
           case 'colegio_id':
               return "Colegio Id";
               break;
           case 'activo':
               return "Activo";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_colegio']) || !is_array($this->NM_ajax_info['errList']['geral_form_colegio']))
              {
                  $this->NM_ajax_info['errList']['geral_form_colegio'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_colegio'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ('' == $filtro || 'logo' == $filtro)
        $this->ValidateField_logo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'colegio_nombre' == $filtro)
        $this->ValidateField_colegio_nombre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'pais' == $filtro)
        $this->ValidateField_pais($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'region' == $filtro)
        $this->ValidateField_region($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'departamento' == $filtro)
        $this->ValidateField_departamento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'ciudad' == $filtro)
        $this->ValidateField_ciudad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'municipio' == $filtro)
        $this->ValidateField_municipio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'direccion_linea1' == $filtro)
        $this->ValidateField_direccion_linea1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'direccion_linea2' == $filtro)
        $this->ValidateField_direccion_linea2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'telefonos' == $filtro)
        $this->ValidateField_telefonos($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'sitio_web' == $filtro)
        $this->ValidateField_sitio_web($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'correo_oficial' == $filtro)
        $this->ValidateField_correo_oficial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'fondo' == $filtro)
        $this->ValidateField_fondo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'especialidades' == $filtro)
        $this->ValidateField_especialidades($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estatus_periodo' == $filtro)
        $this->ValidateField_estatus_periodo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipos_periodo' == $filtro)
        $this->ValidateField_tipos_periodo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estatus_estudiantes' == $filtro)
        $this->ValidateField_estatus_estudiantes($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'tipos_grados' == $filtro)
        $this->ValidateField_tipos_grados($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'turnos' == $filtro)
        $this->ValidateField_turnos($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ('' == $filtro || 'estatus_docentes' == $filtro)
        $this->ValidateField_estatus_docentes($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
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

    function ValidateField_logo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->logo;
            if ("" != $this->logo && "S" != $this->logo_limpa && !$teste_validade->ArqExtensao($this->logo, array()))
            {
                $Campos_Crit .= "Logo: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['logo']))
                {
                    $Campos_Erros['logo'] = array();
                }
                $Campos_Erros['logo'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['logo']) || !is_array($this->NM_ajax_info['errList']['logo']))
                {
                    $this->NM_ajax_info['errList']['logo'] = array();
                }
                $this->NM_ajax_info['errList']['logo'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_logo

    function ValidateField_colegio_nombre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->colegio_nombre = sc_strtolower($this->colegio_nombre); 
      $this->colegio_nombre = ucwords($this->colegio_nombre) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['colegio_nombre']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['colegio_nombre'] == "on")) 
      { 
          if ($this->colegio_nombre == "")  
          { 
              $Campos_Falta[] =  "Nombre del Colegio" ; 
              if (!isset($Campos_Erros['colegio_nombre']))
              {
                  $Campos_Erros['colegio_nombre'] = array();
              }
              $Campos_Erros['colegio_nombre'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['colegio_nombre']) || !is_array($this->NM_ajax_info['errList']['colegio_nombre']))
                  {
                      $this->NM_ajax_info['errList']['colegio_nombre'] = array();
                  }
                  $this->NM_ajax_info['errList']['colegio_nombre'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->colegio_nombre) > 100) 
          { 
              $Campos_Crit .= "Nombre del Colegio " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['colegio_nombre']))
              {
                  $Campos_Erros['colegio_nombre'] = array();
              }
              $Campos_Erros['colegio_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['colegio_nombre']) || !is_array($this->NM_ajax_info['errList']['colegio_nombre']))
              {
                  $this->NM_ajax_info['errList']['colegio_nombre'] = array();
              }
              $this->NM_ajax_info['errList']['colegio_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          $this->colegio_nombre = ucwords($this->colegio_nombre) ; 
      } 
    } // ValidateField_colegio_nombre

    function ValidateField_pais(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->pais = sc_strtolower($this->pais); 
      $this->pais = ucwords($this->pais) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['pais']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['pais'] == "on")) 
      { 
          if ($this->pais == "")  
          { 
              $Campos_Falta[] =  "País" ; 
              if (!isset($Campos_Erros['pais']))
              {
                  $Campos_Erros['pais'] = array();
              }
              $Campos_Erros['pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pais']) || !is_array($this->NM_ajax_info['errList']['pais']))
                  {
                      $this->NM_ajax_info['errList']['pais'] = array();
                  }
                  $this->NM_ajax_info['errList']['pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pais) > 100) 
          { 
              $Campos_Crit .= "País " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pais']))
              {
                  $Campos_Erros['pais'] = array();
              }
              $Campos_Erros['pais'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pais']) || !is_array($this->NM_ajax_info['errList']['pais']))
              {
                  $this->NM_ajax_info['errList']['pais'] = array();
              }
              $this->NM_ajax_info['errList']['pais'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          $this->pais = ucwords($this->pais) ; 
      } 
    } // ValidateField_pais

    function ValidateField_region(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->region = sc_strtolower($this->region); 
      $this->region = ucwords($this->region) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['region']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['region'] == "on")) 
      { 
          if ($this->region == "")  
          { 
              $Campos_Falta[] =  "Región" ; 
              if (!isset($Campos_Erros['region']))
              {
                  $Campos_Erros['region'] = array();
              }
              $Campos_Erros['region'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['region']) || !is_array($this->NM_ajax_info['errList']['region']))
                  {
                      $this->NM_ajax_info['errList']['region'] = array();
                  }
                  $this->NM_ajax_info['errList']['region'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->region) > 100) 
          { 
              $Campos_Crit .= "Región " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['region']))
              {
                  $Campos_Erros['region'] = array();
              }
              $Campos_Erros['region'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['region']) || !is_array($this->NM_ajax_info['errList']['region']))
              {
                  $this->NM_ajax_info['errList']['region'] = array();
              }
              $this->NM_ajax_info['errList']['region'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          $this->region = ucwords($this->region) ; 
      } 
    } // ValidateField_region

    function ValidateField_departamento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->departamento = sc_strtolower($this->departamento); 
      $this->departamento = ucwords($this->departamento) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->departamento) > 100) 
          { 
              $Campos_Crit .= "Departamento " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['departamento']))
              {
                  $Campos_Erros['departamento'] = array();
              }
              $Campos_Erros['departamento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['departamento']) || !is_array($this->NM_ajax_info['errList']['departamento']))
              {
                  $this->NM_ajax_info['errList']['departamento'] = array();
              }
              $this->NM_ajax_info['errList']['departamento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          $this->departamento = ucwords($this->departamento) ; 
      } 
    } // ValidateField_departamento

    function ValidateField_ciudad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->ciudad = sc_strtolower($this->ciudad); 
      $this->ciudad = ucwords($this->ciudad) ; 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['ciudad']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['php_cmp_required']['ciudad'] == "on")) 
      { 
          if ($this->ciudad == "")  
          { 
              $Campos_Falta[] =  "Ciudad" ; 
              if (!isset($Campos_Erros['ciudad']))
              {
                  $Campos_Erros['ciudad'] = array();
              }
              $Campos_Erros['ciudad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['ciudad']) || !is_array($this->NM_ajax_info['errList']['ciudad']))
                  {
                      $this->NM_ajax_info['errList']['ciudad'] = array();
                  }
                  $this->NM_ajax_info['errList']['ciudad'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->ciudad) > 100) 
          { 
              $Campos_Crit .= "Ciudad " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['ciudad']))
              {
                  $Campos_Erros['ciudad'] = array();
              }
              $Campos_Erros['ciudad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['ciudad']) || !is_array($this->NM_ajax_info['errList']['ciudad']))
              {
                  $this->NM_ajax_info['errList']['ciudad'] = array();
              }
              $this->NM_ajax_info['errList']['ciudad'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          $this->ciudad = ucwords($this->ciudad) ; 
      } 
    } // ValidateField_ciudad

    function ValidateField_municipio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      $this->municipio = sc_strtolower($this->municipio); 
      $this->municipio = ucwords($this->municipio) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->municipio) > 100) 
          { 
              $Campos_Crit .= "Municipio " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['municipio']))
              {
                  $Campos_Erros['municipio'] = array();
              }
              $Campos_Erros['municipio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['municipio']) || !is_array($this->NM_ajax_info['errList']['municipio']))
              {
                  $this->NM_ajax_info['errList']['municipio'] = array();
              }
              $this->NM_ajax_info['errList']['municipio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          $this->municipio = ucwords($this->municipio) ; 
      } 
    } // ValidateField_municipio

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

    function ValidateField_telefonos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->telefonos) > 45) 
          { 
              $Campos_Crit .= "Telefonos " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['telefonos']))
              {
                  $Campos_Erros['telefonos'] = array();
              }
              $Campos_Erros['telefonos'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['telefonos']) || !is_array($this->NM_ajax_info['errList']['telefonos']))
              {
                  $this->NM_ajax_info['errList']['telefonos'] = array();
              }
              $this->NM_ajax_info['errList']['telefonos'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_telefonos

    function ValidateField_sitio_web(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->sitio_web) > 100) 
          { 
              $Campos_Crit .= "Sitio Web " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['sitio_web']))
              {
                  $Campos_Erros['sitio_web'] = array();
              }
              $Campos_Erros['sitio_web'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['sitio_web']) || !is_array($this->NM_ajax_info['errList']['sitio_web']))
              {
                  $this->NM_ajax_info['errList']['sitio_web'] = array();
              }
              $this->NM_ajax_info['errList']['sitio_web'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_sitio_web

    function ValidateField_correo_oficial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->correo_oficial) > 100) 
          { 
              $Campos_Crit .= "Correo Oficial " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['correo_oficial']))
              {
                  $Campos_Erros['correo_oficial'] = array();
              }
              $Campos_Erros['correo_oficial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['correo_oficial']) || !is_array($this->NM_ajax_info['errList']['correo_oficial']))
              {
                  $this->NM_ajax_info['errList']['correo_oficial'] = array();
              }
              $this->NM_ajax_info['errList']['correo_oficial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
    } // ValidateField_correo_oficial

    function ValidateField_fondo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->fondo;
            if ("" != $this->fondo && "S" != $this->fondo_limpa && !$teste_validade->ArqExtensao($this->fondo, array()))
            {
                $Campos_Crit .= "Fondo: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['fondo']))
                {
                    $Campos_Erros['fondo'] = array();
                }
                $Campos_Erros['fondo'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['fondo']) || !is_array($this->NM_ajax_info['errList']['fondo']))
                {
                    $this->NM_ajax_info['errList']['fondo'] = array();
                }
                $this->NM_ajax_info['errList']['fondo'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
    } // ValidateField_fondo

    function ValidateField_especialidades(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->especialidades) != "")  
          { 
          } 
      } 
    } // ValidateField_especialidades

    function ValidateField_estatus_periodo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->estatus_periodo) != "")  
          { 
          } 
      } 
    } // ValidateField_estatus_periodo

    function ValidateField_tipos_periodo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tipos_periodo) != "")  
          { 
          } 
      } 
    } // ValidateField_tipos_periodo

    function ValidateField_estatus_estudiantes(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->estatus_estudiantes) != "")  
          { 
          } 
      } 
    } // ValidateField_estatus_estudiantes

    function ValidateField_tipos_grados(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->tipos_grados) != "")  
          { 
          } 
      } 
    } // ValidateField_tipos_grados

    function ValidateField_turnos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->turnos) != "")  
          { 
          } 
      } 
    } // ValidateField_turnos

    function ValidateField_estatus_docentes(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->estatus_docentes) != "")  
          { 
          } 
      } 
    } // ValidateField_estatus_docentes
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
          if ($this->logo == "none") 
          { 
              $this->logo = ""; 
          } 
          if ($this->logo != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_colegio_doc_name.php';
              }
              $this->logo = sc_upload_unprotect_chars($this->logo);
              $this->logo_scfile_name = sc_upload_unprotect_chars($this->logo_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->logo_scfile_type = substr($this->logo_scfile_type, 0, strpos($this->logo_scfile_type, ";")) ; 
              } 
              if ($this->logo_scfile_type == "image/pjpeg" || $this->logo_scfile_type == "image/jpeg" || $this->logo_scfile_type == "image/gif" ||  
                  $this->logo_scfile_type == "image/png" || $this->logo_scfile_type == "image/x-png" || $this->logo_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->logo))  
                  { 
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_logo = $this->logo;
                      } 
                      else 
                      { 
                          $arq_logo = fopen($this->logo, "r") ; 
                          $reg_logo = fread($arq_logo, filesize($this->logo)) ; 
                          fclose($arq_logo) ;  
                      } 
                      $this->logo =  trim($this->logo_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (is_dir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->logo_scfile_name, $dir_img, "logo");
                          if (trim($this->logo_scfile_name) != $_test_file)
                          {
                              $this->logo_scfile_name = $_test_file;
                              $this->logo = $_test_file;
                          }
                          $arq_logo = fopen($dir_img . trim($this->logo_scfile_name), "w") ; 
                          fwrite($arq_logo, $reg_logo) ;  
                          fclose($arq_logo) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= "Logo: " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                          $this->logo = "";
                          if (!isset($Campos_Erros['logo']))
                          {
                              $Campos_Erros['logo'] = array();
                          }
                          $Campos_Erros['logo'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                          if (!isset($this->NM_ajax_info['errList']['logo']) || !is_array($this->NM_ajax_info['errList']['logo']))
                          {
                              $this->NM_ajax_info['errList']['logo'] = array();
                          }
                          $this->NM_ajax_info['errList']['logo'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Logo " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->logo = "";
                      if (!isset($Campos_Erros['logo']))
                      {
                          $Campos_Erros['logo'] = array();
                      }
                      $Campos_Erros['logo'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['logo']) || !is_array($this->NM_ajax_info['errList']['logo']))
                      {
                          $this->NM_ajax_info['errList']['logo'] = array();
                      }
                      $this->NM_ajax_info['errList']['logo'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->logo = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Logo " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['logo']))
                      {
                          $Campos_Erros['logo'] = array();
                      }
                      $Campos_Erros['logo'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['logo']) || !is_array($this->NM_ajax_info['errList']['logo']))
                      {
                          $this->NM_ajax_info['errList']['logo'] = array();
                      }
                      $this->NM_ajax_info['errList']['logo'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->logo_salva) && $this->logo_limpa != "S")
          {
              $this->logo = $this->logo_salva;
          }
      } 
      elseif (!empty($this->logo_salva) && $this->logo_limpa != "S")
      {
          $this->logo = $this->logo_salva;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fondo == "none") 
          { 
              $this->fondo = ""; 
          } 
          if ($this->fondo != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_colegio_doc_name.php';
              }
              $this->fondo = sc_upload_unprotect_chars($this->fondo);
              $this->fondo_scfile_name = sc_upload_unprotect_chars($this->fondo_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->fondo_scfile_type = substr($this->fondo_scfile_type, 0, strpos($this->fondo_scfile_type, ";")) ; 
              } 
              if ($this->fondo_scfile_type == "image/pjpeg" || $this->fondo_scfile_type == "image/jpeg" || $this->fondo_scfile_type == "image/gif" ||  
                  $this->fondo_scfile_type == "image/png" || $this->fondo_scfile_type == "image/x-png" || $this->fondo_scfile_type == "image/bmp")  
              { 
                  if (is_file($this->fondo))  
                  { 
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_fondo = $this->fondo;
                      } 
                      else 
                      { 
                          $arq_fondo = fopen($this->fondo, "r") ; 
                          $reg_fondo = fread($arq_fondo, filesize($this->fondo)) ; 
                          fclose($arq_fondo) ;  
                      } 
                      $this->fondo =  trim($this->fondo_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (is_dir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->fondo_scfile_name, $dir_img, "fondo");
                          if (trim($this->fondo_scfile_name) != $_test_file)
                          {
                              $this->fondo_scfile_name = $_test_file;
                              $this->fondo = $_test_file;
                          }
                          $arq_fondo = fopen($dir_img . trim($this->fondo_scfile_name), "w") ; 
                          fwrite($arq_fondo, $reg_fondo) ;  
                          fclose($arq_fondo) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= "Fondo: " . $this->Ini->Nm_lang['lang_errm_nfdr']; 
                          $this->fondo = "";
                          if (!isset($Campos_Erros['fondo']))
                          {
                              $Campos_Erros['fondo'] = array();
                          }
                          $Campos_Erros['fondo'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                          if (!isset($this->NM_ajax_info['errList']['fondo']) || !is_array($this->NM_ajax_info['errList']['fondo']))
                          {
                              $this->NM_ajax_info['errList']['fondo'] = array();
                          }
                          $this->NM_ajax_info['errList']['fondo'][] = $this->Ini->Nm_lang['lang_errm_nfdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Fondo " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->fondo = "";
                      if (!isset($Campos_Erros['fondo']))
                      {
                          $Campos_Erros['fondo'] = array();
                      }
                      $Campos_Erros['fondo'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['fondo']) || !is_array($this->NM_ajax_info['errList']['fondo']))
                      {
                          $this->NM_ajax_info['errList']['fondo'] = array();
                      }
                      $this->NM_ajax_info['errList']['fondo'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->fondo = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Fondo " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['fondo']))
                      {
                          $Campos_Erros['fondo'] = array();
                      }
                      $Campos_Erros['fondo'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['fondo']) || !is_array($this->NM_ajax_info['errList']['fondo']))
                      {
                          $this->NM_ajax_info['errList']['fondo'] = array();
                      }
                      $this->NM_ajax_info['errList']['fondo'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->fondo_salva) && $this->fondo_limpa != "S")
          {
              $this->fondo = $this->fondo_salva;
          }
      } 
      elseif (!empty($this->fondo_salva) && $this->fondo_limpa != "S")
      {
          $this->fondo = $this->fondo_salva;
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
    if (empty($this->logo))
    {
        $this->logo = $this->nmgp_dados_form['logo'];
    }
    $this->nmgp_dados_form['logo'] = $this->logo;
    $this->nmgp_dados_form['logo_limpa'] = $this->logo_limpa;
    $this->nmgp_dados_form['colegio_nombre'] = $this->colegio_nombre;
    $this->nmgp_dados_form['pais'] = $this->pais;
    $this->nmgp_dados_form['region'] = $this->region;
    $this->nmgp_dados_form['departamento'] = $this->departamento;
    $this->nmgp_dados_form['ciudad'] = $this->ciudad;
    $this->nmgp_dados_form['municipio'] = $this->municipio;
    $this->nmgp_dados_form['direccion_linea1'] = $this->direccion_linea1;
    $this->nmgp_dados_form['direccion_linea2'] = $this->direccion_linea2;
    $this->nmgp_dados_form['telefonos'] = $this->telefonos;
    $this->nmgp_dados_form['sitio_web'] = $this->sitio_web;
    $this->nmgp_dados_form['correo_oficial'] = $this->correo_oficial;
    if (empty($this->fondo))
    {
        $this->fondo = $this->nmgp_dados_form['fondo'];
    }
    $this->nmgp_dados_form['fondo'] = $this->fondo;
    $this->nmgp_dados_form['fondo_limpa'] = $this->fondo_limpa;
    $this->nmgp_dados_form['especialidades'] = $this->especialidades;
    $this->nmgp_dados_form['estatus_periodo'] = $this->estatus_periodo;
    $this->nmgp_dados_form['tipos_periodo'] = $this->tipos_periodo;
    $this->nmgp_dados_form['estatus_estudiantes'] = $this->estatus_estudiantes;
    $this->nmgp_dados_form['tipos_grados'] = $this->tipos_grados;
    $this->nmgp_dados_form['turnos'] = $this->turnos;
    $this->nmgp_dados_form['estatus_docentes'] = $this->estatus_docentes;
    $this->nmgp_dados_form['colegio_id'] = $this->colegio_id;
    $this->nmgp_dados_form['activo'] = $this->activo;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->formatado = false;
      nm_limpa_numero($this->colegio_id, $this->field_config['colegio_id']['symbol_grp']) ; 
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
      if ($Nome_Campo == "colegio_id")
      {
          nm_limpa_numero($this->colegio_id, $this->field_config['colegio_id']['symbol_grp']) ; 
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
          $this->ajax_return_values_logo();
          $this->ajax_return_values_colegio_nombre();
          $this->ajax_return_values_pais();
          $this->ajax_return_values_region();
          $this->ajax_return_values_departamento();
          $this->ajax_return_values_ciudad();
          $this->ajax_return_values_municipio();
          $this->ajax_return_values_direccion_linea1();
          $this->ajax_return_values_direccion_linea2();
          $this->ajax_return_values_telefonos();
          $this->ajax_return_values_sitio_web();
          $this->ajax_return_values_correo_oficial();
          $this->ajax_return_values_fondo();
          $this->ajax_return_values_especialidades();
          $this->ajax_return_values_estatus_periodo();
          $this->ajax_return_values_tipos_periodo();
          $this->ajax_return_values_estatus_estudiantes();
          $this->ajax_return_values_tipos_grados();
          $this->ajax_return_values_turnos();
          $this->ajax_return_values_estatus_docentes();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['colegio_id']['keyVal'] = form_colegio_pack_protect_string($this->nmgp_dados_form['colegio_id']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['foreign_key']['colegio_id'] = $this->nmgp_dados_form['colegio_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['where_filter'] = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['where_detal']  = "colegio_id = " . $this->nmgp_dados_form['colegio_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['total']);
          }
   } // ajax_return_values

          //----- logo
   function ajax_return_values_logo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("logo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->logo);
              $aLookup = array();
   $out_logo = '';
   $out1_logo = '';
   if ($this->logo != "" && $this->logo != "none")   
   { 
       $path_logo = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->logo;
       $md5_logo  = md5("" . $this->logo);
       if (is_file($path_logo))  
       { 
           $NM_ler_img = true;
           $out_logo = $this->Ini->path_imag_temp . "/sc_logo_" . $md5_logo . ".gif" ;  
           $out1_logo = $out_logo; 
           if (is_file($this->Ini->root . $out_logo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_logo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_logo = fopen($path_logo, "r") ; 
               $reg_logo = fread($tmp_logo, filesize($path_logo)) ; 
               fclose($tmp_logo) ;  
               $arq_logo = fopen($this->Ini->root . $out_logo, "w") ;  
               fwrite($arq_logo, $reg_logo) ;  
               fclose($arq_logo) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_logo);
           $this->nmgp_return_img['logo'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['logo'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_logo  = md5($this->logo);
           $out_logo = $this->Ini->path_imag_temp . "/sc_logo_190350" . $md5_logo . ".gif" ;  
           if (is_file($this->Ini->root . $out_logo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_logo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_logo);
                   $sc_obj_img->setWidth(190);
                   $sc_obj_img->setHeight(350);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_logo);
               } 
               else 
               { 
                   $out_logo = $out1_logo;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['logo'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_logo,
               'imgOrig' => $out1_logo,
               'keepImg' => $sKeepImage,
               'hideName' => 'S',
              );
          }
   }

          //----- colegio_nombre
   function ajax_return_values_colegio_nombre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("colegio_nombre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->colegio_nombre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['colegio_nombre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pais
   function ajax_return_values_pais($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pais", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pais);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pais'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- region
   function ajax_return_values_region($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("region", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->region);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['region'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- departamento
   function ajax_return_values_departamento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("departamento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->departamento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['departamento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- ciudad
   function ajax_return_values_ciudad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("ciudad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->ciudad);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['ciudad'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- municipio
   function ajax_return_values_municipio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("municipio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->municipio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['municipio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
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

          //----- telefonos
   function ajax_return_values_telefonos($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("telefonos", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->telefonos);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['telefonos'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- sitio_web
   function ajax_return_values_sitio_web($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sitio_web", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sitio_web);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sitio_web'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- correo_oficial
   function ajax_return_values_correo_oficial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("correo_oficial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->correo_oficial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['correo_oficial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- fondo
   function ajax_return_values_fondo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fondo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fondo);
              $aLookup = array();
   $out_fondo = '';
   $out1_fondo = '';
   if ($this->fondo != "" && $this->fondo != "none")   
   { 
       $path_fondo = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->fondo;
       $md5_fondo  = md5("" . $this->fondo);
       if (is_file($path_fondo))  
       { 
           $NM_ler_img = true;
           $out_fondo = $this->Ini->path_imag_temp . "/sc_fondo_" . $md5_fondo . ".gif" ;  
           $out1_fondo = $out_fondo; 
           if (is_file($this->Ini->root . $out_fondo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fondo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_fondo = fopen($path_fondo, "r") ; 
               $reg_fondo = fread($tmp_fondo, filesize($path_fondo)) ; 
               fclose($tmp_fondo) ;  
               $arq_fondo = fopen($this->Ini->root . $out_fondo, "w") ;  
               fwrite($arq_fondo, $reg_fondo) ;  
               fclose($arq_fondo) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fondo);
           $this->nmgp_return_img['fondo'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['fondo'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_fondo  = md5($this->fondo);
           $out_fondo = $this->Ini->path_imag_temp . "/sc_fondo_800600" . $md5_fondo . ".gif" ;  
           if (is_file($this->Ini->root . $out_fondo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fondo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_fondo);
                   $sc_obj_img->setWidth(800);
                   $sc_obj_img->setHeight(600);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_fondo);
               } 
               else 
               { 
                   $out_fondo = $out1_fondo;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fondo'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_fondo,
               'imgOrig' => $out1_fondo,
               'keepImg' => $sKeepImage,
               'hideName' => 'S',
              );
          }
   }

          //----- especialidades
   function ajax_return_values_especialidades($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("especialidades", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->especialidades);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['especialidades'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estatus_periodo
   function ajax_return_values_estatus_periodo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estatus_periodo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estatus_periodo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['estatus_periodo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipos_periodo
   function ajax_return_values_tipos_periodo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipos_periodo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipos_periodo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipos_periodo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estatus_estudiantes
   function ajax_return_values_estatus_estudiantes($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estatus_estudiantes", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estatus_estudiantes);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['estatus_estudiantes'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- tipos_grados
   function ajax_return_values_tipos_grados($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tipos_grados", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tipos_grados);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tipos_grados'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- turnos
   function ajax_return_values_turnos($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("turnos", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->turnos);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['turnos'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- estatus_docentes
   function ajax_return_values_estatus_docentes($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("estatus_docentes", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->estatus_docentes);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['estatus_docentes'] = array(
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['upload_dir'][$fieldName][] = $newName;
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
    if ("excluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_colegio']['contr_erro'] = 'on';
             /* asignaturas */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_asignaturas = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_asignaturas[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_asignaturas = false;
          $this->dataset_asignaturas_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_asignaturas[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* asignaturas_grados */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asignaturas_grados WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_asignaturas_grados = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_asignaturas_grados[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_asignaturas_grados = false;
          $this->dataset_asignaturas_grados_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_asignaturas_grados[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* asistencias */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asistencias WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asistencias WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asistencias WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asistencias WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM asistencias WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_asistencias = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_asistencias[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_asistencias = false;
          $this->dataset_asistencias_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_asistencias[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* calificaciones */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_calificaciones = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_calificaciones[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_calificaciones = false;
          $this->dataset_calificaciones_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_calificaciones[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* calificaciones_detalle */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_calificaciones_detalle = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_calificaciones_detalle[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_calificaciones_detalle = false;
          $this->dataset_calificaciones_detalle_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_calificaciones_detalle[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* curso_asignatura_asignaciones */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_asignaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_asignaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_asignaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_asignaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_asignaciones WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_curso_asignatura_asignaciones = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_curso_asignatura_asignaciones[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_curso_asignatura_asignaciones = false;
          $this->dataset_curso_asignatura_asignaciones_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_curso_asignatura_asignaciones[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* curso_asignatura_detalles */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_detalles WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_detalles WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_detalles WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_detalles WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignatura_detalles WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_curso_asignatura_detalles = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_curso_asignatura_detalles[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_curso_asignatura_detalles = false;
          $this->dataset_curso_asignatura_detalles_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_curso_asignatura_detalles[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* curso_asignaturas */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_asignaturas WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_curso_asignaturas = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_curso_asignaturas[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_curso_asignaturas = false;
          $this->dataset_curso_asignaturas_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_curso_asignaturas[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* curso_estudiantes */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM curso_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_curso_estudiantes = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_curso_estudiantes[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_curso_estudiantes = false;
          $this->dataset_curso_estudiantes_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_curso_estudiantes[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* cursos */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM cursos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM cursos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM cursos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM cursos WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM cursos WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_cursos = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_cursos[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_cursos = false;
          $this->dataset_cursos_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_cursos[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* docentes */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM docentes WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_docentes = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_docentes[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_docentes = false;
          $this->dataset_docentes_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_docentes[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* especialidades */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM especialidades WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM especialidades WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM especialidades WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM especialidades WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM especialidades WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_especialidades = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_especialidades[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_especialidades = false;
          $this->dataset_especialidades_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_especialidades[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* estatus_docentes */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_docentes WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_docentes WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_estatus_docentes = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_estatus_docentes[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_estatus_docentes = false;
          $this->dataset_estatus_docentes_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_estatus_docentes[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* estatus_estudiantes */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_estatus_estudiantes = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_estatus_estudiantes[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_estatus_estudiantes = false;
          $this->dataset_estatus_estudiantes_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_estatus_estudiantes[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* estatus_periodos */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_periodos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_periodos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_periodos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_periodos WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estatus_periodos WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_estatus_periodos = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_estatus_periodos[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_estatus_periodos = false;
          $this->dataset_estatus_periodos_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_estatus_periodos[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* estudiantes */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_estudiantes = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_estudiantes[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_estudiantes = false;
          $this->dataset_estudiantes_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_estudiantes[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* grados */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM grados WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM grados WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_grados = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_grados[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_grados = false;
          $this->dataset_grados_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_grados[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* notificaciones */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM notificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM notificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM notificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM notificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM notificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_notificaciones = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_notificaciones[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_notificaciones = false;
          $this->dataset_notificaciones_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_notificaciones[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* padres */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_padres = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_padres[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_padres = false;
          $this->dataset_padres_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_padres[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* padres_estudiantes */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM padres_estudiantes WHERE colegio_id = " . $this->colegio_id ;
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
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* periodos_lectivo */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM periodos_lectivo WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM periodos_lectivo WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM periodos_lectivo WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM periodos_lectivo WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM periodos_lectivo WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_periodos_lectivo = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_periodos_lectivo[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_periodos_lectivo = false;
          $this->dataset_periodos_lectivo_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_periodos_lectivo[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* tipo_calificaciones */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_tipo_calificaciones = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_tipo_calificaciones[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_tipo_calificaciones = false;
          $this->dataset_tipo_calificaciones_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_tipo_calificaciones[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* tipo_calificaciones_detalle */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_detalle WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_tipo_calificaciones_detalle = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_tipo_calificaciones_detalle[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_tipo_calificaciones_detalle = false;
          $this->dataset_tipo_calificaciones_detalle_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_tipo_calificaciones_detalle[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* tipo_calificaciones_niveles */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_niveles WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_niveles WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_niveles WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_niveles WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_calificaciones_niveles WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_tipo_calificaciones_niveles = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_tipo_calificaciones_niveles[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_tipo_calificaciones_niveles = false;
          $this->dataset_tipo_calificaciones_niveles_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_tipo_calificaciones_niveles[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* tipo_grados */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_grados WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_grados WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_tipo_grados = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_tipo_grados[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_tipo_grados = false;
          $this->dataset_tipo_grados_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_tipo_grados[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* tipo_periodo */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_periodo WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_periodo WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_periodo WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_periodo WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM tipo_periodo WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_tipo_periodo = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_tipo_periodo[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_tipo_periodo = false;
          $this->dataset_tipo_periodo_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_tipo_periodo[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* turnos */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM turnos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM turnos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM turnos WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM turnos WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM turnos WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_turnos = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_turnos[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_turnos = false;
          $this->dataset_turnos_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_turnos[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }

            /* usuarios */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM usuarios WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM usuarios WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM usuarios WHERE colegio_id = " . $this->colegio_id ;
      }
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM usuarios WHERE colegio_id = " . $this->colegio_id ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM usuarios WHERE colegio_id = " . $this->colegio_id ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_usuarios = array();
      if ($rx = $this->Db->Execute($nm_select)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF)
          { 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                      $this->dataset_usuarios[$y] [$x] = $rx->fields[$x];
                 }
                 $y++; 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_usuarios = false;
          $this->dataset_usuarios_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_usuarios[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6))
 {
  $sErrorIndex = ('submit_form' == $this->NM_ajax_opcao) ? 'geral_form_colegio' : substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }
$_SESSION['scriptcase']['form_colegio']['contr_erro'] = 'off'; 
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
      if ('incluir' == $this->nmgp_opcao && empty($this->activo)) {$this->activo = "1"; $NM_val_null[] = "activo";}  
      $NM_val_form['logo'] = $this->logo;
      $NM_val_form['colegio_nombre'] = $this->colegio_nombre;
      $NM_val_form['pais'] = $this->pais;
      $NM_val_form['region'] = $this->region;
      $NM_val_form['departamento'] = $this->departamento;
      $NM_val_form['ciudad'] = $this->ciudad;
      $NM_val_form['municipio'] = $this->municipio;
      $NM_val_form['direccion_linea1'] = $this->direccion_linea1;
      $NM_val_form['direccion_linea2'] = $this->direccion_linea2;
      $NM_val_form['telefonos'] = $this->telefonos;
      $NM_val_form['sitio_web'] = $this->sitio_web;
      $NM_val_form['correo_oficial'] = $this->correo_oficial;
      $NM_val_form['fondo'] = $this->fondo;
      $NM_val_form['especialidades'] = $this->especialidades;
      $NM_val_form['estatus_periodo'] = $this->estatus_periodo;
      $NM_val_form['tipos_periodo'] = $this->tipos_periodo;
      $NM_val_form['estatus_estudiantes'] = $this->estatus_estudiantes;
      $NM_val_form['tipos_grados'] = $this->tipos_grados;
      $NM_val_form['turnos'] = $this->turnos;
      $NM_val_form['estatus_docentes'] = $this->estatus_docentes;
      $NM_val_form['colegio_id'] = $this->colegio_id;
      $NM_val_form['activo'] = $this->activo;
      if ($this->colegio_id == "")  
      { 
          $this->colegio_id = 0;
      } 
      if ($this->activo == "")  
      { 
          $this->activo = 0;
          $this->sc_force_zero[] = 'activo';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql);
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->colegio_nombre_before_qstr = $this->colegio_nombre;
          $this->colegio_nombre = substr($this->Db->qstr($this->colegio_nombre), 1, -1); 
          if ($this->colegio_nombre == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->colegio_nombre = "null"; 
              $NM_val_null[] = "colegio_nombre";
          } 
          $this->pais_before_qstr = $this->pais;
          $this->pais = substr($this->Db->qstr($this->pais), 1, -1); 
          if ($this->pais == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pais = "null"; 
              $NM_val_null[] = "pais";
          } 
          $this->region_before_qstr = $this->region;
          $this->region = substr($this->Db->qstr($this->region), 1, -1); 
          if ($this->region == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->region = "null"; 
              $NM_val_null[] = "region";
          } 
          $this->departamento_before_qstr = $this->departamento;
          $this->departamento = substr($this->Db->qstr($this->departamento), 1, -1); 
          if ($this->departamento == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->departamento = "null"; 
              $NM_val_null[] = "departamento";
          } 
          $this->ciudad_before_qstr = $this->ciudad;
          $this->ciudad = substr($this->Db->qstr($this->ciudad), 1, -1); 
          if ($this->ciudad == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->ciudad = "null"; 
              $NM_val_null[] = "ciudad";
          } 
          $this->municipio_before_qstr = $this->municipio;
          $this->municipio = substr($this->Db->qstr($this->municipio), 1, -1); 
          if ($this->municipio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->municipio = "null"; 
              $NM_val_null[] = "municipio";
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
          $this->telefonos_before_qstr = $this->telefonos;
          $this->telefonos = substr($this->Db->qstr($this->telefonos), 1, -1); 
          if ($this->telefonos == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->telefonos = "null"; 
              $NM_val_null[] = "telefonos";
          } 
          $this->sitio_web_before_qstr = $this->sitio_web;
          $this->sitio_web = substr($this->Db->qstr($this->sitio_web), 1, -1); 
          if ($this->sitio_web == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->sitio_web = "null"; 
              $NM_val_null[] = "sitio_web";
          } 
          $this->correo_oficial_before_qstr = $this->correo_oficial;
          $this->correo_oficial = substr($this->Db->qstr($this->correo_oficial), 1, -1); 
          if ($this->correo_oficial == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->correo_oficial = "null"; 
              $NM_val_null[] = "correo_oficial";
          } 
          $this->fondo_before_qstr = $this->fondo;
          $this->fondo = substr($this->Db->qstr($this->fondo), 1, -1); 
          if ($this->fondo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fondo = "null"; 
              $NM_val_null[] = "fondo";
          } 
          $this->logo_before_qstr = $this->logo;
          $this->logo = substr($this->Db->qstr($this->logo), 1, -1); 
          if ($this->logo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->logo = "null"; 
              $NM_val_null[] = "logo";
          } 
          $this->especialidades_before_qstr = $this->especialidades;
          $this->especialidades = substr($this->Db->qstr($this->especialidades), 1, -1); 
          if ($this->especialidades == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->especialidades = "null"; 
              $NM_val_null[] = "especialidades";
          } 
          $this->estatus_periodo_before_qstr = $this->estatus_periodo;
          $this->estatus_periodo = substr($this->Db->qstr($this->estatus_periodo), 1, -1); 
          if ($this->estatus_periodo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estatus_periodo = "null"; 
              $NM_val_null[] = "estatus_periodo";
          } 
          $this->tipos_periodo_before_qstr = $this->tipos_periodo;
          $this->tipos_periodo = substr($this->Db->qstr($this->tipos_periodo), 1, -1); 
          if ($this->tipos_periodo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipos_periodo = "null"; 
              $NM_val_null[] = "tipos_periodo";
          } 
          $this->estatus_estudiantes_before_qstr = $this->estatus_estudiantes;
          $this->estatus_estudiantes = substr($this->Db->qstr($this->estatus_estudiantes), 1, -1); 
          if ($this->estatus_estudiantes == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estatus_estudiantes = "null"; 
              $NM_val_null[] = "estatus_estudiantes";
          } 
          $this->tipos_grados_before_qstr = $this->tipos_grados;
          $this->tipos_grados = substr($this->Db->qstr($this->tipos_grados), 1, -1); 
          if ($this->tipos_grados == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->tipos_grados = "null"; 
              $NM_val_null[] = "tipos_grados";
          } 
          $this->turnos_before_qstr = $this->turnos;
          $this->turnos = substr($this->Db->qstr($this->turnos), 1, -1); 
          if ($this->turnos == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->turnos = "null"; 
              $NM_val_null[] = "turnos";
          } 
          $this->estatus_docentes_before_qstr = $this->estatus_docentes;
          $this->estatus_docentes = substr($this->Db->qstr($this->estatus_docentes), 1, -1); 
          if ($this->estatus_docentes == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->estatus_docentes = "null"; 
              $NM_val_null[] = "estatus_docentes";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_ex_update = true; 
          $SC_ex_upd_or = true; 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key'] as $sFKName => $sFKValue)
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
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_colegio_pack_ajax_response();
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
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET colegio_nombre = '$this->colegio_nombre', pais = '$this->pais', region = '$this->region', departamento = '$this->departamento', ciudad = '$this->ciudad', municipio = '$this->municipio', direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefonos = '$this->telefonos', sitio_web = '$this->sitio_web', correo_oficial = '$this->correo_oficial'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET colegio_nombre = '$this->colegio_nombre', pais = '$this->pais', region = '$this->region', departamento = '$this->departamento', ciudad = '$this->ciudad', municipio = '$this->municipio', direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefonos = '$this->telefonos', sitio_web = '$this->sitio_web', correo_oficial = '$this->correo_oficial'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET colegio_nombre = '$this->colegio_nombre', pais = '$this->pais', region = '$this->region', departamento = '$this->departamento', ciudad = '$this->ciudad', municipio = '$this->municipio', direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefonos = '$this->telefonos', sitio_web = '$this->sitio_web', correo_oficial = '$this->correo_oficial'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET colegio_nombre = '$this->colegio_nombre', pais = '$this->pais', region = '$this->region', departamento = '$this->departamento', ciudad = '$this->ciudad', municipio = '$this->municipio', direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefonos = '$this->telefonos', sitio_web = '$this->sitio_web', correo_oficial = '$this->correo_oficial'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET colegio_nombre = '$this->colegio_nombre', pais = '$this->pais', region = '$this->region', departamento = '$this->departamento', ciudad = '$this->ciudad', municipio = '$this->municipio', direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefonos = '$this->telefonos', sitio_web = '$this->sitio_web', correo_oficial = '$this->correo_oficial'";  
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando_oracle = "UPDATE " . $this->Ini->nm_tabela . " SET colegio_nombre = '$this->colegio_nombre', pais = '$this->pais', region = '$this->region', departamento = '$this->departamento', ciudad = '$this->ciudad', municipio = '$this->municipio', direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefonos = '$this->telefonos', sitio_web = '$this->sitio_web', correo_oficial = '$this->correo_oficial'";  
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET colegio_nombre = '$this->colegio_nombre', pais = '$this->pais', region = '$this->region', departamento = '$this->departamento', ciudad = '$this->ciudad', municipio = '$this->municipio', direccion_linea1 = '$this->direccion_linea1', direccion_linea2 = '$this->direccion_linea2', telefonos = '$this->telefonos', sitio_web = '$this->sitio_web', correo_oficial = '$this->correo_oficial'";  
              } 
              if (isset($NM_val_form['activo']) && $NM_val_form['activo'] != $this->nmgp_dados_select['activo']) 
              { 
                  if ($SC_ex_update || $SC_tem_cmp_update) 
                  { 
                      $comando        .= ","; 
                      $comando_oracle .= ","; 
                  } 
                  $comando        .= " activo = $this->activo"; 
                  $comando_oracle        .= " activo = $this->activo"; 
                  $SC_ex_update = true; 
                  $SC_ex_upd_or = true; 
              } 
              $aDoNotUpdate = array();
              $temp_cmd_sql = "";
              if ($this->fondo_limpa == "S") 
              { 
                  if ($this->fondo != "null") 
                  { 
                      $this->fondo = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", fondo = '" . $this->fondo . "'"; 
                      $comando_oracle .= ", fondo = '" . $this->fondo . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " fondo = '" . $this->fondo . "'"; 
                     $comando_oracle .= " fondo = '" . $this->fondo . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->fondo = "";
              } 
              else 
              { 
                  if ($this->fondo != "none" && $this->fondo != "") 
                  { 
                      $NM_conteudo =  $this->fondo;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", fondo = '$NM_conteudo'" ; 
                          $comando_oracle .= ", fondo = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " fondo = '$NM_conteudo'" ; 
                          $comando_oracle .= " fondo = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "fondo";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              $temp_cmd_sql = "";
              if ($this->logo_limpa == "S") 
              { 
                  if ($this->logo != "null") 
                  { 
                      $this->logo = ''; 
                  } 
                  if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                  { 
                      $temp_cmd_sql .= ", logo = '" . $this->logo . "'"; 
                      $comando_oracle .= ", logo = '" . $this->logo . "'"; 
                  } 
                  else 
                  { 
                     $temp_cmd_sql .= " logo = '" . $this->logo . "'"; 
                     $comando_oracle .= " logo = '" . $this->logo . "'"; 
                     $SC_ex_upd_or = true; 
                     $SC_ex_update = true; 
                  } 
                  $this->logo = "";
              } 
              else 
              { 
                  if ($this->logo != "none" && $this->logo != "") 
                  { 
                      $NM_conteudo =  $this->logo;
                      if ($SC_ex_update || $SC_tem_cmp_update || $SC_ex_upd_or) 
                      { 
                          $temp_cmd_sql .= ", logo = '$NM_conteudo'" ; 
                          $comando_oracle .= ", logo = '$NM_conteudo'" ; 
                      } 
                      else 
                      { 
                          $temp_cmd_sql .= " logo = '$NM_conteudo'" ; 
                          $comando_oracle .= " logo = '$NM_conteudo'" ; 
                          $SC_ex_upd_or = true; 
                          $SC_ex_update = true; 
                      } 
                  } 
                  else
                  {
                      $aDoNotUpdate[] = "logo";
                  }
              } 
              if (!empty($temp_cmd_sql)) 
              { 
                  $comando .= $temp_cmd_sql;
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  $comando = $comando_oracle;  
                  $SC_ex_update = $SC_ex_upd_or;
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id ";  
              }  
              else  
              {
                  $comando .= " WHERE colegio_id = $this->colegio_id ";  
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
                                  form_colegio_pack_ajax_response();
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
              }   
              if ($this->fondo_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['fondo_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->logo_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['logo_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
          $this->colegio_nombre = $this->colegio_nombre_before_qstr;
          $this->pais = $this->pais_before_qstr;
          $this->region = $this->region_before_qstr;
          $this->departamento = $this->departamento_before_qstr;
          $this->ciudad = $this->ciudad_before_qstr;
          $this->municipio = $this->municipio_before_qstr;
          $this->direccion_linea1 = $this->direccion_linea1_before_qstr;
          $this->direccion_linea2 = $this->direccion_linea2_before_qstr;
          $this->telefonos = $this->telefonos_before_qstr;
          $this->sitio_web = $this->sitio_web_before_qstr;
          $this->correo_oficial = $this->correo_oficial_before_qstr;
          $this->fondo = $this->fondo_before_qstr;
          $this->logo = $this->logo_before_qstr;
          $this->especialidades = $this->especialidades_before_qstr;
          $this->estatus_periodo = $this->estatus_periodo_before_qstr;
          $this->tipos_periodo = $this->tipos_periodo_before_qstr;
          $this->estatus_estudiantes = $this->estatus_estudiantes_before_qstr;
          $this->tipos_grados = $this->tipos_grados_before_qstr;
          $this->turnos = $this->turnos_before_qstr;
          $this->estatus_docentes = $this->estatus_docentes_before_qstr;
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['db_changed'] = true;


              if     (isset($NM_val_form) && isset($NM_val_form['colegio_nombre'])) { $this->colegio_nombre = $NM_val_form['colegio_nombre']; }
              elseif (isset($this->colegio_nombre)) { $this->nm_limpa_alfa($this->colegio_nombre); }
              if     (isset($NM_val_form) && isset($NM_val_form['pais'])) { $this->pais = $NM_val_form['pais']; }
              elseif (isset($this->pais)) { $this->nm_limpa_alfa($this->pais); }
              if     (isset($NM_val_form) && isset($NM_val_form['region'])) { $this->region = $NM_val_form['region']; }
              elseif (isset($this->region)) { $this->nm_limpa_alfa($this->region); }
              if     (isset($NM_val_form) && isset($NM_val_form['departamento'])) { $this->departamento = $NM_val_form['departamento']; }
              elseif (isset($this->departamento)) { $this->nm_limpa_alfa($this->departamento); }
              if     (isset($NM_val_form) && isset($NM_val_form['ciudad'])) { $this->ciudad = $NM_val_form['ciudad']; }
              elseif (isset($this->ciudad)) { $this->nm_limpa_alfa($this->ciudad); }
              if     (isset($NM_val_form) && isset($NM_val_form['municipio'])) { $this->municipio = $NM_val_form['municipio']; }
              elseif (isset($this->municipio)) { $this->nm_limpa_alfa($this->municipio); }
              if     (isset($NM_val_form) && isset($NM_val_form['direccion_linea1'])) { $this->direccion_linea1 = $NM_val_form['direccion_linea1']; }
              elseif (isset($this->direccion_linea1)) { $this->nm_limpa_alfa($this->direccion_linea1); }
              if     (isset($NM_val_form) && isset($NM_val_form['direccion_linea2'])) { $this->direccion_linea2 = $NM_val_form['direccion_linea2']; }
              elseif (isset($this->direccion_linea2)) { $this->nm_limpa_alfa($this->direccion_linea2); }
              if     (isset($NM_val_form) && isset($NM_val_form['telefonos'])) { $this->telefonos = $NM_val_form['telefonos']; }
              elseif (isset($this->telefonos)) { $this->nm_limpa_alfa($this->telefonos); }
              if     (isset($NM_val_form) && isset($NM_val_form['sitio_web'])) { $this->sitio_web = $NM_val_form['sitio_web']; }
              elseif (isset($this->sitio_web)) { $this->nm_limpa_alfa($this->sitio_web); }
              if     (isset($NM_val_form) && isset($NM_val_form['correo_oficial'])) { $this->correo_oficial = $NM_val_form['correo_oficial']; }
              elseif (isset($this->correo_oficial)) { $this->nm_limpa_alfa($this->correo_oficial); }
              if     (isset($NM_val_form) && isset($NM_val_form['especialidades'])) { $this->especialidades = $NM_val_form['especialidades']; }
              elseif (isset($this->especialidades)) { $this->nm_limpa_alfa($this->especialidades); }
              if     (isset($NM_val_form) && isset($NM_val_form['estatus_periodo'])) { $this->estatus_periodo = $NM_val_form['estatus_periodo']; }
              elseif (isset($this->estatus_periodo)) { $this->nm_limpa_alfa($this->estatus_periodo); }
              if     (isset($NM_val_form) && isset($NM_val_form['tipos_periodo'])) { $this->tipos_periodo = $NM_val_form['tipos_periodo']; }
              elseif (isset($this->tipos_periodo)) { $this->nm_limpa_alfa($this->tipos_periodo); }
              if     (isset($NM_val_form) && isset($NM_val_form['estatus_estudiantes'])) { $this->estatus_estudiantes = $NM_val_form['estatus_estudiantes']; }
              elseif (isset($this->estatus_estudiantes)) { $this->nm_limpa_alfa($this->estatus_estudiantes); }
              if     (isset($NM_val_form) && isset($NM_val_form['tipos_grados'])) { $this->tipos_grados = $NM_val_form['tipos_grados']; }
              elseif (isset($this->tipos_grados)) { $this->nm_limpa_alfa($this->tipos_grados); }
              if     (isset($NM_val_form) && isset($NM_val_form['turnos'])) { $this->turnos = $NM_val_form['turnos']; }
              elseif (isset($this->turnos)) { $this->nm_limpa_alfa($this->turnos); }
              if     (isset($NM_val_form) && isset($NM_val_form['estatus_docentes'])) { $this->estatus_docentes = $NM_val_form['estatus_docentes']; }
              elseif (isset($this->estatus_docentes)) { $this->nm_limpa_alfa($this->estatus_docentes); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('colegio_nombre', 'pais', 'region', 'departamento', 'ciudad', 'municipio', 'direccion_linea1', 'direccion_linea2', 'telefonos', 'sitio_web', 'correo_oficial', 'especialidades', 'estatus_periodo', 'tipos_periodo', 'estatus_estudiantes', 'tipos_grados', 'turnos', 'estatus_docentes'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "colegio_id, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_colegio_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->logo_scfile_name, $dir_file, "logo");
              if (trim($this->logo_scfile_name) != $_test_file)
              {
                  $this->logo_scfile_name = $_test_file;
                  $this->logo = $_test_file;
              }
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->fondo_scfile_name, $dir_file, "fondo");
              if (trim($this->fondo_scfile_name) != $_test_file)
              {
                  $this->fondo_scfile_name = $_test_file;
                  $this->fondo = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo) VALUES ('$this->colegio_nombre', $this->activo, '$this->pais', '$this->region', '$this->departamento', '$this->ciudad', '$this->municipio', '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefonos', '$this->sitio_web', '$this->correo_oficial', '$this->fondo', '$this->logo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo) VALUES (" . $NM_seq_auto . "'$this->colegio_nombre', $this->activo, '$this->pais', '$this->region', '$this->departamento', '$this->ciudad', '$this->municipio', '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefonos', '$this->sitio_web', '$this->correo_oficial', '$this->fondo', '$this->logo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo) VALUES (" . $NM_seq_auto . "'$this->colegio_nombre', $this->activo, '$this->pais', '$this->region', '$this->departamento', '$this->ciudad', '$this->municipio', '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefonos', '$this->sitio_web', '$this->correo_oficial', '$this->fondo', '$this->logo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo) VALUES (" . $NM_seq_auto . "'$this->colegio_nombre', $this->activo, '$this->pais', '$this->region', '$this->departamento', '$this->ciudad', '$this->municipio', '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefonos', '$this->sitio_web', '$this->correo_oficial', '$this->fondo', '$this->logo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo) VALUES (" . $NM_seq_auto . "'$this->colegio_nombre', $this->activo, '$this->pais', '$this->region', '$this->departamento', '$this->ciudad', '$this->municipio', '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefonos', '$this->sitio_web', '$this->correo_oficial', '$this->fondo', '$this->logo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo) VALUES (" . $NM_seq_auto . "'$this->colegio_nombre', $this->activo, '$this->pais', '$this->region', '$this->departamento', '$this->ciudad', '$this->municipio', '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefonos', '$this->sitio_web', '$this->correo_oficial', '$this->fondo', '$this->logo')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo) VALUES (" . $NM_seq_auto . "'$this->colegio_nombre', $this->activo, '$this->pais', '$this->region', '$this->departamento', '$this->ciudad', '$this->municipio', '$this->direccion_linea1', '$this->direccion_linea2', '$this->telefonos', '$this->sitio_web', '$this->correo_oficial', '$this->fondo', '$this->logo')"; 
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
                              form_colegio_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_colegio_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->colegio_id =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->colegio_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->colegio_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select .currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->colegio_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $str_tabela = "SYSIBM.SYSDUMMY1"; 
                  if($this->Ini->nm_con_use_schema == "N") 
                  { 
                          $str_tabela = "SYSDUMMY1"; 
                  } 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT IDENTITY_VAL_LOCAL() FROM " . $str_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->colegio_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->colegio_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->colegio_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->colegio_id = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']);
              }

              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $arq_logo = fopen($this->SC_IMG_logo, "r") ; 
              $reg_logo = fread($arq_logo, filesize($this->SC_IMG_logo)) ; 
              fclose($arq_logo) ;  
              $arq_logo = fopen($dir_img . trim($this->logo_scfile_name), "w") ; 
              fwrite($arq_logo, $reg_logo) ;  
              fclose($arq_logo) ;  
              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "" . "/"; 
              $arq_fondo = fopen($this->SC_IMG_fondo, "r") ; 
              $reg_fondo = fread($arq_fondo, filesize($this->SC_IMG_fondo)) ; 
              fclose($arq_fondo) ;  
              $arq_fondo = fopen($dir_img . trim($this->fondo_scfile_name), "w") ; 
              fwrite($arq_fondo, $reg_fondo) ;  
              fclose($arq_fondo) ;  
              $this->sc_evento = "insert"; 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sc_redir_insert'] != "S"))
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

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "colegio_id = " . $this->colegio_id . "";
              $this->form_especialidades->ini_controle();
              if ($this->form_especialidades->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "colegio_id = " . $this->colegio_id . "";
              $this->form_estatus_periodos->ini_controle();
              if ($this->form_estatus_periodos->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "colegio_id = " . $this->colegio_id . "";
              $this->form_tipo_periodo->ini_controle();
              if ($this->form_tipo_periodo->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "colegio_id = " . $this->colegio_id . "";
              $this->form_estatus_estudiantes->ini_controle();
              if ($this->form_estatus_estudiantes->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "colegio_id = " . $this->colegio_id . "";
              $this->form_tipo_grados->ini_controle();
              if ($this->form_tipo_grados->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "colegio_id = " . $this->colegio_id . "";
              $this->form_turnos->ini_controle();
              if ($this->form_turnos->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }
          if ($bDelecaoOk)
          {
              $sDetailWhere = "colegio_id = " . $this->colegio_id . "";
              $this->form_estatus_docentes->ini_controle();
              if ($this->form_estatus_docentes->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where colegio_id = $this->colegio_id "); 
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
                          form_colegio_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['parms'] = "colegio_id?#?$this->colegio_id?@?"; 
      }
      $this->nmgp_dados_form['fondo'] = ""; 
      $this->fondo_limpa = ""; 
      $this->fondo_salva = ""; 
      $this->nmgp_dados_form['logo'] = ""; 
      $this->logo_limpa = ""; 
      $this->logo_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->colegio_id = substr($this->Db->qstr($this->colegio_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "R")
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->colegio_id)) 
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
      if ($this->nmgp_opcao != "nada" && (trim($this->colegio_id) == "")) 
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" && $this->sc_evento == "insert")
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
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']))
      { 
          $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_colegio = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] = $qt_geral_reg_form_colegio;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->colegio_id))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "colegio_id < $this->colegio_id "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "colegio_id < $this->colegio_id "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "colegio_id < $this->colegio_id "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "colegio_id < $this->colegio_id "; 
              }
              else  
              {
                  $Key_Where = "colegio_id < $this->colegio_id "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_colegio = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] > $qt_geral_reg_form_colegio)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] = $qt_geral_reg_form_colegio; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] = $qt_geral_reg_form_colegio; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] = 0;
      }
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT colegio_id, colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT colegio_id, colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT colegio_id, colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT colegio_id, colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT colegio_id, colegio_nombre, activo, pais, region, departamento, ciudad, municipio, direccion_linea1, direccion_linea2, telefonos, sitio_web, correo_oficial, fondo, logo from " . $this->Ini->nm_tabela ; 
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
                     $aWhere[] = "colegio_id = $this->colegio_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id"; 
                  }  
                  else  
                  {
                     $aWhere[] = "colegio_id = $this->colegio_id"; 
                  }
              } 
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "colegio_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start']) ;  
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
              $this->NM_ajax_info['navSummary']['reg_ini'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter'] = true;
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
              $this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes['update'] = "off";
              $this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes['delete'] = "off";
              return; 
          } 
          else 
          { 
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 1; 
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->colegio_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['colegio_id'] = $this->colegio_id;
              $this->colegio_nombre = $rs->fields[1] ; 
              $this->nmgp_dados_select['colegio_nombre'] = $this->colegio_nombre;
              $this->activo = $rs->fields[2] ; 
              $this->nmgp_dados_select['activo'] = $this->activo;
              $this->pais = $rs->fields[3] ; 
              $this->nmgp_dados_select['pais'] = $this->pais;
              $this->region = $rs->fields[4] ; 
              $this->nmgp_dados_select['region'] = $this->region;
              $this->departamento = $rs->fields[5] ; 
              $this->nmgp_dados_select['departamento'] = $this->departamento;
              $this->ciudad = $rs->fields[6] ; 
              $this->nmgp_dados_select['ciudad'] = $this->ciudad;
              $this->municipio = $rs->fields[7] ; 
              $this->nmgp_dados_select['municipio'] = $this->municipio;
              $this->direccion_linea1 = $rs->fields[8] ; 
              $this->nmgp_dados_select['direccion_linea1'] = $this->direccion_linea1;
              $this->direccion_linea2 = $rs->fields[9] ; 
              $this->nmgp_dados_select['direccion_linea2'] = $this->direccion_linea2;
              $this->telefonos = $rs->fields[10] ; 
              $this->nmgp_dados_select['telefonos'] = $this->telefonos;
              $this->sitio_web = $rs->fields[11] ; 
              $this->nmgp_dados_select['sitio_web'] = $this->sitio_web;
              $this->correo_oficial = $rs->fields[12] ; 
              $this->nmgp_dados_select['correo_oficial'] = $this->correo_oficial;
              $this->fondo = $rs->fields[13] ; 
              $this->nmgp_dados_select['fondo'] = $this->fondo;
              $this->logo = $rs->fields[14] ; 
              $this->nmgp_dados_select['logo'] = $this->logo;
              $this->especialidades = $rs->fields[15] ; 
              $this->nmgp_dados_select['especialidades'] = $this->especialidades;
              $this->estatus_periodo = $rs->fields[16] ; 
              $this->nmgp_dados_select['estatus_periodo'] = $this->estatus_periodo;
              $this->tipos_periodo = $rs->fields[17] ; 
              $this->nmgp_dados_select['tipos_periodo'] = $this->tipos_periodo;
              $this->estatus_estudiantes = $rs->fields[18] ; 
              $this->nmgp_dados_select['estatus_estudiantes'] = $this->estatus_estudiantes;
              $this->tipos_grados = $rs->fields[19] ; 
              $this->nmgp_dados_select['tipos_grados'] = $this->tipos_grados;
              $this->turnos = $rs->fields[20] ; 
              $this->nmgp_dados_select['turnos'] = $this->turnos;
              $this->estatus_docentes = $rs->fields[21] ; 
              $this->nmgp_dados_select['estatus_docentes'] = $this->estatus_docentes;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->colegio_id = (string)$this->colegio_id; 
              $this->activo = (string)$this->activo; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['parms'] = "colegio_id?#?$this->colegio_id?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sub_dir'][0]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['sub_dir'][1]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['reg_start'] < $qt_geral_reg_form_colegio;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opcao']   = '';
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
              $this->colegio_nombre = "";  
              $this->nmgp_dados_form["colegio_nombre"] = $this->colegio_nombre;
              $this->activo = "";  
              $this->nmgp_dados_form["activo"] = $this->activo;
              $this->pais = "";  
              $this->nmgp_dados_form["pais"] = $this->pais;
              $this->region = "";  
              $this->nmgp_dados_form["region"] = $this->region;
              $this->departamento = "";  
              $this->nmgp_dados_form["departamento"] = $this->departamento;
              $this->ciudad = "";  
              $this->nmgp_dados_form["ciudad"] = $this->ciudad;
              $this->municipio = "";  
              $this->nmgp_dados_form["municipio"] = $this->municipio;
              $this->direccion_linea1 = "";  
              $this->nmgp_dados_form["direccion_linea1"] = $this->direccion_linea1;
              $this->direccion_linea2 = "";  
              $this->nmgp_dados_form["direccion_linea2"] = $this->direccion_linea2;
              $this->telefonos = "";  
              $this->nmgp_dados_form["telefonos"] = $this->telefonos;
              $this->sitio_web = "";  
              $this->nmgp_dados_form["sitio_web"] = $this->sitio_web;
              $this->correo_oficial = "";  
              $this->nmgp_dados_form["correo_oficial"] = $this->correo_oficial;
              $this->fondo = "";  
              $this->fondo_ul_name = "" ;  
              $this->fondo_ul_type = "" ;  
              $this->nmgp_dados_form["fondo"] = $this->fondo;
              $this->logo = "";  
              $this->logo_ul_name = "" ;  
              $this->logo_ul_type = "" ;  
              $this->nmgp_dados_form["logo"] = $this->logo;
              $this->especialidades = "";  
              $this->nmgp_dados_form["especialidades"] = $this->especialidades;
              $this->estatus_periodo = "";  
              $this->nmgp_dados_form["estatus_periodo"] = $this->estatus_periodo;
              $this->tipos_periodo = "";  
              $this->nmgp_dados_form["tipos_periodo"] = $this->tipos_periodo;
              $this->estatus_estudiantes = "";  
              $this->nmgp_dados_form["estatus_estudiantes"] = $this->estatus_estudiantes;
              $this->tipos_grados = "";  
              $this->nmgp_dados_form["tipos_grados"] = $this->tipos_grados;
              $this->turnos = "";  
              $this->nmgp_dados_form["turnos"] = $this->turnos;
              $this->estatus_docentes = "";  
              $this->nmgp_dados_form["estatus_docentes"] = $this->estatus_docentes;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_especialidades_script_case_init'] ]['form_especialidades']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_periodos_script_case_init'] ]['form_estatus_periodos']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_periodo_script_case_init'] ]['form_tipo_periodo']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_estudiantes_script_case_init'] ]['form_estatus_estudiantes']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_tipo_grados_script_case_init'] ]['form_tipo_grados']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_turnos_script_case_init'] ]['form_turnos']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['form_estatus_docentes_script_case_init'] ]['form_estatus_docentes']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
  }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_colegio_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['retorno_edit'] . "';";
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
       $out_logo = "";  
   } 
   else 
   { 
       $out_logo = $this->logo;  
   } 
   if ($this->logo != "" && $this->logo != "none")   
   { 
       $path_logo = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->logo;
       $md5_logo  = md5("" . $this->logo);
       if (is_file($path_logo))  
       { 
           $NM_ler_img = true;
           $out_logo = $this->Ini->path_imag_temp . "/sc_logo_" . $md5_logo . ".gif" ;  
           if (is_file($this->Ini->root . $out_logo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_logo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_logo = fopen($path_logo, "r") ; 
               $reg_logo = fread($tmp_logo, filesize($path_logo)) ; 
               fclose($tmp_logo) ;  
               $arq_logo = fopen($this->Ini->root . $out_logo, "w") ;  
               fwrite($arq_logo, $reg_logo) ;  
               fclose($arq_logo) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_logo);
           $this->nmgp_return_img['logo'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['logo'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $out1_logo = $out_logo; 
           $md5_logo  = md5("" . $this->logo);
           $out_logo = $this->Ini->path_imag_temp . "/sc_logo_190350" . $md5_logo . ".gif" ;  
           if (is_file($this->Ini->root . $out_logo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_logo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_logo);
                   $sc_obj_img->setWidth(190);
                   $sc_obj_img->setHeight(350);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_logo);
               } 
               else 
               { 
                   $out_logo = $out1_logo;
               } 
           } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_logo;
       if (isset($temp_out_logo))
       {
           $out_logo = $temp_out_logo;
       }
       global $temp_out1_logo;
       if (isset($temp_out1_logo))
       {
           $out1_logo = $temp_out1_logo;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_fondo = "";  
   } 
   else 
   { 
       $out_fondo = $this->fondo;  
   } 
   if ($this->fondo != "" && $this->fondo != "none")   
   { 
       $path_fondo = $this->Ini->root . $this->Ini->path_imagens . "" . "/" . $this->fondo;
       $md5_fondo  = md5("" . $this->fondo);
       if (is_file($path_fondo))  
       { 
           $NM_ler_img = true;
           $out_fondo = $this->Ini->path_imag_temp . "/sc_fondo_" . $md5_fondo . ".gif" ;  
           if (is_file($this->Ini->root . $out_fondo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fondo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_fondo = fopen($path_fondo, "r") ; 
               $reg_fondo = fread($tmp_fondo, filesize($path_fondo)) ; 
               fclose($tmp_fondo) ;  
               $arq_fondo = fopen($this->Ini->root . $out_fondo, "w") ;  
               fwrite($arq_fondo, $reg_fondo) ;  
               fclose($arq_fondo) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_fondo);
           $this->nmgp_return_img['fondo'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['fondo'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $out1_fondo = $out_fondo; 
           $md5_fondo  = md5("" . $this->fondo);
           $out_fondo = $this->Ini->path_imag_temp . "/sc_fondo_800600" . $md5_fondo . ".gif" ;  
           if (is_file($this->Ini->root . $out_fondo))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_fondo) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_fondo);
                   $sc_obj_img->setWidth(800);
                   $sc_obj_img->setHeight(600);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_fondo);
               } 
               else 
               { 
                   $out_fondo = $out1_fondo;
               } 
           } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_fondo;
       if (isset($temp_out_fondo))
       {
           $out_fondo = $temp_out_fondo;
       }
       global $temp_out1_fondo;
       if (isset($temp_out1_fondo))
       {
           $out1_fondo = $temp_out1_fondo;
       }
   }
        $this->initFormPages();
    include_once("form_colegio_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['csrf_token'];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_colegio_pack_ajax_response();
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
          $this->SC_monta_condicao($comando, "colegio_id", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "colegio_nombre", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $data_lookup = $this->SC_lookup_activo($arg_search, $data_search);
          if (is_array($data_lookup) && !empty($data_lookup)) 
          {
              $this->SC_monta_condicao($comando, "activo", $arg_search, $data_lookup);
          }
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "pais", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "region", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "departamento", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "ciudad", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "municipio", $arg_search, $data_search);
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
          $this->SC_monta_condicao($comando, "telefonos", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "sitio_web", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "correo_oficial", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "fondo", $arg_search, $data_search);
      }
      if ($field == "SC_all_Cmp") 
      {
          $this->SC_monta_condicao($comando, "logo", $arg_search, $data_search);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter_form'] . " and (colegio_id = " . $_SESSION['vglo_colegio'] . ") and (" . $comando . ")";
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
      $qt_geral_reg_form_colegio = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['total'] = $qt_geral_reg_form_colegio;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_colegio_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_colegio_pack_ajax_response();
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
      $nm_numeric[] = "colegio_id";$nm_numeric[] = "activo";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['decimal_db'] == ".")
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
   function SC_lookup_activo($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['1'] = " ";
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
       $nmgp_saida_form = "form_colegio_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_colegio_fim.php";
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
       form_colegio_pack_ajax_response();
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_colegio']['masterValue']))
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
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
}
?>
