
        <div class="list-group-item news-list-title">
            <a href="{{asset(route('breaking-news'))}}"><h3>Breaking news</h3></a>
            <div class="news-list">
                <ul class="list-group">
                    @foreach($latestNews as $latestNew)
                        <li class="list-group-item">
                            <a href="{{route('posts.show', ['posts' => $latestNew->id])}}"><h4><b>{{ $latestNew->title }}</b></h4></a>
                            <p>{{ substr($latestNew->messageBody, 0, 200) }}</p>
                            <h5><b>{{ $latestNew->author }}</b></h5>
                            <span><i>Published at: {{ date('D m Y', strtotime($latestNew->created_at)) }}</i></span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="list-group-item news-list-title">
            <a href="{{asset(route('carsAndVehicles'))}}"><h3>Cars & Vehicles</h3></a>
            <div class="news-list">
                <ul class="list-group">
                @foreach($carsCategories as $carsCategory)
                    <li class="list-group-item">
                        <a href="{{route('posts.show', ['posts' => $carsCategory->id])}}"><h4><b>{{ $carsCategory->title }}</b></h4></a>
                        <p>{{ substr($carsCategory->messageBody, 0, 200) }}</p>
                        <h5><b>{{ $carsCategory->author }}</b></h5>
                        <span><i>Published at: {{ date('D m Y', strtotime($carsCategory->created_at)) }}</i></span>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="list-group-item news-list-title">
            <a><h3>Technology</h3></a>
            <div class="news-list">
                <ul class="list-group">
                    @foreach($technologyCategories as $technologyCategory)
                        <li class="list-group-item">
                            <a href="{{route('posts.show', ['posts' => $technologyCategory->id])}}"><h4><b>{{ $technologyCategory->title }}</b></h4></a>
                            <p>{{ substr($technologyCategory->messageBody, 0, 200) }}</p>
                            <h5><b>{{ $technologyCategory->author }}</b></h5>
                            <span><i>Published at: {{ date('D m Y', strtotime($technologyCategory->created_at)) }}</i></span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="list-group-item news-list-title">
            <a><h3>Sports</h3></a>
            <div class="news-list">
                <ul class="list-group">
                    @foreach($sportsCategories as $sportsCategory)
                        <li class="list-group-item">
                            <a href="{{route('posts.show', ['posts' => $sportsCategory->id])}}"><h4><b>{{ $sportsCategory->title }}</b></h4></a>
                            <p>{{ substr($sportsCategory->messageBody, 0, 200) }}</p>
                            <h5><b>{{ $sportsCategory->author }}</b></h5>
                            <span><i>Published at: {{ date('D m Y', strtotime($sportsCategory->created_at)) }}</i></span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
