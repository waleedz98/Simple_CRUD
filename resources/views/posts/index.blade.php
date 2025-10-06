{{-- resources/views/posts/index.blade.php --}}
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Posts — Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="d-flex align-items-center mb-4">
      <h1 class="h3 mb-0">Posts</h1>
      <a href="{{ route('posts.create') }}" class="btn btn-primary ms-auto">Create Post</a>
    </div>

    {{-- Flash message --}}
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
      <div class="card-body p-0">
        @if($posts->count())
          <table class="table mb-0">
            <thead class="table-light">
              <tr>
                <th>Title</th>
                <th>Blog</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                {{-- <td>{{ $loop->iteration + ($posts->currentPage()-1) * $posts->perPage() }}</td> --}}
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td class="text-end">
                  <a href="{{route('posts.show',$post->id)}}" class="btn btn-sm btn-outline-primary">Show</a>
                  <a href="{{route('posts.edit',$post->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                  
                  <form action="{{route('posts.destroy',$post->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-outline-danger">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

         
        @else
          <div class="p-4 text-center text-muted">
            No posts yet. <a href="{{ route('posts.create') }}">Create the first post</a>.
          </div>
        @endif
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
