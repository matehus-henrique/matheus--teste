<?php
	try {
	  $connect = new mysqli("127.0.0.1", "root", "", "barsystem_contato");
	  $connect->set_charset("utf8mb4");
	} catch(Exception $e) {
	  error_log($e->getMessage());
	  exit('Erro ao tentar conectar ao banco de dados');
	}