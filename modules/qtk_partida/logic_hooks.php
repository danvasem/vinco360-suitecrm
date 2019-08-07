<?php

 $hook_version = 1; 
 $hook_array = Array(); 

 SugarApplication::appendErrorMessage('Mensaje');
 $hook_array['after_save'] = Array(); 
 $hook_array['after_save'][] = array(1, 'AsignaGrupoSeguridad', 'custom/modules/qtk_seguridad_registros.php', 'cSeguridad', 'AsignaGrupoSeguridadRegistroSinRelacion');

 ?>