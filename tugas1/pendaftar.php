<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            border-collapse: collapse;
            font-size: 15px;
            border: 1px solid #cccccc;
        }
        .table3 {
            margin: 10px 5px;
            border-radius: 10px;
            background-color:#E9967A ;
            border: 0px;
            height: 40px;
            font-weight: bold;
        }
        .tombol {
            text-decoration:none;
            color: black;
        }
        td {
            padding: 3px 40px ;
            height: 20px;
        }
        th {
            background-color: #E9967A;
            color: black;
            height: 30px;
        }
        h3 {
            font-weight: 600;
            color: black;
            text-align: center;
        }

        .btn-delete {
            border: 1px solid #db5d59;
            height: 22px;
            padding-left: 15px;
            padding-top: 5px;
        }
        .btn-update {
            border: 1px solid #00b3a8;
            height: 22px;
            padding-left: 15px;
            padding-top: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h3>DAFTAR MAHASISWA</h3>
    </header>
    
    <table class="table3">
        <td>
            <a class="tombol" href="daftar.php">Tambah Baru</a>
        </td>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$siswa["Id"]."</td>";
                echo "<td>".$siswa["Nama"]."</td>";
                echo "<td>".$siswa["Jurusan"]."</td>";
                echo "<td>".$siswa["Alamat"]."</td>";
                
                echo "<td>";
                echo "<a href='edit.php?id=".$siswa['Id']."'><input type='button' >Edit</a> | ";
                echo "<a href='hapus.php?id=".$siswa['Id']."'><input type='button' >Hapus</a>";
                echo "</td>";
                echo "</tr>";
            
            }
            ?>
        </tbody>
    </table>
</body>
</html>
