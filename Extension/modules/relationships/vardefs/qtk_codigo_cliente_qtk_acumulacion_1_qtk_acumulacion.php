<?php
// created: 2019-06-22 06:00:46
$dictionary["qtk_acumulacion"]["fields"]["qtk_codigo_cliente_qtk_acumulacion_1"] = array (
  'name' => 'qtk_codigo_cliente_qtk_acumulacion_1',
  'type' => 'link',
  'relationship' => 'qtk_codigo_cliente_qtk_acumulacion_1',
  'source' => 'non-db',
  'module' => 'qtk_codigo_cliente',
  'bean_name' => 'qtk_codigo_cliente',
  'vname' => 'LBL_QTK_CODIGO_CLIENTE_QTK_ACUMULACION_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
  'id_name' => 'qtk_codigo_cliente_qtk_acumulacion_1qtk_codigo_cliente_ida',
);
$dictionary["qtk_acumulacion"]["fields"]["qtk_codigo_cliente_qtk_acumulacion_1_name"] = array (
  'name' => 'qtk_codigo_cliente_qtk_acumulacion_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_CODIGO_CLIENTE_QTK_ACUMULACION_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
  'save' => true,
  'id_name' => 'qtk_codigo_cliente_qtk_acumulacion_1qtk_codigo_cliente_ida',
  'link' => 'qtk_codigo_cliente_qtk_acumulacion_1',
  'table' => 'qtk_codigo_cliente',
  'module' => 'qtk_codigo_cliente',
  'rname' => 'name',
);
$dictionary["qtk_acumulacion"]["fields"]["qtk_codigo_cliente_qtk_acumulacion_1qtk_codigo_cliente_ida"] = array (
  'name' => 'qtk_codigo_cliente_qtk_acumulacion_1qtk_codigo_cliente_ida',
  'type' => 'link',
  'relationship' => 'qtk_codigo_cliente_qtk_acumulacion_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_CODIGO_CLIENTE_QTK_ACUMULACION_1_FROM_QTK_ACUMULACION_TITLE',
);
