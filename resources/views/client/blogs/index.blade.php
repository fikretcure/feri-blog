<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Blog Listesi</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS (Opsiyonel) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Blog Listesi</h4>
        </div>
        <div class="card-body table-responsive">

            <table id="ornekTablo" class="table table-striped table-bordered nowrap">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>İçerik</th>
                    <th>Kategori</th>
                    <th>Yazar</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>
                            <a href="{{ route('client.blogs.show', $blog->id) }}" class="text-decoration-none text-primary">
                                {{ $blog->title }}
                            </a>
                        </td>
                        <td>{{ \Illuminate\Support\Str::limit($blog->content, 20) }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td>{{ $blog->user->name  . ' ' .  $blog->user->surname}}</td>
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

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

