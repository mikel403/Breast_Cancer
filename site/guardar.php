<?php
	$conectar=@mysqli_connect('localhost','root','');
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{
		$base=mysqli_select_db($conectar,'breast_cancer');
		if(!$base){
			echo "No Se Encontro La Base De Datos";
		}
	}
	$id=$_POST["id"];
	$edad=$_POST["edad"];
	$sexo=$_POST["sexo"];
	$consulta=$_POST["consulta"];
	$numeroseguimiento=$_POST["numeroseguimiento"];
	$alteraciones=$_POST["alteraciones"];

	$mama=$_POST["mama"];
	$antecedentes=$_POST["antecedentes"];
	$resultados_mamografia=$_POST["resultados_mamografia"];
	$resultados_resonancia=$_POST["resultados_resonancia"];

	$mama_eco=$_POST["mama_eco"];
	$zona=$_POST["zona"];
	$tejido=$_POST["tejido"];
	$nodulos=$_POST["nodulos"];

	$forma=$_POST["forma"];
	$margen=$_POST["margen"];
	$orientacion=$_POST["orientacion"];
	$ecogenicidad=$_POST["ecogenicidad"];
	$posterior=$_POST["posterior"];
	$halo=$_POST["halo"];
	$sugestividad=$_POST["sugestividad"];
	$birads=$_POST["birads"];

	$forma2=$_POST["forma2"];
	$margen2=$_POST["margen2"];
	$orientacion2=$_POST["orientacion2"];
	$ecogenicidad2=$_POST["ecogenicidad2"];
	$posterior2=$_POST["posterior2"];
	$halo2=$_POST["halo2"];
	$sugestividad2=$_POST["sugestividad2"];
	$birads2=$_POST["birads2"];

	$forma3=$_POST["forma3"];
	$margen3=$_POST["margen3"];
	$orientacion3=$_POST["orientacion3"];
	$ecogenicidad3=$_POST["ecogenicidad3"];
	$posterior3=$_POST["posterior3"];
	$halo3=$_POST["halo3"];
	$sugestividad3=$_POST["sugestividad3"];
	$birads3=$_POST["birads3"];

	$forma4=$_POST["forma4"];
	$margen4=$_POST["margen4"];
	$orientacion4=$_POST["orientacion4"];
	$ecogenicidad4=$_POST["ecogenicidad4"];
	$posterior4=$_POST["posterior4"];
	$halo4=$_POST["halo4"];
	$sugestividad4=$_POST["sugestividad4"];
	$birads4=$_POST["birads4"];

	$forma5=$_POST["forma5"];
	$margen5=$_POST["margen5"];
	$orientacion5=$_POST["orientacion5"];
	$ecogenicidad5=$_POST["ecogenicidad5"];
	$posterior5=$_POST["posterior5"];
	$halo5=$_POST["halo5"];
	$sugestividad5=$_POST["sugestividad5"];
	$birads5=$_POST["birads5"];

	$mensaje=$_POST["mensaje"];

	$sql="INSERT INTO datos VALUES('$id',
									'$edad',
									'$sexo',
									'$consulta',
									'$numeroseguimiento',
								    '$alteraciones',
									'$mama',
									'$antecedentes',
									'$resultados_mamografia',
									'$resultados_resonancia',
									'$mama_eco',
									'$zona',
									'$tejido',
									'$nodulos',
									'$forma',
									'$margen',
									'$orientacion',
									'$ecogenicidad',
									'$posterior',
									'$halo',
									'$sugestividad',
									'$birads',
									'$forma2',
									'$margen2',
									'$orientacion2',
									'$ecogenicidad2',
									'$posterior2',
									'$halo2',
									'$sugestividad2',
									'$birads2',
									'$forma3',
									'$margen3',
									'$orientacion3',
									'$ecogenicidad3',
									'$posterior3',
									'$halo3',
									'$sugestividad3',
									'$birads3',
									'$forma4',
									'$margen4',
									'$orientacion4',
									'$ecogenicidad4',
									'$posterior4',
									'$halo4',
									'$sugestividad4',
									'$birads4',
									'$forma5',
									'$margen5',
									'$orientacion5',
									'$ecogenicidad5',
									'$posterior5',
									'$halo5',
									'$sugestividad5',
									'$birads5',
									'$mensaje')";
	


	$ejecutar=mysqli_query($conectar,$sql);
	if(!$ejecutar){
		echo "Hubo Algun Error";
	}else{
		echo "Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>