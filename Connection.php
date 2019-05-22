<?php

try {
	$db = new PDO(Config::tipoDB.':host='.Config::servidor.';port='.Config::port.';dbname='.Config::db.';charset='.Config::charset, Config::user, Config::password);

} catch (PDOException $e ) {
	echo 'ERROR: No se logro hacer una conexion a la Base de Datos BROW - '.$e->getMessage();
	exit;
}
