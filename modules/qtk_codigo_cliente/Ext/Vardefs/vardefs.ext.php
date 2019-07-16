<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-19 04:02:05
$dictionary["qtk_codigo_cliente"]["fields"]["contacts_qtk_codigo_cliente_1"] = array (
  'name' => 'contacts_qtk_codigo_cliente_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_codigo_cliente_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_CODIGO_CLIENTE_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_codigo_cliente_1contacts_ida',
);
$dictionary["qtk_codigo_cliente"]["fields"]["contacts_qtk_codigo_cliente_1_name"] = array (
  'name' => 'contacts_qtk_codigo_cliente_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_CODIGO_CLIENTE_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_codigo_cliente_1contacts_ida',
  'link' => 'contacts_qtk_codigo_cliente_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_codigo_cliente"]["fields"]["contacts_qtk_codigo_cliente_1contacts_ida"] = array (
  'name' => 'contacts_qtk_codigo_cliente_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_codigo_cliente_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_CODIGO_CLIENTE_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
);


// created: 2019-06-22 06:01:18
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_codigo_cliente_qtk_redencion_1"] = array (
  'name' => 'qtk_codigo_cliente_qtk_redencion_1',
  'type' => 'link',
  'relationship' => 'qtk_codigo_cliente_qtk_redencion_1',
  'source' => 'non-db',
  'module' => 'qtk_redencion',
  'bean_name' => 'qtk_redencion',
  'side' => 'right',
  'vname' => 'LBL_QTK_CODIGO_CLIENTE_QTK_REDENCION_1_FROM_QTK_REDENCION_TITLE',
);


// created: 2019-06-19 04:19:32
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_local_qtk_codigo_cliente_2"] = array (
  'name' => 'qtk_local_qtk_codigo_cliente_2',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_codigo_cliente_2',
  'source' => 'non-db',
  'module' => 'qtk_local',
  'bean_name' => 'qtk_local',
  'vname' => 'LBL_QTK_LOCAL_QTK_CODIGO_CLIENTE_2_FROM_QTK_LOCAL_TITLE',
  'id_name' => 'qtk_local_qtk_codigo_cliente_2qtk_local_ida',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_local_qtk_codigo_cliente_2_name"] = array (
  'name' => 'qtk_local_qtk_codigo_cliente_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_LOCAL_QTK_CODIGO_CLIENTE_2_FROM_QTK_LOCAL_TITLE',
  'save' => true,
  'id_name' => 'qtk_local_qtk_codigo_cliente_2qtk_local_ida',
  'link' => 'qtk_local_qtk_codigo_cliente_2',
  'table' => 'qtk_local',
  'module' => 'qtk_local',
  'rname' => 'name',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_local_qtk_codigo_cliente_2qtk_local_ida"] = array (
  'name' => 'qtk_local_qtk_codigo_cliente_2qtk_local_ida',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_codigo_cliente_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_LOCAL_QTK_CODIGO_CLIENTE_2_FROM_QTK_CODIGO_CLIENTE_TITLE',
);


// created: 2019-06-19 04:11:05
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_negocio_qtk_codigo_cliente_2"] = array (
  'name' => 'qtk_negocio_qtk_codigo_cliente_2',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_codigo_cliente_2',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CODIGO_CLIENTE_2_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_codigo_cliente_2qtk_negocio_ida',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_negocio_qtk_codigo_cliente_2_name"] = array (
  'name' => 'qtk_negocio_qtk_codigo_cliente_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CODIGO_CLIENTE_2_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_codigo_cliente_2qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_codigo_cliente_2',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_negocio_qtk_codigo_cliente_2qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_codigo_cliente_2qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_codigo_cliente_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CODIGO_CLIENTE_2_FROM_QTK_CODIGO_CLIENTE_TITLE',
);


// created: 2019-06-22 06:00:46
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_codigo_cliente_qtk_acumulacion_1"] = array (
  'name' => 'qtk_codigo_cliente_qtk_acumulacion_1',
  'type' => 'link',
  'relationship' => 'qtk_codigo_cliente_qtk_acumulacion_1',
  'source' => 'non-db',
  'module' => 'qtk_acumulacion',
  'bean_name' => 'qtk_acumulacion',
  'side' => 'right',
  'vname' => 'LBL_QTK_CODIGO_CLIENTE_QTK_ACUMULACION_1_FROM_QTK_ACUMULACION_TITLE',
);


