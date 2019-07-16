<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-22 05:48:45
$dictionary["qtk_log_notificacion_cliente"]["fields"]["qtk_negocio_qtk_log_notificacion_cliente_1"] = array (
  'name' => 'qtk_negocio_qtk_log_notificacion_cliente_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_log_notificacion_cliente_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_log_notificacion_cliente_1qtk_negocio_ida',
);
$dictionary["qtk_log_notificacion_cliente"]["fields"]["qtk_negocio_qtk_log_notificacion_cliente_1_name"] = array (
  'name' => 'qtk_negocio_qtk_log_notificacion_cliente_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_log_notificacion_cliente_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_log_notificacion_cliente_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_log_notificacion_cliente"]["fields"]["qtk_negocio_qtk_log_notificacion_cliente_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_log_notificacion_cliente_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_log_notificacion_cliente_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_LOG_NOTIFICACION_CLIENTE_TITLE',
);


// created: 2019-06-22 05:36:00
$dictionary["qtk_log_notificacion_cliente"]["fields"]["contacts_qtk_log_notificacion_cliente_1"] = array (
  'name' => 'contacts_qtk_log_notificacion_cliente_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_log_notificacion_cliente_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_log_notificacion_cliente_1contacts_ida',
);
$dictionary["qtk_log_notificacion_cliente"]["fields"]["contacts_qtk_log_notificacion_cliente_1_name"] = array (
  'name' => 'contacts_qtk_log_notificacion_cliente_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_log_notificacion_cliente_1contacts_ida',
  'link' => 'contacts_qtk_log_notificacion_cliente_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_log_notificacion_cliente"]["fields"]["contacts_qtk_log_notificacion_cliente_1contacts_ida"] = array (
  'name' => 'contacts_qtk_log_notificacion_cliente_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_log_notificacion_cliente_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_LOG_NOTIFICACION_CLIENTE_TITLE',
);


 // created: 2019-06-21 15:39:27
$dictionary['qtk_log_notificacion_cliente']['fields']['error_c']['inline_edit']='1';
$dictionary['qtk_log_notificacion_cliente']['fields']['error_c']['labelValue']='Error:';

 

 // created: 2019-06-21 15:23:56
$dictionary['qtk_log_notificacion_cliente']['fields']['fecha_notificacion_c']['inline_edit']='1';
$dictionary['qtk_log_notificacion_cliente']['fields']['fecha_notificacion_c']['labelValue']='Fecha de notificación:';

 

 // created: 2019-06-21 15:37:48
$dictionary['qtk_log_notificacion_cliente']['fields']['mensaje_c']['inline_edit']='1';
$dictionary['qtk_log_notificacion_cliente']['fields']['mensaje_c']['labelValue']='Mensaje:';

 

 // created: 2019-06-21 15:38:41
$dictionary['qtk_log_notificacion_cliente']['fields']['nombre_unico_grupo_c']['inline_edit']='1';
$dictionary['qtk_log_notificacion_cliente']['fields']['nombre_unico_grupo_c']['labelValue']='Nombre único de grupo:';

 

 // created: 2019-06-21 15:56:23
$dictionary['qtk_log_notificacion_cliente']['fields']['canal_c']['inline_edit']='1';
$dictionary['qtk_log_notificacion_cliente']['fields']['canal_c']['labelValue']='Canal:';

 

 // created: 2019-06-21 15:58:51
$dictionary['qtk_log_notificacion_cliente']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_log_notificacion_cliente']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-06-21 15:37:10
$dictionary['qtk_log_notificacion_cliente']['fields']['titulo_c']['inline_edit']='1';
$dictionary['qtk_log_notificacion_cliente']['fields']['titulo_c']['labelValue']='Título:';

 
?>