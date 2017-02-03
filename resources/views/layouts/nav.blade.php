<nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            TXKUG
            {{--<img src="https://mdbootstrap.com/img/logo/mdb-transparent-sm-shadows.png" class="d-inline-block align-top" alt="MDBootstrap">--}}
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav smooth-scroll mr-auto">
                <li class="nav-item {{ set_active('/') }}">
                    <a class="nav-link waves-effect waves-light" href="/">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item {{ set_active('/blog/') }}">
                    <a class="nav-link waves-effect waves-light" href="/blog/">Blog</a>
                </li>

            </ul>

            <ul class="navbar-nav nav-flex-icons">
                @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="https://txkug.dev/social/redirect/slack">Slack Login</a>
                    </li>
                @else
                    @if(Auth::user()->hasRole('administrator'))

                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="adminDropMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                        <div class="dropdown-menu" aria-labelledby="adminDropMenu">
                            <a class="dropdown-item" href="/admin">Dashboard</a>
                            <a class="dropdown-item" href="/admin/venues">Venues</a>
                            <a class="dropdown-item" href="/admin/events">Events</a>
                            <a class="dropdown-item" href="/admin/users">Users</a>
                        </div>
                    </li>

                    @endif

                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="userDropMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu" aria-labelledby="userDropMenu">
                            <a class="dropdown-item" href="{{ url('/user/meetings') }}">My Events</a>
                            <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                        </div>
                    </li>

                @endif

            </ul>
        </div>
    </div>
</nav>