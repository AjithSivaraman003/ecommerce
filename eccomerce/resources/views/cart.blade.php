<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<section class="container py-5">

    <div class="cart-wrapper">

        <!-- TOP -->
        <div class="d-flex justify-content-between align-items-center mb-5 flex-wrap">

            <div>
                <h1 class="fw-bold mb-2">
                    Shopping Cart
                </h1>

                <p class="text-muted">
                    Manage your selected products
                </p>
            </div>

            <a href="/productpage"
               class="btn btn-outline-dark rounded-pill px-4">

                ← Continue Shopping

            </a>

        </div>


        <div class="row">

            <!-- LEFT SIDE -->
            <div class="col-lg-8">

                @foreach($carts as $cart)

                <div class="cart-card mb-4">

                    <div class="row align-items-center">

                        <!-- IMAGE -->
                        <div class="col-md-3 text-center">

                            <img src="{{ asset('storage/products-images/' . $cart->image) }}"
                                 class="product-img">

                        </div>


                        <!-- DETAILS -->
                        <div class="col-md-5 mt-4 mt-md-0">

                            <h4 class="fw-bold">
                                {{ $cart->title }}
                            </h4>

                            <p class="text-muted small mb-2">
                                {{ $cart->description }}
                            </p>

                            <p class="mb-2">
                                Size:
                                <strong>{{ $cart->size }}</strong>
                            </p>

                            <h5 class="fw-bold text-dark">
                                ${{ $cart->price }}
                            </h5>

                        </div>


                        <!-- QTY -->
                        <div class="col-md-2 mt-4 mt-md-0 text-center">

                            <p class="fw-bold mb-2">
                                Qty
                            </p>

                            <div class="qty-box">

                                <button class="qty-btn">-</button>

                                <input type="text"
                                       value="{{ $cart->quantity }}"
                                       class="qty-input">

                                <button class="qty-btn">+</button>

                            </div>
                           

                        </div>
                         <!-- ACTION -->
                <div class="col-md-3 mt-4 mt-md-0 text-center">

                    <p class="fw-bold mb-3">
                        Action
                    </p>

                    <!-- DELETE BUTTON -->
                    <a href="{{ url('/cart-delete/' . $cart->id) }}"
                       class="btn btn-danger rounded-pill px-4"
                       onclick="return confirm('Remove this item from cart?')">

                        <i class="bi bi-trash"></i>

                        Delete

                    </a>

                </div>
                    <!-- delet end -->

                    </div>

                </div>

                @endforeach

            </div>


            <!-- RIGHT SIDE -->
            <div class="col-lg-4">

                <div class="summary-card">

                    <h3 class="fw-bold mb-4">
                        Order Summary
                    </h3>

                    <div class="d-flex justify-content-between mb-3">

                        <span>Items Total</span>

                        <strong>
                            ${{ $grandTotal }}
                        </strong>

                    </div>

                    <div class="d-flex justify-content-between mb-3">

                        <span>Shipping</span>

                        <strong class="text-success">
                            Free
                        </strong>

                    </div>

                    <div class="d-flex justify-content-between mb-4">

                        <span>Tax</span>

                        <strong>
                            $0
                        </strong>

                    </div>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <h4 class="fw-bold">
                            Grand Total
                        </h4>

                        <h4 class="fw-bold text-primary">
                            ${{ $grandTotal }}
                        </h4>

                    </div>

                    <button class="checkout-btn w-100">

                        Proceed To Checkout

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>



<style>

body{
    background: #f5f5f5;
}


/* WRAPPER */
.cart-wrapper{
    background: #fff;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}


/* PRODUCT CARD */
.cart-card{
    background: #fff;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.06);
}


/* IMAGE */
.product-img{
    width: 140px;
    height: 160px;
    object-fit: cover;
    border-radius: 15px;
}


/* QUANTITY */
.qty-box{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.qty-btn{
    width: 35px;
    height: 35px;
    border: none;
    background: #f8f8f8;
    color: #000000;
    border-radius: 50%;
    font-size: 18px;
}

.qty-input{
    width: 50px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 10px;
    height: 35px;
}


/* SUMMARY */
.summary-card{
    background: #fff;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.06);
    position: sticky;
    top: 30px;
}


/* CHECKOUT BUTTON */
.checkout-btn{
    background: #111;
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 15px;
    font-weight: 600;
    transition: 0.3s;
}

.checkout-btn:hover{
    background: #333;
}


/* MOBILE */
@media(max-width:768px){

    .cart-wrapper{
        padding: 20px;
    }

    .product-img{
        width: 100px;
        height: 120px;
    }

}

</style>