<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<section class="container py-5">

    <div class="cart-wrapper p-4">

        <!-- TITLE -->
        <h1 class="mb-4 fw-bold">
            Cart
        </h1>

        <!-- STEPS -->
        <div class="d-flex align-items-center gap-3 mb-5 flex-wrap">

            <span class="fw-bold">1. Cart</span>

            <div class="line"></div>

            <span>2. Checkout</span>

            <div class="line"></div>

            <span>3. Payment</span>

        </div>



        <div class="row g-5">

            <!-- LEFT -->
            <div class="col-lg-8">

                <!-- ITEM -->
                <div class="cart-item">

                    <div class="row align-items-center">

                        <!-- IMAGE -->
                        <div class="col-md-3 text-center">

                            <img src="{{ asset('storage/products-images/dress4.jpg') }}"
                                 class="product-img">

                        </div>


                        <!-- DETAILS -->
                        <div class="col-md-6 mt-4 mt-md-0">

                            <h4 class="fw-bold">
                                Slim Fit Casual Shirt
                            </h4>

                            <p class="text-muted mb-2">
                                Premium casual shirt for men.
                            </p>

                            <p>
                                Size <strong>XL</strong>
                                
                            </p>

                            <div class="d-flex align-items-center gap-2">

                                <h3 class="fw-bold mb-0">
                                    $85
                                </h3>

                                <!-- <del class="text-muted">
                                    $92
                                </del> -->

                            </div>

                        </div>


                        <!-- ACTIONS -->
                        <div class="col-md-3 text-md-end mt-4 mt-md-0">

                            <!-- QTY -->
                            <div class="d-flex justify-content-md-end align-items-center gap-2 mb-4">

                                <button class="qty-btn">-</button>

                                <input type="text"
                                       value="1"
                                       class="qty-input">

                                <button class="qty-btn">+</button>

                            </div>


                            <!-- ICONS -->
                            <div class="d-flex justify-content-md-end gap-2">

                                <button class="icon-btn">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button class="icon-btn">
                                    <i class="bi bi-pencil"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- SECOND ITEM -->
                <div class="cart-item">

                    <div class="row align-items-center">

                        <div class="col-md-3 text-center">

                            <img src="{{ asset('storage/products-images/sales2.jpg') }}"
                                 class="product-img">

                        </div>


                        <div class="col-md-6 mt-4 mt-md-0">

                            <h4 class="fw-bold">
                                Printed Straight Kurtas
                            </h4>

                            <p class="text-muted mb-2">
                                Stylish modern fashion collection.
                            </p>

                            <p>
                                Size <strong>M</strong>
                               
                            </p>

                            <div class="d-flex align-items-center gap-2">

                                <h3 class="fw-bold mb-0">
                                    $68
                                </h3>

                               

                            </div>

                        </div>


                        <div class="col-md-3 text-md-end mt-4 mt-md-0">

                            <div class="d-flex justify-content-md-end align-items-center gap-2 mb-4">

                                <button class="qty-btn">-</button>

                                <input type="text"
                                       value="2"
                                       class="qty-input">

                                <button class="qty-btn">+</button>

                            </div>

                            <div class="d-flex justify-content-md-end gap-2">

                                <button class="icon-btn">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button class="icon-btn">
                                    <i class="bi bi-pencil"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- RIGHT -->
            <div class="col-lg-4">

                <div class="summary-box">

                    <h4 class="fw-bold mb-4">
                        Order Summary
                    </h4>

                    <div class="summary-row">
                        <span>Sub Total</span>
                        <strong>$239.00</strong>
                    </div>

                    <div class="summary-row">
                        <span>Discount</span>
                        <strong>$35.52</strong>
                    </div>

                    <div class="summary-row">
                        <span>Tax</span>
                        <strong>$0.00</strong>
                    </div>

                    <div class="summary-row">
                        <span>Shipping</span>
                        <strong class="text-warning">
                            Free
                        </strong>
                    </div>

                    <hr>

                    <div class="summary-row fw-bold">
                        <span>Total</span>
                        <strong>$606.48</strong>
                    </div>

                    <button class="checkout-btn">
                        Proceed to Checkout
                    </button>

                    <hr>

                    <p class="text-center text-muted small">
                        Estimated Delivery by
                        <strong>25 April, 2025</strong>
                    </p>

                </div>



                <!-- COUPON -->
                <div class="coupon-box mt-4">

                   

                </div>

            </div>

        </div>

    </div>

</section>



<style>

body{
    background:#f7f4ef;
}

.cart-wrapper{
    background:#fff;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.05);
}

.line{
    width:70px;
    height:1px;
    background:#ccc;
}

.cart-item{
    border-bottom:1px solid #eee;
    padding:25px 0;
}

.product-img{
    width:120px;
    height:140px;
    object-fit:cover;
    border-radius:15px;
}

.qty-btn{
    width:35px;
    height:35px;
    border:none;
    background:#f2f2f2;
    border-radius:8px;
}

.qty-input{
    width:45px;
    height:35px;
    text-align:center;
    border:1px solid #ddd;
    border-radius:8px;
}

.icon-btn{
    width:38px;
    height:38px;
    border:1px solid #ddd;
    background:#fff;
    border-radius:8px;
}

.summary-box{
    background:#faf7f2;
    padding:30px;
    border-radius:20px;
}

.summary-row{
    display:flex;
    justify-content:space-between;
    margin-bottom:18px;
}

.checkout-btn{
    width:100%;
    background:#111;
    color:#fff;
    border:none;
    padding:14px;
    border-radius:40px;
    margin-top:20px;
}

.coupon-box{
    background:#faf7f2;
    padding:25px;
    border-radius:20px;
}

</style>