<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASHBOARD</title>
</head>
<body>
    {{-- @if(!Auth::check())
        <h1>You are not authenticated, please login <a href="{{ route('login-form') }}">LOGIN</a>
    @else --}}
    @if(Auth::user()->hasRole('admin'))
        <h1>WELCOME ADMIN! <span class="text-red-500">{{Auth::user()->name}}</span></h1>
     @elseif(Auth::user()->hasRole('registrar'))
        <h1>WELCOME REGISTRAR! <span class="text-red-500">{{Auth::user()->name}}</span></h1>
     @else
        <h1>WELCOME FACULTY! <span class="text-red-500">{{Auth::user()->name}}</span></h1>
     @endif

        <form action="{{ route(name: 'logout') }}" method="POST">
            @csrf
            <x-dropdown-link :href="route( 'logout')"
              onclick="event.preventDefault();
                        this.closest('form').submit();">
              {{ __(key: 'Log Out') }}
            </x-dropdown-link>
        </form>
        {{-- @endif --}}

</body>
</html>