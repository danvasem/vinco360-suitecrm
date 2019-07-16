<?php
// created: 2019-06-25 16:47:13
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
  'saldo_disponible_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_SALDO_DISPONIBLE',
    'width' => '10%',
  ),
  'fecha_apertura_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_APERTURA',
    'width' => '10%',
  ),
  'qtk_negocio_qtk_cuenta_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_QTK_NEGOCIO_QTK_CUENTA_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_CUENTA_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_negocio',
    'target_record_key' => 'qtk_negocio_qtk_cuenta_1qtk_negocio_ida',
  ),
  'estado_c' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
  ),
);