<?php 
	include 'header.php'; 

	$alerta='
	<p>Seleccione los años que quiere comparar</p>
	<form action="grafico.php">
		<select class="swal2-select" name="a1" required>
		<option disabled selected>Seleccione el 1º Año</option>';
	//select 1 año
	for ($i=date("Y"); $i >= 2000; $i-- ){//Muestra de opciones los años anteriores
		$alerta.='<option value="'.$i.'">'.$i.'</option>';
	}//Muestra de opciones los años anteriores
	$alerta.='</select>
		<select class="swal2-select" name="a2" required>
		<option disabled selected>Seleccione el 2º Año</option>';
	//select 2 año
	for ($i=date("Y"); $i >= 2000; $i-- ){//Muestra de opciones los años anteriores
		$alerta.='<option value="'.$i.'">'.$i.'</option>';
	}//Muestra de opciones los años anteriores
	$alerta.='</select>
		<input type="hidden" name="tipo_grafico" value="Comparar 2 años">
	  	<p><input type="submit" value="Realizar" class="esta-compa"></p>
	</form>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
		function preguntar() {
			Swal.fire({
			  title: "Comparar Años",
			  allowOutsideClick: false,
			  html:`<?php echo $alerta; ?>`,
			  showConfirmButton: false,
			  showCloseButton: true,
			  footer: "Esta informacion es importante",
			});
		}
	</script>
</head>
<body>
    <section class="principal">
    	<h1 style="font-weight: 600;font-size: 2rem;">Estadisticas</h1>
    	<div class="op">
	    	<a href="grafico.php?tipo_grafico=Actividad anual">
				<div class="conteiner">
					<div id="sv">
						<svg width="50" height="50" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M44 5H3.99998V17H44V5Z" fill="none" stroke="white" stroke-width="4" stroke-linejoin="round"/><path d="M3.99998 41.0301L16.1756 28.7293L22.7549 35.0301L30.7982 27L35.2786 31.368" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M44 16.1719V42.1719" stroke="white" stroke-width="4" stroke-linecap="round"/><path d="M3.99998 16.1719V30.1719" stroke="white" stroke-width="4" stroke-linecap="round"/><path d="M13.0155 43H44" stroke="white" stroke-width="4" stroke-linecap="round"/><path d="M17 11H38" stroke="white" stroke-width="4" stroke-linecap="round"/><path d="M9.99998 10.9966H11" stroke="white" stroke-width="4" stroke-linecap="round"/></svg>
						<h2>Actividad Anual</h2>
					</div>
					<div id="text">
						Muestra la actividad del año
					</div>
				</div>
			</a>
			<a  onclick="preguntar()" style="cursor: pointer;">
				<div class="conteiner">
					<div id="sv">
						<svg width="50" height="50" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 19V4" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 22L24 19L36 16" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M28 30L36 16" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M44 30L36 16" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 36L12 22" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 36L12 22" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12 44C16.4183 44 20 40.4183 20 36H4C4 40.4183 7.58172 44 12 44Z" fill="none" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M36 38C40.4183 38 44 34.4183 44 30H28C28 34.4183 31.5817 38 36 38Z" fill="none" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
						<h2>Comparar 2 años</h2>
					</div>
					<div id="text">
						Muestra y compara la actividad de 2 años seleccionados
					</div>
				</div>
			</a>
    	</div>
		
    </section>
	
    <!--
	    Actividad Anual <input type="radio" value="Anual" name="tipo_grafico" required>  <p></p>
	    Comparar 2 años <input type="radio" value="Compa" name="tipo_grafico" required>     
	    <p></p><input type="submit" value="enviar">
	-->
</body>
</html>