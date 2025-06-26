<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Blog Detayı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Blog Detayı</h4>
        </div>

        <div class="card-body">
            <h5 class="card-title">Başlık:</h5>
            <p class="fw-bold">{{ $blog->title }}</p>

            <h5 class="card-title">İçerik:</h5>
            <div class="border rounded p-3 mb-3">
                {!! nl2br(e($blog->content)) !!}
            </div>

            <h5 class="card-title">Kategori:</h5>
            <span class="badge bg-info text-dark">{{ $blog->category->name ?? 'Kategori Yok' }}</span>

            <h5 class="card-title">Yazar:</h5>
            <span class="badge bg-info text-dark">{{ $blog->user->name .' ' . $blog->user->surname }}</span>


            <div class="mt-4">
                <a href="{{ route('client.blogs.index') }}" class="btn btn-secondary">Geri Dön</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
