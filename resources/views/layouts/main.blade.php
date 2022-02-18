<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/30bf32c5fb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <title>@yield('title')</title>
</head>
<body>

<div class="container">
{{csrf_field()}}
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap flex-row">
            <div class="col-2">
                <a href="/" class="logo"><p class="mb-md-0">LOGO</p></a>
            </div>
            <div class="col-10">
                <ul class="nav justify-content-end mb-md-0">
                    <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'active' : '' }} nav-link px-2">На главную</a></li>
                    <li><a href="{{ route('articles') }}" class="{{ request()->routeIs('articles') ? 'active' : '' }} nav-link px-2">Статьи</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>


@yield('pagecontent')

<footer class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-center justify-content-lg-start mt-5">
            <p>All right reserved</p>
        </div>
    </div>
</footer>
</div>
</body>
</html>
