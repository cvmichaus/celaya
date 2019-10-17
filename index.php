<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  
    <title>IMIPE Instituto Municipal de Investigación, Planeación y Estadística</title>
    
    <link rel="icon"  type="image/png"  href="imipefav.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="principal.css" />
    <script src="//code.jquery.com/jquery-3.4.1.min.js" ></script> 
  
  <script type="text/javascript">
  function cargarDiv(div,url)
{
      $(div).load(url);
}
</script>

</head>
<style type="text/css" media="screen">
  .social {
  position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
  left: -20; /* Establecemos la barra en la izquierda */
  top: 30px; /* Bajamos la barra 200px de arriba a abajo */
  z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}
 
  .social ul {
    list-style: none;
  }
 
  .social ul li a {
    display: inline-block;
    color:#fff;
    background: #000;
    padding: 10px 15px;
    text-decoration: none;
    -webkit-transition:all 500ms ease;
    -o-transition:all 500ms ease;
    transition:all 500ms ease; /* Establecemos una transición a todas las propiedades */
  }
 
  .social ul li .fa-facebook {background:#3b5998;} /* Establecemos los colores de cada red social, aprovechando su class */
  .social ul li .fa-twitter {background: #00abf0;}
  .social ul li .fa-googleplus {background: #d95232;}

 
  .social ul li a:hover {
    background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
    padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
  }
</style>
<body>
  <div class="social">
    <ul>
  <li><a href="http://www.facebook.com/IMIPE-Celaya-1193637920761526/?epa=SEARCH_BOX" target="_blank" class="fa-facebook"></a></li>
  <li><a href="http://www.twitter.com/IMIPE_Celaya" target="_blank" class="fa-twitter"></a></li>
  <li><a href="http://www.googleplus.com/IMIPE_Celaya" target="_blank" class="fa-google-plus"></a></li>
    </ul>
  </div>


<!-- HEADER -->
<div id="head-top">   
         <div class="header-left">
	           <a href="index.html"><img src="imipe.png" width="160px" height="110px" title="Instituto Municipal de Investigación, Planeación y Estadística"></a>
	     </div>
	     <div class="header-center">	    
			   <b>INSTITUTO MUNICIPAL DE INVESTIGACIÓN<br> 
			   PLANEACIÓN Y ESTADÍSTICA</b><br>
			   CELAYA, GUANAJUATO, MÉXICO
	     </div>
</div>

<!-- MENU PRINCIPAL -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" style="text-align:center;padding-left: 790px;">
      
      <li class="nav-item active" style="background:#5FB404;">
        <a class="nav-link text-white font-weight-bold" style="cursor: pointer;" onclick="cargarDiv('#contenido','archivo.php');">INICIO</a>
      </li>

      <li class="nav-item dropdown" style="background:#3186b2;">
        <a class="nav-link text-white font-weight-bold"  href="#" >
          Estadísticas
        </a>        
      </li>

      <li class="nav-item" style="background:#ff6f3c;">
        <a class="nav-link text-white font-weight-bold" href="Tramites/tramites_imipe.html">Documentos</a>
      </li>

      <li class="nav-item dropdown" style="background:#e8b844;">
        <a class="nav-link text-white font-weight-bold" href="#" >
          Mapas
        </a>
       </li>

	  <li class="nav-item" style="background:#588c73;">
        <a class="nav-link text-white font-weight-bold" href="web_construccion.html">Contacto</a>
      </li>
<!--
	  <li class="nav-item" style="background:#cf4647;">
        <a class="nav-link text-white font-weight-bold" href="web_construccion.html">PROYECTOS</a>
      </li>
	  <li class="nav-item" style="background:#11999e;">
        <a class="nav-link text-white font-weight-bold" href="SIGM_CELAYA/index.html">CARTOGRAFÍA</a>
      </li>
	  <li class="nav-item dropdown" style="background:#5c715e;">
        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ESTADÍSTICA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ESTADISTICA/Estadistica.html">Estadística Básica</a>
          <a class="dropdown-item" href="web_construccion.html">Indicadores</a>
        </div>
      </li>
	  <li class="nav-item dropdown" style="background:#0881a3;">
        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TRANSPARENCIA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Transparencia_IMIPE/imipe_formatos.html">IMIPE</a>
          <a class="dropdown-item" href="Dependencias_Municipales/Dependencias.html">Dependencias</a>
          <a class="dropdown-item" href="cuenta_publica.html">Cuenta Pública</a>
        </div>
      </li> 
	  <li class="nav-item" style="background:#088A68;">
        <a class="nav-link text-white font-weight-bold" href="PDIM2019">PDIM</a>
      </li>
	  <li class="nav-item dropdown" style="background:#d4ac0d;">
        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SITIOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://td.celaya.biz:8085/SIFAECELAYA20/PreguntasFrecuentes.aspx">Tu Empresa Sí</a>
		  <a class="dropdown-item" href="http://iplaneg.guanajuato.gob.mx/">IPLANEG</a>
		  <a class="dropdown-item" href="http://sc.inegi.org.mx/cobdem/">SIMBAD</a>
		  <a class="dropdown-item" href="http://www.inegi.org.mx/ ">INEGI</a>
		  <a class="dropdown-item" href="https://www.implan.gob.mx/ ">IMPLAN LEÓN</a>
		  <a class="dropdown-item" href="http://smn.cna.gob.mx/es/ ">Sistema Meteorológico Nacional</a>
		  <a class="dropdown-item" href="https://seica.guanajuato.gob.mx/ ">SEICA</a>
        </div>
      </li>
	  <li class="nav-item" style="background:#55a44e;">
        <a class="nav-link text-white font-weight-bold" href="contacto.html">CONTACTO</a>
      </li>
-->

    </ul>
  </div>
</nav>

<!-- CONTENIDO -->
<div id="contenido">
                <div id="txthome1">
          			<center>INSTITUTO MUNICIPAL DE INVESTIGACIÓN   PLANEACIÓN Y ESTADÍSTICA</center>
              </div>

                <br><br><br><br><br><br>
               <div id="txthome2">
                
                 El instituto de investigación, Planeación y Estadística, se plantea como un organismo público descentralizado de la administración pública municipal, con personalidad jurídica y patrimonio propios; que tiene como función, auxiliar al Ayuntamiento en el cumplimiento de las funciones que le contiene la Ley Orgánica Municipal para el Estado de Guanajuato.
               
              </div>



</div>
			
<!-- PIE DE PAGINA -->
<footer id="footer">
	<div class="inner">
		<div class="content">
			<section>
				<h3>Instituto Municipal de Investigación, Planeación y Estadística.</h3>
				<p>Carretera Celaya - Salvatierra Km 4.5 Col. Rancho Seco, 38090, Celaya, Gto, México.</p>
				<a href="contacto.html#ubicacion" class='imgUb'><img src="ubicacion.png" style="width:90px; height:90px;" title="Localización"></a>
			</section>
			<section>
				<h4>Contacto</h4>
				<ul class="alt">
					<li>Teléfonos:</li>
					<li>&nbsp&nbsp&nbsp&nbsp(461) 61 8 2525</li>
					<li>&nbsp&nbsp&nbsp&nbsp(461) 61 8 2707</li>
					<li>&nbsp&nbsp&nbsp&nbsp(461) 61 8 2003</li>
					<li>&nbsp&nbsp&nbsp&nbsp(461) 61 8 2189</li>
					<li>Correo:</li>
					<li>&nbsp&nbsp&nbsp&nbspimipe@imipecelaya.org.mx</li>
				</ul>
			</section>
			<section>
			    <h4>Visitas</h4>
				<label id="labeltext"></label>
	   </div>
	</div>
</footer>
    
<script src="bootstrap/js/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



</body>
</html>