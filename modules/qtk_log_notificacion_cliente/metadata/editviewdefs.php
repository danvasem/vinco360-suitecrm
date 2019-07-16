<?php
$module_name = 'qtk_log_notificacion_cliente';
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
            'name' => 'fecha_notificacion_c',
            'label' => 'LBL_FECHA_NOTIFICACION',
          ),
          1 => 
          array (
            'name' => 'contacts_qtk_log_notificacion_cliente_1_name',
            'label' => 'LBL_CONTACTS_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_CONTACTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'titulo_c',
            'studio' => 'visible',
            'label' => 'LBL_TITULO',
          ),
          1 => 
          array (
            'name' => 'nombre_unico_grupo_c',
            'label' => 'LBL_NOMBRE_UNICO_GRUPO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mensaje_c',
            'studio' => 'visible',
            'label' => 'LBL_MENSAJE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'error_c',
            'studio' => 'visible',
            'label' => 'LBL_ERROR',
          ),
          1 => 
          array (
            'name' => 'canal_c',
            'studio' => 'visible',
            'label' => 'LBL_CANAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'qtk_negocio_qtk_log_notificacion_cliente_1_name',
            'label' => 'LBL_QTK_NEGOCIO_QTK_LOG_NOTIFICACION_CLIENTE_1_FROM_QTK_NEGOCIO_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
