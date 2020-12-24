<!--Main Navigation-->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-4">
    <div class="container">
        <a class="navbar-brand">MGT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Menu Bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="navbar-item">
                    <a></a>
                </li>
                <li class="navbar-item">
                    <a></a>
                </li>
            </ul>
            <div class="form-inline">
                @auth
                    <img class="rounded-circle" src="{{ Auth::user()->getAvatar('50') }}" alt="{{ Auth::user()->name }}">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger rounded-circle ml-2">Logout</button>
                </form>
                @else
                    <a class="btn btn-outline-success mr-2" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-outline-warning" href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
