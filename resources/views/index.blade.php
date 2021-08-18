@extends('layouts.main')

@section('content')
<div class="section-bg">
    <div class="container">
        <div class="box">
            <div class="slides-top-news owl-carousel carousel-nav-center">
                @foreach($articlesPin as $article)
                <a href="{{ $article->url() }}" class="slides-top-new-item">
                    <div class="slide-top-new-thumb">
                        <img src="{{ asset('storage/'.$article->thumbnail) }}"
                            alt="">
                    </div>
                    <div class="slide-top-new-overlay">
                        <div class="news-category">
                            <span class="badge badge-gray">{{ $article->category->categoryName }}</span>
                        </div>
                        <div class="news-top-title">
                            <h2>{{ $article->title }}</h2>
                        </div>
                        <div class="news-top-description">
                            <div class="anime-author">
                                <div class="anime-author-avatar">
                                    <img src="./images/author.png" alt="">
                                </div>
                                <div class="anime-author-name">
                                    <span>{{ $article->user->name }}</span>
                                </div>
                            </div>
                            <p>-</p>
                            <p class="news-time">
                                @php
                                $date = date('F j, Y',strtotime($article->created_at));
                                echo $date;
                                @endphp
                            </p>
                            <p>-</p>
                            <p class="news-view">{{ $article->views }} View</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="space-empty"></div>
            <div class="list-top-news">
                <div class="row">
                    <div class="col-6 col-sm-12">
                        <div class="box-item">
                            <div class="box-thumb">
                                <a href="./article.html"><img
                                        src="./images/article/konan.jpg"
                                        alt=""></a>
                            </div>
                            <div class="box-description">
                                <div class="box-title"><a href="./article.html">I Want You To Feel Pain, To Think About Pain, To Accept Pain, To Know Pain
                                        Trailer</a></div>
                                <div class="box-more">
                                    <p class="news-time">January 22, 2021</p>
                                    <p>-</p>
                                    <p class="news-view">222 View</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-6 col-sm-12">
                        <div class="box-item">
                            <div class="box-thumb">
                                <a href="./article.html"><img
                                        src="./images/article/BeFunky-collage.jpg"
                                        alt=""></a>
                            </div>
                            <div class="box-description">
                                <div class="box-title"><a href="./article.html">Kakarot Releases on Friday, so Here’s a Launch
                                        Trailer</a></div>
                                <div class="box-more">
                                    <p class="news-time">January 22, 2021</p>
                                    <p>-</p>
                                    <p class="news-view">222 View</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-6 col-sm-12">
                        <div class="box-item">
                            <div class="box-thumb">
                                <a href="./article.html"><img
                                        src="./images/article/kimimaro.jpg"
                                        alt=""></a>
                            </div>
                            <div class="box-description">
                                <div class="box-title"><a href="./article.html">Kakarot Releases on Friday, so Here’s a Launch
                                        Trailer</a></div>
                                <div class="box-more">
                                    <p class="news-time">January 22, 2021</p>
                                    <p>-</p>
                                    <p class="news-view">222 View</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-6 col-sm-12">
                        <div class="box-item">
                            <div class="box-thumb">
                                <a href="./article.html"><img
                                        src="./images/article/kaguya.jpg"
                                        alt=""></a>
                            </div>
                            <div class="box-description">
                                <div class="box-title"><a href="./article.html">Kakarot Releases on Friday, so Here’s a Launch
                                        Trailer</a></div>
                                <div class="box-more">
                                    <p class="news-time">January 22, 2021</p>
                                    <p>-</p>
                                    <p class="news-view">222 View</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                </div>
            </div>
            <!-- list top news -->
        </div>
        <!-- box -->
    </div>
    <!-- container -->
