<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('post') }}">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product') }}">Product</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center my-5">Product Page</h1>

    @php
        $products = [
            [
                'title' => 'Product 1',
                'price' => 999,
                'img' => 'product-img-1.jpg',
            ],
            [
                'title' => 'Product 2',
                'price' => 999,
                'img' => 'product-img-2.jpg',
            ],
            [
                'title' => 'Product 3',
                'price' => 999,
                'img' => 'product-img-3.jpg',
            ],
        ];
        
        $arr = [['Iphone5', '$50', 'Black'], ['Iphone6', '$100', 'Golden'], ['Iphone7', '$200', 'Black'], ['Iphone8', '$300', 'White'], ['IphoneX', '$500', 'Black']];
    @endphp


    <div class="container">
        <div class="row">
            @foreach ($products as $item)
                <div class="col-md-4">

                    <div class="card" style="width: 18rem;">
                        <img src="products/{{ $item['img'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p>${{ $item['price'] }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach

            @foreach ($arr as $item)
            @foreach ($item as $prod)
                
                

            @endforeach
            @endforeach



        </div>
    </div>
</body>

</html>
