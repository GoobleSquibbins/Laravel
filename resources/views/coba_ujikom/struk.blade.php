<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('struk.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="struk">
    <div class="wrapper">
        <div class="header">
            <a href="{{route('transaksi')}}"><h1>洗濯ラウンドリー</h1></a>
            <p>Jl. maju No. 3 Gekkoukan Mitakihara</p>
            <p>Kode Invoice : {{$kd_inv}}</p>
        </div>
        <div class="table-struk">
            @foreach ($data as $d)
                <table>
                    <tr>
                        <td>Nama Client</td>
                        <td> : </td>
                        <td>{{$d->nama_client}}</td>
                    </tr>
                    <tr>
                        <td>Nama Paket</td>
                        <td> : </td>
                        <td>{{$d->nama_paket}}</td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td> : </td>
                        <td>{{$d->qty}}</td>
                    </tr>
                    <tr>
                        <td>Biaya</td>
                        <td> : </td>
                        <td>{{$d->biaya}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td> : </td>
                        <td>{{$d->tanggal}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Bayar</td>
                        <td> : </td>
                        <td>{{$d->tanggal_bayar}}</td>
                    </tr>
                    <tr>
                        <td>Bayar</td>
                        <td> : </td>
                        <td>{{$d->bayar}}</td>
                    </tr>
                    <tr>
                        <td>potongan</td>
                        <td> : </td>
                        <td>{{$d->potongan}}</td>
                    </tr>
                    <tr>
                        <td>kembali</td>
                        <td> : </td>
                        <td>{{$d->kembali}}</td>
                    </tr>
                    <tr>
                        <td>kasir</td>
                        <td> : </td>
                        <td>{{$kasir}}</td>
                    </tr>
                </table>
            @endforeach
        </div>
        <script>
            window.print();
        </script>
    </div>
</body>
</html>