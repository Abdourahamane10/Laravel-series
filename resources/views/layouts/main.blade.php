<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Séries | Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
    {{-- <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'> --}}

    <!--C'est moi qui l'ai ajouté-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!--added-->
    @livewireStyles
</head>

<body>

    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <!--<li class="menu-text">Super Series</li>-->
                <li><a href="/">Home</a></li>
                <li><a href="/series">Series</a></li>
                <li><a href="/contacts/contact">Contact</a></li>
                <li><a href="/admin/series">Admin</a></li>
            </ul>
        </div>
    </div>
    <!-- End Top Bar -->

    <div class="entete callout large primary">
        <div class="text-center">
            <h1 class="gros">Series</h1>
            <h2 class="gros subheader">Series Master</h2>
        </div>
    </div>

    <article class="grid-container">

        @yield('content')

    </article>



    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();
    </script>

    <!--C'est moi qui l'ai ajouté-->
    <script src="{{ asset('js/app.js') }}"></script>

    <!--added-->
    @livewireScripts
    <footer>
        <p>
            &copy; {{ date(('d-m-Y')) }}
        </p>
       </footer>
</body>

</html>
