@extends('layout')

@section('title', 'Blog Ekleme')

@section('breadcrumb')
    <div class="row align-items-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Blog Yönetimi</a></li>
                <li class="breadcrumb-item"><a href="{{ route('panel.blogs.create') }}">Blog Ekleme</a></li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="page-header-title">
                <h2 class="mb-0">Blog Ekleme</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('panel.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Blog Adı</label>
                            <input type="text" value="{{old('title')}}" name="title" id="title" class="form-control"
                                   placeholder="Blog adını giriniz">
                            @error('title')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="content" class="form-label">Açıklama</label>
                            <textarea name="content" id="content" rows="4" class="form-control"
                                      placeholder="Blog açıklaması yazınız...">{{ old('content') }}</textarea>
                            @error('content')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Kategori seçiniz</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="error-message text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
