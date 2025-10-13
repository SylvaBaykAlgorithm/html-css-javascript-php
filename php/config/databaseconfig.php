<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "sylvabayk00";
$db_name ="ashwoodconstructionsql";
$db_conn = "";

try{
$db_conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
echo "Connected Sucessfully";
}catch(Exception $e){
    echo "".$e->getMessage()."";
}
?>