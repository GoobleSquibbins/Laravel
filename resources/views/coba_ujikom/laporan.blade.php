<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href=laporan.css>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>
<body class="struk">
    <div class="wrapper">
        <div class="header">
            <a href="{{route('main')}}"><h1>洗濯ラウンドリー</h1></a>
            <p>Jl. maju No. 3 Gekkoukan Mitakihara</p>
        </div>
        <div class="table-laporan">
            <table>
                <thead>
                    <th>Id Transaksi</th>
                    <th>Nama Client</th>
                    <th>Nama Paket</th>
                    <th>Qty</th>
                    <th>Telepon Client</th>
                    <th>Biaya</th>
                    <th>Tanggal</th>
                    <th>Tanggal Bayar</th>
                    <th>Bayar</th>
                    <th>Potongan</th>
                    <th>Kembali</th>
                    <th>Id Kasir</th>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                       <tr>
                            <td>{{$d->id_transaksi}}</td>
                            <td>{{$d->nama_client}}</td>
                            <td>{{$d->nama_paket}}</td>
                            <td>{{$d->qty}}</td>
                            <td>{{$d->tlp_client}}</td>
                            <td>{{$d->biaya}}</td>
                            <td>{{$d->tanggal}}</td>
                            <td>{{$d->tanggal_bayar}}</td>
                            <td>{{$d->bayar}}</td>
                            <td>{{$d->potongan}}</td>
                            <td>{{$d->kembali}}</td>
                            <td>{{$d->user_id}}</td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            window.print();
        </script>
    </div>
</body>
</html>