<header class="text-center">
    <h1 class="header-title">Laravel Blog</h1>
    <span class="header-sub">Created by
        <b>David Inyang-Etoh</b>
    </span>
</header>
<div class="container">
    @if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
        <span class="text-right">
            <form action="{{ url('/logout') }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-warning">Logout</button>
            </form>
        </span>
        @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>
    @endif
</div>
<!-- Header ends -->