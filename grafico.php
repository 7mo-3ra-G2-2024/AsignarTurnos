<?php  
	include 'header.php';
	$tipo=filter_input(INPUT_GET, 'tipo_grafico');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php echo $tipo; ?></title>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<script type="text/javascript">
		var xValues = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio" , "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
		var yValues = [1,3,4,5,6,6,7,1,7,3,10,4];
		var yValues2 = [5,7,2,8,1,9,4,6,3,5,9,7];
		var barColors = "rgba(54,162,235,0.2)";

	</script>
</head>
<body>
	<?php 
		if ($tipo=="Actividad anual") {//SI ELIGE 'Actividad anual'
		$a_ac=date("Y");
	?>
		<section>
			<h1>Actividad <?php echo $a_ac; ?></h1>
			<canvas id="anio_ac" style="width:100%;max-width:800px;"></canvas>	
			<!--JS para hacer los Graficos-->
			<script>//ACTIVIDAD ANUAL
				new Chart("anio_ac", {//ANIO ACTUAL
				  type: "line",
				  data: {
				    labels: xValues,
				    datasets: [{
				      backgroundColor: barColors,
				      borderColor: "rgba(54,162,235,1)",
				      data: yValues,
				      label: "Año <?php echo $a_ac ?>"
				    }]
				  },
				  
				});//ANIO ACTUAL
			</script>
		</section>
	<?php
		}//SI ELIGE 'Actividad anual'

		else if ($tipo=="Comparar 2 años" && $_GET['a1']!=$_GET['a2']) {//SI ELIGE 'comparar 2 años'	
			$anio1=$_GET['a1'];
			$anio2=$_GET['a2'];
	?>	
		<section>
			<h1>Comparacion entre el <?php echo $anio1." y ".$anio2; ?></h1>
			<canvas id="a1" style="width:100%;max-width:500px;"></canvas>
			<!--JS para hacer los Graficos-->
			<script>//COMPARAR 2 AÑOS	

				const datos={
					label: "Año <?php echo $anio1?>",
					data: yValues,
					backgroundColor: 'rgba(54,162,235,0.2)',
					borderColor: 'rgba(54,162,235,1)',
					borderWidth: 1,
				};

				const datos2={
					label: "Año <?php echo $anio2?>",
					data: yValues2,
					backgroundColor: 'rgba(255, 94, 51 ,0.2)',
					borderColor: 'rgba(255, 94, 51 ,1)',
					borderWidth: 1,
				};

				new Chart("a1", {//ANIO1
				  type: "line",
				  data: {
				    labels: xValues,
				    datasets: [
				    	datos,
				    	datos2
				    ]
				  },
				});//ANIO1

			</script>
		</section>
	<?php
		}//SI ELIGE 'comparar 2 años'
		else {//SI NO SUCEDE ninguno de los otros 2 condicionales   
			echo "<center>
			<h1>ERROR!!. Vuelva a la anterior pagina</h1>
			<a href='selecionarano.php'>Volver</a>
			</center>";
		}//SI NO SUCEDE ninguno de los otros 2 condicionales
	 ?>

</body>
</html>