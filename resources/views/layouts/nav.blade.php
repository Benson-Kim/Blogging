<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a href="#" class="nav-link active">Home</a>
            <a href="#" class="nav-link">New Features</a>
            <a href="#" class="nav-link">Press</a>
            <a href="#" class="nav-link">About</a>
            
            <a href="/login" class="nav-link ml-auto">Login</a>
            <a href="/register" class=" nav-link navbar-nav navbar-right">Register</a>

            @if (Auth::check())
                <a href="#" class="nav-link ml-auto">{{ Auth::user()->name }}</a>
                <a href="/logout" class=" nav-link navbar-nav navbar-right">Logout</a>
            @endif
        </nav>    
    </div>
</div>