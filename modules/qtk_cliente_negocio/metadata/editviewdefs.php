<?php
$module_name = 'qtk_cliente_negocio';
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
            'name' => 'contacts_qtk_cliente_negocio_1_name',
            'label' => 'LBL_CONTACTS_QTK_CLIENTE_NEGOCIO_1_FROM_CONTACTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'qtk_negocio_qtk_cliente_negocio_1_name',
            'label' => 'LBL_QTK_NEGOCIO_QTK_CLIENTE_NEGOCIO_1_FROM_QTK_NEGOCIO_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_creacion_c',
            'label' => 'LBL_FECHA_CREACION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>