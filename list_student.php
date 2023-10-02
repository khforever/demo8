<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Studensts</title>
</head>

<body>
    <a href="add_student.php">Add student </a>

    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php
            //connection
            try {
                $pdo = new pdo("mysql:host=localhost;dbname=test1", "root", "");
                //query
                $data =  $pdo->query("select * from students");
                $students = $data->fetchAll(PDO::FETCH_ASSOC);
            } catch (pdoexception $e) {
                echo $e;
            }
            foreach ($students as $student) {
            ?>
                <tr>
                    <td><?php echo  $student['id'] ?></td>
                    <td><?php echo  $student['fname'] ?></td>
                    <td><?php echo  $student['lname'] ?></td>
                    <td><?php echo  $student['email'] ?></td>
                    <td><?php echo  $student['address'] ?></td>
                    <td><a href="show.php?id=<?php echo  $student['id']?>">Show </a>
                        <a href="delete.php?id=<?php echo  $student['id']?>">Delete </a>
                        <a href="edit.php?id=<?php echo  $student['id']  ?>">Edit </a>
                    </td>
                </tr>
            <?php
            }
            //close
            $pdo = null;

            ?>

        </tbody>
    </table>

</body>

</html>