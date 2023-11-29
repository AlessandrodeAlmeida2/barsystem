<?php
	try {
	  $connect = new mysqli("database-1.cbvrtue64ub7.us-east-1.rds.amazonaws.com", "admin", "#Teste89m2", "database");
	  $connect->set_charset("utf8mb4");
	} catch(Exception $e) {
	  error_log($e->getMessage());
	  exit('Erro ao tentar conectar ao banco de dados');
	}