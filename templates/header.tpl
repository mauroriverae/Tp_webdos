<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/style.css">
    <title>MR Capital</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="company">MR</a>
              {* muestro nombre y logout si esta log  *}
              {if isset($smarty.session.USER_ID)}
                <button class="btn bg-danger"><a class="navbar-brand" href="">Login</a></button>
              {else}
                <a href="logout" type='button' class='btn btn-outline-danger'>logout</a>
                <h3 class="lead text-light ">
                  <svg  class="bg-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8 16A8 8 0 108 0a8 8 0 000 16zm.847-8.145a2.502 2.502 0 10-1.694 0C5.471 8.261 4 9.775 4 11c0 .395.145.995 1 .995h6c.855 0 1-.6 1-.995 0-1.224-1.47-2.74-3.153-3.145z"></path></svg>
                  {$smarty.session.email}
                </h3>
              {/if}

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" name="Tecnologia" href="sector/Tecnologia">Tecnologicas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" name="nombre" href="sector/Industriales">Industriales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" name="nombre" href="sector/Servicios financieros">Financieras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" name="nombre" href="sector/Consumo discrecional">Consumo discrecional</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" name="nombre" href="sector/Energia">Energia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" name="nombre" href="sector/Servicios de comunicacion">Servicios de comunicacion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" name="nombre" href="sector/Materiales Basicos">Materiales Basicos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main class="container">
