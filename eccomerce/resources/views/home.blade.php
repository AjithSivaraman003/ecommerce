<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/design.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <style>



    </style>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100">
  <div class="container">
    <a class="navbar-brand fs-4" href="#"><h3 class="logo">HEY DUDE</h3></a>
<!-- <a class="navbar-brand d-flex align-items-center" href="#">

    <img src="{{ asset('storage/logo/logo.jpg') }}"
         alt="Logo"
         style="width:100px; height:50px; object-fit:contain;">

</a> -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="#"><b>Home</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-dark" id="addToCart" href="/cart"><b>Cart</b></a>
          </li>
          
           <li class="nav-item mx-2">
            <a class="nav-link text-dark" href="/productpage"><b>Product</b></a>
          </li>
          </ul>
          <!--login-->
         <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
  
  <i class="fa-solid fa-cart-arrow-down fa-2x" style="color:rgb(27, 27, 27);"></i>

  <a href="/login" 
     class="text-white text-decoration-none px-4 py-2 bg-primary rounded-pill">
     Login / Signup
  </a>

</div>
  </div>
</nav>

<!-- <nav class="navbar navbar-expand-lg vintage-navbar">
  <div class="container">
    <a class="navbar-brand vintage-logo" href="#">HEY DUDE</a>
         <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Collections</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
      </ul>
    </div>
  </div>
</nav>  -->



<div class="container-fluid bg-grid d-flex align-items-center">
  <div class="row w-100">
    <div class="col-12 col-md-6 text-black text-center">
      <h2></h2>
      <p></p>
    </div>
    <div class="col-12 col-md-6 text-white text-start htext">
     <h2>Fashion <br> Starts Here.</h2>
     <p class="text-start bg-dark text-white p-3 rounded">
      Shop stylish footwear and beautiful dresses designed for every occasion.
Experience the perfect blend of comfort, elegance, and modern fashion.</p>
    </div>
  </div>
</div>



<!--section2-->
 <div class="container-fluid full-screen p-0"> 
  
  <div class="row h-100 align-items-center g-0">
    
    <!-- Image -->
    <div class="col-12 col-md-6">
      <img src="{{ asset('storage/home-image/dress1.jpg') }}" class="w-100 h-100 object-fit-cover" alt="">
    </div>

    <!-- Text -->
   <div class="col-12 col-md-6 d-flex align-items-center justify-content-center h-100">
  
  <div class="contentbox d-flex flex-column align-items-center text-center">
    
    <h2 class="mb-2 mt-3">Nordic Winter Wool Sweater</h2>
    <p class="mb-3">Soft premium wool sweater with Scandinavian knit patterns. <br>
Perfect for winter fashion and casual wear.</p><br>

    <img src="{{ asset('storage/home-image/dress2.jpg') }}" class="img-fluid mb-3" style="max-width:80%;" alt="">
     <h4 class="mb-3">★★★★☆ (4.8 Reviews)</h4><br>
      

  
    <a href="{{ url('/productpage?category=Dress') }}"
   class="btn btn-primary text-white w-25 text-decoration-none">
   View More
  </a>

  </div>
</div>
</div>
</div>
<!--section2-->


<!--section3-->
<div class="container-fluid full-screen p-0">
  <div class="row h-70 align-items-center g-0">
        <!-- Text -->
   <div class="col-12 col-md-6 d-flex align-items-center justify-content-center h-100">
  
  <div class="contentbox d-flex flex-column align-items-center text-center">
    
    <h2 class="mb-2 mt-3">Urban Street Sneakers</h2>
    <p class="mb-3">Designed for style and comfort with a lightweight fit <br> perfect for daily adventures.</p><br>

    <img src="{{ asset('storage/products-images/dress4.jpg') }}" class="img-fluid mb-3" style="max-width:80%;" alt="">
     <h4 class="mb-3">★★★★☆ (4.7 Reviews)</h4><br>

   <a href="{{ url('/productpage?category=shoes') }}"
   class="btn btn-primary text-white w-25 text-decoration-none">
   View More
  </a>

  </div>
</div>
    <!-- Image -->
    <div class="col-12 col-md-6">
      <img src="{{ asset('storage/home-image/dress3.jpg') }}" class="w-100 h-100 object-fit-cover" alt="">
    </div>


</div>
</div>
<!--section3-->


 
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
</html>