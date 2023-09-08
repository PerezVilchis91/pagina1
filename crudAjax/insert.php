<?php
include('conexion.php');
$conectar=conexion();

$id=null;
$name=$_POST['name'];
$apellido=$_POST['lastname'];
$usuario=$_POST['username'];
$pass=$_POST['password'];
$email=$_POST['email'];

$sql="INSERT INTO users VALUES('$id','$name','$apellido','$usuario','$pass','$email')";
$query=mysqli_query($conectar,$sql);

if($query){
    header("Location:index.php");
};
?>