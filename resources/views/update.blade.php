<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><h1>Update Data</h1></div>
    <div><a href="/hhh"><button>Back</button></a></div>
    
    <div>
    @foreach($data as $d)
        <form action="/save_update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$d->id}}">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="{{$d->name}}"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="descript" value="{{$d->descript}}"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                </tr>
            </table>
        </form>
    @endforeach
    </div>
</body>
</html>