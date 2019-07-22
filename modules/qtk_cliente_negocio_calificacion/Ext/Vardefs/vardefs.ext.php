<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-22 05:34:16
$dictionary["qtk_cliente_negocio_calificacion"]["fields"]["contacts_qtk_cliente_negocio_calificacion_1"] = array (
  'name' => 'contacts_qtk_cliente_negocio_calificacion_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_cliente_negocio_calificacion_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_cliente_negocio_calificacion_1contacts_ida',
);
$dictionary["qtk_cliente_negocio_calificacion"]["fields"]["contacts_qtk_cliente_negocio_calificacion_1_name"] = array (
  'name' => 'contacts_qtk_cliente_negocio_calificacion_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_cliente_negocio_calificacion_1contacts_ida',
  'link' => 'contacts_qtk_cliente_negocio_calificacion_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_cliente_negocio_calificacion"]["fields"]["contacts_qtk_cliente_negocio_calificacion_1contacts_ida"] = array (
  'name' => 'contacts_qtk_cliente_negocio_calificacion_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_cliente_negocio_calificacion_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_QTK_CLIENTE_NEGOCIO_CALIFICACION_TITLE',
);


// created: 2019-06-22 05:48:15
$dictionary["qtk_cliente_negocio_calificacion"]["fields"]["qtk_negocio_qtk_cliente_negocio_calificacion_1"] = array (
  'name' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1qtk_negocio_ida',
);
$dictionary["qtk_cliente_negocio_calificacion"]["fields"]["qtk_negocio_qtk_cliente_negocio_calificacion_1_name"] = array (
  'name' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_cliente_negocio_calificacion"]["fields"]["qtk_negocio_qtk_cliente_negocio_calificacion_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_cliente_negocio_calificacion_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_CALIFICACION_1_FROM_QTK_CLIENTE_NEGOCIO_CALIFICACION_TITLE',
);


 // created: 2019-07-18 18:29:14
$dictionary['qtk_cliente_negocio_calificacion']['fields']['fecha_calificacion_c']['inline_edit']='1';
$dictionary['qtk_cliente_negocio_calificacion']['fields']['fecha_calificacion_c']['options']='date_range_search_dom';
$dictionary['qtk_cliente_negocio_calificacion']['fields']['fecha_calificacion_c']['labelValue']='Fecha de calificación:';
$dictionary['qtk_cliente_negocio_calificacion']['fields']['fecha_calificacion_c']['enable_range_search']='1';

 

 // created: 2019-07-18 18:29:27
$dictionary['qtk_cliente_negocio_calificacion']['fields']['calificacion_c']['inline_edit']='1';
$dictionary['qtk_cliente_negocio_calificacion']['fields']['calificacion_c']['options']='numeric_range_search_dom';
$dictionary['qtk_cliente_negocio_calificacion']['fields']['calificacion_c']['labelValue']='Calificación:';
$dictionary['qtk_cliente_negocio_calificacion']['fields']['calificacion_c']['enable_range_search']='1';

 
?>