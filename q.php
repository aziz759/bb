<?php
$con=mysqli_connect("localhost","root","","clinet") or die("probleùe ");
$nom=$_POST["c1"];
$prenom=$_POST["c2"];
$genre=$_POST["r1"];
$r="insert into clinet(nom,prenom,genre) values('$nom','$prenom','$genre')";
$res=mysqli_query($con,$r);
?>
