@extends('includes.main')
@section('title', 'About Us')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endsection

@section('main-container')
   </head>
<body>
    <div class="left-section">
        <div class="product-card">
            <button class="delete-btn"><i class="fa-regular fa-trash-can"></i></button>
            <div class="product-image">
                <img src="C:\Users\kirit patel\Downloads\51f607432c1d5677b122c2f3f7261f577ee52b16.png" alt="Locae Fit Printed Shirt 1">
            </div>
            <div class="product-info">
                <div class="product-title">Locae Fit Printed Shirt</div>
                <div class="product-price">Rs. 45,99900</div>
                <div class="product-details">
                    <dt>Art.no.</dt>
                    <dd>SEMASS5444</dd>
                    <dt>Size</dt>
                    <dd>S</dd>
                    <dt>Color</dt>
                    <dd>Black / Cut Of Service</dd>
                    <dt>Total</dt>
                    <dd>Rs. 93,99620</dd>
                </div>
                <div class="quantity-control">
                    <button class="quantity-btn">-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="quantity-btn">+</button>
                </div>
            </div>
        </div>

        <div class="product-card">
            <button class="delete-btn"><i class="fa-regular fa-trash-can"></i></button>
            <div class="product-image">
                <img src="C:\Users\kirit patel\Downloads\a9bb31e8b0e107b5e7c667ea6331c9bc249a036f.png" alt="Locae Fit Printed Shirt 2">
            </div>
            <div class="product-info">
                <div class="product-title">Locae Fit Printed Shirt</div>
                <div class="product-price">Rs. 45,99900</div>
                <div class="product-details">
                    <dt>Art.no.</dt>
                    <dd>SEMASS5444</dd>
                    <dt>Size</dt>
                    <dd>S</dd>
                    <dt>Color</dt>
                    <dd>Black / Cut Of Service</dd>
                    <dt>Total</dt>
                    <dd>Rs. 93,99920</dd>
                </div>
                <div class="quantity-control">
                    <button class="quantity-btn">-</button>
                    <input type="text" class="quantity-input" value="1">
                    <button class="quantity-btn">+</button>
                </div>
            </div>
        </div>
    </div>

    <div class="right-section">
        <div class="discount-section">
            <h3>Discounts</h3>
            <div class="Apply-section">
                <h4>Apply Discount</h4>
            </div>
        </div>

        <p>Sign in to use your personal offers!</p>
        <button class="sign-in-btn">Sign in</button>

        <div class="divider"></div>

        <div class="price-row">
            <span>Order Value</span>
            <span>Rs. 101,997,000</span>
        </div>
        <div class="price-row">
            <span>Delivery</span>
            <span>FREE</span>
        </div>

        <div class="divider"></div>

        <div class="price-row total">
            <span>Total</span>
            <span>Rs. 131,997,000</span>
        </div>

        <button class="checkout-btn">Continue to Checkout</button>

        <div class="payment-methods">
            <p>We accept</p>
                <p>Cash on Delivery  <strong>VISA</strong>

        </div>

        <p class="footer-note">
            Phone and delivery costs are not confirmed until you've reached the checkout.<br>
            15 days free returns, local map about return and refund policy.<br>
            Customer would receive an 95% purchase/up notification regarding deliveries on the registered phone number.
        </p>
    </div>
</body>
@endsection
