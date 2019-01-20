<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar OLC</title>
</head>
<body>
    <h1>Daftar OLC gan</h1>
    @csrf
    <form action="/daftar" method="post">
        Nama lengkap
        <br>
        <input type="text" name="nama">
        <br><br>
        Nomor identitas (KTP/SIM/Kartu pelajar)
        <br>
        <input type="number" name="no_identitas">
        <br><br>
        Nomor HP
        <br>
        <input type="number" name="no_telp">
        <br><br>
        Mendaftar kelas:
        <br>
        <input type="checkbox" name="">
        Mancing mania
        <br>
        <input type="checkbox" name="">
        Ternak lele
        <br>
        <input type="checkbox" name="">
        Panen meme
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>