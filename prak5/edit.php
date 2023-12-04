<?php
 $_GET['id'];

include 'connection.php';

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM employees WHERE id='$id' ");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// print_r($result);
// exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>">

        <label for="">id</label>
        <input type="number" name="id" value="<?php echo $result[0]['id'] ?>"> <br>
        
        <label for="">name</label>
        <input type="text" name="name" value="<?php echo $result[0]['name'] ?>"> <br>
        
        <label for="">position</label>
        <input type="text" name="position" value="<?php echo $result[0]['position'] ?>"> <br>
        
        <label for="">department</label>
        <input type="text" name="department" value="<?php echo $result[0]['department'] ?>"> <br>
        
        <label for="">hire date</label>
        <input type="text" name="hire_date" value="<?php echo $result[0]['hire_date'] ?>"> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>