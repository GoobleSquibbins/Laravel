<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('ujikom.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="paket">
    <div class="container-card">
        <h1>Edit Paket</h1>
        <form action="{{ route('edit_paket') }}" method="post">
            {{ csrf_field() }}
            @foreach ( $data as $d )
            <input type="hidden" name="id_paket" value="{{$d->id_paket}}">
                <div class="txt_field">
                    <input type="text" name="nama_paket" placeholder="Nama Paket" value="{{$d->nama_paket}}">
                </div>
                <div class="txt_field">
                    <input type="text" name="harga" placeholder="Harga Paket" value="{{$d->harga}}">
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
