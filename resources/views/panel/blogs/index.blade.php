@extends('layout')

@section('title', 'Blog Listele')

@section('css_specific')

    <!-- [Page specific CSS] start --><!-- data tables css -->
    <link rel="stylesheet" href="../assets/css/plugins/dataTables.bootstrap5.min.css">

    <link href="../assets/css/plugins/animate.min.css" rel="stylesheet" type="text/css">
@endsection



@section('breadcrumb')
    <div class="row align-items-center">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Blog Yönetimi</a></li>
                <li class="breadcrumb-item"><a href="{{ route('panel.blogs.index') }}">Blog Listeleme</a></li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="page-header-title">
                <h2 class="mb-0">Blog Listeleme</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row"><!-- HTML (DOM) Sourced Data table start -->


        <div class="col-sm-12">

            @if(session('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
                </div>
            @endif


            <div class="card">
                <div class="card-header">


                </div>

                <div class="card-body table-responsive">


                    <table id="ornekTablo" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>BASLIK</th>
                            <th>ICERIK</th>
                            <th>KATEGORI</th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$blog->id}}</td>


                                <td>


                                    <a href="{{ route('panel.blogs.show', $blog->id) }}">
                                        {{$blog->title}}
                                    </a>

                                </td>


                                <td>{{ \Illuminate\Support\Str::limit($blog->content, 20) }}</td>
                                <td>
                                    {{$blog->category->name}}
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center mt-3">
                        {{ $blogs->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection



@section('js_specific')
    <script src="{{ asset('assets/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>

    <script>
        $('#ornekTablo').DataTable({
            "order": [
                [0, 'desc']
            ] // Varsayılan sıralama (ID'ye göre)
        });
    </script>

@endsection
