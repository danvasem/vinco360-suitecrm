<?php
// created: 2019-06-22 05:55:16
$dictionary["qtk_redencion"]["fields"]["qtk_local_qtk_redencion_1"] = array (
  'name' => 'qtk_local_qtk_redencion_1',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_redencion_1',
  'source' => 'non-db',
  'module' => 'qtk_local',
  'bean_name' => 'qtk_local',
  'vname' => 'LBL_QTK_LOCAL_QTK_REDENCION_1_FROM_QTK_LOCAL_TITLE',
  'id_name' => 'qtk_local_qtk_redencion_1qtk_local_ida',
);
$dictionary["qtk_redencion"]["fields"]["qtk_local_qtk_redencion_1_name"] = array (
  'name' => 'qtk_local_qtk_redencion_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QTK_LOCAL_QTK_REDENCION_1_FROM_QTK_LOCAL_TITLE',
  'save' => true,
  'id_name' => 'qtk_local_qtk_redencion_1qtk_local_ida',
  'link' => 'qtk_local_qtk_redencion_1',
  'table' => 'qtk_local',
  'module' => 'qtk_local',
  'rname' => 'name',
);
$dictionary["qtk_redencion"]["fields"]["qtk_local_qtk_redencion_1qtk_local_ida"] = array (
  'name' => 'qtk_local_qtk_redencion_1qtk_local_ida',
  'type' => 'link',
  'relationship' => 'qtk_local_qtk_redencion_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_QTK_LOCAL_QTK_REDENCION_1_FROM_QTK_REDENCION_TITLE',
);
