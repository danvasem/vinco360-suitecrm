<?php
$module_name = 'qtk_premio';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
          0 => 
          array (
            'name' => 'id_premio_c',
            'label' => 'LBL_ID_PREMIO',
          ),
          1 => 
          array (
            'name' => 'nombre_unico_c',
            'label' => 'LBL_NOMBRE_UNICO',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'valor_c',
            'label' => 'LBL_VALOR',
          ),
        ),
        2 => 
        array (
          0 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'qtk_negocio_qtk_premio_1_name',
            'label' => 'LBL_QTK_NEGOCIO_QTK_PREMIO_1_FROM_QTK_NEGOCIO_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
