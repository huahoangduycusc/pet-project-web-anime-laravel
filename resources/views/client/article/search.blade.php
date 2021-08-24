@extends('layouts.main')

@section('content')
    <div class="anime-header">
        <div class="anime-header-wrapper">
            <div class="container">
                <div class="row align-center">
                    <div class="col-12">
                        <div class="anime-header-category">
                            <h1>Search</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="anime-header-blur"></div>
    </div>
    <div class="anime-article-content">
        <div class="container-sm">
            <div class="search-title">
                <div class="search-text"><span>Search for result :</span> <span class="main-color">{{ request()->s }}</span> </div>
                <div class="search-form">
                    <form action="{{ route('search.article') }}" method="get">
                        @csrf
                        <div class="search-form-content">
                            <input type="text" placeholder="What are you searching?" name="s" value="{{ request()->s }}"
                                class="search-form-input">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="category-section">
                        <div class="row">
                            @foreach ($articles as $article)
                                <div class="col-4 col-md-6 col-sm-12">
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
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="anime-author-name">
                                                        <a href="" class="underline"><span>Mr. Duy</span></a>
                                                    </div>
                                                </div>
                                                <p>-</p>
                                                <p class="times">{{ $article->convertDate() }}</p>
                                            </div>
                                            <div class="post-item-title">
                                                <a href="" class="underline">
                                                    <h2>{{ $article->title }}</h2>
                                                </a>
                                            </div>
                                            <div class="post-item-message">
                                                {{ $article->smallDescription() }}
                                            </div>
                                            <div class="post-read-more">
                                                <a href="{{ $article->url() }}"><span>read more</span> <i
                                                        class='bx bx-chevron-right'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- post item -->
                    </div>
                </div>
                <!-- col 12 -->
            </div>
        </div>
    </div>
@endsection
