<?php
$module_name = 'qtk_campania';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'qtk_negocio_qtk_campania_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_NEGOCIO_TITLE',
        'id' => 'QTK_NEGOCIO_QTK_CAMPANIA_1QTK_NEGOCIO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'qtk_negocio_qtk_campania_1_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'qtk_negocio_qtk_campania_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_QTK_NEGOCIO_QTK_CAMPANIA_1_FROM_QTK_NEGOCIO_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'QTK_NEGOCIO_QTK_CAMPANIA_1QTK_NEGOCIO_IDA',
        'name' => 'qtk_negocio_qtk_campania_1_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'fecha_inicio_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_INICIO',
        'width' => '10%',
        'name' => 'fecha_inicio_c',
      ),
      'fecha_fin_c' => 
      array (
        'type' => 'datetimecombo',
        'default' => true,
        'label' => 'LBL_FECHA_FIN',
        'width' => '10%',
        'name' => 'fecha_fin_c',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'aplica_todos_locales_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_APLICA_TODOS_LOCALES',
        'width' => '10%',
        'name' => 'aplica_todos_locales_c',
      ),
      'id_campania_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ID_CAMPANIA',
        'width' => '10%',
        'name' => 'id_campania_c',
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
