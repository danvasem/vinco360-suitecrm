<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-22 05:22:55
$dictionary["qtk_partida"]["fields"]["contacts_qtk_partida_1"] = array (
  'name' => 'contacts_qtk_partida_1',
  'type' => 'link',
  'relationship' => 'contacts_qtk_partida_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_qtk_partida_1contacts_ida',
);
$dictionary["qtk_partida"]["fields"]["contacts_qtk_partida_1_name"] = array (
  'name' => 'contacts_qtk_partida_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_qtk_partida_1contacts_ida',
  'link' => 'contacts_qtk_partida_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["qtk_partida"]["fields"]["contacts_qtk_partida_1contacts_ida"] = array (
  'name' => 'contacts_qtk_partida_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_qtk_partida_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_QTK_PARTIDA_TITLE',
);


 // created: 2019-06-20 15:01:57
$dictionary['qtk_partida']['fields']['negocio_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['negocio_c']['labelValue']='Negocio:';

 

 // created: 2019-06-20 15:01:10
$dictionary['qtk_partida']['fields']['qtk_campania_id_c']['inline_edit']=1;

 

 // created: 2019-06-20 15:01:57
$dictionary['qtk_partida']['fields']['qtk_negocio_id_c']['inline_edit']=1;

 

 // created: 2019-07-18 16:54:41
$dictionary['qtk_partida']['fields']['repeticion_c']['inline_edit']='';
$dictionary['qtk_partida']['fields']['repeticion_c']['options']='numeric_range_search_dom';
$dictionary['qtk_partida']['fields']['repeticion_c']['labelValue']='Repetición:';
$dictionary['qtk_partida']['fields']['repeticion_c']['enable_range_search']='1';

 

 // created: 2019-06-20 15:13:59
$dictionary['qtk_partida']['fields']['cliente_c']['inline_edit']='';
$dictionary['qtk_partida']['fields']['cliente_c']['labelValue']='Cliente';

 

 // created: 2019-07-18 16:53:41
$dictionary['qtk_partida']['fields']['progreso_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['progreso_c']['options']='numeric_range_search_dom';
$dictionary['qtk_partida']['fields']['progreso_c']['labelValue']='Progreso:';
$dictionary['qtk_partida']['fields']['progreso_c']['enable_range_search']='1';

 

 // created: 2019-07-18 16:54:26
$dictionary['qtk_partida']['fields']['fecha_fin_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['fecha_fin_c']['options']='date_range_search_dom';
$dictionary['qtk_partida']['fields']['fecha_fin_c']['labelValue']='Fecha fin:';
$dictionary['qtk_partida']['fields']['fecha_fin_c']['enable_range_search']='1';

 

 // created: 2019-06-20 15:03:21
$dictionary['qtk_partida']['fields']['id_partida_c']['inline_edit']='';
$dictionary['qtk_partida']['fields']['id_partida_c']['labelValue']='Id de partida VINCO:';

 

 // created: 2019-06-20 15:11:45
$dictionary['qtk_partida']['fields']['contact_id_c']['inline_edit']=1;

 

 // created: 2019-06-20 15:09:38
$dictionary['qtk_partida']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-07-18 16:53:22
$dictionary['qtk_partida']['fields']['valor_alcanzado_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['valor_alcanzado_c']['options']='numeric_range_search_dom';
$dictionary['qtk_partida']['fields']['valor_alcanzado_c']['labelValue']='Valor alcanzado:';
$dictionary['qtk_partida']['fields']['valor_alcanzado_c']['enable_range_search']='1';

 

 // created: 2019-07-18 16:54:11
$dictionary['qtk_partida']['fields']['fecha_creacion_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['fecha_creacion_c']['options']='date_range_search_dom';
$dictionary['qtk_partida']['fields']['fecha_creacion_c']['labelValue']='Fecha de creación:';
$dictionary['qtk_partida']['fields']['fecha_creacion_c']['enable_range_search']='1';

 

 // created: 2019-07-18 16:53:54
$dictionary['qtk_partida']['fields']['valor_cliente_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['valor_cliente_c']['options']='numeric_range_search_dom';
$dictionary['qtk_partida']['fields']['valor_cliente_c']['labelValue']='Valor cliente:';
$dictionary['qtk_partida']['fields']['valor_cliente_c']['enable_range_search']='1';

 

 // created: 2019-06-20 14:50:22
$dictionary['qtk_partida']['fields']['numero_unico_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['numero_unico_c']['labelValue']='Número único VINCO:';

 

 // created: 2019-06-20 15:01:10
$dictionary['qtk_partida']['fields']['campania_c']['inline_edit']='1';
$dictionary['qtk_partida']['fields']['campania_c']['labelValue']='Campaña:';

 
?>