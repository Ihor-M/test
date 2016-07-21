<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('myBlog') }}">My Blog</a>
            </div>
            <ul class="nav navbar-nav nav-pills">
                <li><a href="http://ihormulyk.com">About Me</a></li>
                <li><a href="{{ route('newArticle') }}">New Article</a></li>
                <li><a href="{{ route('myArticles') }}">My Articles</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>