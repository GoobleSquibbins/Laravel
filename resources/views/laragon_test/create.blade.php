<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Insert data into the database</h1>
    </div>
    <div>
        <a href="/home"><button>Back</button></a>
    </div>
    <br>
    <div>
        <form action="{{route('create')}}" method="post">
        {{csrf_field()}}
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_b" required="required"></td>
                </tr>
                <tr>
                    <td>Stok Barang</td>
                    <td><input type="text" name="stok" required="required"></td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td><input type="text" name="harga_b" required="required"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>