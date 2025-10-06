<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm">
          <div class="card-header">Create Post</div>
          <div class="card-body">

            <form action="{{route('posts.store')}}" method="post">
              @csrf
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
              </div>

              <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea id="body" name="body" class="form-control" rows="4" >{{old('body')}}</textarea>
              </div>

              <button type="submit" class="btn btn-primary">Save</button>
              <a href="/posts" class="btn btn-secondary">Cancel</a>
            </form>
          </div>
          <!-- /resources/views/post/create.blade.php -->


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
        </div>
      </div>
    </div>
  </div>
</body>
</html>
