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
                    <a href="{{route('paket')}}"><button class="btn-back-paket">Back</button></a>
                    <a href="{{route('d_add_jenis_paket')}}"><button class="btn-tambah-paket">Tambah Jenis Paket</button></a>
                </div>
                <table class="table-paket">
                    <thead>
                        <tr>
                            <th>ID Jenis Paket</th>
                            <th>Jenis Paket</th>
                            <th>Waktu Pengerjaan</th>
                            <th>Biaya Tambahan / 5kg</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $p)
                          <tr>
                                <td>{{$p->id_jenis_paket}}</td>
                                <td>{{$p->jenis_paket}}</td>
                                <td>{{$p->waktu_pengerjaan}} hari</td>
                                <td>Rp. {{$p->biaya_tambahan}}</td>
                                <td>
                                    <a href="/edit_jenis_paket/{{$p->id_jenis_paket}}"><button class="action-btn" id="edit">Edit</button></a>    
                                    <a href="/hapus_jenis_paket/{{$p->id_jenis_paket}}"><button class="action-btn" id="delete">Hapus</button></a>    
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