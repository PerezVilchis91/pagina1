
<?php
include('conexion.php');
$conectar=conexion();
$resp;
$sql="SELECT * FROM users";
$query=mysqli_query($conectar,$sql);
$users = array();

while($row=mysqli_fetch_array($query)) {
    $users[]=$row;
}

$resp=json_encode($users);
echo $resp;

$conectar->close();
?>