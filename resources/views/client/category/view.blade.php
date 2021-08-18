@extends('layouts.main')

@section('content')
    <div class="anime-header">
        <div class="anime-header-wrapper">
            <div class="container">
                <div class="row align-center">
                    <div class="col-12">
                        <div class="anime-header-category">
                            <h1>{{ $category->categoryName }}</h1>
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
                    <div class="category-section">
                        @foreach ($category->articles as $article)
                            <div class="post-item">
                                <div class="post-item-thumbnail">
                                    <a href="{{ $article->url() }}" class="post-item-img">
                                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="">
                                    </a>
                                    <div class="post-item-category">
                                        <a href="{{ $article->category->url() }}"
                                            class="badge"><span>{{ $article->category->categoryName }}</span></a>
                                    </div>
                                </div>
                                <div class="post-item-description">
                                    <div class="wrapper-latest-author">
                                        <div class="anime-author">
                                            <div class="anime-author-avatar">
                                                <img src="./images/author.png" alt="">
                                            </div>
                                            <div class="anime-author-name">
                                                <a href="" class="underline"><span>Mr. Duy</span></a>
                                            </div>
                                        </div>
                                        <p>-</p>
                                        <p class="times">January 22, 2021</p>
                                    </div>
                                    <div class="post-item-title">
                                        <a href="{{ $article->url() }}" class="underline">
                                            <h2>{{ $article->title }}</h2>
                                        </a>
                                    </div>
                                    <div class="post-item-message">
                                        {{ $article->smallDescription() }}
                                    </div>
                                    <div class="post-read-more">
                                        <a href="{{ $article->url() }}"><span>read more</span> <i class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- post item -->
                    </div>
                </div>
                <!-- col 7 -->
                <div class="col-4 col-md-5 col-sm-12 sticky">
                    <div class="widget-title" style="margin-top: -5px;">
                        <h2 class="widget-title-text">MUST READ</h2>
                    </div>
                    <div class="wrapper-recent-post">
                        <div class="wrapper-recent-images">
                            <a href="">
                                <img src="./images/article/BeFunky-collage.jpg" alt="">
                            </a>
                            <span class="rank">1</span>
                        </div>
                        <div class="wrapper-recent-des">
                            <div class="wrapper-post-category">
                                <a href="">
                                    <span>Anime</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-title">
                                <a href="">
                                    <span>Apex Legends is Throwing a Two-Week Fancy Party</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-times">
                                <i class='bx bx-time-five'></i><span>January 21, 2020</span>
                            </div>
                        </div>
                    </div>
                    <!-- wrapper item -->
                    <div class="wrapper-recent-post">
                        <div class="wrapper-recent-images">
                            <a href="">
                                <img src="./images/article/kimimaro.jpg" alt="">
                            </a>
                            <span class="rank">2</span>
                        </div>
                        <div class="wrapper-recent-des">
                            <div class="wrapper-post-category">
                                <a href="">
                                    <span>Anime</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-title">
                                <a href="">
                                    <span>Apex Legends is Throwing a Two-Week Fancy Party</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-times">
                                <i class='bx bx-time-five'></i><span>January 21, 2020</span>
                            </div>
                        </div>
                    </div>
                    <!-- wrapper item -->
                    <div class="wrapper-recent-post">
                        <div class="wrapper-recent-images">
                            <a href="">
                                <img src="./images/article/konan.jpg" alt="">
                            </a>
                            <span class="rank">3</span>
                        </div>
                        <div class="wrapper-recent-des">
                            <div class="wrapper-post-category">
                                <a href="">
                                    <span>Anime</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-title">
                                <a href="">
                                    <span>Apex Legends is Throwing a Two-Week Fancy Party</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-times">
                                <i class='bx bx-time-five'></i><span>January 21, 2020</span>
                            </div>
                        </div>
                    </div>
                    <!-- wrapper item -->
                    <div class="wrapper-recent-post">
                        <div class="wrapper-recent-images">
                            <a href="">
                                <img src="./images/article/sasori.jpg" alt="">
                            </a>
                            <span class="rank">4</span>
                        </div>
                        <div class="wrapper-recent-des">
                            <div class="wrapper-post-category">
                                <a href="">
                                    <span>Anime</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-title">
                                <a href="">
                                    <span>Apex Legends is Throwing a Two-Week Fancy Party</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-times">
                                <i class='bx bx-time-five'></i><span>January 21, 2020</span>
                            </div>
                        </div>
                    </div>
                    <!-- wrapper item -->
                    <div class="wrapper-recent-post">
                        <div class="wrapper-recent-images">
                            <a href="">
                                <img src="./images/article/kaguya.jpg" alt="">
                            </a>
                            <span class="rank">5</span>
                        </div>
                        <div class="wrapper-recent-des">
                            <div class="wrapper-post-category">
                                <a href="">
                                    <span>Anime</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-title">
                                <a href="">
                                    <span>Apex Legends is Throwing a Two-Week Fancy Party</span>
                                </a>
                            </div>
                            <div class="wrapper-recent-times">
                                <i class='bx bx-time-five'></i><span>January 21, 2020</span>
                            </div>
                        </div>
                    </div>
                    <!-- wrapper item -->
                    <div class="widget-title">
                        <h2 class="widget-title-text">Categories</h2>
                    </div>
                    <div class="list-category">
                        <ul class="list-categories">
                            @foreach ($categories as $category)
                                <li class="list-category-item">
                                    <a href="{{ $category->url() }}" class="category-link"><i class='bx bxs-circle'></i>{{ $category->categoryName }}</a>
                                    <span class="category-number">{{ $category->articles->count() }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- end col 4 -->
            </div>
        </div>
    </div>
@endsection
