<?php
class grid_docentes_lookup
{
//  
   function lookup_especialidad_id(&$conteudo , $especialidad_id) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $especialidad_id; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      $verif_cmp_mult = explode(";", $conteudo);
      $conteudo = "";
      foreach ($verif_cmp_mult as $cada_ocorr)
      {
          if (!empty($conteudo))
          {
              $conteudo .= "','";
          }
          $conteudo .= $cada_ocorr;
      }
      $especialidad_id = $conteudo;
      $nm_comando = "select descripcion from especialidades where especialidad_id  IN ('$especialidad_id') order by descripcion" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $y = 0; 
          $nm_count = $rx->FieldCount();
          while (!$rx->EOF) 
          { 
                 if ($y != 0)
                 { 
                     $conteudo .= "<br>";
                 } 
                 $y++; 
                 for ($x = 0; $x < $nm_count; $x++)
                 { 
                        if ($x != 0)
                        { 
                            $conteudo .= " - ";
                        } 
                        $conteudo .= trim($rx->fields[$x]); 
                 }
                 $rx->MoveNext() ;
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
}
?>