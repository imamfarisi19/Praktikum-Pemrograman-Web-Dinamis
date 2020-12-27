<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Ubah Data Mahasiswa</div>
    <div>
        <form action="{{ url('update-mahasiswa',$dtMhs) }}" method="POST">
            {{ csrf_field() }}
            <div>
                <input type="text" id="nama" name="nama" placeholder="Nama Mahasiswa" value="{{ $dtMhs->nama }}">
            </div>
            <div>
                <input type="text" id="alamat" name="alamat" placeholder="Alamat Mahasiswa" value="{{ $dtMhs->alamat }}">
            </div>
            <div>
                <button type="submit">Ubah</button>
            </div>
        </form>
    </div>
</body>
</html>
