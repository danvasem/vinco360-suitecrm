<?php

 $hook_version = 1; 
 $hook_array = Array(); 

 //$hook_array['before_relationship_add'] = Array(); 
 //$hook_array['before_relationship_add'][] = array(1, 'AsignaGrupoSeguridad', 'custom/modules/qtk_seguridad_registros.php', 'cSeguridad', 'AsignaGrupoSeguridadRegistroVinco');

 $hook_array['after_relationship_add'] = Array(); 
 $hook_array['after_relationship_add'][] = array(2, 'AsignaGrupoSeguridadCliente', 'custom/modules/qtk_seguridad_registros.php', 'cSeguridad', 'AsignaGrupoSeguridadRegistroCliente');

 $hook_array['after_relationship_delete'] = Array(); 
 $hook_array['after_relationship_delete'][] = array(3, 'RemueveGrupoSeguridad', 'custom/modules/qtk_seguridad_registros.php', 'cSeguridad', 'RemueveGrupoSeguridadRegistroVinco');

 ?>