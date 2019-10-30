<?php

	 $nombre = $_POST['nombre'];    
	 $edad = $_POST['edad'];          
	 $propuesta = $_POST['propuesta'];    
	 $clasificacion = $_POST['clasificacion'];   

	 $target_dir = "propuestas/";
$target_file = $target_dir . basename($_FILES["archivod"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

 $maxsize  = 100000000;
 $archivo = $_FILES['archivod']['name'];


 if($imageFileType != "pdf" ) {
    echo "Sorry, Solo archivos PDF.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

			  if (move_uploaded_file($_FILES["archivod"]["tmp_name"], $target_file)) {


			  }
				else {
				echo "Sorry, there was an error uploading your file.";
				}

}

?>