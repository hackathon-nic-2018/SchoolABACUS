<?php
class grid_padres_estudiantes_lookup
{
//  
   function lookup_padre_id(&$conteudo , $padre_id, $vglo_colegio) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $padre_id . $vglo_colegio; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($padre_id) === "" || trim($padre_id) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select concat (nombres,' ', apellidos) from padres where padre_id = $padre_id and colegio_id = " . $_SESSION['vglo_colegio'] . " order by nombres" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = trim($rx->fields[0]); 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_tutor(&$tutor) 
   {
      $conteudo = "" ; 
      if ($tutor == "1")
      { 
          $conteudo = "Sí";
      } 
      if ($tutor == "0")
      { 
          $conteudo = "No";
      } 
      if (!empty($conteudo)) 
      { 
          $tutor = $conteudo; 
      } 
   }  
//  
   function lookup_patrocinador(&$patrocinador) 
   {
      $conteudo = "" ; 
      if ($patrocinador == "1")
      { 
          $conteudo = "Sí";
      } 
      if ($patrocinador == "0")
      { 
          $conteudo = "No";
      } 
      if (!empty($conteudo)) 
      { 
          $patrocinador = $conteudo; 
      } 
   }  
}
?>
