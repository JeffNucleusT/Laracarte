<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="{{ route('home_path') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ set_active_route('home_path') }}">
                <a class="nav-link" href="{{ route('home_path') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ set_active_route('about_path') }}">
                <a class="nav-link" href="{{ route('about_path') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artisans</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Planet
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="https://laravel.com" target="_blank">Laravel.com</a>
                    <a class="dropdown-item" href="https://laravel.io" target="_blank">Laravel.io</a>
                    <a class="dropdown-item" href="https://laracasts.com" target="_blank">Laracasts</a>
                    <a class="dropdown-item" href="https://larajobs.com" target="_blank">Larajobs</a>
                    <a class="dropdown-item" href="https://laravel-news.com" target="_blank">Laravel News</a>
                    <a class="dropdown-item" href="https://larachat.co" target="_blank">Larachat</a>
                </div>
            </li>
            <li class="nav-item {{ set_active_route('contact_path') }}">
                <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
    </div>
</nav>
