<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('ujikom.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="transaksi">
    <div class="container-card">
        <h1>Pembayaran</h1>
        <form action="{{ route('bayar') }}" method="post">
            {{ csrf_field() }}
            @foreach ( $data as $d )
                <input type="hidden" name="id_transaksi" value="{{$d->id_transaksi}}">
                <input type="hidden" name="user_id" value="{{$d->user_id}}">
                    <div class="txt_field">
                        <input type="text" name="nama_client" placeholder="Nama Client" value="{{$d->nama_client}}">
                    </div>
                    <div class="txt_field">
                        <input readonly type="text" name="nama_paket" placeholder="Paket" value="{{$d->nama_paket}}">
                    </div>
                    <div class="txt_field">
                        <input readonly type="text" name="qty" placeholder="Quantity" value="{{$d->qty}}">
                    </div>
                    <div class="txt_field">
                        <label for="tgl">Tanggal Transaksi</label>
                        <input type="datetime-local" name="tanggal_bayar" placeholder="Tanggal" id="tgl" value="{{$tgl}}">
                    </div>
                    <div class="txt_field">
                        <input readomly type="text" name="biaya" placeholder="Total Biaya" value="{{$d->biaya}}">
                    </div>
                    <div class="txt_field">
                        <input type="text" name="bayar" placeholder="Bayar">
                    </div>
                    <button class="btn-submit">Ok</button>
                    <div class="error">
                            @if ($errors -> any())
                        @foreach ($errors->all() as $err)
                            <p>{{$err}}</p>
                        @endforeach
                        @endif
                    </div>
            @endforeach
                
        </form>
    </div>
</body>
</html>