<?php
// created: 2019-06-26 00:38:23
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
  'valor_alcanzado_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_VALOR_ALCANZADO',
    'width' => '10%',
  ),
  'progreso_c' => 
  array (
    'type' => 'float',
    'default' => true,
    'vname' => 'LBL_PROGRESO',
    'width' => '10%',
  ),
  'fecha_fin_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_FIN',
    'width' => '10%',
  ),
  'campania_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CAMPANIA',
    'id' => 'QTK_CAMPANIA_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_campania',
    'target_record_key' => 'qtk_campania_id_c',
  ),
  'estado_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'negocio_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_NEGOCIO',
    'id' => 'QTK_NEGOCIO_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_negocio',
    'target_record_key' => 'qtk_negocio_id_c',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'qtk_partida',
    'width' => '5%',
    'default' => true,
  ),
);