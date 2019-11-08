<?php

	   $archivo = $_FILES['archivo']['name'];
     
      $Tipo=$_FILES["archivo"]["type"]; ;
      $tipoarchivo = explode("/", $Tipo);
      /*OBTENEMOS LA EXTENSION DEL ARCHIVO PARA QUE SOLO SE SUBAN ARCHIVOS .CSV*/
      $entrada1 = explode( '.', $archivo);
      $extension = $entrada1[1];


      	 if($extension == 'exe'){
      	 	 echo '<script language="javascript">alert(" Ese tipo de archivo no esta permitido, el archivo que intentas subir es de extension :  '.$extension.' ");</script>';	
      	 }else{

      	 	$target_dir = "archivos/participacion/";
            $target_file = $target_dir . basename($_FILES["archivo"]["name"]);

             if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
             	 echo  $alerta = "Propuesta Guardada con exito";
             }else{
             	  echo  $alerta = "no se movio el archivo, intentalo de nuevo";
             }


      	 }


?>