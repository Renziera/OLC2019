<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Admin</title>
</head>
<body>
    <h1>Login Admin</h1>
    @csrf
    <form action="/admin" method="post">
        Username:
        <input type="text" name="username">
        Password:
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>