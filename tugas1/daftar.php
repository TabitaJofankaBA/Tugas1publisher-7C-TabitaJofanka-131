<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        legend {
            color: black;
            padding: 5px;
            background: #E9967A;
            border-radius: 5px;
        }
        label {
            color: black;
            float: left;
        }
        fieldset {
            max-width: 400px;
            border-radius: 10px;
            border-color: #E9967A;
            background:white;
        }
        input {
            border-color: #E9967A;
            border-radius: 3px;
            height: 30px;
            border: block;
        }
        input:hover {
            background: #CD5C5C;
            border-color:#E9967A;
        }
        
        /*style form*/
        .name {
            margin-right: 26px;
        }
        .address {
            margin-right: 19px;
        }
        .submit {
            cursor: pointer;
            color: black;
            background: #E9967A;
            width: 100px;
            height: 25px;
            border-radius: 4px;
            border: none;
        }
        .submit:hover {
            background: #CD5C5C;
        }
    </style>
</head>
<body>
    <div align="left">
        <form action="pendaftaran.php" method="POST">
        <fieldset>
            <legend>Data Mahasiswa</legend>
            <p>
                <label class="name" for="Nama"> Nama </label>
                <input
                    type="text"
                    name="Nama"
                    placeholder="Isikan Nama Lengkap"
                />
            </p>
            <p>
                <label class="jurusan" for="Jurusan"> Jurusan </label>
                <input
                    type="text"
                    name="Jurusan"
                    placeholder="Isikan Jurusan"
                />
            </p>
            <p>
                <label class="address" for="Alamat"> Alamat </label>
                <input
                    type="text"
                    name="Alamat"
                    placeholder="Isikan Alamat"
                />
            </p>
            <p>
                <input class="submit" 
                type="submit"
                value="Daftar"
                name="daftar"
            />
            </p>
        </fieldset>
    </form>
    </div>
</body>
</html>