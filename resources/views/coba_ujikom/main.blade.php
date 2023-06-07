<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="ujikom.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body class="home">
    <div class="title">
        <h1>洗濯ラウンドリー</h1>
    </div>
    <div class="username">
        <p>{{Auth::user()->role}} {{Auth::user()->nama}}</p>
    </div>
    <div class="main-container">
        @if (Auth::user()->role == 'Admin')
          <ul>
            <div class="main-nav">
                <li><a href="{{ route('transaksi') }}" class="word">Transaksi</a></li>
                {{-- <li><a href="{{ route('member') }}" class="word">Member</a></li> --}}
                <li><a href="{{ route('user') }}" class="word">User</a></li>
                <li><a href="{{ route('paket') }}" class="word">Paket</a></li>
                <li><a href="{{ route('laporan') }}" class="word">Cetak Laporan</a></li>
                <li><a href="{{ route('logout') }}" class="word">Logout</a></li>
            </div>
        </ul>  
        @endif
        @if (Auth::user()->role == 'Kasir')
          <ul>
            <div class="main-nav">
                <li><a href="{{ route('transaksi') }}" class="word">Transaksi</a></li>
                <li><a href="{{ route('laporan') }}" class="word">Cetak Laporan</a></li>
                <li><a href="{{ route('logout') }}" class="word">Logout</a></li>
            </div>
        </ul>  
        @endif
    </div>
</body>
</html>