@extends('layouts.admin')

@section('content')
    <div class="body-content">
        <div class="function-title">
            <h2>Edit category</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <form action="{{ route('admin.save.category',$category->categoryID) }}" method="post">
                            @csrf
                            <div class="box-input">
                                <p>Category Name</p>
                                <input type="text" name="categoryName" value="{{ $category->categoryName }}" placeholder="Enter category name" class="form-control">
                                {{ $errors->first('categoryName') }}
                            </div>
                            <div class="box-input">
                                <p>Description</p>
                                <textarea name="description" placeholder="Enter description" rows="4" class="form-control">{{ $category->description }}</textarea>
                            </div>
                            <div class="box-input">
                                <p>Status</p>
                                <select name="status" class="form-control">
                                    @foreach($category->statusOptions() as $key => $value)
                                    <option value="{{ $key }}" {{ $value == $category->status ? 'selected' : '' }}>{{ $value }}</option>
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
