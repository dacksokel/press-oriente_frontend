<?php
/*CON ESTA LINEA DE CODIGO SE TIENE ACCESO DESDE OTRO DOMINIO PARA CREAR LOS ARCHIVOS DE LAS NOTICIAS*/
header('Access-Control-Allow-Origin: http://panelcontrol.press-oriente.com');
//header('Access-Control-Allow-Origin: http://localhost/pressorientepanelv3');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
/*FIN DEL CODIGO DE ACCESO */
require('../conectar.php');
$titulo=$_POST['titulo'];
$tipodenoticia=$_POST['tipoNoticia'];
$contenido=$_POST['contenido'];
$autoFuente=$_POST['autor'];
$video=$_POST['video'];
$imagen=$_POST['imagen'];
$leyenda=$_POST['leyenda'];
$fecha=$_POST['fecha'];

$tituloAux=$titulo;
  $titulo=str_replace(' ', '', $titulo);
  $titulo=str_replace('%', '', $titulo);
  $titulo=str_replace('°', '', $titulo);
  $titulo=str_replace('1', '', $titulo);
  $titulo=str_replace('2', '', $titulo);
  $titulo=str_replace('3', '', $titulo);
  $titulo=str_replace('4', '', $titulo);
  $titulo=str_replace('5', '', $titulo);
  $titulo=str_replace('6', '', $titulo);
  $titulo=str_replace('7', '', $titulo);
  $titulo=str_replace('8', '', $titulo);
  $titulo=str_replace('9', '', $titulo);
  $titulo=str_replace('0', '', $titulo);  
  $titulo=str_replace('.', '', $titulo);
  $titulo=str_replace(',', '', $titulo); 
  $titulo=str_replace(':', '', $titulo);
  $titulo=str_replace(';', '', $titulo);


$pagina='
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script src="../../Js/jquery-1.11.2.min.js"></script>
    <title>Press-Oriente Noticias--'.$tituloAux.'</title>
    <meta name="description" content="Press-Oriente Noticias Internacionales y mas..">
    <meta name="keywords" content="Press-Oriente">
    <link rel="stylesheet" href="../../css/paginas.css"/>
    <link rel="stylesheet" href="../../css/paginasconlink.css"/>
    <link id="page_favicon" href="../../favicon.ico" rel="icon" type="image/x-icon" />
    <script src="../../Js/jslink.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,"script","//www.google-analytics.com/analytics.js","ga");

        ga("create", "UA-49066614-1", "press-oriente.com");
        ga("send", "pageview");

    </script>
    <script>
    $(document.body).ready(publicidad);
    	
    </script>
	<link href="http://www.press-oriente.com/img/noticias/'.$imagen.'" rel="image_src" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>

<!--facebook code-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>

<!--fin code-->

   <header id="cabecera">
		
		<section id="p1">
		
		</section>
		
		<section id="logoPress1">
			<img src="../../img/logopress/logopress.gif" />			
		</section>
		<section id="p2ysocialeslogos">	
			<section id="p2">
						
			</section>
			<section id="socialesLogos">
				<article id="face1">
					<a href="https://Fb.com/Pressoriente">
						<img src="../../img/socialeslogo1/facebook.png"/>
						Fb.com/Pressoriente
					</a>	
				</article>
				<article id="twitter1">
					<a href="https://twitter.com/PressOriente">
						<img src="../../img/socialeslogo1/twitter.png"/>
							@PRESSORIENTE
					</a>
				</article>
				
				<article id="insta1">
					<img src="../../img/socialeslogo1/instangram.png"/>
					PRESSORIENTE
				</article>
			</section>	
		</section>	
	</header>

