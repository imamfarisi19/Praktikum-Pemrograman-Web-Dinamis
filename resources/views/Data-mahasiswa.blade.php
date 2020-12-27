<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h4>Data Mahasiswa</h4>
    </div>
    <div><a href="{{ route('create-mahasiswa') }}">Tambah Data</a></div>
    <div>
        <table border="1">
            <tr>
                <th style="1%">#</th>
                <th style="30%">Nama</th>
                <th style="50%">Alamat</th>
                <th style="5%">Aksi</th>
            </tr>
            @foreach ($dtMhs as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>
                    <a href="{{ url('edit-mahasiswa',$item->id)}}">Edit</a>
                </td>
                <td>
                    <a href="#">Hapus</a>
                </td>
            </tr>
            @endforeach 
        </table>
    </div>
</body>
</html>
