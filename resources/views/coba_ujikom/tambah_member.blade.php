<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ujikom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="member">
    <div class="container-card">
        <h1>Register</h1>
        <form action="{{ route('add_member') }}" method="post">
            @csrf
            <div class="txt_field">
                <input type="text" name="nama" placeholder="Nama member">
            </div>
            <div class="txt_field">
                <input type="text" name="alamat" placeholder="Alamat">
            </div>
            <div class="txt_field">
                <input type="text" name="tlp" placeholder="Telepon">
            </div>
            <button class="btn-submit" type="submit">Register</button>
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