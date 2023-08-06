<?php
require_once "../modelos/Index.php";

$index=new Index();


switch ($_GET["op"]){
	

	case 'listar_escuelas':

		$rspta = $index->listar_escuelas();

					echo '
						<option value="">Seleccionar</option>
					';
			
		while ($reg = $rspta->fetch_object())
				{
					
					echo '
						<option value="'.$reg->idescuela.'">'.$reg->nombre.'</option>
					';
					
				}

	break;

	case 'guardar_fecha':

		$escuela = $_POST['escuela'];
		$fecha = $_POST['fecha'];		
		$hora1 = $_POST['hora1'];
		$hora2 = $_POST['hora2'];
		$detalle = $_POST['detalle'];

		$rspta=$index->guardar_fecha($escuela,$fecha,$hora1,$hora2,$detalle);
		 echo json_encode($rspta);
		 
	break;

	case 'listar_horarios':

		$rspta = $index->listar_horarios();
			
		while ($reg = $rspta->fetch_object())
				{
					
					echo '
					<div class="col-sm-12" style="border-top: rgba(0,0,0,0.2) 1px solid; padding: 20px; height: 110px;">
						<div class="col-sm-3" style="float: left; height: 70px;">
							<label for="">Escuela</label><br>
							<b>'.$reg->nom_esc.'</b>
						</div>
						<div class="col-sm-2" style="float: left; height: 70px;">
							<label for="">Fecha</label><br>
							<b>'.$reg->fecha.'</b>
						</div>						
						<div class="col-sm-3" style="float: left; height: 70px;">
							<label for="">Horario</label><br>
							<b>'.$reg->hora1.' - '.$reg->hora2.'</b>
						</div>
						<div class="col-sm-3" style="float: left; height: 70px;">
							<label for="">Detalle</label><br>
							<b>'.$reg->detalle.'</b>
						</div>
						<div class="col-sm-1" style="float: left; height: 70px;">
							<button class="form-control" style="background-color: #031437; color: #fff;" onclick="editar_horario('.$reg->iddetalle.',\''.$reg->nom_esc.'\',\''.$reg->fecha.'\',\''.$reg->hora1.'\',\''.$reg->hora2.'\',\''.$reg->detalle.'\')">Editar</button>
							<button class="form-control" style="background-color: #AE0803; color: #fff;" onclick="elim('.$reg->iddetalle.');">Eliminar</button>
						</div>
					</div> 
					';
					
				}

	break;

	case 'listar_horarios_det':
		$escuela = $_GET['escuela'];
		$rspta = $index->listar_horarios_det($escuela);
			
		while ($reg = $rspta->fetch_object())
				{
					
					echo '
					<div class="col-sm-12" style="border-top: rgba(0,0,0,0.2) 1px solid; padding: 20px; height: 110px;">
						<div class="col-sm-3" style="float: left; height: 70px;">
							<label for="">Escuela</label><br>
							<b>'.$reg->nom_esc.'</b>
						</div>
						<div class="col-sm-2" style="float: left; height: 70px;">
							<label for="">Fecha</label><br>
							<b>'.$reg->fecha.'</b>
						</div>						
						<div class="col-sm-3" style="float: left; height: 70px;">
							<label for="">Horario</label><br>
							<b>'.$reg->hora1.' - '.$reg->hora2.'</b>
						</div>
						<div class="col-sm-3" style="float: left; height: 70px;">
							<label for="">Detalle</label><br>
							<b>'.$reg->detalle.'</b>
						</div>
						<div class="col-sm-1" style="float: left; height: 70px;">
							<button class="form-control" style="background-color: #031437; color: #fff;" onclick="editar_horario('.$reg->iddetalle.',\''.$reg->nom_esc.'\',\''.$reg->fecha.'\',\''.$reg->hora1.'\',\''.$reg->hora2.'\',\''.$reg->detalle.'\')">Editar</button>
							<button class="form-control" style="background-color: #AE0803; color: #fff;" onclick="elim('.$reg->iddetalle.');">Eliminar</button>
						</div>
					</div> 
					';
					
				}

	break;

	case 'update_fecha':

		$iddetalle = $_POST['iddetalle'];
		$fecha = $_POST['fecha'];		
		$hora1 = $_POST['hora1'];
		$hora2 = $_POST['hora2'];
		$detalle = $_POST['detalle'];

		$rspta=$index->update_fecha($iddetalle,$fecha,$hora1,$hora2,$detalle);
		 echo json_encode($rspta);
		 
	break;

	case 'elim':

		$iddetalle = $_POST['iddetalle'];

		$rspta=$index->elim($iddetalle);
		 echo json_encode($rspta);
		 
	break;
	
}
?>