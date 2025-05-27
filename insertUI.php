<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="form" method="post" action="<?php echo "operation.php";?>">
        <div class="mb-3">
            <label for="movieId" class="form-label">Movie ID</label>
            <input name="movieId" type="number" class="form-control" id="movieId" placeholder="Enter movie ID">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter movie title">
        </div>
        <div class="mb-3">
            <label for="releaseDate" class="form-label">Release Date</label>
            <input name="releaseDate" type="date" class="form-control" id="releaseDate">
        </div>
        <div class="mb-3">
            <label for="runtime" class="form-label">Runtime (minutes)</label>
            <input name="runtime" type="number" class="form-control" id="runtime" placeholder="Enter runtime in minutes">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input name="genre" type="text" class="form-control" id="genre" placeholder="Enter genre">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Production Company</label>
            <input name="company" type="text" class="form-control" id="company" placeholder="Enter production company">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input name="country" type="text" class="form-control" id="country" placeholder="Enter country">
        </div>
        <button type="submit" class="btn btn-primary" name="insert_movie">Submit</button>
    </form>
</body>
</html>