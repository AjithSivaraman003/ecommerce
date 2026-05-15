<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inner page product</title>
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="design.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="innerproduct.css">
    

    <style>
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }
        .small-img-col{
            flex-basis: 24%;
            cursor: pointer;
        }

        .sproduct select{
            display: block;
            padding: 5px 10px;
        }

         .sproduct input{
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
         }

         .sproduct input:focus{
            outline: none;
         }

         .buy-btn{
            background: orange;
            opacity: 1;
            transition: 0.3s all;
            padding: 8px 15px;
           border: none;
         }


    </style>
    </head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow position-sticky top-0 w-100">
  <div class="container">

    <a class="navbar-brand fs-4" href="#">
      <h3 class="logo text-white mb-0">HEY DUDE</h3>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
        
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/home">Home</a>
        </li>

        <li class="nav-item mx-2" id="addToCart">
          <a class="nav-link text-white" href="/cart">Cart</a>
        </li>


        <li class="nav-item mx-2">
          <a class="nav-link text-white" href="/productpage">Product</a>
        </li>

      </ul>

      <!-- Login -->
      <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">

        <i class="fa-solid fa-cart-arrow-down fa-2x text-white"></i>

         @if(Auth::check())
    <div class="d-flex align-items-center gap-3">
        <h6 class="mb-0 text-white">Welcome, {{ Auth::user()->name }}</h6>
        <a href="/logout"
           class="text-white  btn btn-danger   px-4 py-2 rounded-pill">
           Logout
        </a>
    </div> <br>
@endif

        
     

      </div>

    </div>
  </div>
</nav>


<section class="container sproduct my-5 pt-5">
<form action="{{ url('/cart/store') }}" method="POST">

    @csrf
<div class="row mt-5">

    <!-- Product Image -->
    <div class="col-lg-5 col-md-12 col-12">

        <img class="img-fluid w-100 pb-1"
             src="{{ asset('storage/products-images/' . $product->image) }}"
             id="MainImg"
             alt="">

        

    </div>


    <!-- Product Details -->
    <div class="col-lg-6 col-md-12 col-12">

        <h6>
            Home / {{ $product->category }}
        </h6>

        <h3 class="my-3">
            {{ $product->title }}
        </h3>

        <h2>
            ${{ $product->price }}
        </h2>

        <select class="my-3 form-select w-50">

            <option>Select Size</option>            
            <option >XL</option>
            <option >Medium</option>
            <option >Small</option>
            </option>

        </select>

         <input type="hidden"
           name="product_id"
           value="{{ $product->id }}">

           
        <input type="number"
                 name="quantity"
               value="1"
               class="form-control w-25 mb-3">

        <button  type="submit" id="addToCartBtn" class="buy-btn btn btn-primary">
            Add to cart
        </button>

        <h4 class="mt-5 mb-3">
            Product Details
        </h4>

        <span>
            {{ $product->description }}
        </span>

    </div>

</div>
</form>

</section>




<script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
    }
</script>

<script>

document.getElementById("addToCartBtn")
.addEventListener("click", function(event){

    // USER LOGIN CHECK
    let isLoggedIn = "{{ Auth::check() }}";

    // NOT LOGGED IN
    if(isLoggedIn != 1)
    {
        event.preventDefault();

        alert("Please login first");

        window.location.href = "/login";
    }

});

</script>

<script>

document.getElementById("addToCart")
.addEventListener("click", function(event){

    // USER LOGIN CHECK
    let isLoggedIn = "{{ Auth::check() }}";

    // NOT LOGGED IN
    if(isLoggedIn != 1)
    {
        event.preventDefault();

        alert("Please login first");

        window.location.href = "/login";
    }

});

</script>





    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
        </script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>