// created: 2019-06-19 04:13:48
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_local_qtk_codigo_cliente_1"] = array (
  'name' => 'qtk_local_qtk_codigo_cliente_1',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_codigo_cliente_1',
  'source' => 'non-db',
  'module' => 'qtk_local',
  'bean_name' => 'qtk_local',
  'vname' => 'LBL_QTK_LOCAL_QTK_CODIGO_CLIENTE_1_FROM_QTK_LOCAL_TITLE',
  'id_name' => 'qtk_local_qtk_codigo_cliente_1qtk_local_ida',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_local_qtk_codigo_cliente_1_name"] = array (
  'name' => 'qtk_local_qtk_codigo_cliente_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_LOCAL_QTK_CODIGO_CLIENTE_1_FROM_QTK_LOCAL_TITLE',
  'save' => true,
  'id_name' => 'qtk_local_qtk_codigo_cliente_1qtk_local_ida',
  'link' => 'qtk_local_qtk_codigo_cliente_1',
  'table' => 'qtk_local',
  'module' => 'qtk_local',
  'rname' => 'name',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_local_qtk_codigo_cliente_1qtk_local_ida"] = array (
  'name' => 'qtk_local_qtk_codigo_cliente_1qtk_local_ida',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_codigo_cliente_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_LOCAL_QTK_CODIGO_CLIENTE_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
);


// created: 2019-06-22 06:01:52
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_codigo_cliente_qtk_afiliacion_1"] = array (
  'name' => 'qtk_codigo_cliente_qtk_afiliacion_1',
  'type' => 'link',
  'relationship' => 'qtk_codigo_cliente_qtk_afiliacion_1',
  'source' => 'non-db',
  'module' => 'qtk_afiliacion',
  'bean_name' => 'qtk_afiliacion',
  'side' => 'right',
  'vname' => 'LBL_QTK_CODIGO_CLIENTE_QTK_AFILIACION_1_FROM_QTK_AFILIACION_TITLE',
);


// created: 2019-06-19 04:08:45
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_negocio_qtk_codigo_cliente_1"] = array (
  'name' => 'qtk_negocio_qtk_codigo_cliente_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_codigo_cliente_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CODIGO_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_codigo_cliente_1qtk_negocio_ida',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_negocio_qtk_codigo_cliente_1_name"] = array (
  'name' => 'qtk_negocio_qtk_codigo_cliente_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CODIGO_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_codigo_cliente_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_codigo_cliente_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_codigo_cliente"]["fields"]["qtk_negocio_qtk_codigo_cliente_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_codigo_cliente_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_codigo_cliente_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CODIGO_CLIENTE_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
);


 // created: 2019-06-19 03:53:47
$dictionary['qtk_codigo_cliente']['fields']['id_codigo_cliente_c']['inline_edit']='';
$dictionary['qtk_codigo_cliente']['fields']['id_codigo_cliente_c']['labelValue']='Id código cliente VINCO:';

 

 // created: 2019-06-19 03:59:20
$dictionary['qtk_codigo_cliente']['fields']['cliente_anterior_c']['inline_edit']='';
$dictionary['qtk_codigo_cliente']['fields']['cliente_anterior_c']['labelValue']='Cliente anterior:';

 

 // created: 2019-06-20 15:05:11
$dictionary['qtk_codigo_cliente']['fields']['codigo_c']['inline_edit']='1';
$dictionary['qtk_codigo_cliente']['fields']['codigo_c']['labelValue']='Código:';

 

 // created: 2019-06-19 03:57:17
$dictionary['qtk_codigo_cliente']['fields']['fecha_entrega_c']['inline_edit']='1';
$dictionary['qtk_codigo_cliente']['fields']['fecha_entrega_c']['labelValue']='Fecha de entrega:';

 

 // created: 2019-06-19 03:58:06
$dictionary['qtk_codigo_cliente']['fields']['fecha_nuevo_cliente_c']['inline_edit']='1';
$dictionary['qtk_codigo_cliente']['fields']['fecha_nuevo_cliente_c']['labelValue']='Fecha de nuevo cliente:';

 

 // created: 2019-06-19 03:59:20
$dictionary['qtk_codigo_cliente']['fields']['contact_id_c']['inline_edit']=1;

 

 // created: 2019-06-19 04:00:18
$dictionary['qtk_codigo_cliente']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_codigo_cliente']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-06-19 03:55:16
$dictionary['qtk_codigo_cliente']['fields']['fecha_creacion_c']['inline_edit']='1';
$dictionary['qtk_codigo_cliente']['fields']['fecha_creacion_c']['labelValue']='Fecha de creación:';

 

 // created: 2019-06-19 03:56:26
$dictionary['qtk_codigo_cliente']['fields']['fecha_activacion_c']['inline_edit']='1';
$dictionary['qtk_codigo_cliente']['fields']['fecha_activacion_c']['labelValue']='Fecha de activación:';

 
?>