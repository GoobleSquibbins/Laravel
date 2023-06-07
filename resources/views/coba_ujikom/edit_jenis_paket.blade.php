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
        <h1>Edit Jenis Paket</h1>
        <form action="{{ route('edit_jenis_paket') }}" method="post">
            {{ csrf_field() }}
            @foreach ( $data as $d )
            <input type="hidden" name="id_jenis_paket" value="{{$d->id_jenis_paket}}">
                <div class="txt_field">
                    <input type="text" name="jenis_paket" placeholder="Jenis Paket" value="{{$d->jenis_paket}}">
                </div>
                <div class="txt_field">
                    <input type="text" name="waktu_pengerjaan" placeholder="Waktu Pengerjaan" value="{{$d->waktu_pengerjaan}}">
                </div>
                <div class="txt_field">
                    <input type="text" name="biaya_tambahan" placeholder="Biaya Tambahan" value="{{$d->biaya_tambahan}}">
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
