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
    <div class="container-card">
        <h1>Tambah Paket</h1>
        <form action="{{ route('add_paket') }}" method="post">
            @csrf
            <div class="txt_field">
                <input type="text" name="nama_paket" placeholder="Nama Paket">
            </div>
            <div class="txt_field">
                <input type="text" name="harga" placeholder="Harga Paket">
            </div>
            <button class="btn-submit">Ok</button>
            <div class="error">
                    @if ($errors -> any())
                @foreach ($errors->all() as $err)
                    <p>{{$err}}</p>
                @endforeach
                @endif
            </div>
        </form>
    </div>
</body>
</html>