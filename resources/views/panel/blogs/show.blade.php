@extends('layout')

@section('title', $blog->title .' | Blog Yönetimi')

@section('breadcrumb')
    <div class="row align-items-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Blog Yönetimi</a></li>
                <li class="breadcrumb-item"><a href="{{ route('panel.blogs.index') }}">Blog Listeleme</a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('panel.blogs.show' , $blog->id) }}">{{$blog->title}}</a>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="page-header-title">
                <h2 class="mb-0">Blog Düzenleme</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">

            @if(session('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('panel.blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="name" class="form-label">Blog Adı</label>
                            <input type="text" value="{{ old('title', $blog->title) }}" name="title" id="title"
                                   class="form-control"
                                   placeholder="Blog adını giriniz">
                            @error('title')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Açıklama</label>
                            <textarea name="content" id="content" rows="4" class="form-control"
                                      placeholder="Blog açıklaması yazınız...">{{ old('content', $blog->content) }}</textarea>
                            @error('content')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Kategori seçiniz</option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}" {{ old('category_id',$blog->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="error-message text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        @can(\App\Enums\PermissionEnum::BlogEdit->value)

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Değiştir</button>
                            </div>
                        @endcan


                    </form>

                    @can(\App\Enums\PermissionEnum::BlogDelete->value)
                        <form action="{{ route('panel.blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Silmek istediğinize emin misiniz?')">
                            @csrf
                            @method('DELETE')
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger">Sil</button>
                            </div>
                        </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_specific')
@endsection
