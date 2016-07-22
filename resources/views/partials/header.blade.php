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
            <form class="navbar-form navbar-right" role="search" action={{ route('searchByAuthor')}}>
                <div class="form-group">
                    <label for="search" class="control-label">Search your favorite author</label>
                    <input type="text" name="search" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('login')}}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>