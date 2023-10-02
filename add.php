<?php

try {
    //conncetion
    $pdo = new pdo("mysql:host=localhost;dbname=test1", "root", "");
    echo "Connected";
    var_dump($_POST);

    //query
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // $pdo->query("insert into students (fname,lname,email,address)
    // values('{$_POST['fname']}','{$_POST['lname']}','{$_POST['email']}','{$_POST['address']}')");

    $pdo->query("insert into students (fname,lname,email,address)
    values('$fname','$lname','$email','$address')");
    header("Location:list_student.php");
} catch (pdoexception $e) {
    echo $e;
}

//close
$pdo = null;
