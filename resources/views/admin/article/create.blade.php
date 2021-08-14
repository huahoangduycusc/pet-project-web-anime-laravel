@extends('layouts.admin')

@section('content')
    <div class="body-content">
        <div class="function-title">
            <h2>Category list</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <form action="{{ route('admin.store.category') }}" method="post">
                            @csrf
                            <div class="box-input">
                                <p>Title</p>
                                <input type="text" name="categoryName" value="{{ old('categoryName') }}" placeholder="Enter category name" class="form-control">
                                {{ $errors->first('categoryName') }}
                            </div>
                            <div class="box-input">
                                <p>Description</p>
                                <textarea name="description" placeholder="Enter description" rows="4" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="box-input">
                                <p>Category</p>
                                <select name="status" class="form-control">
                                   @foreach($categories as $category)
                                        <option value="{{ $category->categoryID }}">{{ $category->categoryName }}</option>
                                   @endforeach
                                </select>
                            </div>
                            <div class="box-input">
                                <button type="submit" class="btn primary-color">Create new category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
