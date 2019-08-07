<?php

class cSeguridad
{
    // Permite asignarle el grupo de seguridad a un registro de negocio que se crea manualmente
    // Al quedar asignado el grupo de seguridad, todos los regisros hijos de negocio de aquí en 
    // adelante van a tomar dicho grupo de seguridad para que el registro pueda ser visualizado
    // por el o los usurios que tengan asociado dicho Grupo de seguridad.
    function AsignaGrupoSeguridadNegocioVinco($bean, $event, $arguments)
    {
        global $log;       
        try{  
            $beanNegocio = $arguments['related_bean'];
            if ($beanNegocio->module_dir == 'SecurityGroups'){
                if (!empty($arguments['related_id'])){    
                    $id =  $arguments['related_id'];                      
                    $grupo = BeanFactory::getBean('SecurityGroups', $id);                          
                    if ($bean->load_relationship('SecurityGroups')){
                        $log->debug('QUANTIK: Antes de asignar grupo de seguridad en módulo Negocio');
                        $bean->SecurityGroups->add($grupo);   
                        $log->debug('QUANTIK: Grupo de seguridad es asignado correctamente en el módulo Negocio');                
                    } 
                } 
            }              
        }    
        catch(Throwable $e){
            $log->debug("QUANTIK: AsignaGrupoSeguridadNegocioVinco, Error: " .$e->getMessage(). ' - ' .$e->getLangMessage());
        }
    }

    // Permite quitar el grupo de seguridad a un registro de negocio que se elimina manualmente.
    function RemueveGrupoSeguridadNegocioVinco($bean, $event, $arguments)
    {
        global $log;       
        try{  
            $beanNegocio = $arguments['related_bean'];
            if ($beanNegocio->module_dir == 'SecurityGroups'){            
                if (!empty($arguments['related_id'])){    
                    $id =  $arguments['related_id'];                      
                    $grupo = BeanFactory::getBean('SecurityGroups', $id);                              
                    if ($bean->load_relationship('SecurityGroups')){
                        $log->debug('QUANTIK: Antes de quitar grupo de seguridad en módulo Negocio');
                        $bean->SecurityGroups->delete($grupo);  
                        $log->debug('QUANTIK: Grupo de seguridad es eliminado correctamente en el módulo Negocio');                                  
                    }
                }  
            }              
        }    
        catch(Throwable $e){
            $log->debug("QUANTIK: RemueveGrupoSeguridadNegocioVinco, Error: " .$e->getMessage(). ' - ' .$e->getLangMessage());
        }
    }

    // Permite asignar grupo de seguridad al registro de donde se invoque el logic_hook, en base a el
    // negocio relacionado.
    function AsignaGrupoSeguridadRegistroVinco($bean, $event, $arguments)
    {
        global $log;      
        try{  
            $beanNegocio = $arguments['related_bean']; 
            if ($beanNegocio->module_dir == 'qtk_negocio')   { //Evaluamos con el modulo padre principal de donde se va a heredar el o los Grupos de seguridad
                if ($bean->object_name == 'qtk_codigo_cliente'){ // Si es el módulo Vincard, evaluamos la relación de Negocio activación?
                    if ($arguments['link'] == 'qtk_negocio_qtk_codigo_cliente_1'){
                        $beanListGruposSeguridad = $beanNegocio->get_linked_beans('qtk_negocio_securitygroups_1',
                        'SecurityGroup',
                        array(), 0, 5, 0);
                    }
                } else {
                    $beanListGruposSeguridad = $beanNegocio->get_linked_beans('qtk_negocio_securitygroups_1',
                    'SecurityGroup',
                    array(), 0, 5, 0);
                }
                foreach($beanListGruposSeguridad as $beanGrupoSeguridad) {
                    if ($bean->load_relationship('SecurityGroups')){
                        $log->debug('QUANTIK: Antes de asignar grupo de seguridad en módulo ' .$bean->object_name);
                        $bean->SecurityGroups->add($beanGrupoSeguridad); 
                        $log->debug('QUANTIK: Grupo de seguridad es asignado correctamente en el módulo ' .$bean->object_name);                  
                    }                     
                } 
            }                                   
        }    
        catch(Throwable $e){            
            $log->debug("QUANTIK: AsignaGrupoSeguridadRegistroVinco, Error: " .$e->getMessage(). ' - ' .$e->getLangMessage());
        }
    }

