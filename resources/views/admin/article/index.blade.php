@extends('layouts.admin')

@section('content')

    <div class="body-content">
        <div class="function-title">
            <h2>Article list</h2>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="{{ route('admin.create.article') }}" class="btn success-color">Create new</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>List</h3>
                    </div>
                    <div class="card-content">
                        <table class="table" id="category_table">
                            <thead>
                                <th style="width:30%">Title</th>
                                <th>Thumbnail</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>View</th>
                                <th>Operation</th>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>{{ $article->title }}</td>
                                        <td class="thumbnail"><img src="{{ asset('storage/'.$article->thumbnail) }}"></td>
                                        <td>{{ $article->category->categoryName }}</td>
                                        <td>{{ $article->user->name }}</td>
                                        <td>{{ $article->views }}</td>
                                        <td>
                                            <a href="{{ route('admin.edit.article',$article->articleID) }}" class="btn-operation warning-color">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.del.article',$article->articleID) }}" method="post" class="inline-block">
                                                @csrf  
                                                @method('DELETE')
                                                <button class="btn-operation danger-color"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="center">
                    {{$articles->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
