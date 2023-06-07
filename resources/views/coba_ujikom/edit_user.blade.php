<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('ujikom.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="user">
    <div class="container-card">
        <h1>Edit User</h1>
        <form action="{{ route('edit_user') }}" method="post">
            {{ csrf_field() }}
            @foreach ( $data as $d )
            <input type="hidden" name="user_id" value="{{$d->user_id}}">
                <div class="txt_field">
                    <input type="text" name="nama" placeholder="Nama User" value="{{$d->nama}}">
                </div>
                <div class="txt_field">
                    <input type="text" name="username" placeholder="Username" value="{{$d->username}}">
                </div>
                <div class="txt_field">
                    <input type="password" name="password" placeholder="Password (kosongkan jika tidak perlu)">
                </div>
                <div class="txt_field">
                    <input type="password" name="pass_confirm" placeholder="Konfirmasi Password">
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