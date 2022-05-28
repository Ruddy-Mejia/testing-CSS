<?php
$conn = mysqli_connect("localhost", "root", "", "ilc");
if (!$conn) {
    die("No hay conexion: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
$prop = $_POST['propuesta'];


$insertar = "insert into hotel(nombre, ubicacion, descripcion) values ('$nombre','$ubicacion','$propuesta')";
$query = mysqli_query($conn,$query);

if($query){
    /*echo '<script> alert("Guardado correctamente");}
    location.href = "../index.html";
    </script>';*/
    echo "correcto";
}else{
    echo "incorrecto";
}

?>
