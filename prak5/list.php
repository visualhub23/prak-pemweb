<?php
include 'connection.php';

$query = mysqli_query($connect, "SELECT * FROM employees");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!-- print_r($result); -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Tambah data</a>
    <br><br>
   

    <form action="search.php" method="get">
        <input type="text" name="keyword" placeholder="Keyword.." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        <button type="submit">Search</button>
    </form>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>position</th>
                <th>department</th>
                <th>hire_date</th>
                <th>option</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $result) : ?>
                <tr>
                    <!-- ['sama dengan nama kolom saat buat tabel mysql'] -->
                    <td><?php echo $result['id'] ?></td>
                    <td><?php echo $result['name'] ?></td>
                    <td><?php echo $result['position'] ?></td>
                    <td><?php echo $result['department'] ?></td>
                    <td><?php echo $result['hire_date'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $result['id'] ?>">edit</a>
                        <a href="delete.php?id=<?php echo $result['id'] ?>">delete</a>
                    </td>
                    
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    </body>
</html>
