<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ujikom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="paket">
    <div class="the-one-who-wraps">
        <div class="card-paket">
            <div class="card-content-paket">
                <div class="button-row">
                    <a href="{{route('main')}}"><button class="btn-back-paket">Back</button></a>
                    <a href="{{route('d_add_paket')}}"><button class="btn-tambah-paket">Tambah Paket</button></a>
                    <a href="{{route('jenis_paket')}}"><button class="btn-tambah-paket">Tambah Jenis Paket</button></a>
                </div>
                <table class="table-paket">
                    <thead>
                        <tr>
                            <th>ID Paket</th>
                            <th>Nama Paket</th>
                            <th>Harga Paket</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $p)
                          <tr>
                                <td>{{$p->id_paket}}</td>
                                <td>{{$p->nama_paket}}</td>
                                <td>{{$p->harga}}</td>
                                <td>
                                    <a href="/edit_paket/{{$p->id_paket}}"><button class="action-btn" id="edit">Edit</button></a>    
                                    <a href="/hapus_paket/{{$p->id_paket}}"><button class="action-btn" id="delete">Hapus</button></a>    
                                </td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>