<nav id="contenedormenu">
		<ul>
			<a href="http://www.press-oriente.com/" id="inicio-press-a">
				<li  class="menu"  id="inicio-press-li">
                	<img src="../../img/iconosmenu/inicio.png">
                	Inicio
           		 </li>
			</a>
			<a href="http://www.press-oriente.com/actualidad.html">
            <li  class="menu"  id="actualidad-press">
                <img src="../../img/iconosmenu/actualidad.png">
                Actualidad
            </li>
            </a>
            <a href="http://www.press-oriente.com/sucesos.html">
            <li  class="menu"  id="sucesos-press">
                <img src="../../img/iconosmenu/sucesos.png">
                Sucesos
            </li>
            </a>
            <a href="http://www.press-oriente.com/entretenimiento.html">
            <li  class="menu"  id="entretenimiento-press">
                <img src="../../img/iconosmenu/entretenimiento.png">
                Entretenimiento
            </li>
            </a>
            <a href="http://www.press-oriente.com/salud.html">
            <li  class="menu"  id="salud-press">
                <img src="../../img/iconosmenu/salud.png">
                Salud
            </li>
            </a>
            <a href="http://www.press-oriente.com/deporte.html">
            <li  class="menu"  id="deporte-press">
                <img src="../../img/iconosmenu/deporte.png">
                Deportes
            </li>
            </a>
            <a href="http://www.press-oriente.com/inertacionales.html">
            <li  class="menu"  id="interna-press">
                <img src="../../img/iconosmenu/internacional.png">
                Internacionales
            </li>
            </a>
            <a href="http://www.press-oriente.com/detrasdelaweb.html">
            <li  class="menu"  id="detras-press">
                <img src="../../img/iconosmenu/detras.png">
                Detras de la WEB
            </li>
            </a>
            <a href="http://www.press-oriente.com/zonapress.html">
            <li  class="menu"  id="zona-press">
                <img src="../../img/iconosmenu/zona.png">
                Zona Press
            </li>
            </a>
		</ul>
	</nav>
<section id="contenedor_noticia_ar">
<section id="noticiaxlink">
<p id="fechahoralink">
		'.$fecha.'
	</p>
	<article id="titulo-noticiaslink">
		'.$tituloAux.'
	</article>
	<article id="img-noticiaslink">
		<img src="../../img/noticias/'.$imagen.'">
		<label id="leyenda-noticiaslink">
				'.$leyenda.'
			</label>
	</article>
	<article id="contenido-noticiaslink">
		'.$contenido.'
	</article>	<article id="contenido-video">		'.$video.'	</article>
	<label id="fuenteautor-noticiaslink">
		Fuente: '.$autoFuente.'
	</label>
	<br>
	<div class="fb-comments" data-href="http://www.press-oriente.com/noticias/'.$tipodenoticia.'/'.$titulo.'.html" data-numposts="30" data-colorscheme="light"></div>
	
</section>
<aside class="lado-derecho_link">
<div id="paside1">

			</div>

			<div id="paside2">

			</div>

			<section id="twtterapp">

				 <a class="twitter-timeline" href="https://twitter.com/PressOriente" data-widget-id="445020815461855232">Tweets por @PressOriente</a>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			</section>
			<section id="facebookderecho">

			  <div class="fb-like-box" data-href="https://www.facebook.com/pages/Pressoriente/600246093384650" data-width="100%" data-height="600" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>

			</section>
			
</aside>
</section>
<footer id="piedepaginaslink">
	Todos los Derechos reservados 2014-15 www.press-oriente.com
</footer>
</html>
';
/*FIN DE LA VARIABLE PAGINA WEBS*/
/*//////////////////////////////////////////////*/


  $ar=fopen('..//..//noticias/'.$tipodenoticia.'/'.$titulo.'.html',"w") or die("Problemas en la creacion");
  fputs($ar, $pagina);
  
  fclose($ar);
 $selector=mysql_query('select titulo from noticias'.$tipodenoticia , $conectar)or die("error al conectarse a base tabla noticias".$tipodenoticia);
	
	while($sel=mysql_fetch_array($selector)){
		
		if($tituloAux==$sel['titulo']){
			mysql_query("update noticias".$tipodenoticia." set  urllink='http://www.press-oriente.com/noticias/$tipodenoticia/$titulo.html'  where titulo='$tituloAux' ",$conectar)or die("error al actualizar el url del archivo");
			echo 'Se a Creado el Archivo correctamente y la direccion web es: http://www.press-oriente.com/noticias/'.$tipodenoticia.'/'.$titulo.'.html
				<br>
				<button id="cerrar-cuadrito">
					Cerrar
				</button>
			';
  
		}
	}
	
  ?>