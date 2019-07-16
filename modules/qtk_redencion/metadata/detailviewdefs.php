<?php
$module_name = 'qtk_redencion';
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
            'name' => 'contacts_qtk_redencion_1_name',
            'label' => 'LBL_CONTACTS_QTK_REDENCION_1_FROM_CONTACTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fecha_redencion_c',
            'label' => 'LBL_FECHA_REDENCION',
          ),
          1 => 
          array (
            'name' => 'tipo_evento_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_EVENTO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'usuario_responsable_c',
            'studio' => 'visible',
            'label' => 'LBL_USUARIO_RESPONSABLE',
          ),
          1 => 
          array (
            'name' => 'valor_c',
            'label' => 'LBL_VALOR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cuenta_c',
            'studio' => 'visible',
            'label' => 'LBL_CUENTA',
          ),
          1 => 
          array (
            'name' => 'monto_referencial_c',
            'label' => 'LBL_MONTO_REFERENCIAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tipo_codigo_cliente_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_CODIGO_CLIENTE',
          ),
          1 => 
          array (
            'name' => 'codigo_cliente_c',
            'label' => 'LBL_CODIGO_CLIENTE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'qtk_premio_qtk_redencion_1_name',
            'label' => 'LBL_QTK_PREMIO_QTK_REDENCION_1_FROM_QTK_PREMIO_TITLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'qtk_negocio_qtk_redencion_1_name',
            'label' => 'LBL_QTK_NEGOCIO_QTK_REDENCION_1_FROM_QTK_NEGOCIO_TITLE',
          ),
          1 => 
          array (
            'name' => 'qtk_local_qtk_redencion_1_name',
            'label' => 'LBL_QTK_LOCAL_QTK_REDENCION_1_FROM_QTK_LOCAL_TITLE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'qtk_codigo_cliente_qtk_redencion_1_name',
            'label' => 'LBL_QTK_CODIGO_CLIENTE_QTK_REDENCION_1_FROM_QTK_CODIGO_CLIENTE_TITLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
