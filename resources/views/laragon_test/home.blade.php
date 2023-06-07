<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ちんぽ</h1>
    <div>
        <a href="/create_l"><button>Add Data</button></a>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Stok Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{ $d -> nama_barang }}</td>
                    <td>{{ number_format( $d -> harga_barang) }}</td>
                    <td>{{ number_format( $d -> stok) }}</td>
                    <td>
                        <a href="/update_l/{{ $d -> id_barang }}">Edit</a>
                        <a href="/delete_l/{{ $d -> id_barang }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
