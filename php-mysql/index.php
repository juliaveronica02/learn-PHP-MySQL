<?php 
// 1. Make database connection.
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Table!</title>
</head>
<body>
<div class="table-responsive" style="width: 70%; margin-left: 13%">
    <table class="table table-bordered table-hover text-center">
    <thead>
    <!-- 2. Table Header. -->
    <tr>
    <td> NPM </td>
    <td> Nama Mahasiswa </td>
    <td> Tanggal Lahir </td>
    <td> Alamat </td>
    <td> Jenis Kelamin </td>
    <td> Actions </td>
    </tr>
    </thead>
    <!-- list from the table. -->
    <?php
    // 3. from student database table.
    $sql ="SELECT * FROM mahasiswa";
    $query = mysqli_query($db, $sql);
    // 4. get data from table using looping mysqli_fetch_array.
    while($mahasiswa = mysqli_fetch_array($query)){
        echo "<tr>";
        // echo "<td>NPM data.</td>";
            echo "<td>" .$mahasiswa["Npm"]. "</td>";
        // echo "<td>Student name data.</td>";
            echo "<td>" .$mahasiswa["Nama_Mhs"]. "</td>";
        // echo "<td>Born data.</td>";
            echo "<td>" .$mahasiswa["Tgl_Lahir"]. "</td>";
        // echo "<td>Address data.</td>";
            echo "<td>" .$mahasiswa["Alamat"]. "</td>";
        // echo "<td>Gender data.</td>";
            echo "<td>" .$mahasiswa["Jenis_Kelamin"]. "</td>";
            echo "<td>";
                echo "<button class=btn-primary href='frm-edit.php?id=".$mahasiswa["Npm"]."'> Edit </button>";
                echo "&nbsp&nbsp";
                echo "<button class=btn-danger href='frm-delete.php?id=".$mahasiswa["Npm"]."'> Delete </button>";
            echo "</td>";
        echo "</tr>";
    }
    ?>
    </table>
    </div>
    <p>Student: <?php echo mysqli_num_rows($query); ?> </p>
</body>
</html>