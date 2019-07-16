<?php
// created: 2019-06-22 06:04:50
$dictionary["qtk_redencion"]["fields"]["qtk_premio_qtk_redencion_1"] = array (
  'name' => 'qtk_premio_qtk_redencion_1',
  'type' => 'link',
  'relationship' => 'qtk_premio_qtk_redencion_1',
  'source' => 'non-db',
  'module' => 'qtk_premio',
  'bean_name' => 'qtk_premio',
  'vname' => 'LBL_QTK_PREMIO_QTK_REDENCION_1_FROM_QTK_PREMIO_TITLE',
  'id_name' => 'qtk_premio_qtk_redencion_1qtk_premio_ida',
);
$dictionary["qtk_redencion"]["fields"]["qtk_premio_qtk_redencion_1_name"] = array (
  'name' => 'qtk_premio_qtk_redencion_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_PREMIO_QTK_REDENCION_1_FROM_QTK_PREMIO_TITLE',
  'save' => true,
  'id_name' => 'qtk_premio_qtk_redencion_1qtk_premio_ida',
  'link' => 'qtk_premio_qtk_redencion_1',
  'table' => 'qtk_premio',
  'module' => 'qtk_premio',
  'rname' => 'name',
);
$dictionary["qtk_redencion"]["fields"]["qtk_premio_qtk_redencion_1qtk_premio_ida"] = array (
  'name' => 'qtk_premio_qtk_redencion_1qtk_premio_ida',
  'type' => 'link',
  'relationship' => 'qtk_premio_qtk_redencion_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_PREMIO_QTK_REDENCION_1_FROM_QTK_REDENCION_TITLE',
);
