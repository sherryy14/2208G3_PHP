<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('post')}}">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product')}}">Product</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

      <h1 class="text-center my-5">Home Page</h1>


      {{-- <?php ?> --}}
      {{-- blade syntax  --}}
      @php
          $name = 'Maaz';

          $teacher = '<h4>Aptech</h4>';
      @endphp

      <h3>Core PHP @php
         echo $name
      @endphp</h3>

      <h3>Blade {{$name}}</h3>


      <div>
        {{$teacher}}
        {!! $teacher !!}
      </div>


      @php
          $std = ['Ali','Maaz','Ahmed','Owais','Rahim'];
          $products = [
            ['mobile',499,'mobile.png'],
            [],
            [],
            [],
          ]
      @endphp

@foreach ($std as $key => $item)
    
<h3>Key: {{$key}} Value:{{$item}}</h3>

@endforeach




</body>
</html>