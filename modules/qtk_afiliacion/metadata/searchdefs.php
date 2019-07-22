<?php
$module_name = 'qtk_afiliacion';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'contacts_qtk_afiliacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_AFILIACION_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_QTK_AFILIACION_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_qtk_afiliacion_1_name',
      ),
      'qtk_negocio_qtk_afiliacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_AFILIACION_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_AFILIACION_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_afiliacion_1_name',
      ),
      'qtk_local_qtk_afiliacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_LOCAL_QTK_AFILIACION_1_FROM_QTK_LOCAL_TITLE',
        'id' => 'QTK_LOCAL_QTK_AFILIACION_1QTK_LOCAL_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_local_qtk_afiliacion_1_name',
      ),
      'fecha_afiliacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_AFILIACION',
        'width' => '10%',
        'name' => 'fecha_afiliacion_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'fecha_afiliacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_AFILIACION',
        'width' => '10%',
        'name' => 'fecha_afiliacion_c',
      ),
      'valor_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_VALOR',
        'width' => '10%',
        'name' => 'valor_c',
      ),
      'contacts_qtk_afiliacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_AFILIACION_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_QTK_AFILIACION_1CONTACTS_IDA',
        'name' => 'contacts_qtk_afiliacion_1_name',
      ),
      'qtk_negocio_qtk_afiliacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_AFILIACION_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_AFILIACION_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_afiliacion_1_name',
      ),
      'qtk_local_qtk_afiliacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_LOCAL_QTK_AFILIACION_1_FROM_QTK_LOCAL_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_LOCAL_QTK_AFILIACION_1QTK_LOCAL_IDA',
        'name' => 'qtk_local_qtk_afiliacion_1_name',
      ),
      'usuario_responsable_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_USUARIO_RESPONSABLE',
        'id' => 'USER_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'usuario_responsable_c',
      ),
      'estrellas_ganados_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_ESTRELLAS_GANADOS',
        'width' => '10%',
        'name' => 'estrellas_ganados_c',
      ),
      'puntos_ganados_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_PUNTOS_GANADOS',
        'width' => '10%',
        'name' => 'puntos_ganados_c',
      ),
      'camapania_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CAMAPANIA',
        'id' => 'QTK_CAMPANIA_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'camapania_c',
      ),
      'estado_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'name' => 'estado_c',
      ),
      'qtk_codigo_cliente_qtk_afiliacion_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_CODIGO_CLIENTE_QTK_AFILIACION_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
        'id' => 'QTK_CODIGO_CLIENTE_QTK_AFILIACION_1QTK_CODIGO_CLIENTE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_codigo_cliente_qtk_afiliacion_1_name',
      ),
      'codigo_cliente_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_CODIGO_CLIENTE',
        'width' => '10%',
        'name' => 'codigo_cliente_c',
      ),
      'tipo_codigo_cliente_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO_CODIGO_CLIENTE',
        'width' => '10%',
        'name' => 'tipo_codigo_cliente_c',
      ),
      'tipo_evento_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TIPO_EVENTO',
        'id' => 'QTK_TIPO_EVENTO_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'tipo_evento_c',
      ),
      'numero_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERO_UNICO',
        'width' => '10%',
        'name' => 'numero_unico_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
