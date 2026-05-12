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

<!-- <section class="container sproduct my-5 pt-5">
<div class="row mt-5">
    <div class="col-lg-5 col-md-12 col-12">
        <img class="img-fluid w-100 pb-1" src="{{ asset('storage/innerpro-img/shirt1.jpg') }}" id="MainImg" alt="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="{{ asset('storage/innerpro-img/shirt1.jpg') }}" width="100" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('storage/innerpro-img/shirt2.jpg') }}" width="100" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('storage/innerpro-img/shirt3.jpg') }}" width="100" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="{{ asset('storage/innerpro-img/shirt4.jpg') }}" width="100" class="small-img" alt="">
            </div>
        </div>
    </div>


    <div class="col-lg-6 col-md-12 col-12">
        <h6>Home / Shirt</h6>
        <h3 class="my-3">Mens Fashion Tshirt</h3>
        <h2>$200.00</h2>
        <select class="my-3">
            <option >select size</option>
            <option >XL</option>
            <option >Medium</option>
            <option >Small</option>
            <input type="number" value="1">
            <button class="buy-btn">Add to cart</button>
            <h4 class="mt-5 mb-5">Product Details </h4>
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                 diam nonummy nibh euismod tincidunt ut laoreet. Lorem ipsum dolor
                 sit amet, consectetuer adipiscing elit, sed diam nonummy
                  nibh euismod tincidunt ut laoreet.</span>

        </select>
    </div>

    
</div>

</section> -->


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

            <option>
                <!-- {{ $product->size }} -->
                <option >XL</option>
            <option >Medium</option>
            <option >Small</option>
            </option>

        </select>

        <input type="number"
                 name="quantity"
               value="1"
               class="form-control w-25 mb-3">

        <button  type="submit" class="buy-btn btn btn-primary">
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



    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
        </script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>