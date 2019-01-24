<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="/admin/cari/nama" method="post">

    @csrf
        <label for="">nama</label><input type="text" name="name" id="">
        <input type="submit" value="cek nama">
   
   </form> <br>
   <form action="/admin/cari/code" method="post">
   @csrf 
        <label for="">kode</label><input type="text" name="code" id="">
        <input type="submit" value="cek kode">
   </form>
  
</body>
</html>