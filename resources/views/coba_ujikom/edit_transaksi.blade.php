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
        <h1>Edit Transaksi</h1>
        <form action="{{ route('edit_transaksi') }}" method="post">
            {{ csrf_field() }}
            @foreach ( $data as $d )
                <input type="hidden" name="id_transaksi" value="{{$d->id_transaksi}}">
                <input type="hidden" name="user_id" value="{{$d->user_id}}">
                <input type="hidden" name="nama_paket" value="{{$d->nama_paket}}">
                <input type="hidden" name="jenis_paket" value="{{$d->jenis_paket}}">
                    <div class="txt_field">
                        <input type="text" name="nama_client" placeholder="Nama Client" value="{{$d->nama_client}}">
                    </div>
                    <div class="txt_field">
                        <input type="text" name="tlp" placeholder="Nomor Telepon" value="{{$d->tlp_client}}">
                    </div>
                    <div class="txt_field">
                        <input type="text" name="qty" placeholder="Quantity" value="{{$d->qty}}">
                    </div>
                    <div class="txt_field">
                        <input readonly type="datetime-local" name="tanggal" placeholder="Tanggal" value="{{$d->tanggal}}">
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