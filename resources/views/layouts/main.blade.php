<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <!--Styles-->
    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid text-white">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="login-area">

        <a class="nav-link" href="/login"> Login </a>

      </div>
    </div>
    </nav>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        <ul class="navbar-nav text-white" id="NavItems">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://github.com/RPSIOErick"> Desenvolvedor </a>
            </li>
        </ul>
        </div>
    </div>

        <div class="container-fluid py-4 px-3 mx-auto">

            @yield('content')

        </div>
        

    <footer>

    <p> Erick Bastos &copy; 2023 </p>

    </footer>

</body>
</html>