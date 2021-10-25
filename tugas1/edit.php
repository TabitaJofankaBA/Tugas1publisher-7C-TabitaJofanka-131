<?php

include("config.php");
if( !isset($_GET['id'])){
    header('Location: pendaftar.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        fieldset {
            max-width: 400px;
            border-radius: 10px;
            border-color:#E9967A;
            background: white;
        }
        legend {
            color: black;
            padding: 5px;
            background: #E9967A;
            border-radius: 5px;
            text-align: center;

        }
        label {
            color: black;
            float: center;
        }
        input {
            border:block ;
            border-radius: 3px;
            height: 30px;
            border-color:#E9967A;
            padding: 3px;
        }
        input:hover {
            background: #CD5C5C;
            border-color:#E9967A;
        }
        
        /*style form*/
        .name {
            margin-right: 26px;
        }
        .study {
            margin-right: 19px;
        }
        .submit {
            cursor: pointer;
            color: black;
            background: #E9967A;
            width: 100px;
            height: 25px;
            border-radius: 4px;
            border:none;
    
        }
        .submit:hover {
            background: #CD5C5C;
        }
    </style>
</head>
<body>
    <div align="left">
        <form action="proses-edit.php" method="POST">
        <fieldset>
            <legend>Data Mahasiswa</legend>
            <input
                type="hidden"
                Name="Id"
                value="<?php echo
                $siswa['Id'] ?>"
            />
            <p>
                <label class="name" for="Nama">Nama </label>
                <input
                    type="text"
                    name="Nama"
                    placeholder="nama lengkap"
                    value="<?php echo $siswa['Nama'] ?>"
                />    
            </p> 
            <p>
                <label class="study" for="Jurusan">Jurusan </label>
                <input
                    type="text"
                    name="Jurusan" 
                    placeholder="Jurusan"
                    value="<?php echo $siswa['Jurusan'] ?>"
                />    
            </p>
            <p>
                <label class="addres" for="Alamat">Alamat </label>
                <input
                    type="text"
                    name="Alamat" 
                    placeholder="Alamat"
                    value="<?php echo $siswa['Alamat'] ?>"
                />    
            </p>
            <p>
                <input
                    class="submit"
                    type="submit"
                    value="Simpan"
                    Nama="simpan"
                />
            </p>
        </fieldset>
    </form>
    </div>    
</body>
</html>
