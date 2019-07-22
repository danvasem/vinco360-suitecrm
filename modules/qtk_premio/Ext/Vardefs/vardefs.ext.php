<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-06-22 06:04:50
$dictionary["qtk_premio"]["fields"]["qtk_premio_qtk_redencion_1"] = array (
  'name' => 'qtk_premio_qtk_redencion_1',
  'type' => 'link',
  'relationship' => 'qtk_premio_qtk_redencion_1',
  'source' => 'non-db',
  'module' => 'qtk_redencion',
  'bean_name' => 'qtk_redencion',
  'side' => 'right',
  'vname' => 'LBL_QTK_PREMIO_QTK_REDENCION_1_FROM_QTK_REDENCION_TITLE',
);


// created: 2019-06-22 05:45:20
$dictionary["qtk_premio"]["fields"]["qtk_negocio_qtk_premio_1"] = array (
  'name' => 'qtk_negocio_qtk_premio_1',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_premio_1',
  'source' => 'non-db',
  'module' => 'qtk_negocio',
  'bean_name' => 'qtk_negocio',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_PREMIO_1_FROM_QTK_NEGOCIO_TITLE',
  'id_name' => 'qtk_negocio_qtk_premio_1qtk_negocio_ida',
);
$dictionary["qtk_premio"]["fields"]["qtk_negocio_qtk_premio_1_name"] = array (
  'name' => 'qtk_negocio_qtk_premio_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_PREMIO_1_FROM_QTK_NEGOCIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_negocio_qtk_premio_1qtk_negocio_ida',
  'link' => 'qtk_negocio_qtk_premio_1',
  'table' => 'qtk_negocio',
  'module' => 'qtk_negocio',
  'rname' => 'name',
);
$dictionary["qtk_premio"]["fields"]["qtk_negocio_qtk_premio_1qtk_negocio_ida"] = array (
  'name' => 'qtk_negocio_qtk_premio_1qtk_negocio_ida',
  'type' => 'link',
  'relationship' => 'qtk_negocio_qtk_premio_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_NEGOCIO_QTK_PREMIO_1_FROM_QTK_PREMIO_TITLE',
);


 // created: 2019-06-20 15:16:27
$dictionary['qtk_premio']['fields']['negocio_c']['inline_edit']='';
$dictionary['qtk_premio']['fields']['negocio_c']['labelValue']='Negocio:';

 

 // created: 2019-07-20 00:37:13
$dictionary['qtk_premio']['fields']['valor_c']['inline_edit']='1';
$dictionary['qtk_premio']['fields']['valor_c']['options']='numeric_range_search_dom';
$dictionary['qtk_premio']['fields']['valor_c']['labelValue']='Estrellas:';
$dictionary['qtk_premio']['fields']['valor_c']['enable_range_search']='1';

 

 // created: 2019-06-20 15:16:27
$dictionary['qtk_premio']['fields']['qtk_negocio_id_c']['inline_edit']=1;

 

 // created: 2019-06-20 04:46:58
$dictionary['qtk_premio']['fields']['id_premio_c']['inline_edit']='1';
$dictionary['qtk_premio']['fields']['id_premio_c']['labelValue']='Id de premio VINCO:';

 

 // created: 2019-06-20 04:45:32
$dictionary['qtk_premio']['fields']['name']['len']='50';
$dictionary['qtk_premio']['fields']['name']['inline_edit']=true;
$dictionary['qtk_premio']['fields']['name']['help']='Nombre';
$dictionary['qtk_premio']['fields']['name']['comments']='Nombre';
$dictionary['qtk_premio']['fields']['name']['duplicate_merge']='disabled';
$dictionary['qtk_premio']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['qtk_premio']['fields']['name']['merge_filter']='disabled';
$dictionary['qtk_premio']['fields']['name']['unified_search']=false;

 

 // created: 2019-06-20 04:48:16
$dictionary['qtk_premio']['fields']['nombre_unico_c']['inline_edit']='1';
$dictionary['qtk_premio']['fields']['nombre_unico_c']['labelValue']='Nombre único VINCO:';

 

 // created: 2019-06-20 04:49:22
$dictionary['qtk_premio']['fields']['estado_c']['inline_edit']='1';
$dictionary['qtk_premio']['fields']['estado_c']['labelValue']='Estado:';

 

 // created: 2019-06-20 04:45:59
$dictionary['qtk_premio']['fields']['description']['inline_edit']=true;
$dictionary['qtk_premio']['fields']['description']['help']='Descripción';
$dictionary['qtk_premio']['fields']['description']['comments']='Descripción';
$dictionary['qtk_premio']['fields']['description']['merge_filter']='disabled';

 
?>