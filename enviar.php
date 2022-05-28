<?php
 $conectar = mysqli_connect('localhost','root','nomelase','form');

 if(!$conectar){
     echo "No conectado";
 }

 $nombres = $_POST['nombres'];
 $email = $_POST['email'];

 $sql = "INSERT INTO datos(nombres, email) VALUES ('$nombres', '$email')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>