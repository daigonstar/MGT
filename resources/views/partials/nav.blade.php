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
                    <a>Home</a>
                </li>
                <li class="navbar-item">
                    <a>Games</a>
                </li>
            </ul>
            <form class="form-inline">
                @auth
                    <span class="navbar-text">Hi {{ Auth::user()->name }}</span>
                    <span class="btn btn-outline-success ml-2">My Account</a>
                    <a class="btn btn-outline-danger ml-2">Logout</a>
                @else
                    <a class="btn btn-outline-success mr-2">Login</a>
                    <a class="btn btn-outline-warning">Register</a>
                @endauth
            </form>
        </div>
    </div>
</nav>
