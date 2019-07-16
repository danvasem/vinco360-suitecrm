<?php
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
