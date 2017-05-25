
<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/blog">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            @if(Auth::check())
                <div class="nav-link ml-auto">
                    <a class="btn btn-primary dropdown-toggle"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/logout">Log Out</a>
                        <a class="dropdown-item" href="/blog">Home</a>
                    </div>
                </div>
        @endif
            @if (! Auth::check())
                    <a class="nav-link ml-auto"  href="/login">Log in</a>
            @endif
        </nav>
    </div>
</div>