<?php
// created: 2019-06-30 00:49:58
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'fecha_redencion_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_REDENCION',
    'width' => '10%',
  ),
  'qtk_premio_qtk_redencion_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_PREMIO_QTK_REDENCION_1_FROM_QTK_PREMIO_TITLE',
    'id' => 'QTK_PREMIO_QTK_REDENCION_1QTK_PREMIO_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_premio',
    'target_record_key' => 'qtk_premio_qtk_redencion_1qtk_premio_ida',
  ),
  'valor_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_VALOR',
    'width' => '10%',
  ),
  'monto_referencial_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_MONTO_REFERENCIAL',
    'width' => '10%',
  ),
  'cuenta_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CUENTA',
    'id' => 'QTK_CUENTA_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_cuenta',
    'target_record_key' => 'qtk_cuenta_id_c',
  ),
  'qtk_negocio_qtk_redencion_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_NEGOCIO_QTK_REDENCION_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_REDENCION_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_negocio',
    'target_record_key' => 'qtk_negocio_qtk_redencion_1qtk_negocio_ida',
  ),
  'qtk_local_qtk_redencion_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_LOCAL_QTK_REDENCION_1_FROM_QTK_LOCAL_TITLE',
    'id' => 'QTK_LOCAL_QTK_REDENCION_1QTK_LOCAL_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_local',
    'target_record_key' => 'qtk_local_qtk_redencion_1qtk_local_ida',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'qtk_redencion',
    'width' => '5%',
    'default' => true,
  ),
);