<?php
  class Conex{		 
		function __construct(){
			$conexion = mysql_connect("localhost","root","1nt3r4ct1v3");
			mysql_select_db("json");
			$this->Conexion=$conexion;
		}
		function consulta ($query){
			$conexion = $this->Conexion;
			$result = mysql_query($query,$conexion);
      $registros = mysql_fetch_array($result);
			return $registros;
		}
		function consulProdu (){
			$inser ="SELECT * FROM marcaxxx order by IDMARCAX";
			$conexion = $this->Conexion;
			$result = mysql_query($inser,$conexion);
			return $result;
		}
		function consltaUsuario ($CcUser){
			$qSelect = "SELECT nombrexx FROM USUARIO WHERE cedulaxx = {$CcUser}";
			$resultado=consulta($qSelect);
			$resultado;
		}
	}
		
?>