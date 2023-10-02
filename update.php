<?php

try {
    //connection
    $pdo = new pdo("mysql:host=localhost;dbname=test1", "root", "");
    //query

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    
    // $pdo->query("UPDATE students
    // SET fname ='$fname', lname ='$lname', email='$email',address='$address'
    // WHERE id= '$id'");

    $data = $pdo->prepare("UPDATE students
     SET fname =?, lname =?, email=?,address=?
     WHERE id= ?");
    $data->execute([$fname, $lname, $email, $address, $id]);

    header("Location:list_student.php");

} catch (PDOException $e) {
    echo $e;
}

$pdo = null;
