<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.index') }}">{{ config('app.name', 'Almutah') }}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            @auth('admin')
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.orders.index') }}">Orders</a></li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger logout-btn">Logout</button>
                        </form>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
