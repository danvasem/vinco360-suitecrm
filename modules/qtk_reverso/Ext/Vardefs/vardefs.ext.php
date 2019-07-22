<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-07-05 02:28:00
$dictionary["qtk_reverso"]["fields"]["qtk_local_qtk_reverso_1"] = array (
  'name' => 'qtk_local_qtk_reverso_1',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_reverso_1',
  'source' => 'non-db',
  'module' => 'qtk_local',
  'bean_name' => 'qtk_local',
  'vname' => 'LBL_QTK_LOCAL_QTK_REVERSO_1_FROM_QTK_LOCAL_TITLE',
  'id_name' => 'qtk_local_qtk_reverso_1qtk_local_ida',
);
$dictionary["qtk_reverso"]["fields"]["qtk_local_qtk_reverso_1_name"] = array (
  'name' => 'qtk_local_qtk_reverso_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_LOCAL_QTK_REVERSO_1_FROM_QTK_LOCAL_TITLE',
  'save' => true,
  'id_name' => 'qtk_local_qtk_reverso_1qtk_local_ida',
  'link' => 'qtk_local_qtk_reverso_1',
  'table' => 'qtk_local',
  'module' => 'qtk_local',
  'rname' => 'name',
);
$dictionary["qtk_reverso"]["fields"]["qtk_local_qtk_reverso_1qtk_local_ida"] = array (
  'name' => 'qtk_local_qtk_reverso_1qtk_local_ida',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_reverso_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_LOCAL_QTK_REVERSO_1_FROM_QTK_REVERSO_TITLE',
);


// created: 2019-07-05 02:25:53
$dictionary["qtk_reverso"]["fields"]["contacts_qtk_reverso_1"] = array (
  'name' => 'contacts_qtk_reverso_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_reverso_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_REVERSO_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_reverso_1contacts_ida',
);
$dictionary["qtk_reverso"]["fields"]["contacts_qtk_reverso_1_name"] = array (
  'name' => 'contacts_qtk_reverso_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_REVERSO_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_reverso_1contacts_ida',
  'link' => 'contacts_qtk_reverso_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_reverso"]["fields"]["contacts_qtk_reverso_1contacts_ida"] = array (
  'name' => 'contacts_qtk_reverso_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_reverso_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_REVERSO_1_FROM_QTK_REVERSO_TITLE',
);


// created: 2019-07-05 02:27:08
$dictionary["qtk_reverso"]["fields"]["qtk_negocio_qtk_reverso_1"] = array (
  'name' => 'qtk_negocio_qtk_reverso_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_reverso_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_REVERSO_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_reverso_1qtk_negocio_ida',
);
$dictionary["qtk_reverso"]["fields"]["qtk_negocio_qtk_reverso_1_name"] = array (
  'name' => 'qtk_negocio_qtk_reverso_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_REVERSO_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_reverso_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_reverso_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_reverso"]["fields"]["qtk_negocio_qtk_reverso_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_reverso_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_reverso_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_REVERSO_1_FROM_QTK_REVERSO_TITLE',
);


 // created: 2019-06-21 04:25:30
$dictionary['qtk_reverso']['fields']['usuario_responsable_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['usuario_responsable_c']['labelValue']='Usuario responsable:';

 

 // created: 2019-06-21 04:23:50
$dictionary['qtk_reverso']['fields']['tipo_evento_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['tipo_evento_c']['labelValue']='Tipo de evento:';

 

 // created: 2019-07-05 05:20:36
$dictionary['qtk_reverso']['fields']['reverso_premio_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['reverso_premio_c']['labelValue']='Reverso: premio';

 

 // created: 2019-07-05 02:39:43
$dictionary['qtk_reverso']['fields']['parent_name']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['parent_name']['labelValue']='Evento reversado';

 

 // created: 2019-07-05 05:20:36
$dictionary['qtk_reverso']['fields']['qtk_premio_id_c']['inline_edit']=1;

 

 // created: 2019-07-18 19:16:13
$dictionary['qtk_reverso']['fields']['fecha_reverso_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['fecha_reverso_c']['options']='date_range_search_dom';
$dictionary['qtk_reverso']['fields']['fecha_reverso_c']['labelValue']='Fecha de reverso:';
$dictionary['qtk_reverso']['fields']['fecha_reverso_c']['enable_range_search']='1';

 

 // created: 2019-07-05 05:19:55
$dictionary['qtk_reverso']['fields']['reverso_numero_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['reverso_numero_c']['labelValue']='Reverso: número de evento';

 

 // created: 2019-06-21 04:25:30
$dictionary['qtk_reverso']['fields']['user_id_c']['inline_edit']=1;

 

 // created: 2019-07-18 19:16:31
$dictionary['qtk_reverso']['fields']['reverso_valor_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['reverso_valor_c']['options']='numeric_range_search_dom';
$dictionary['qtk_reverso']['fields']['reverso_valor_c']['labelValue']='Reverso: valor de evento';
$dictionary['qtk_reverso']['fields']['reverso_valor_c']['enable_range_search']='1';

 

 // created: 2019-07-18 19:16:43
$dictionary['qtk_reverso']['fields']['reverso_fecha_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['reverso_fecha_c']['options']='date_range_search_dom';
$dictionary['qtk_reverso']['fields']['reverso_fecha_c']['labelValue']='Reverso: fecha de evento';
$dictionary['qtk_reverso']['fields']['reverso_fecha_c']['enable_range_search']='1';

 

 // created: 2019-07-05 02:39:43
$dictionary['qtk_reverso']['fields']['parent_id']['inline_edit']=1;

 

 // created: 2019-06-21 04:26:41
$dictionary['qtk_reverso']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-06-21 04:23:50
$dictionary['qtk_reverso']['fields']['qtk_tipo_evento_id_c']['inline_edit']=1;

 

 // created: 2019-07-05 05:17:55
$dictionary['qtk_reverso']['fields']['qtk_tipo_evento_id1_c']['inline_edit']=1;

 

 // created: 2019-07-05 05:17:55
$dictionary['qtk_reverso']['fields']['reverso_tipo_evento_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['reverso_tipo_evento_c']['labelValue']='Reverso: tipo de evento';

 

 // created: 2019-07-05 02:39:43
$dictionary['qtk_reverso']['fields']['parent_type']['inline_edit']=1;

 

 // created: 2019-07-04 19:04:39
$dictionary['qtk_reverso']['fields']['numero_unico_c']['inline_edit']='1';
$dictionary['qtk_reverso']['fields']['numero_unico_c']['labelValue']='Número único VINCO:';

 
?>