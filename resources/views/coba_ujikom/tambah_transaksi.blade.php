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
    <div class="container-card">
        <h1>Tambah Transaksi</h1>
        <form action="{{ route('add_transaksi') }}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->user_id}}">
            <input type="hidden" name="tanggal" placeholder="Tanggal" value="{{$tgl}}">
            <div class="txt_field">
                <input type="text" name="nama_client" placeholder="Nama Client">
            </div>
            <div class="txt_field">
                <input type="text" name="tlp" placeholder="Nomor Telepon">
            </div>
            <div class="dropdown">
                <select name="jenis_paket">
                    @foreach ($data2 as $d2)
                        <option value="{{$d2->id_jenis_paket}}">{{$d2->jenis_paket}}</option>
                    @endforeach
                </select>
            </div>
            <div class="dropdown">
                <select name="paket" id="paket">
                    @foreach ($data as $d)
                        <option value="{{$d->id_paket}}">{{$d->nama_paket}}</option>
                    @endforeach
                </select>
            </div>
            <div class="txt_field">
                <input type="text" name="qty" placeholder="Quantity">
            </div>
            <button class="btn-submit" type="submit">Submit</button>
        </form>
        <div class="error">
            @if ($errors -> any())
        @foreach ($errors->all() as $err)
            <p>{{$err}}</p>
        @endforeach
        @endif
    </div>
    </div>
</body>
</html>