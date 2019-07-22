<?php
$module_name = 'qtk_reverso';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTACTS_QTK_REVERSO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_REVERSO_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_REVERSO_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_NEGOCIO_QTK_REVERSO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_REVERSO_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_REVERSO_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_LOCAL_QTK_REVERSO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_LOCAL_QTK_REVERSO_1_FROM_QTK_LOCAL_TITLE',
    'id' => 'QTK_LOCAL_QTK_REVERSO_1QTK_LOCAL_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_REVERSO_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_REVERSO',
    'width' => '20%',
  ),
  'REVERSO_TIPO_EVENTO_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_REVERSO_TIPO_EVENTO',
    'id' => 'QTK_TIPO_EVENTO_ID1_C',
    'link' => true,
    'width' => '10%',
  ),
  'REVERSO_VALOR_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_REVERSO_VALOR',
    'width' => '10%',
  ),
  'REVERSO_NUMERO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REVERSO_NUMERO',
    'width' => '10%',
  ),
  'REVERSO_FECHA_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_REVERSO_FECHA',
    'width' => '10%',
  ),
  'REVERSO_PREMIO_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_REVERSO_PREMIO',
    'id' => 'QTK_PREMIO_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'USUARIO_RESPONSABLE_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_USUARIO_RESPONSABLE',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '25%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'TIPO_EVENTO_C' => 
  array (
    'type' => 'relate',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_EVENTO',
    'id' => 'QTK_TIPO_EVENTO_ID_C',
    'link' => true,
    'width' => '15%',
  ),
  'NUMERO_UNICO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_NUMERO_UNICO',
    'width' => '20%',
  ),
);
;
?>
