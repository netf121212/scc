<?php
define("host","localhost");
define("user","root");
define("pass","");
define("name","scc_member");
$con = mysqli_connect(host,user,pass,name);
if(mysqli_errno($con)){
    die("Error while connecting to DB". mysqli_connect_error());}
?>


