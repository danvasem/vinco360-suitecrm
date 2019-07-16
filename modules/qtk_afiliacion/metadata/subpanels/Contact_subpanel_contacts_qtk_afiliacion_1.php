<?php
// created: 2019-06-26 01:30:40
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'width' => '5%',
    'vname' => 'LBL_REMOVE',
    'default' => true,
    'widget_class' => 'SubPanelRemoveButton',
  ),
  'fecha_afiliacion_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_AFILIACION',
    'width' => '10%',
  ),
  'valor_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_VALOR',
    'width' => '10%',
  ),
  'estrellas_ganados_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_ESTRELLAS_GANADOS',
    'width' => '10%',
  ),
  'camapania_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CAMAPANIA',
    'id' => 'QTK_CAMPANIA_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_campania',
    'target_record_key' => 'qtk_campania_id_c',
  ),
  'qtk_negocio_qtk_afiliacion_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_NEGOCIO_QTK_AFILIACION_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_AFILIACION_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_negocio',
    'target_record_key' => 'qtk_negocio_qtk_afiliacion_1qtk_negocio_ida',
  ),
  'qtk_local_qtk_afiliacion_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_LOCAL_QTK_AFILIACION_1_FROM_QTK_LOCAL_TITLE',
    'id' => 'QTK_LOCAL_QTK_AFILIACION_1QTK_LOCAL_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_local',
    'target_record_key' => 'qtk_local_qtk_afiliacion_1qtk_local_ida',
  ),
);