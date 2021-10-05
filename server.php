<?php 
include "connection.php";
$q=trim($_GET['q']);
$sql="SELECT * FROM stars WHERE (nombre LIKE '$q')";
$res=mysqli_query($conn,$sql);
$msg="<ul>";
while ($row=mysqli_fetch_assoc($res)) {
    $msg=$msg."<li>".$row['nombre']." ".$row['apellido']."</li>";
}
$msg=$msg."</ul>";
mysqli_close($conn);
echo $msg;
?>