function init()
{
    listar_escuelas();
	listar_horarios();
}

function listar_escuelas(){
	
		$.post("ajax/index.php?op=listar_escuelas",function(r){
		$("#escuela").html(r);
					 
		});
}

function guardar_fecha()
{
	var escuela = $("#escuela").val();
	var fecha = $("#fecha").val();
	var hora1 = $("#hora1").val();
	var hora2 = $("#hora2").val();
	var detalle = $("#detalle").val();

	if (escuela>0 && fecha!="" && hora1!="" && hora2!="") {
		$.post("ajax/index.php?op=guardar_fecha",{escuela:escuela,fecha:fecha,hora1:hora1,hora2:hora2,detalle:detalle},function(data, status)
		{
			data = JSON.parse(data);
			alert("Registro guardado exitosamente");

			listar_horarios_det();
			
		});
	}else{
		alert("Por favor capture los datos requeridos (*)")
	}

		
}

function listar_horarios(){
	
	$.post("ajax/index.php?op=listar_horarios",function(r){
	$("#list_horarios").html(r);
				 
	});
}

function listar_horarios_det(){
	var escuela = $("#escuela").val();
	$.post("ajax/index.php?op=listar_horarios_det&escuela="+escuela,function(r){
	$("#list_horarios").html(r);
				 
	});
}

function editar_horario(iddetalle,nom_esc,fecha,hora1,hora2,detalle)
{
		bootbox.confirm({
			message: 'Editar registro para <b>'+nom_esc+'</b><br><br>'+
			'<label for="">Fecha</label><br>'+
			'<input id="fecha_u'+iddetalle+'" class="form-control" type="date" value="'+fecha+'">'+
			'<label for="">Hora1</label>'+
			'<input id="hora1_u'+iddetalle+'" class="form-control" type="time" value="'+hora1+'">'+
			'<label for="">Hora2</label>'+
			'<input id="hora2_u'+iddetalle+'" class="form-control" type="time" value="'+hora2+'">'+
			'<label for="">Detalle</label>'+
			'<input id="detalle_u'+iddetalle+'" class="form-control" type="text" value="'+detalle+'">'
			,
			buttons: {
			confirm: {
			label: 'Guardar',
			className: 'btn-success'
			},
			cancel: {
			label: 'Cancelar',
			className: 'btn-danger'
			}
			},
			callback: function (result) {
				if (result==true) {
					var fecha = $("#fecha_u"+iddetalle).val();
					var hora1 = $("#hora1_u"+iddetalle).val();
					var hora2 = $("#hora2_u"+iddetalle).val();
					var detalle = $("#detalle_u"+iddetalle).val();

					$.post("ajax/index.php?op=update_fecha",{iddetalle:iddetalle,fecha:fecha,hora1:hora1,hora2:hora2,detalle:detalle},function(data, status)
					{
						data = JSON.parse(data);
						alert("Registro actualizado exitosamente");

						var escuela = $("#escuela").val();

						if (escuela>0) {
							listar_horarios_det();
						}else{
							listar_horarios();
						}

					});
				}
			}
		});
}

function elim(iddetalle)
{

								bootbox.confirm('¿Desea eliminar este registro?',
                                function(result) {
									if (result==true) {
										$.post("ajax/index.php?op=elim",{iddetalle:iddetalle},function(data, status)
										{
											data = JSON.parse(data);
											bootbox.alert("Registro eliminado exitosamente");
											var escuela = $("#escuela").val();

											if (escuela>0) {
												listar_horarios_det();
											}else{
												listar_horarios();
											}

										});
									}
                                });



					
}


init();