@extends('layouts.main')

@section('content')
<div class="anime-header">
    <div class="anime-header-wrapper">
        <div class="container">
            <div class="row align-center">
                <div class="col-6">
                    <div class="anime-header-category">
                        <h1>{{ $article->category->categoryName }}</h1>
                    </div>
                </div>
                <div class="col-6 flex-end">
                    <div class="anime-header-title">
                        <h3>{{ $article->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="anime-header-blur"></div>
</div>
<div class="anime-article-content">
    <div class="container-sm">
        <div class="row">
            <div class="col-8 col-md-7 col-sm-12">
                <div class="anime-article-image">
                    <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="">
                </div>
                <div class="anime-article-title">
                    <h2>{{ $article->title }}</h2>
                </div>
                <div class="wrapper-latest-author">
                    <div class="anime-author">
                        <div class="anime-author-avatar">
                            <img src="./images/author.png" alt="">
                        </div>
                        <div class="anime-author-name">
                            <a href="./author.html" class="main-color underline"><span>{{ $article->user->name }}</span></a>
                        </div>
                    </div>
                    <p>-</p>
                    <p class="news-time">{{ $article->created_at }}</p>
                    <p>-</p>
                    <p class="news-view">{{ $article->views }} View</p>
                </div>
                <p class="anime-text">
                    {!! html_entity_decode($article->description) !!}
                </p>
                <div class="artical-more-info">
                    <div class="article-tags">
                        @php
                          $tags = json_decode($article->tags,true);  
                        @endphp

                        @foreach($tags as $tag)
                        <a href="" class="tag">{{ $tag['value'] }}</a>
                        @endforeach
                    </div>
                    <div class="article-share-social">
                        <a href="" class="share-twitter"><i class='bx bxl-twitter'></i></a>
                        <a href="" class="share-facebook"><i class='bx bxl-facebook'></i></a>
                        <a href="" class="share-pinterest"><i class='bx bxl-pinterest'></i></a>
                        <a href="" class="share-linked"><i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
                <div class="author-article-info">
                    <div class="author-info-avatar">
                        <a href="">
                            <img src="./images/author.png" alt="">
                        </a>
                    </div>
                    <!-- infor avatar -->
                    <div class="author-info-content">
                        <h4 class="author-info-name">
                            <a href="./author.html">Otsutsuki Urashiki</a>
                        </h4>
                        <div class="author-info-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui alias quo dolor
                            excepturi debitis, quae sunt nesciunt veniam
                            ratione distinctio animi modi eos corrupti eligendi inventore libero rem ducimus
                            laudantium?
                        </div>
                        <div class="author-info-social">
                            <span class="author-social-title">
                                Connect to author
                            </span>
                            <span class="author-social-link">
                                <a href="" class="author-twitter"><i class='bx bxl-twitter'></i></a>
                                <a href="" class="author-facebook"><i class='bx bxl-facebook'></i></a>
                                <a href="" class="author-instagram"><i class='bx bxl-instagram'></i></a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end author -->
                <!-- comment section -->
                <div class="widget-title">
                    <h2 class="widget-title-text">Comments</h2>
                </div>
                <div class="comment-section">
                    <div class="comment-item">
                        <div class="comment-item-avatar">
                            <a href="">
                                <img src="./images/avatar/pain.jpg" alt="">
                            </a>
                        </div>
                        <div class="comment-item-content">
                            <div class="comment-item-author">
                                <div>
                                    <h2><a href="" class="underline">Uzumaki Nagato</a></h2>
                                    <span class="comment-item-times">January 21, 2020</span>
                                </div>
                                <a href="" class="btn-report"><i class='bx bx-flag'></i> report</a>
                            </div>
                            <div class="comment-item-message">
                                <p>Sometimes You Must Hurt In Order To Know, Fall In Order To Grow, Lose In
                                    Order To Gain, Because Life???s Greatest Lessons Are Learned Through Pain</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment item -->
                    <div class="comment-item">
                        <div class="comment-item-avatar">
                            <a href="">
                                <img src="./images/avatar/konan.jpg" alt="">
                            </a>
                        </div>
                        <div class="comment-item-content">
                            <div class="comment-item-author">
                                <div>
                                    <h2><a href="" class="underline">Konan</a></h2>
                                    <span class="comment-item-times">January 21, 2020</span>
                                </div>
                                <a href="" class="btn-report"><i class='bx bx-flag'></i> report</a>
                            </div>
                            <div class="comment-item-message">
                                <p>This Time??? I Hope For You These Will Be Flowers Of Hope That Never Die.</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment item -->
                    <div class="comment-item">
                        <div class="comment-item-avatar">
                            <a href="">
                                <img src="./images/avatar/konan.jpg" alt="">
                            </a>
                        </div>
                        <div class="comment-item-content">
                            <div class="comment-item-author">
                                <div>
                                    <h2><a href="" class="underline">Konan</a></h2>
                                    <span class="comment-item-times">January 21, 2020</span>
                                </div>
                                <a href="" class="btn-report"><i class='bx bx-flag'></i> report</a>
                            </div>
                            <div class="comment-item-message">
                                <p>This Time??? I Hope For You These Will Be Flowers Of Hope That Never Die.</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment item -->
                </div>
                <div class="center">
                    <a href="./category.html" class="see-more">see more</a>
                </div>
                <div class="section-monthly">
                    <div class="container">
                        <div class="widget-title">
                            <h2 class="widget-title-text">related articles</h2>
                        </div>
                        <div class="slides-weekly-rankings owl-carousel carousel-nav-center">
                            @foreach($articleRelated as $article)
                            <a href="{{ $article->url() }}" class="weekly-ranking-slide">
                                <div class="weekly-rankings-thumbnail">
                                    <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="">
                                </div>
                                <div class="weekly-rankings-content">
                                    <h2>{{ $article->title }}</h2>
                                    <span>{{ $article->convertDate() }}</span>
                                </div>
                            </a>
                            @endforeach
                            <!-- item slide weekly -->
                        </div>
                    </div>
                </div>
                <!-- end weekly rankings section -->
            </div>
            <!-- col 7 -->
            <div class="col-4 col-md-5 col-sm-12 sticky">
                <div class="widget-title" style="margin-top: -5px;">
                    <h2 class="widget-title-text">HOT TODAY</h2>
                </div>
                @foreach($articleToday as $article)
                <div class="wrapper-recent-post">
                    <div class="wrapper-recent-images">
                        <a href="{{ $article->article->url() }}">
                            <img src="{{ asset('storage/'.$article->article->thumbnail) }}"
                                alt="{{ $article->article->title }}">
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
                <!-- wrapper item -->
                <div class="widget-title">
                    <h2 class="widget-title-text">Categories</h2>
                </div>
                <div class="list-category">
                    <ul class="list-categories">
                        <li class="list-category-item">
                            <a href="./category.html" class="category-link"><i class='bx bxs-circle'></i>Manga</a>
                            <span class="category-number">2</span>
                        </li>
                        <li class="list-category-item">
                            <a href="./category.html" class="category-link"><i class='bx bxs-circle'></i>Anime</a>
                            <span class="category-number">5</span>
                        </li>
                        <li class="list-category-item">
                            <a href="./category.html" class="category-link"><i class='bx bxs-circle'></i>Life style</a>
                            <span class="category-number">7</span>
                        </li>
                        <li class="list-category-item">
                            <a href="./category.html" class="category-link"><i class='bx bxs-circle'></i>Video
                            </a>
                            <span class="category-number">1</span>
                        </li>
                        <li class="list-category-item">
                            <a href="./category.html" class="category-link"><i class='bx bxs-circle'></i>Cartoon
                            </a>
                            <span class="category-number">8</span>
                        </li>
                        <li class="list-category-item">
                            <a href="./category.html" class="category-link"><i class='bx bxs-circle'></i>Fan art
                            </a>
                            <span class="category-number">6</span>
                        </li>
                        <li class="list-category-item">
                            <a href="./category.html" class="category-link"><i class='bx bxs-circle'></i>Cosplay
                            </a>
                            <span class="category-number">5</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end col 4 -->
        </div>
    </div>
</div>
@endsection