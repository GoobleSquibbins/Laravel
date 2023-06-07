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
                <div class="button-row">
                    <a href="{{route('transaksi')}}"><button class="btn-back-paket">Back</button></a>
                    <a href="{{route('clear_all')}}"><button class="btn-back-paket">Hapus semua histori transaksi</button></a>
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
                            <th>Tanggal Dibayar</th>
                            <th>Potongan</th>
                            <th>Bayar</th>
                            <th>Kembalian</th>
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
                                <td>{{$p->tanggal_bayar}}</td>
                                <td>{{$p->potongan}}</td>
                                <td>{{$p->bayar}}</td>
                                <td>{{$p->kembali}}</td>
                                <td>{{$p->user_id}}</td>
                                <td> 
                                    <a href="/delete_transaksi/{{$p->id_transaksi}}"><button class="action-btn" id="delete">Hapus</button></a> 
                                    <a href="/struk/{{$p->id_transaksi}}"><button class="action-btn" id="delete_old">Struk</button></a> 
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