<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route("panel.main.index") }}" class="nav-link">Home</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" onclick="$('form[name=logout]').submit()" href="javascript:;" role="button">
                <i class="fas fa-sign-out-alt"></i>
                <form method="POST" action="{{ route("logout") }}" name="logout">{{ csrf_field() }}</form>
            </a>
        </li>
    </ul>
</nav>
