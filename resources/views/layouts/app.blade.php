<!DOCTYPE html>
<html>
<head>
    <title>Albums</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        footer {
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/" style="font-size:24px;">Album Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="font-size:20px;">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('albums.index') }}">All Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
            @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link" style="font-size:20px;">Logout</button>
            </form>
            @endauth
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="bg-light text-dark text-center text-lg-start mt-5">
    <div class="container p-4">
        <h5 class="text-center mb-4">Developed by Zeinab Abdelghafar</h5>
        <div class="row">
            <div class="col-md-3 text-center mb-3">
                <p>&#128241; Phone:</p>
                <p><a href="tel:+201289939695" class="text-dark">+201289939695</a></p>
            </div>
            <div class="col-md-3 text-center mb-3">
                <p>&#128231; Email:</p>
                <p><a href="mailto:zeinanabdo88@gmail.com" class="text-dark">zeinanabdo88@gmail.com</a></p>
            </div>
            <div class="col-md-3 text-center mb-3">
                <p>&#127760; LinkedIn:</p>
                <p><a href="https://www.linkedin.com/in/zeinab-abdelghaffar/" target="_blank" class="text-dark">Zeinab Abdelghafar</a></p>
            </div>
            <div class="col-md-3 text-center mb-3">
                <p>&#128193; GitHub:</p>
                <p><a href="https://github.com/ZeinabAbdelghaffar" target="_blank" class="text-dark">ZeinabAbdelghaffar</a></p>
            </div>
        </div>
    </div>
    </footer>

</body>
</html>