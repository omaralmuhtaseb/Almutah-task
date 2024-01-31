<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">{{ config('app.name', 'Almutah') }}</a>
        </div>

        @auth('admin')
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('admin.index') }}">Home</a></li>
                <li><a href="{{ route('admin.orders.index') }}">Orders</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form action="{{ route('admin.logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-link">Logout</button>
                    </form>
                </li>
            </ul>
        @endauth
    </div>
</nav>
