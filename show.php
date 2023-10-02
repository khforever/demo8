<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //connection
    try {
        $pdo = new pdo("mysql:host=localhost;dbname=test1", "root", "");
        //query
        $id = $_GET['id'];
        $data = $pdo->query("select * from students where id='$id'");
        $row = $data->fetch(pdo::FETCH_ASSOC);
    ?>
        <ul>
            <li><?php echo $row['fname']  ?></li>
            <li><?php echo $row['lname']  ?></li>
            <li><?php echo $row['email']  ?></li>
            <li><?php echo $row['address']  ?></li>
        </ul>
    <?php
    } catch (PDOException $e) {
        echo $e;
    }

    //close
    $pdo = null;
    ?>
</body>

</html>