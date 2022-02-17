<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>

<div class="container">
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">На главную</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Статьи</a></li>
            </ul>
        </div>
    </div>
</header>


@yield('pagecontent')

<footer class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-center justify-content-lg-start mt-5">

            <p>Все права защищены</p>


        </div>
    </div>
</footer>
</div>
</body>
</html>
