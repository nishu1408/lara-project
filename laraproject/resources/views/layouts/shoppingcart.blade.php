@extends('includes.main')
@section('title', 'Shoppingcart')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/shoppingcart.css') }}">
@endsection

@section('main-container')
<body>
    <div class="heading-border">
        <h1 class="shoppingcart-title">Shopping Cart</h1>
    </div>
    <div class="sc-cart-container">
        <div class="sc-left-section">
            <div class="sc-product-card">
                <button class="sc-delete-btn"><i class="fas fa-trash-alt"></i></button>
                <div class="sc-product-image">
                    <img src="images/hotholidayimage4.png" alt="Locae Fit Printed Shirt 1">
                </div>
                <div class="sc-product-info">
                    <div class="sc-product-title">Locae Fit Printed Shirt</div>
                    <div class="sc-product-price">Rs. 45,999.00</div>
                    <div class="sc-product-details">
                        <dt>Art.no.</dt>
                        <dd>SEMASS5444</dd>
                        <dt>Size</dt>
                        <dd>S</dd>
                        <dt>Color</dt>
                        <dd>Black / Cut Of Service</dd>
                        <dt>Total</dt>
                        <dd>Rs. 93,996.20</dd>
                    </div>
                    <div class="sc-quantity-control">
                        <button class="sc-quantity-btn">-</button>
                        <input type="text" class="sc-quantity-input" value="1">
                        <button class="sc-quantity-btn">+</button>
                    </div>
                </div>
            </div>
            
            <div class="sc-product-card">
                <button class="sc-delete-btn"><i class="fas fa-trash-alt"></i></button>
                <div class="sc-product-image">
                    <img src="images/productshoppingimage.png" alt="Locae Fit Printed Shirt 2">
                </div>
                <div class="sc-product-info">
                    <div class="sc-product-title">Locae Fit Printed Shirt</div>
                    <div class="sc-product-price">Rs. 45,999.00</div>
                    <div class="sc-product-details">
                        <dt>Art.no.</dt>
                        <dd>SEMASS5444</dd>
                        <dt>Size</dt>
                        <dd>S</dd>
                        <dt>Color</dt>
                        <dd>Black / Cut Of Service</dd>
                        <dt>Total</dt>
                        <dd>Rs. 93,999.20</dd>
                    </div>
                    <div class="sc-quantity-control">
                        <button class="sc-quantity-btn">-</button>
                        <input type="text" class="sc-quantity-input" value="1">
                        <button class="sc-quantity-btn">+</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sc-right-section">
            <div class="sc-discount-section">
                <h6>Discounts</h6>
                <div class="sc-apply-section">
                    <h5>Apply Discount</h5>
                </div>
            </div>
            
            <p class="sc-signin-text">Sign in to use your personal offers!</p>
            <button class="sc-signin-btn">Sign in</button>
            
            <div class="sc-divider"></div>
            
            <div class="sc-price-row">
                <span>Order Value</span>
                <span>Rs. 101,997.00</span>
            </div>
            <div class="sc-price-row">
                <span>Delivery</span>
                <span>FREE</span>
            </div>
            
            <div class="sc-divider"></div>
            
            <div class="sc-price-row sc-total">
                <span>Total</span>
                <span>Rs. 131,997.00</span>
            </div>
            
            <button class="sc-checkout-btn">Continue to Checkout</button>
            
            <div class="sc-payment-methods">
                <p>We accept</p>
                <p>Cash on Delivery <strong>VISA</strong></p>
            </div>
            
            <p class="sc-footer-note">
                Phone and delivery costs are not confirmed until you've reached the checkout.<br>
                15 days free returns, local map about return and refund policy.<br>
                Customer would receive an 95% purchase/up notification regarding deliveries on the registered phone number.
            </p>
        </div>
    </div>

     <!-- Hot Holiday without heading -->
<section class="half-sec d-flex justify-content-center align-items-center">
  <div class="half-box">
    <div class="half-flex">
      <div class="half-item text-center">
        <img src="images/hotholidayimage.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <!-- Repeat for 8 items -->
      <div class="half-item text-center">
        <img src="images/hotholidayimage2.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images/hotholidayimage3.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images/hotholidayimage4.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images\hotholidayimage5.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn bf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
       </div>
    </div>
</div>
</section>

 <!-- Hot Holiday without heading -->
 <section class="half-sec d-flex justify-content-center align-items-center">
  <div class="half-box">
    <div class="half-flex">
      <div class="half-item text-center">
        <img src="images/hotholidayimage.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <!-- Repeat for 8 items -->
      <div class="half-item text-center">
        <img src="images/hotholidayimage2.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images/hotholidayimage3.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images/hotholidayimage4.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images\hotholidayimage5.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn bf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
       </div>
    </div>
</div>
</section>
</body>
@endsection
