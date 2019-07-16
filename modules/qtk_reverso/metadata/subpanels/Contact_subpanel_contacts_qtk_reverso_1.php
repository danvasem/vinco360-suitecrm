<?php
// created: 2019-07-05 21:19:04
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'fecha_reverso_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_FECHA_REVERSO',
    'width' => '10%',
  ),
  'usuario_responsable_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_USUARIO_RESPONSABLE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'user_id_c',
  ),
  'reverso_tipo_evento_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_REVERSO_TIPO_EVENTO',
    'id' => 'QTK_TIPO_EVENTO_ID1_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_tipo_evento',
    'target_record_key' => 'qtk_tipo_evento_id1_c',
  ),
  'reverso_valor_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_REVERSO_VALOR',
    'width' => '10%',
  ),
  'reverso_fecha_c' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_REVERSO_FECHA',
    'width' => '10%',
  ),
  'reverso_premio_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_REVERSO_PREMIO',
    'id' => 'QTK_PREMIO_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'qtk_premio',
    'target_record_key' => 'qtk_premio_id_c',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'qtk_reverso',
    'width' => '5%',
    'default' => true,
  ),
);