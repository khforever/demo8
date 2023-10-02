<?php
//connection
$connection = new mysqli("localhost", "root", "");
if ($connection->connect_error) {
    // exit();
    die("connection faild");
}
echo "Connected successfully";

//query
$connection->query("CREATE DATABASE TEST");
$connection->query("CREATE TABLE students
 (id int not null auto_increment primary key,
fname varchar(20),
lname varchar(30),email varchar(100),address varchar(255)
)");
$connection->query("insert into students (fname,lname,email,address)
values('mohamed','Ahmed','mohamed@gmail.com','Nasr city')");

$connection->query("insert into students (fname,lname,email,address)
values('mohamed','Ahmed','mohamed@gmail.com','Nasr city')");




//close

$connection->close();
