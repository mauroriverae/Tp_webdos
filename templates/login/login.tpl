<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="templates/login/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="form-body">
        <img src="templates/login/login.png" alt="Login">
        <p class="text">Bienvenidos</p>
        <form class="login-form" action="verify" method="post">
            <input type="text" name="email" placeholder="Ingrese su email" >
            <input type="password" name="password" placeholder="Contraseña" >
            <button type="submit">Ingresar</button>
            <button type="submit">Invitado</button>
        </form>
        <p  id="error">{$error}</p>
    </div>
</body>
</html>