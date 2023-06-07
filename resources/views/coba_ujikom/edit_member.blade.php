<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('ujikom.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="member">
    <div class="container-card">
        <h1>Edit Member</h1>
        <form action="{{ route('edit_member') }}" method="post">
            {{ csrf_field() }}
            @foreach ( $data as $d )
            <input type="hidden" name="id_member" value="{{$d->id_member}}">
            <input type="hidden" name="streak" value="{{$d->streak}}">
                <div class="txt_field">
                    <input type="text" name="nama" placeholder="Nama Member" value="{{$d->nama}}">
                </div>
                <div class="txt_field">
                    <input type="text" name="alamat" placeholder="Alamat" value="{{$d->alamat}}">
                </div>
                <div class="txt_field">
                    <input type="text" name="tlp" placeholder="Telepon" value="{{$d->tlp}}">
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