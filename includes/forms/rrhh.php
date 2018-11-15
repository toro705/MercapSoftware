<?php

include_once('forms/core/Formulario.php');

$form_rrhh = new Formulario(
	array(
		'destinatarios' => array(
			'comercial@mercapsoftware.com'
		),
		'asunto' 	=> 'Trabaje con nosotros - '.Empresa::$nombre,
		'remitente' => array(
			'nombre' => 'Web '.Empresa::$nombre,
			'email' => 'web@mercapsoftware.com'
		),
		'responder_a' => array(
			'nombre' => 'nombre',
			'email' => 'email'
		),
		'opciones' => array(
			'debug' => false
		)
	)
);

$form_rrhh->agregarCampos(
	array(

		array(
			'name' => 'nombre',
			'label' => 'Nombre',
			'tipo' => 'text',
			'validar' => array('requerido'),
		),
		array( 
			'name' => 'adjunto', 
			'label' => 'Adjunto', 
			'tipo' => 'file',
			'validar' => array('requerido'),
		),
		array(
			'name' => 'telefono',
			'label' => 'Teléfono',
			'tipo' => 'text',
			'validar' => array('requerido'),
		),

		array(
			'name' => 'email',
			'label' => 'Email',
			'tipo' => 'email',
			'validar' => array('requerido','formato'),
		),

		array(
			'name' => 'observaciones',
			'label' => 'Observaciones',
			'tipo' => 'textarea',
			'validar' => array('requerido'),
		),



		array(
			'name' => 'captcha',
			'label' => 'Captcha',
			'tipo' => 'Captcha',
			 'validar' => array('requerido'),
		),
	)
);

$form_rrhh->agregarMensajeEstado(
	array(
		'incompleto' =>	'Todos los campos son obligatorios.',
	)
);

if( isset($_POST['enviar_rrhh']) ){
	$form_rrhh->enviar();
}


