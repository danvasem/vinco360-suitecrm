<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-22 05:41:53
$dictionary["qtk_campania"]["fields"]["qtk_negocio_qtk_campania_1"] = array (
  'name' => 'qtk_negocio_qtk_campania_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_campania_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_campania_1qtk_negocio_ida',
);
$dictionary["qtk_campania"]["fields"]["qtk_negocio_qtk_campania_1_name"] = array (
  'name' => 'qtk_negocio_qtk_campania_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_campania_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_campania_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_campania"]["fields"]["qtk_negocio_qtk_campania_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_campania_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_campania_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_CAMPANIA_TITLE',
);


 // created: 2019-06-20 15:15:02
$dictionary['qtk_campania']['fields']['qtk_negocio_id_c']['inline_edit']=1;

 

 // created: 2019-07-20 00:34:29
$dictionary['qtk_campania']['fields']['fecha_inicio_c']['inline_edit']='1';
$dictionary['qtk_campania']['fields']['fecha_inicio_c']['options']='date_range_search_dom';
$dictionary['qtk_campania']['fields']['fecha_inicio_c']['labelValue']='Fecha de inicio:';
$dictionary['qtk_campania']['fields']['fecha_inicio_c']['enable_range_search']='1';

 

 // created: 2019-06-20 14:03:01
$dictionary['qtk_campania']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_campania']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-06-20 14:00:00
$dictionary['qtk_campania']['fields']['id_campania_c']['inline_edit']='1';
$dictionary['qtk_campania']['fields']['id_campania_c']['labelValue']='Id de campaña VINCO:';

 

 // created: 2019-06-20 13:56:53
$dictionary['qtk_campania']['fields']['name']['len']='11';
$dictionary['qtk_campania']['fields']['name']['inline_edit']=true;
$dictionary['qtk_campania']['fields']['name']['help']='Nombre';
$dictionary['qtk_campania']['fields']['name']['comments']='Nombre';
$dictionary['qtk_campania']['fields']['name']['duplicate_merge']='disabled';
$dictionary['qtk_campania']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['qtk_campania']['fields']['name']['merge_filter']='disabled';
$dictionary['qtk_campania']['fields']['name']['unified_search']=false;

 

 // created: 2019-06-20 14:04:16
$dictionary['qtk_campania']['fields']['fecha_creacion_c']['inline_edit']='1';
$dictionary['qtk_campania']['fields']['fecha_creacion_c']['labelValue']='Fecha de creación:';

 

 // created: 2019-06-20 14:06:38
$dictionary['qtk_campania']['fields']['aplica_todos_locales_c']['inline_edit']='1';
$dictionary['qtk_campania']['fields']['aplica_todos_locales_c']['labelValue']='Aplica para todos los locales:';

 

 // created: 2019-06-20 13:57:12
$dictionary['qtk_campania']['fields']['description']['inline_edit']=true;
$dictionary['qtk_campania']['fields']['description']['help']='Descripción';
$dictionary['qtk_campania']['fields']['description']['comments']='Descripción';
$dictionary['qtk_campania']['fields']['description']['merge_filter']='disabled';

 

 // created: 2019-07-20 00:34:42
$dictionary['qtk_campania']['fields']['fecha_fin_c']['inline_edit']='1';
$dictionary['qtk_campania']['fields']['fecha_fin_c']['options']='date_range_search_dom';
$dictionary['qtk_campania']['fields']['fecha_fin_c']['labelValue']='Fecha de fin:';
$dictionary['qtk_campania']['fields']['fecha_fin_c']['enable_range_search']='1';

 

 // created: 2019-06-20 15:15:03
$dictionary['qtk_campania']['fields']['negocio_c']['inline_edit']='1';
$dictionary['qtk_campania']['fields']['negocio_c']['labelValue']='Negocio:';

 
?>