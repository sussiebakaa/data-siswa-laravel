<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://i.pinimg.com/736x/f0/9e/db/f09edb0e121f2c7c693ef2eb140a5976.jpg" style="width: 40px; height: auto;"></a>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="../home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="../student">Student</a></li>
                    <li class="nav-item"><a class="nav-link" href="../extracurricular">Ekstrakulikuler</a></li>
                    <li class="nav-item"><a class="nav-link" href="../class/kelas">Class</a></li>
                </ul>

                <ul class="navbar-nav ms-auto" style="margin-right: 70px;">
                    <li class="nav-item dropdown">
                        @if(auth()->check())
                      <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, {{ auth()->user()->name }}
                      </button>
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Login</a></li>
                        <li><a class="dropdown-item" href="/login/logout">Logout</a></li>
                        <li><a class="dropdown-item" href="/Dashboard/index">Dashboard</a></li>
                        @else
                        <li><a class="dropdown-item" href="/Signup/signup">Signup</a></li>
                        @endif
                      </ul>
                    </li>
                  </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

