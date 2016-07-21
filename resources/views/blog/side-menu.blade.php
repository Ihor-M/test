
        <div class="list-group-item news-list-title" href="#">
            <a><h3>Breaking news</h3></a>
            <div class="news-list">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h4>First article title</h4>
                        <p>First article body</p>
                        <h6>Author</h6>
                        <p>Published at:</p>
                    </li>
                    <li class="list-group-item">
                        <h4>Second article title</h4>
                        <p>Second article body</p>
                        <h6>Author</h6>
                        <p>Published at:</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="list-group-item news-list-title" href="#">
            <a><h3>Cars & Vehicles</h3></a>
            <div class="news-list">
                <ul class="list-group">
                @foreach($carsCategories as $carsCategory)
                    <li class="list-group-item">
                        <h4>{{ $carsCategory->title }}</h4>
                        <p>{{ $carsCategory->messageBody }}</p>
                        <h6>{{ $carsCategory->author }}</h6>
                        <p>Published at:{{ $carsCategory->created_at }}</p>
                        <img src=""/>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="list-group-item news-list-title" href="#">
            <a><h3>Technology</h3></a>
            <div class="news-list">
                <ul class="list-group">
                    @foreach($technologyCategories as $technologyCategory)
                        <li class="list-group-item">
                            <h4>{{ $technologyCategory->title }}</h4>
                            <p>{{ $technologyCategory->messageBody }}</p>
                            <h6>{{ $technologyCategory->author }}</h6>
                            <p>Published at:{{ $technologyCategory->created_at }}</p>

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="list-group-item news-list-title" href="#">
            <a><h3>Sports</h3></a>
            <div class="news-list">
                <ul class="list-group">
                    @foreach($sportsCategories as $sportsCategory)
                        <li class="list-group-item">
                            <h4>{{ $sportsCategory->title }}</h4>
                            <p>{{ $sportsCategory->messageBody }}</p>
                            <h6>{{ $sportsCategory->author }}</h6>
                            <p>Published at:{{ $sportsCategory->created_at }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
