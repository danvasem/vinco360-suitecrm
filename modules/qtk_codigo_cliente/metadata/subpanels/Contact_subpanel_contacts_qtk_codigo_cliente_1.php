<?php
// created: 2019-06-27 01:34:10
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'fecha_creacion_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_CREACION',
    'width' => '10%',
  ),
  'fecha_activacion_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_ACTIVACION',
    'width' => '10%',
  ),
  'estado_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'qtk_negocio_qtk_codigo_cliente_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_NEGOCIO_QTK_CODIGO_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_CODIGO_CLIENTE_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_negocio',
    'target_record_key' => 'qtk_negocio_qtk_codigo_cliente_1qtk_negocio_ida',
  ),
  'qtk_local_qtk_codigo_cliente_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_LOCAL_QTK_CODIGO_CLIENTE_1_FROM_QTK_LOCAL_TITLE',
    'id' => 'QTK_LOCAL_QTK_CODIGO_CLIENTE_1QTK_LOCAL_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_local',
    'target_record_key' => 'qtk_local_qtk_codigo_cliente_1qtk_local_ida',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'qtk_codigo_cliente',
    'width' => '5%',
    'default' => true,
  ),
);