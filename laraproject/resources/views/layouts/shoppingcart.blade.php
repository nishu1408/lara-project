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
    <div class="cart-container">
        <div class="product-list-section">
            <div class="product-card">
                <button class="delete-btn"><i class="fa-regular fa-trash-can"></i></button>
                <div class="product-image">
                    <img src="images/hotholidayimage4.png" alt="Lease Fit Printed Blirt">
                </div>
                <div class="product-info">
                    <div class="product-title">Lease Fit Printed Blirt</div>
                    <div class="product-price">Rs. 46,999.00</div>
                    <div class="product-details">
                        <dt>Art.no.</dt>
                        <dd>No. 1/2/202444</dd>
                        <dt>Size</dt>
                        <dd>S</dd>
                        <dt>Color</dt>
                        <dd>Black / Out Of Service</dd>
                        <dt>Total</dt>
                        <dd>Rs. 3,078.88</dd>
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
                    <img src="images/productimage3.jpg" alt="Lease Fit Printed Blirt">
                </div>
                <div class="product-info">
                    <div class="product-title">Lease Fit Printed Blirt</div>
                    <div class="product-price">Rs. 46,999.00</div>
                    <div class="product-details">
                        <dt>Art.no.</dt>
                        <dd>No. 1/2/202444</dd>
                        <dt>Size</dt>
                        <dd>S</dd>
                        <dt>Color</dt>
                        <dd>Black / Out Of Service</dd>
                        <dt>Total</dt>
                        <dd>Rs. 39,999.00</dd>
                    </div>
                    <div class="quantity-control">
                        <button class="quantity-btn">-</button>
                        <input type="text" class="quantity-input" value="1">
                        <button class="quantity-btn">+</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="order-summary-section">
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
                <span>Rs. 131,997.00</span>
            </div>
            <div class="price-row">
                <span>Delivery</span>
                <span>FREE</span>
            </div>
            
            <div class="divider"></div>
            
            <div class="price-row total">
                <span>Total</span>
                <span>Rs. 131,997.00</span>
            </div>
            
            <button class="checkout-btn">Continue to Checkout</button>
            
            <div class="payment-methods">
                <p>We accept</p>
                <p>Cash on Delivery <strong>VISA</strong></p>
            </div>
            
            <p class="footer-note">
                Prices and delivery costs are not confirmed until you've received the checked.<br>
                If we have returns, Read more about return and refund policy. Customers would receive an SHA/whose/cap notification regarding deliveries on the registered phone number.
            </p>
        </div>
    </div>
</body>
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
