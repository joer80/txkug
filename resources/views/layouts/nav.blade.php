<nav class="navbar navbar-toggleable-md navbar-dark elegant-color-dark">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/" target="_blank">TXKUG</a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ set_active('/') }}">
                    <a href="{{ route('welcome.index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ set_active('blog') }}">
                    <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                </li>
            </ul>

        </div>
    </div>
</nav>