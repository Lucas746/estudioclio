<?php

class Conectar{
	
	public static function Conexion(){
		
		$server='localhost';
		$user='root';
		$password='root';
		$db='estudio_clio';
		
		$con=mysql_connect($server, $user, $password) or die("ERROR DE CONEXION");
		mysql_select_db($db);
		
		return $con;
		
	
	}

}

?>