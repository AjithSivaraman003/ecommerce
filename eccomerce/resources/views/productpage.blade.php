<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product-page</title>
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;800&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="{{ asset('css/design.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
</head>
<style>
    .headimage {
       
        background: url("../storage/loginbanner.jpg");
        
  height: 300px; 
  background-size: cover;
  background-position: center;
 
    }



    /* .box{
        background: gray;
        border: 2px solid red;
    }
    .box1{
        background: blue;
    } */

</style>
<body>
    <div class="container-fluid headimage d-flex align-items-center justify-content-center text-white text-center ">
  <div >
    <div class="col-12">
        <h1>Products</h1>
    </div>
  </div>
</div>


<div class="container text-center  mt-4"> 
  <div class="row">

    <!-- Left Sidebar accrodin /list items -->
    <div class=" col-3 w-25 d-none d-sm-block box1 g-0">

  <div class="accordion accordion-flush pt-2" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, whi. content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, .</div>
    </div>
  </div>
</div>
    <img src="products-images/sales2.jpg"  height="520px" alt="">
    </div>


<!--products start-->
    <!-- Right Side -->
    <div class="col-9  mt-2  box">
      <div class="row">

        <!-- <div class="col-md-4 mb-4 ">
          <div class="card h-100">
            <img src="{{ asset('storage/products-images/dress4.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text.</p>
              
            </div>
          </div>
        </div> -->


 @foreach($products as $product)
        <div class="col-md-4 mb-4 ">
          <div class="card h-100">
            <img src="{{ asset('storage/products-images/' . $product->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $product->title }}</h5>
              <p class="card-text">{{ $product->category }}</p>
              
            </div>
          </div>
        </div> 

@endforeach




         

      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>