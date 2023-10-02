<?php


//connection

try {
    $id = $_GET['id'];
    $pdo = new pdo("mysql:host=localhost;dbname=test1", "root", "");
    //query
    $pdo->query("delete from students where id='$id'");
    header("Location:list_student.php");
} catch (PDOException $e) {
    echo $e;
}

//close
$pdo = null;
