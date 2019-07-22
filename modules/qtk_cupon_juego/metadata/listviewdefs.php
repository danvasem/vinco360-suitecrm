<?php
$module_name = 'qtk_cupon_juego';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTACTS_QTK_CUPON_JUEGO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_QTK_CUPON_JUEGO_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_QTK_CUPON_JUEGO_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_NEGOCIO_QTK_CUPON_JUEGO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_NEGOCIO_QTK_CUPON_JUEGO_1_FROM_QTK_NEGOCIO_TITLE',
    'id' => 'QTK_NEGOCIO_QTK_CUPON_JUEGO_1QTK_NEGOCIO_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QTK_LOCAL_QTK_CUPON_JUEGO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_QTK_LOCAL_QTK_CUPON_JUEGO_1_FROM_QTK_LOCAL_TITLE',
    'id' => 'QTK_LOCAL_QTK_CUPON_JUEGO_1QTK_LOCAL_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_CANJE_CUPON_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHA_CANJE_CUPON',
    'width' => '10%',
  ),
  'CUPON_CANJEADO_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CUPON_CANJEADO',
    'width' => '10%',
  ),
  'ESTRELLAS_GANADOS_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_ESTRELLAS_GANADOS',
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
    'width' => '10%',
  ),
  'PUNTOS_GANADOS_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_PUNTOS_GANADOS',
    'width' => '10%',
  ),
  'VALOR_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_VALOR',
    'width' => '20%',
  ),
  'ESTADO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '15%',
  ),
  'TIPO_CODIGO_CLIENTE_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_TIPO_CODIGO_CLIENTE',
    'width' => '10%',
  ),
  'CODIGO_CLIENTE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CODIGO_CLIENTE',
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
    'width' => '15%',
  ),
);
;
?>
