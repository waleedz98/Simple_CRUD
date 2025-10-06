<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Cards</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 900px;
      margin: auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h2 {
      font-size: 1.4rem;
      margin-bottom: 10px;
      color: #2c3e50;
    }

    .card p {
      font-size: 1rem;
      color: #555;
      line-height: 1.6;
    }

    .card small {
      display: block;
      margin-top: 15px;
      color: #999;
    }
  </style>
</head>
<body>              
  <h1 style="text-align:center; margin-bottom:30px;">Posts</h1>
  
  <div class="container">
    <div class="card">
      <h2>{{$posts->title}}</h2>
      <p>{{$posts->body}}</p>
      <small>{{$posts->created_at}}</small>
    </div>
  

    {{-- <div class="card">
      <h2>Learning Laravel</h2>
      <p>Praesent vitae eros eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis. Proin viverra risus a eros volutpat.</p>
      <small>Published: 2025-09-12</small>
    </div> --}}

    {{-- <div class="card">
      <h2>My Coding Journey</h2>
      <p>Aliquam erat volutpat. Morbi sit amet magna at odio varius dapibus sit amet nec nulla. Vestibulum ante ipsum primis in faucibus.</p>
      <small>Published: 2025-09-10</small>
    </div> --}}
  </div>
</body>
</html>
