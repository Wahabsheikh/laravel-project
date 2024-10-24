<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdul Wahab-@yield('title', 'Website')
    </title>
    <link rel="stylesheet" href="{{ asset('cssfile/laravel.css') }}">

</head>

<body>
    <section id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar">
                        <div class="logoName ">
                            <span>abdul</span>
                        </div>
                        <div class="navBtns">
                            <a href="wahab">portfolio</a>
                            <a href="contact">contact</a>
                            <a href="tamplates">More Templates</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="body">
        @hasSection('content')
        @yield('content')
        @else
        <div class="image">
            <img src="{{ asset('/assets/pagenotfound.jpg') }}" alt="server not found">

        </div>
        <style>
        .image {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image img {
            width: 100vw;

        }
        </style>

        @endif

    </section>
    <section id=footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer">
                        <h2>
                            this is footer section
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>