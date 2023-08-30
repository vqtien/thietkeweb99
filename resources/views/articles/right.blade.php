<aside class="blog-sidebar">
    <div class="widget">
        <h4 class="widget-title">Bài viết mới</h4>
        <div class="rc-post-list">
            <ul>
                @foreach($hot_articles as $hot)
                <li>
                    <div class="rc-post-thumb">
                        <a href="{{route('articles.show', ['slug' => $hot->slug])}}">
                            <img src="{{image_path($hot->photo->photo_path, 'medium')}}" alt="{{$hot->name}}">
                        </a>
                    </div>
                    <div class="rc-post-content">
                        <h6 class="title">
                            <a href="{{route('articles.show', ['slug' => $hot->slug])}}">
                                {{$hot->name}}
                            </a>
                        </h6>
                        <span class="date"><i class="far fa-calendar-alt"></i>{{time_format($hot->created_at)}}</span>
                    </div>
                </li>
                @endforeach         
            </ul>
        </div>
    </div>
    <div class="widget">
        <h4 class="widget-title">Thể loại tin tức</h4>
        <div class="sidebar-cat-list">
            <ul>
                @foreach($article_types as $type)
                <li><a href="{{route('articles.category', ['slug' => $type->slug])}}">
                {{$type->name}} <i class="fas fa-angle-double-right"></i></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</aside>