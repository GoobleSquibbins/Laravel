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
        <a href="/yo"><button>Back</button></a>
    </div>
    <br>
    <div>
        <form action="/save_input" method="post">
        {{csrf_field()}}
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" required="required"></td>
                </tr>
                <tr>
                    <td>Descript</td>
                    <td><input type="text" name="descript" required="required"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>