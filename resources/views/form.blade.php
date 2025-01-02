<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Upload Gambar dan Deskripsi</h2>
        <form action="/images" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control-file" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="gambar1" name="gambar1" required>
            </div>
            <div class="form-group">
                <label for="description">Culture</label>
                <textarea class="form-control" id="culture" name="culture" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Concept</label>
                <textarea class="form-control" id="concept" name="concept" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="gambar2" name="gambar2" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="gambar3" name="gambar3" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="gambar4" name="gambar4" required>
            </div>
            <div class="form-group">
                <label for="description">Challenge</label>
                <textarea class="form-control" id="challenge" name="challenge" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Solution</label>
                <textarea class="form-control" id="solution" name="solution" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file" id="gambar5" name="gambar5" required>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
