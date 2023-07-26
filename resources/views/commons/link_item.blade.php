@if (Auth::check())
    {{-- link  logout --}}
    {{-- <li><a href="{{ route('users.show',Auth::user()->id) }}" class="link link-hover">{{ Auth::user()->name }}</a></li> --}}
    <li><a href="#" class="link link-hover" onclick="event.preventDefault();this.closest('form').submit();">logout</a></li>
@else
    {{-- link login --}}
    <li><a href="{{ route('login') }}" class="link link-hover">login</a></li>
    {{-- link register user --}}
    <li><a class="link link-hover" href="{{ route('register') }}">Signup</a></li>
    <li class="divider lg:hidden"></li>
@endif
