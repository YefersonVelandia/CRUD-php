<?php

	function conexionBD(){
		$host     = "host=localhost";
		$port     = "port=5432";
		$dbname   = "dbname=sistema";
		$user	  = "user=postgres";
		$password = "password=condor68";
		
		try{
                $conexion = pg_connect("$host $port $dbname $user $password");
				return $conexion;
				
            }catch(Exception $error){
                die("error de conexion: ".$error->getMessage());
            }
		
		
				
	}

	

?>