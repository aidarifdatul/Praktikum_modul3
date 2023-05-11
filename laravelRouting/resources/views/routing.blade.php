<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>
        
        <div class="list-group list-group-numbered mt-4">
             {{-- Cloning Bootstrap--}}
             <a href="{{ url('/cloning') }}" class="list-group-item list-group-item-action">
                Tugas (Bootstrap Clone)
            </a>
        </div>

        <div class="list-group list-group-numbered mt-4">
            {{-- digunakan untuk memanggil file basic_roting apabila "Basic Routing (No View, No Controller)"" di klik--}}
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>

            {{-- apabila "View Route" di klik maka akan diarahkan ke url /view_route--}}
            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route
            </a>

            {{-- apabila "Controller Route" di klik maka akan diarahkan ke url /controller_route--}}
            <a href="{{ url('/controller_route') }}" class="list-group-item list-group-item-action">
                Controller Route
            </a>

            {{-- apabila "Redirect Route" di klik maka akan diarahkan ke url /--}}
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>

            {{-- Routing Parameter--}}
            <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>

            {{-- Optional Parameter--}}
            <a href="{{ url('/username') }}" class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>

            {{--Route With Regular Expression Constraints--}}
            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>

            {{--Named Route--}}
            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}" class="list-group-item list-group-item-action">
                Named Route
            </a>

            {{--Route Priority--}}
            <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
                Route Priority
            </a>

            {{--Fallback Routes--}}
            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>

            {{--Route Prefixes & Route Name Prefixes--}}
            <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
            <div class="list-group list-group-numbered mt-4">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                    Admin Dashboard
                </a>
                <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">
                    Admin Users
                </a>
                <a href="{{ route('admin.items') }}" class="list-group-item list-group-item-action">
                    Admin Items
                </a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>