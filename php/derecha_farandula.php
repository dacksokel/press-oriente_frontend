<?php
require("conectar.php");
$respuesta="";
for($i=1;$i<=5;$i++){
	$respuesta=$respuesta.mostrar_derecha($conectar, $i);
}

echo $respuesta;

function mostrar_derecha($conectar,$numerito){
$selector=mysqli_query($conectar, 'select titulo,contenido,autor,video,imagen,fecha,hora,posicion,id,publicar,urllink from noticiasfarandula')or die("error al conectarse a la tabla de farandula ");
$respuestadar="";
while($sel=mysqli_fetch_array($selector)){
		
		if($sel['publicar']=='si'&&$numerito==$sel['posicion']){
			
						$respuestadar='
						<a href="'.$sel['urllink'].'">						
								<div class="imagenderecha" id="derechafarandula">
									<img src="'.$sel['imagen'].'">
								</div>
							<div class="minicontenidoderecha" id="mincontderecha">
								'.substr($sel['titulo'],0,100).'.....
							</div>
						</a>
						';
						break;
				}
		}

 return $respuestadar;
}
?>