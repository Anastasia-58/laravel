
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">

    <title>Новость</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Favicons -->
{{--    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">--}}
{{--    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">--}}
{{--    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">--}}
{{--    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">--}}
{{--    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">--}}
{{--    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">--}}
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/cover.css')}}" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">
        <div>
            <h3 class="float-md-start mb-0">Новость</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
                <a class="nav-link active" aria-current="page" href="/">Главная</a>
            </nav>
        </div>
    </header>

    <main class="px-3">
        <h1>{{$newsItem['title']}}</h1>
        <p class="lead">{{$newsItem['description']}}</p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
        </p>
    </main>

    <footer class="mt-auto text-white-50">
        <p></p>
    </footer>
</div>



</body>
</html>

