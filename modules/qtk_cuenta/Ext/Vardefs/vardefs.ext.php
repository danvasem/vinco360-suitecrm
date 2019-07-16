<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-22 05:45:53
$dictionary["qtk_cuenta"]["fields"]["qtk_negocio_qtk_cuenta_1"] = array (
  'name' => 'qtk_negocio_qtk_cuenta_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_cuenta_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CUENTA_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_cuenta_1qtk_negocio_ida',
);
$dictionary["qtk_cuenta"]["fields"]["qtk_negocio_qtk_cuenta_1_name"] = array (
  'name' => 'qtk_negocio_qtk_cuenta_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CUENTA_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_cuenta_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_cuenta_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_cuenta"]["fields"]["qtk_negocio_qtk_cuenta_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_cuenta_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_cuenta_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CUENTA_1_FROM_QTK_CUENTA_TITLE',
);


// created: 2019-06-22 03:39:34
$dictionary["qtk_cuenta"]["fields"]["contacts_qtk_cuenta_1"] = array (
  'name' => 'contacts_qtk_cuenta_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_cuenta_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_CUENTA_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_cuenta_1contacts_ida',
);
$dictionary["qtk_cuenta"]["fields"]["contacts_qtk_cuenta_1_name"] = array (
  'name' => 'contacts_qtk_cuenta_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_CUENTA_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_cuenta_1contacts_ida',
  'link' => 'contacts_qtk_cuenta_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_cuenta"]["fields"]["contacts_qtk_cuenta_1contacts_ida"] = array (
  'name' => 'contacts_qtk_cuenta_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_cuenta_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_CUENTA_1_FROM_QTK_CUENTA_TITLE',
);


 // created: 2019-06-20 15:13:17
$dictionary['qtk_cuenta']['fields']['negocio_c']['inline_edit']='';
$dictionary['qtk_cuenta']['fields']['negocio_c']['labelValue']='Negocio:';

 

 // created: 2019-06-20 14:26:17
$dictionary['qtk_cuenta']['fields']['saldo_contable_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['saldo_contable_c']['labelValue']='Saldo contable:';

 

 // created: 2019-06-20 14:24:02
$dictionary['qtk_cuenta']['fields']['saldo_disponible_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['saldo_disponible_c']['labelValue']='Saldo disponible:';

 

 // created: 2019-06-20 15:13:16
$dictionary['qtk_cuenta']['fields']['qtk_negocio_id_c']['inline_edit']=1;

 

 // created: 2019-06-20 14:25:38
$dictionary['qtk_cuenta']['fields']['saldo_disponible_base_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['saldo_disponible_base_c']['labelValue']='Saldo disponible (base):';

 

 // created: 2019-06-20 15:12:35
$dictionary['qtk_cuenta']['fields']['cliente_c']['inline_edit']='';
$dictionary['qtk_cuenta']['fields']['cliente_c']['labelValue']='Cliente:';

 

 // created: 2019-06-20 14:28:53
$dictionary['qtk_cuenta']['fields']['fecha_vigencia_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['fecha_vigencia_c']['labelValue']='Fecha de vigencia:';

 

 // created: 2019-06-20 14:28:14
$dictionary['qtk_cuenta']['fields']['fecha_apertura_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['fecha_apertura_c']['labelValue']='Fecha de apertura:';

 

 // created: 2019-06-20 15:12:35
$dictionary['qtk_cuenta']['fields']['contact_id_c']['inline_edit']=1;

 

 // created: 2019-06-20 14:30:38
$dictionary['qtk_cuenta']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-06-20 14:29:43
$dictionary['qtk_cuenta']['fields']['fecha_expiracion_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['fecha_expiracion_c']['labelValue']='Fecha de expiración:';

 

 // created: 2019-06-20 14:22:46
$dictionary['qtk_cuenta']['fields']['numero_unico_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['numero_unico_c']['labelValue']='Número único VINCO:';

 

 // created: 2019-06-20 15:03:50
$dictionary['qtk_cuenta']['fields']['id_cuenta_c']['inline_edit']='';
$dictionary['qtk_cuenta']['fields']['id_cuenta_c']['labelValue']='Id de cuenta VINCO:';

 

 // created: 2019-06-25 03:25:28
$dictionary['qtk_cuenta']['fields']['saldo_contable_base_c']['inline_edit']='1';
$dictionary['qtk_cuenta']['fields']['saldo_contable_base_c']['labelValue']='Saldo contable (base)';

 
?>