    // Permite asignar grupo(s) de seguridad al registro de Cliente Negocio y Cliente, en base a el
    // registro del negocio relacionado.
    function AsignaGrupoSeguridadRegistroCliente($bean, $event, $arguments){
        global $log;       
        try{  
            //Evaluamos Cliente - Negocio para asociar el Grupo de seguridad al Cliente
            if ($bean->object_name == 'qtk_cliente_negocio'){
                if ($arguments['related_bean']->module_dir == 'qtk_negocio'){
                    if (!empty($arguments['related_id'])){    
                        $id =  $arguments['related_id'];                      
                        $beanNegocio = BeanFactory::getBean('qtk_negocio', $id);  
                        $beanListGruposSeguridad = $beanNegocio->get_linked_beans('qtk_negocio_securitygroups_1',
                        'SecurityGroup',
                        array(), 0, 5, 0);  
                        foreach($beanListGruposSeguridad as $beanGrupoSeguridad) {
                            if ($bean->load_relationship('SecurityGroups')){                                
                                $bean->SecurityGroups->add($beanGrupoSeguridad);                   
                            }   
                            $beanListaClientes = $bean->get_linked_beans('contacts_qtk_cliente_negocio_1','qtk_negocio',array(), 0, 1, 0);   
                            foreach($beanListaClientes as $beanCliente) {
                                if ($beanCliente->load_relationship('SecurityGroups')){
                                    $log->debug('QUANTIK: Antes de asignar grupo de seguridad en módulo Contacts');
                                    $beanCliente->SecurityGroups->add($beanGrupoSeguridad);  
                                    $log->debug('QUANTIK: Grupo de seguridad es asignado correctamente en el módulo Contacts');                 
                                }                     
                            }                  
                        }    
                    }  
                }
            }            
        }    
        catch(Throwable $e){
            $log->debug("QUANTIK: AsignaGrupoSeguridadCliente, Error: " .$e->getMessage(). ' - ' .$e->getLangMessage());
        }
    }

    // Permite remover grupo(s) de seguridad al registro de Cliente Negocio y Cliente, en base a el
    // registro del negocio relacionado.
    function RemueveGrupoSeguridadRegistroVinco($bean, $event, $arguments)
    {
        global $log;       
        try{  
            $beanNegocio = $arguments['related_bean'];
            if ($beanNegocio->module_dir == 'qtk_negocio'){              
                if (!empty($arguments['related_id'])){    
                    $id =  $arguments['related_id'];                      
                    $beanNegocio = BeanFactory::getBean('qtk_negocio', $id);  
                    $beanListGruposSeguridad = $beanNegocio->get_linked_beans('qtk_negocio_securitygroups_1',
                    'SecurityGroup',
                    array(), 0, 5, 0);  
                    foreach($beanListGruposSeguridad as $beanGrupoSeguridad) {
                        if ($bean->load_relationship('SecurityGroups')){
                            $log->debug('QUANTIK: Antes de quitar grupo de seguridad en módulo ' .$bean->object_name);
                            $bean->SecurityGroups->delete($beanGrupoSeguridad); 
                            $log->debug('QUANTIK: Grupo de seguridad es eliminado correctamente en el módulo '.$bean->object_name);                                                    
                        }   
                        $beanListaClientes = $bean->get_linked_beans('contacts_qtk_cliente_negocio_1','qtk_negocio',array(), 0, 1, 0);   
                        foreach($beanListaClientes as $beanCliente) {
                            if ($beanCliente->load_relationship('SecurityGroups')){
                                $beanCliente->SecurityGroups->delete($beanGrupoSeguridad);                   
                            }                     
                        }                  
                    }    
                }  
            }             
        }    
        catch(Throwable $e){
            $log->debug("QUANTIK: RemueveGrupoSeguridadRegistroVinco, Error: " .$e->getMessage(). ' - ' .$e->getLangMessage());
        }
    }

    // Permite asignar grupo(s) de seguridad al registro de Partida, en base a el
    // registro del negocio relacionado.
    function AsignaGrupoSeguridadRegistroSinRelacion($bean, $event, $arguments)
    {
        global $log;       
        try{  
            if ($bean->object_name == 'qtk_partida'){                
                $beanNegocio = BeanFactory::getBean('qtk_negocio', $bean->qtk_negocio_id_c);    
                $beanListGruposSeguridad = $beanNegocio->get_linked_beans('qtk_negocio_securitygroups_1',
                'SecurityGroup',
                array(), 0, 5, 0); 
                foreach($beanListGruposSeguridad as $beanGrupoSeguridad) {
                    if ($bean->load_relationship('SecurityGroups')){
                        $log->debug('QUANTIK: Antes de asignar grupo de seguridad en módulo ' .$bean->object_name);
                        $bean->SecurityGroups->add($beanGrupoSeguridad); 
                        $log->debug('QUANTIK: Grupo de seguridad es asignado correctamente en el módulo ' .$bean->object_name);                  
                    }                     
                }                                                                                 
            }            
        }    
        catch(Throwable $e){
            $log->debug("QUANTIK: AsignaGrupoSeguridadRegistroSinRelacion, Error: " .$e->getMessage(). ' - ' .$e->getLangMessage());
        }

    }
}
?>