</div>
<!-- end section bg -->
<div class="container">
    <section>
        <div class="row">
            <div class="col-4 col-md-4 col-sm-12">
                <div class="widget-title">
                    <h2 class="widget-title-text">Must read</h2>
                </div>
                @foreach($articleToday as $article)
                <div class="wrapper-recent-post">
                    <div class="wrapper-recent-images">
                        <a href="{{ $article->article->url() }}">
                            <img src="{{ asset('storage/'.$article->article->thumbnail) }}"
                                alt="">
                        </a>
                        <span class="rank">{{ $loop->iteration }}</span>
                    </div>
                    <div class="wrapper-recent-des">
                        <div class="wrapper-post-category">
                            <a href="{{ $article->article->category->url() }}">
                                <span>{{ $article->article->category->categoryName }}</span>
                            </a>
                        </div>
                        <div class="wrapper-recent-title">
                            <a href="{{ $article->article->url() }}">
                                <span>{{ $article->article->title }}</span>
                            </a>
                        </div>
                        <div class="wrapper-recent-times">
                            <i class='bx bx-time-five'></i><span>{{ $article->article->convertDate() }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="widget-title">
                    <h2 class="widget-title-text">Categories</h2>
                </div>
                <div class="list-category">
                    <ul class="list-categories">
                        @foreach($categories as $category)
                        <li class="list-category-item">
                            <a href="{{ $category->url() }}" class="category-link"><i class='bx bxs-circle'></i>{{ $category->categoryName }}</a>
                            <span class="category-number">{{ $category->articles->count() }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-8 col-md-8 col-sm-12">
                <div class="widget-title">
                    <h2 class="widget-title-text">LASTEST</h2>
                </div>
                @foreach($articlesNormal as $article)
                <div class="wrapper-latest-post">
                    <div class="wrapper-latest-thumb">
                        <a href="{{ $article->url() }}">
                            <img src="{{ asset('storage/'.$article->thumbnail) }}"
                                alt="">
                        </a>
                    </div>
                    <div class="wrapper-latest-des">
                        <div class="wrapper-latest-title">
                            <a href="{{ $article->url() }}">
                                <h2>{{ $article->title }}</h2>
                            </a>
                        </div>
                        <div class="wrapper-latest-author">
                            <div class="anime-author">
                                <div class="anime-author-avatar">
                                    <img src="./images/author.png" alt="">
                                </div>
                                <div class="anime-author-name">
                                    <a href="./author.html"><span>{{ $article->user->name }}</span></a>
                                </div>
                            </div>
                            <p>-</p>
                            <p class="news-time">January 22, 2021</p>
                            <p>-</p>
                            <p class="news-view">222 View</p>
                        </div>
                        <div class="wrapper-latest-text">
                           {!! $article->Smalldescription() !!}
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- latest item -->
                <div class="center">
                    <a href="./category.html" class="see-more">see more</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end container -->
<div class="section-bg-1">
    <div class="container">
        <div class="box box-black">
            <div class="widget-title">
                <h2 class="widget-title-text light-text">Video</h2>
            </div>
            <div class="slides-top-news owl-carousel carousel-nav-center">
                @foreach($articleVideoPin as $video)
                <a href="{{ $video->url() }}" class="slides-top-new-item">
                    <div class="slide-top-new-thumb">
                        <img src="{{ asset('storage/'.$video->thumbnail) }}"
                            alt="">
                    </div>
                    <div class="slide-top-new-overlay">
                        <div class="news-view-top">
                            <span class="badge badge-gray">{{ $video->views }} Views</span>
                        </div>
                        <div class="news-top-title">
                            <h2>{{ $video->title }}</h2>
                        </div>
                        <div class="news-top-description">
                            <p class="news-time">{{ $article->convertDate() }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <!-- end slide video large -->
            <div class="slides-video-news owl-carousel carousel-nav-center">
                @foreach($articleVideo as $video)
                <a href="{{ $video->url() }}" class="slide-video-sm">
                    <div class="slide-video-image">
                        <img src="{{ asset('storage/'.$video->thumbnail) }}"
                            alt="">
                        <div class="slide-video-view">
                            <span>{{ $video->views }} Views</span>
                        </div>
                        <div class="slide-video-info">
                            <div class="slide-video-title">
                                <span>{{ $video->title }}</span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- slide video item -->
            </div>
        </div>
    </div>
</div>
<!-- end section video -->
<div class="section-weekly">
    <section>
        <div class="container">
            <div class="widget-title">
                <h2 class="widget-title-text">weekly rankings</h2>
            </div>
            <div class="slides-weekly-rankings owl-carousel carousel-nav-center">
                @foreach($articleWeek as $article)
                <a href="{{ $article->article->url() }}" class="weekly-ranking-slide">
                    <div class="weekly-rankings-thumbnail">
                        <img src="{{ asset('storage/'.$article->article->thumbnail) }}" alt="">
                    </div>
                    <div class="weekly-rankings-content">
                        <h2>{{ $article->article->title }}</h2>
                        <span>{{ $article->article->convertDate() }}</span>
                    </div>
                </a>
                @endforeach
                <!-- item slide weekly -->
            </div>
        </div>
    </section>
</div>
<!-- end weekly rankings section -->
<div class="section-monthly">
    <div class="container">
        <div class="widget-title">
            <h2 class="widget-title-text">monthly rankings</h2>
        </div>
        <div class="slides-weekly-rankings owl-carousel carousel-nav-center">
            @foreach($articleMonth as $article)
            <a href="{{ $article->article->url() }}" class="weekly-ranking-slide">
                <div class="weekly-rankings-thumbnail">
                    <img src="{{ asset('storage/'.$article->article->thumbnail) }}" alt="">
                </div>
                <div class="weekly-rankings-content">
                    <h2>{{ $article->article->title }}</h2>
                    <span>{{ $article->article->convertDate() }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
<!-- end weekly rankings section -->
<div class="space-empty"></div>
@endsection