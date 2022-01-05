<?php
	include("../models/db.php");
	include("../controllers/contatoController.php");

	date_default_timezone_set("Brazil/East");

	$data = array(
		'nome' => $_POST['nome'],
		'telefone' => $_POST['telefone'],
		'email' => $_POST['email'],
		'data' => date('Y-m-d'),
		'hora' => date('H:i:s')
	);	

	$retorno = createContato($connect, $data);

	header("Location: ../contato_sucesso.php");

