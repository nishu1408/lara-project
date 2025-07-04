@extends('includes.main')
@section('title', 'New Arrivals')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/newarrivals.css') }}">
@endsection

@section('main-container')
<body>
    <div class="container">
      <div class="heading-border">
        <h1 class="new-arrivals-title">New Arrival</h1>
      </div>
        <div class="main-layout">
            <!-- Left Side - Man Image -->
            <div class="left-side">
               <div class="man-image-container">
                 <img src="images/manimage.jpg" alt="Man" class="man-image">
  
  <!-- Button overlay block -->
                  <button class="image-button">New Arrivals</button>
                </div>

            </div>
            
            <!-- Right Side - Products -->
            <div class="right-side">
                <!-- First 4 Products in 2x2 Grid -->
                <div class="featured-products">
                    <div class="featured-product">
                        <img src="images/hotholidayimage.png" alt="Product 1">
                        <p>Audit Room</p>
                        <p class="price">Rs. 74,999</p>
                        <button class="featured-btn">
                            <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                        </button>
                    </div>
                    
                    <div class="featured-product">
                        <img src="images/hotholidayimage.png" alt="Product 2">
                        <p>Audit Room</p>
                        <p class="price">Rs. 74,999</p>
                        <button class="featured-btn">
                            <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                        </button>
                    </div>
                    
                    <div class="featured-product">
                        <img src="images/hotholidayimage.png" alt="Product 3">
                        <p>Audit Room</p>
                        <p class="price">Rs. 74,999</p>
                        <button class="featured-btn">
                            <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                        </button>
                    </div>
                    
                    <div class="featured-product">
                        <img src="images/hotholidayimage.png" alt="Product 4">
                        <p>Audit Room</p>
                        <p class="price">Rs. 74,999</p>
                        <button class="featured-btn">
                            <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                        </button>
                    </div>
                </div>
            </div>
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
      <div class="half-item text-center">
        <img src="images/hotholidayimage6.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images/productimage5.jpg" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images/productimage2.jpg" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
    </div>
  </div>
</section>
</body>
@endsection