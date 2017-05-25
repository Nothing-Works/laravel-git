<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        @if (Auth::check())
            <a href="/blog/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create new Post</a>
        @endif

    </div>
</div>