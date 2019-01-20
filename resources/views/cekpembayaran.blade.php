<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cek Pembayaran</title>
</head>
<body>
    <h1>Cek Pembayaran</h1>
    @csrf
    <form action="/pembayaran" method="get">
        Kode peserta:
        <input type="text" name="kode">
        <input type="submit" value="Cek">
    </form>
</body>
</html>