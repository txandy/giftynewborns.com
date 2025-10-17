<!doctype html>
<html lang="{{app()->currentLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @stack('body_js')
</head>
<body class="@yield('body_class')" id="@yield('body_id')">

<header class="navbar bg-base-100 shadow-sm sticky top-0">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">{{config('app.name')}}</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li><a>Link</a></li>
            <li>
                <details>
                    <summary>Parent</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</header>

<main class="@yield('main_class')" id="@yield('main_id')">
    @yield('content')
</main>

<footer class="footer sm:footer-horizontal footer-center bg-base-300 text-base-content p-4">
    <aside>
        <p>&copy; {{date('Y')}} {{config('app.name')}}. All rights reserved.</p>
    </aside>
</footer>


@stack('footer_js')

</body>
</html>
