<?php
$module_name = 'qtk_cuenta';
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
          0 => 
          array (
            'name' => 'numero_unico_c',
            'label' => 'LBL_NUMERO_UNICO',
          ),
          1 => 
          array (
            'name' => 'contacts_qtk_cuenta_1_name',
            'label' => 'LBL_CONTACTS_QTK_CUENTA_1_FROM_CONTACTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'saldo_disponible_c',
            'label' => 'LBL_SALDO_DISPONIBLE',
          ),
          1 => 
          array (
            'name' => 'saldo_disponible_base_c',
            'label' => 'LBL_SALDO_DISPONIBLE_BASE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'saldo_contable_c',
            'label' => 'LBL_SALDO_CONTABLE',
          ),
          1 => 
          array (
            'name' => 'saldo_contable_base_c',
            'label' => 'LBL_SALDO_CONTABLE_BASE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fecha_apertura_c',
            'label' => 'LBL_FECHA_APERTURA',
          ),
          1 => 
          array (
            'name' => 'fecha_expiracion_c',
            'label' => 'LBL_FECHA_EXPIRACION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fecha_vigencia_c',
            'label' => 'LBL_FECHA_VIGENCIA',
          ),
          1 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'qtk_negocio_qtk_cuenta_1_name',
            'label' => 'LBL_QTK_NEGOCIO_QTK_CUENTA_1_FROM_QTK_NEGOCIO_TITLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
