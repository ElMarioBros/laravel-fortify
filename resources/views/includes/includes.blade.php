<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <title>Fortify</title>
        <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
        <style>
            :root {
                --primary: #6495ed;
            }

            nav{
                background-color: #6495ed;
            }

            nav li{
                color: white;
            }

            html{
                background-color: #f5fafa;
            }

            .grid-alt {
                display: grid;
                grid-template-columns: auto auto auto;
            }

            .grid-alt .grid-margin{
                text-align: center;
                padding: 10px 0;
                margin: 8px;
            }

            .grid-alt .grid-card{
                text-align: center;
                background-color: rgb(255, 153, 0);
                border: 3px solid rgb(128, 77, 0);
                padding: 10px 0;
                margin: 8px;
                color: white;
            }

            .nav-icon{
                margin: 0 6px;
            }
            
            .block{
                display: block;
            }

            button, a{
                background-color: #6495ed;
                color: #ffffff
            }

            </style>
            @yield('styles')
    </head>
    
    <body>
        <nav>
            <ul></ul>
            <ul>
                <li>
                    <strong>Fortify</strong>
                </li>
            </ul>
            <ul>
                @auth
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            </ul>
        </nav>
        <main class="container">

            @yield('content')

        </main>
    </body>
</html>
