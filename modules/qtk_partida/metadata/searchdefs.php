<?php
$module_name = 'qtk_partida';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'negocio_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_NEGOCIO',
        'id' => 'QTK_NEGOCIO_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'negocio_c',
      ),
      'contacts_qtk_partida_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_QTK_PARTIDA_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_qtk_partida_1_name',
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
      'fecha_creacion_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_CREACION',
        'width' => '10%',
        'name' => 'fecha_creacion_c',
      ),
      'fecha_fin_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_FIN',
        'width' => '10%',
        'name' => 'fecha_fin_c',
      ),
      'valor_alcanzado_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_VALOR_ALCANZADO',
        'width' => '10%',
        'name' => 'valor_alcanzado_c',
      ),
      'valor_cliente_c' => 
      array (
        'type' => 'decimal',
        'default' => true,
        'label' => 'LBL_VALOR_CLIENTE',
        'width' => '10%',
        'name' => 'valor_cliente_c',
      ),
      'progreso_c' => 
      array (
        'type' => 'float',
        'default' => true,
        'label' => 'LBL_PROGRESO',
        'width' => '10%',
        'name' => 'progreso_c',
      ),
      'contacts_qtk_partida_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_QTK_PARTIDA_1_FROM_CONTACTS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'CONTACTS_QTK_PARTIDA_1CONTACTS_IDA',
        'name' => 'contacts_qtk_partida_1_name',
      ),
      'negocio_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_NEGOCIO',
        'link' => true,
        'width' => '10%',
        'id' => 'QTK_NEGOCIO_ID_C',
        'name' => 'negocio_c',
      ),
      'campania_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CAMPANIA',
        'id' => 'QTK_CAMPANIA_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'campania_c',
      ),
      'repeticion_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_REPETICION',
        'width' => '10%',
        'name' => 'repeticion_c',
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
