<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Upload JPG Image</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="file" name="image" class="form-control" accept="image/jpeg">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <h3 class="mt-5">Stored Images</h3>
    <div class="row">
        @foreach ($images as $image)
            <div class="col-md-4">
                <img src="{{ route('image.display', ['filename' => basename($image->file_path)]) }}" class="img-fluid rounded shadow">
            </div>
        @endforeach
    </div>
</body>
</html>
