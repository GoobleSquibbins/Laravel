<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ujikom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="register">
    <div class="container-card">
        <h1>Register User</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="txt_field">
                <input type="text" name="nama" placeholder="Nama User">
            </div>
            <div class="txt_field">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="txt_field">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="txt_field">
                <input type="password" name="password_confirm" placeholder="Confirm Password">
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