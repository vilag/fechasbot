<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Index
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

    public function listar_escuelas()
	{

		$sql="SELECT * FROM escuelas";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

	public function guardar_fecha($escuela,$fecha,$hora1,$hora2,$detalle)
	{

		$sql="INSERT INTO detalle_escuelas (idescuela,fecha,hora1,hora2,detalle) VALUES('$escuela','$fecha','$hora1','$hora2','$detalle')";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

	public function listar_horarios()
	{

		$sql="SELECT a.iddetalle, a.idescuela,a.fecha,a.hora1,a.hora2,a.detalle, 
		(SELECT nombre FROM escuelas WHERE idescuela=a.idescuela) as nom_esc
		FROM detalle_escuelas a ORDER BY a.fecha ASC";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}
	
	public function listar_horarios_det($escuela)
	{
		$sql="SELECT a.iddetalle, a.idescuela,a.fecha,a.hora1,a.hora2,a.detalle, 
		(SELECT nombre FROM escuelas WHERE idescuela=a.idescuela) as nom_esc
		FROM detalle_escuelas a WHERE idescuela = '$escuela' ORDER BY fecha ASC";

		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

	public function update_fecha($iddetalle,$fecha,$hora1,$hora2,$detalle)
	{

		$sql="UPDATE detalle_escuelas SET fecha='$fecha', hora1='$hora1', hora2='$hora2', detalle='$detalle' WHERE iddetalle='$iddetalle'";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

	public function elim($iddetalle)
	{

		$sql="DELETE FROM detalle_escuelas WHERE iddetalle='$iddetalle'";
		//return ejecutarConsultaSimpleFila($sql);
		return ejecutarConsulta($sql);			
	}

   
}

?>