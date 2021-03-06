@extends('layouts.admin')

@section('content')
    <script src="{{ asset('js/jQuery.tagify.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('js/tagify.css') }}">
    <div class="body-content">
        <div class="function-title">
            <h2>Create an new article</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <form action="{{ route('admin.store.article') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="box-input">
                                <p>Title</p>
                                <input type="text" name="title" value="{{ old('title') }}"
                                    placeholder="Enter category name" class="form-control">
                                @if ($errors->first('title'))
                                    <div class="p-error">
                                        <span>{{ $errors->first('title') }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="box-input">
                                <p>Description</p>
                                <textarea name="description" placeholder="Enter description" rows="4"
                                    class="form-control">{{ old('description') }}</textarea>
                                @if ($errors->first('description'))
                                    <div class="p-error">
                                        <span>{{ $errors->first('description') }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="box-input">
                                <p>Category</p>
                                <select name="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->categoryID }}">{{ $category->categoryName }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->first('category'))
                                    <div class="p-error">
                                        <span>{{ $errors->first('category') }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="box-input">
                                <p>Thumbnail</p>
                                <div class="dropfile p-relative">
                                    <input type="file" name="thumbnail" onchange="previewFile();" accept="image/*"
                                        class="file p-absolute hidden" title="Drop here to upload file">
                                    <div class="dropfile-upload" id="imgThumbnail">
                                        <i class="far fa-images"></i>
                                    </div>
                                </div>
                                @if ($errors->first('thumbnail'))
                                    <div class="p-error">
                                        <span>{{ $errors->first('thumbnail') }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="box-input">
                                <p>Tags</p>
                                <input type="text" name="tags" value="{{ old('tags') }}" placeholder="Enter your tags"
                                    class="form-control">
                                @if ($errors->first('tags'))
                                    <div class="p-error">
                                        <span>{{ $errors->first('tags') }}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="box-input">
                                <p>Priority</p>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="Normal">Normal</label>
                                        <input type="radio" id="Normal" value="0" name="priority" checked>
                                    </div>
                                    <div class="col-6">
                                        <label for="Pin">Pin</label>
                                        <input type="radio" id="Pin" value="1" name="priority">
                                    </div>
                                </div>
                            </div>
                            <div class="space-empty"></div>
                            <div class="box-input">
                                <button type="submit" class="btn primary-color">Create new category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-empty"></div>
        <div class="back">
            <div class="back-prev-page">
                <a href="{{ route('admin.list.articles') }}" class="btn"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
        // jQuery
        $('[name=tags]').tagify();
        // Vanilla JavaScript
        var input = document.querySelector('input[name=tags]'),
            tagify = new Tagify(input);
        $('[name=tags]').tagify({
            duplicates: false
        });
    </script>
@endsection
