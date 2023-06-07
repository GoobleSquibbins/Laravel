<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ujikom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="user">
    <div class="the-one-who-wraps">
        <div class="divvv">
        </div>
        <div class="card-paket">
            <div class="card-content-paket">
                <div class="button-row">
                    <a href="{{route('main')}}"><button class="btn-back-paket">Back</button></a>
                    <a href="{{ route('d_add_user') }}"><button class="btn-tambah-paket">Tambah User</button></a>
                </div>
                <table class="table-paket">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Nama User</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{$d->user_id}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->username}}</td>
                                <td>
                                    <a href="/edit_user/{{$d->user_id}}"><button class="action-btn" id="edit">Edit</button></a>    
                                    <a href="/hapus_user/{{$d->user_id}}"><button class="action-btn" id="delete">Hapus</button></a>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>