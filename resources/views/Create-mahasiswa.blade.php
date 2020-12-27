<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Tambah Data Mahasiswa</div>
    <div>
        <form action="{{ route('simpan-mahasiswa') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" id="nama" name="nama" placeholder="Nama Mahasiswa">
        </div>
        <div>
            <input type="text" id="alamat" name="alamat" placeholder="Alama Mahasiswa">
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>

    </div>
</body>
</html>