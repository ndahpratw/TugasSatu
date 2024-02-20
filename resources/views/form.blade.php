<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Baru</title>
    <style>
        h1 {
            text-align: center;
        } form {
            border: 1px solid black;
            width: 50%;
            margin: 0px auto;
            padding: 15px;
            text-align: center
        } label {
            font-weight: bolder;
        } div {
            margin: 10px;
        } button {
            margin: 15px;
        }
    </style>
</head>
<body>
    <h1> Form Tambah Data Baru </h1>
    <form action="/data-baru" method="POST">
        @csrf
        <div>
            <label for="">NIM</label>
            <br>
            <input type="number" name="nim" id="">
        </div>
        <div>
            <label for="">Nama</label>
            <br>
            <input type="text" name="nama" id="">
        </div>
        <div>
            <label for="">Prodi</label>
            <br>
            <select name="prodi" id="">
                <option value="" selected disabled>------ Program Studi ------</option>
                <option value="Teknik Informatika"> Teknik Informatika </option>
                <option value="Teknik Industri"> Teknik Industri </option>
                <option value="Teknik Mesin"> Teknik Mesin </option>
                <option value="Teknik Mekatronika"> Teknik Mekatronika </option>
                <option value="Sistem Informasi"> Sistem Informasi </option>
            </select>
        </div>
        <div>
            <label for="">Fakultas</label>
            <br>
            <select name="fakultas" id="">
                <option value="" selected disabled>---------- Fakultas ----------</option>
                <option value="Teknik"> Teknik </option>
                <option value="Pendidikan"> Pendidikan </option>
            </select>
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <br>
            <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
        </div>        
        <button type="submit">Tambah Data</button>
    </form>
</body>
</html>