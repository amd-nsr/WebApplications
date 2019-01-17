<?php 
include"config.php";
function createDB($DBName){
    $host="localhost";
    $user="root";
    $password="mysql";
    try{
    $pdo=new PDO("mysql:host=$host",$user,$password);
    $pdo->exec("DROP DATABASE IF EXISTS $DBName;");
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $DBName;") or die(print_r($pdo->errorInfo(),true));
    }
    catch(PDOException $e){
        die("Error:". $e->getMessage());
    }
}

createDB("webtask");

include"database.php";
$db=new database();
$result=$db->Execute(file_get_contents('webtask.sql'));
echo $result;
if($result > 0 )
    echo"Databse Create Successfuly";
else
    echo "Error <br>";
    
?>