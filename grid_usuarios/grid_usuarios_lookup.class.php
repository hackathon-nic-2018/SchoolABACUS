<?php
class grid_usuarios_lookup
{
//  
   function lookup_tipo_usuario(&$tipo_usuario) 
   {
      $conteudo = "" ; 
      if ($tipo_usuario == "a")
      { 
          $conteudo = "Administrativo";
      } 
      if ($tipo_usuario == "d")
      { 
          $conteudo = "Docente";
      } 
      if ($tipo_usuario == "e")
      { 
          $conteudo = "Estudiante";
      } 
      if ($tipo_usuario == "p")
      { 
          $conteudo = "Padre";
      } 
      if (!empty($conteudo)) 
      { 
          $tipo_usuario = $conteudo; 
      } 
   }  
//  
   function lookup_activo(&$activo) 
   {
      $conteudo = "" ; 
      if ($activo == "1")
      { 
          $conteudo = "Si";
      } 
      if ($activo == "0")
      { 
          $conteudo = "No";
      } 
      if (!empty($conteudo)) 
      { 
          $activo = $conteudo; 
      } 
   }  
}
?>
