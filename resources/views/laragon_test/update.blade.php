<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>あああああああああああああああああああああああああ</h1>
    <div><a href="/hhh"><button>Back</button></a></div>
    
    <div>
   
        <form action="{{route('update')}}" method="post">
            {{ csrf_field() }}
            @foreach($data as $d)
            <input type="hidden" name="id" value="{{$d->id_barang}}">
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_barang" value="{{$d->nama_barang}}"></td>
                </tr>
                <tr>
                    <td>Stok Barang</td>
                    <td><input type="text" name="stok_barang" value="{{$d->stok}}"></td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td><input type="text" name="harga_barang" value="{{$d->harga_barang}}"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                </tr>
            </table>
            @endforeach
        </form>
    </div>
</body>
</html>