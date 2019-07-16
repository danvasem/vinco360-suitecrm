<?php
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
