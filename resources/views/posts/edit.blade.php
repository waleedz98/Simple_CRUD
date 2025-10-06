<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm">
          <div class="card-header">Edit Post</div>
          <div class="card-body">

            <form action="{{route('posts.update',$post->id)}}" method="post">
             @method('PUT')
              @csrf
              
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}" required>
              </div>

              <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea id="body" name="body" class="form-control" rows="4"  required>{{$post->body}}</textarea>
              </div>

              <button type="submit" class="btn btn-primary">update</button>
              <a href="/posts" class="btn btn-secondary">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
