<?php

 $hook_version = 1; 
 $hook_array = Array(); 

 SugarApplication::appendErrorMessage('Mensaje');
 $hook_array['before_relationship_add'] = Array(); 
 $hook_array['before_relationship_add'][] = array(1, 'AsignaGrupoSeguridad', 'custom/modules/qtk_seguridad_registros.php', 'cSeguridad', 'AsignaGrupoSeguridadNegocioVinco');

 $hook_array['before_relationship_delete'] = Array(); 
 $hook_array['before_relationship_delete'][] = array(2, 'RemueveGrupoSeguridad', 'custom/modules/qtk_seguridad_registros.php', 'cSeguridad', 'RemueveGrupoSeguridadNegocioVinco');

 ?>