<?php
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
