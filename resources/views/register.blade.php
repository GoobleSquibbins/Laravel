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
      <div>
        <h1>REGISTER</h1>
    </div>
    <div>
        <a href="#"><button>Back</button></a>
    </div>
    <div>
        <form action="/register" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label>Username</label></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label>Password Confirmation</label></td>
                    <td><input type="password" name="password_confirm"></td>
                </tr>
                <tr>
                    <td>
                        <button>ok</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>  
    </div>
    
</body>
</html>