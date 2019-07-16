<?php
$module_name = 'qtk_local';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'direccion_c',
            'label' => 'LBL_DIRECCION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'local_fisico_c',
            'label' => 'LBL_LOCAL_FISICO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'latitud_c',
            'label' => 'LBL_LATITUD',
          ),
          1 => 
          array (
            'name' => 'longitud_c',
            'label' => 'LBL_LONGITUD',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'qtk_negocio_qtk_local_1_name',
            'label' => 'LBL_QTK_NEGOCIO_QTK_LOCAL_1_FROM_QTK_NEGOCIO_TITLE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nombre_unico_c',
            'label' => 'LBL_NOMBRE_UNICO',
          ),
          1 => 
          array (
            'name' => 'id_local_c',
            'label' => 'LBL_ID_LOCAL',
          ),
        ),
      ),
    ),
  ),
);
;
?>
