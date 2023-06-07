<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ujikom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="transaksi">
    <div class="the-one-who-wraps">
        <div class="card-paket">
            <div class="card-content-paket">
                <div class="top-row">
                    <div class="button-row">
                    <a href="{{route('main')}}"><button class="btn-back-paket">Back</button></a>
                    <a href="{{route('d_add_transaksi')}}"><button class="btn-tambah-paket">Tambah Transaksi</button></a>
                    <a href="{{route('old_transaksi')}}"><button class="btn-tambah-paket">Transaksi Lalu</button></a>
                </div>
                <div class="cari">
                    <form action="cari" method="post">
                        @csrf
                        <input type="text" name="cari_nama" placeholder="Cari Nama Client">
                        <input type="submit" hidden>
                    </form>
                </div>
                </div>
                <table class="table-paket">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Nama Client</th>
                            <th>Telepon Client</th>
                            <th>Jenis Paket</th>
                            <th>Paket</th>
                            <th>Quantity</th>
                            <th>Biaya</th>
                            <th>Tanggal</th>
                            <th>Tanggal Ambil</th>
                            <th>User ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $p)
                          <tr>
                                <td>{{$p->id_transaksi}}</td>
                                <td>{{$p->nama_client}}</td>
                                <td>{{$p->tlp_client}}</td>
                                <td>{{$p->jenis_paket}}</td>
                                <td>{{$p->nama_paket}}</td>
                                <td>{{$p->qty}}</td>
                                <td>{{$p->biaya}}</td>
                                <td>{{$p->tanggal}}</td>
                                <td>{{$p->tanggal_ambil}}</td>
                                <td>{{$p->user_id}}</td>
                                <td>
                                    <a href="/edit_transaksi/{{$p->id_transaksi}}"><button class="action-btn" id="edit">Edit</button></a>    
                                    <a href="/delete_transaksi/{{$p->id_transaksi}}"><button class="action-btn" id="delete">Hapus</button></a>    
                                    <a href="/bayar/{{$p->id_transaksi}}"><button class="action-btn" id="delete">Bayar</button></a>    
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