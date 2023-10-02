<?php
//connection

try {
    $pdo = new pdo("mysql:host=localhost;dbname=test1", "root", "");

    echo "Connected Success";
    
       //query
    $pdo->query("insert into students (fname,lname,email,address)
    values('aliaa','Ali','aliaa@gmail.com','Nasr city')");
    
    echo "<br />";
    echo "Excuted";
} catch (PDOException $error) {
    echo $error;
}









//close
