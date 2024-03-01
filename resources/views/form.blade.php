<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data Baru</title>
    <style>
        /* h1 {
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
        } */
    </style>
</head>
<body>
    <h1 class="text-center my-4"> Form Tambah Data Mahasiswa Baru </h1>
    <form action="/data-baru" method="POST" class="w-50 mx-auto border-1 p-3 border border-secondary">
        @csrf
        <div class="row m-3">
            <label class="col-sm-2 col-form-label" for="nim">NIM</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="nim" id="nim" required>
            </div>
        </div>
        <div class="row m-3">
            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nama" id="nama" required>
            </div>
        </div>
        <div class="row m-3">
            <label class="col-sm-2 col-form-label" for="prodi">Prodi</label>
            <div class="col-sm-10">
                <select class="form-select" name="prodi" id="prodi" required>
                    <option value="" selected disabled class="text-center"> Pilih  Program Studi </option>
                    <option value="Teknik Informatika"> Teknik Informatika </option>
                    <option value="Teknik Industri"> Teknik Industri </option>
                    <option value="Teknik Mesin"> Teknik Mesin </option>
                    <option value="Teknik Mekatronika"> Teknik Mekatronika </option>
                    <option value="Sistem Informasi"> Sistem Informasi </option>
                </select>
            </div>
        </div>
        <div class="row m-3">
            <label class="col-sm-2 col-form-label" for="fakultas">Fakultas</label>
            <div class="col-sm-10">
                <select class="form-select" name="fakultas" id="fakultas" required>
                    <option value="" selected disabled class="text-center"> Pilih Fakultas </option>
                    <option value="Teknik"> Teknik </option>
                    <option value="Pendidikan"> Pendidikan </option>
                </select>
            </div>
        </div>
        <div class="row m-3">
            <label class="col-sm-3 col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
            <div class="col-sm-9 text-left">
                <input class="form-check-input mx-3" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P"> Perempuan
                <input class="form-check-input mx-3" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-laki
            </div>
        </div>        
        <div class="m-3 text-center">
            <input type="submit" value="Tambah Data" class="btn btn-primary">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>