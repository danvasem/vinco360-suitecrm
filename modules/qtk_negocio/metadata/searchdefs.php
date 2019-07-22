<?php
$module_name = 'qtk_negocio';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'nombre_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NOMBRE_UNICO',
        'width' => '10%',
        'name' => 'nombre_unico_c',
      ),
      'id_negocio_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ID_NEGOCIO',
        'width' => '10%',
        'name' => 'id_negocio_c',
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
      'nombre_unico_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NOMBRE_UNICO',
        'width' => '10%',
        'name' => 'nombre_unico_c',
      ),
      'id_negocio_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ID_NEGOCIO',
        'width' => '10%',
        'name' => 'id_negocio_c',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
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
