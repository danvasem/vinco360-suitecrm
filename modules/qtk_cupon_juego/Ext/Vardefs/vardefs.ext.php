<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-22 05:47:03
$dictionary["qtk_cupon_juego"]["fields"]["qtk_negocio_qtk_cupon_juego_1"] = array (
  'name' => 'qtk_negocio_qtk_cupon_juego_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_cupon_juego_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CUPON_JUEGO_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_cupon_juego_1qtk_negocio_ida',
);
$dictionary["qtk_cupon_juego"]["fields"]["qtk_negocio_qtk_cupon_juego_1_name"] = array (
  'name' => 'qtk_negocio_qtk_cupon_juego_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CUPON_JUEGO_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_cupon_juego_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_cupon_juego_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_cupon_juego"]["fields"]["qtk_negocio_qtk_cupon_juego_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_cupon_juego_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_cupon_juego_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CUPON_JUEGO_1_FROM_QTK_CUPON_JUEGO_TITLE',
);


// created: 2019-06-22 05:56:55
$dictionary["qtk_cupon_juego"]["fields"]["qtk_local_qtk_cupon_juego_1"] = array (
  'name' => 'qtk_local_qtk_cupon_juego_1',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_cupon_juego_1',
  'source' => 'non-db',
  'module' => 'qtk_local',
  'bean_name' => 'qtk_local',
  'vname' => 'LBL_QTK_LOCAL_QTK_CUPON_JUEGO_1_FROM_QTK_LOCAL_TITLE',
  'id_name' => 'qtk_local_qtk_cupon_juego_1qtk_local_ida',
);
$dictionary["qtk_cupon_juego"]["fields"]["qtk_local_qtk_cupon_juego_1_name"] = array (
  'name' => 'qtk_local_qtk_cupon_juego_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_LOCAL_QTK_CUPON_JUEGO_1_FROM_QTK_LOCAL_TITLE',
  'save' => true,
  'id_name' => 'qtk_local_qtk_cupon_juego_1qtk_local_ida',
  'link' => 'qtk_local_qtk_cupon_juego_1',
  'table' => 'qtk_local',
  'module' => 'qtk_local',
  'rname' => 'name',
);
$dictionary["qtk_cupon_juego"]["fields"]["qtk_local_qtk_cupon_juego_1qtk_local_ida"] = array (
  'name' => 'qtk_local_qtk_cupon_juego_1qtk_local_ida',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_cupon_juego_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_LOCAL_QTK_CUPON_JUEGO_1_FROM_QTK_CUPON_JUEGO_TITLE',
);


// created: 2019-06-22 05:20:21
$dictionary["qtk_cupon_juego"]["fields"]["contacts_qtk_cupon_juego_1"] = array (
  'name' => 'contacts_qtk_cupon_juego_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_cupon_juego_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_CUPON_JUEGO_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_cupon_juego_1contacts_ida',
);
$dictionary["qtk_cupon_juego"]["fields"]["contacts_qtk_cupon_juego_1_name"] = array (
  'name' => 'contacts_qtk_cupon_juego_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_CUPON_JUEGO_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_cupon_juego_1contacts_ida',
  'link' => 'contacts_qtk_cupon_juego_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_cupon_juego"]["fields"]["contacts_qtk_cupon_juego_1contacts_ida"] = array (
  'name' => 'contacts_qtk_cupon_juego_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_cupon_juego_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_CUPON_JUEGO_1_FROM_QTK_CUPON_JUEGO_TITLE',
);


 // created: 2019-06-21 04:34:45
$dictionary['qtk_cupon_juego']['fields']['usuario_responsable_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['usuario_responsable_c']['labelValue']='Usuario responsable:';

 

 // created: 2019-06-21 04:32:12
$dictionary['qtk_cupon_juego']['fields']['tipo_evento_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['tipo_evento_c']['labelValue']='Tipo de evento:';

 

 // created: 2019-07-18 18:21:27
$dictionary['qtk_cupon_juego']['fields']['puntos_ganados_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['puntos_ganados_c']['options']='numeric_range_search_dom';
$dictionary['qtk_cupon_juego']['fields']['puntos_ganados_c']['labelValue']='Puntos ganados';
$dictionary['qtk_cupon_juego']['fields']['puntos_ganados_c']['enable_range_search']='1';

 

 // created: 2019-06-21 04:37:19
$dictionary['qtk_cupon_juego']['fields']['codigo_cliente_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['codigo_cliente_c']['labelValue']='Código de cliente para acumulación:';

 

 // created: 2019-07-18 18:20:51
$dictionary['qtk_cupon_juego']['fields']['valor_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['valor_c']['options']='numeric_range_search_dom';
$dictionary['qtk_cupon_juego']['fields']['valor_c']['labelValue']='Valor:';
$dictionary['qtk_cupon_juego']['fields']['valor_c']['enable_range_search']='1';

 

 // created: 2019-07-18 18:21:13
$dictionary['qtk_cupon_juego']['fields']['estrellas_ganados_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['estrellas_ganados_c']['options']='numeric_range_search_dom';
$dictionary['qtk_cupon_juego']['fields']['estrellas_ganados_c']['labelValue']='Estrellas ganadas';
$dictionary['qtk_cupon_juego']['fields']['estrellas_ganados_c']['enable_range_search']='1';

 

 // created: 2019-07-18 18:20:31
$dictionary['qtk_cupon_juego']['fields']['fecha_canje_cupon_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['fecha_canje_cupon_c']['options']='date_range_search_dom';
$dictionary['qtk_cupon_juego']['fields']['fecha_canje_cupon_c']['labelValue']='Fecha de canje del cupón:';
$dictionary['qtk_cupon_juego']['fields']['fecha_canje_cupon_c']['enable_range_search']='1';

 

 // created: 2019-06-21 04:34:44
$dictionary['qtk_cupon_juego']['fields']['user_id_c']['inline_edit']=1;

 

 // created: 2019-06-21 04:38:02
$dictionary['qtk_cupon_juego']['fields']['cupon_canjeado_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['cupon_canjeado_c']['labelValue']='Cupón canjeado:';

 

 // created: 2019-06-21 04:36:19
$dictionary['qtk_cupon_juego']['fields']['tipo_codigo_cliente_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['tipo_codigo_cliente_c']['labelValue']='Tipo de código para acumulación:';

 

 // created: 2019-06-21 04:35:25
$dictionary['qtk_cupon_juego']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-06-21 04:32:12
$dictionary['qtk_cupon_juego']['fields']['qtk_tipo_evento_id_c']['inline_edit']=1;

 

 // created: 2019-07-04 19:04:54
$dictionary['qtk_cupon_juego']['fields']['numero_unico_c']['inline_edit']='1';
$dictionary['qtk_cupon_juego']['fields']['numero_unico_c']['labelValue']='Número único VINCO:';

 
?>