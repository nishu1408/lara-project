@extends('pages.main')
@section('title', 'productdetails')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/productdetails.css') }}">
@endsection

@section('main-container')
<body>
    <!-- Header Section -->
    <div class="header-section">
        <div class="container">
      <div class="heading-border">
        <h1 class="productdetails-title">Product Details</h1>
      </div>

    
        <!-- Product Section -->
        <div class="product-container">
            <!-- Product Images -->
            <div class="product-images">
                <img src="images/prodetailimage.jpg"
                    alt="Loose Fit Sweatshirt" class="main-image">
                <div class="thumbnail-images">
                    <img src="images/prosubimage1.jpg"
                        alt="Product Thumbnail 1">
                    <img src="images/prosubimage2.jpg"
                        alt="Product Thumbnail 2">
                    <img src="images/prosubimage3.jpg"
                        alt="Product Thumbnail 3">
                </div>
            </div>

            <!-- Product Details -->
            <div class="product-details">
                <h2 class="product-title">Loose Fit Sweatshirt</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Efefniord nec aperitra enim lectus pellentesque nunc
                    malesuada enim.</p>

                <div class="product-price">Rs. 74,999</div>

                <div class="color-options">
                    <span>Colors:</span>
                    <div class="color-images">
                        <div class="color-image-container active">
                            <img src="images/prosubimage1.jpg" alt="Black" class="color-image">
                        </div>
                        <div class="color-image-container">
                            <img src="images/prosub1.jpg" alt="Blue" class="color-image">
                        </div>
                        <div class="color-image-container">
                            <img src="images/prosub2.jpg" alt="Gray" class="color-image">
                        </div>
                        <div class="color-image-container">
                            <img src="images/prosub3.jpg" alt="Brown" class="color-image">
                        </div>
                        <div class="color-image-container">
                            <img src="images/prosub4.jpg" alt="Brown" class="color-image">
                        </div>
                    </div>
                </div>

                <!-- Size Chart -->
                <div class="size-chart">
                    <h4>Size Guide</h4>
                    <table>
                        <tr>
                            <th>XS</th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th>XL</th>
                            <th>2XL</th>
                        </tr>
                    </table>
                </div>

                <button class="add-to-cart">Add To Cart</button>

                <!-- Reviews -->
                <div class="reviews">
                    <div class="rating">⭐⭐⭐⭐⭐ 25 reviews (Influent)
                        
                    </div>
                
                    <div class="true-to-size">
                        <h3>True to Size</h3>
                        
                        <div class="size-ratings">
                            <div class="size-rating">
                                <span>Small</span>
                                <div class="rating-bar"></div>
                                <span>Spot on</span>
                                <div class="rating-bar"></div>
                                <span>Large</span>
                            </div>
                        </div>
                    </div>
            <div class="description"></div>
                    <h2>Description:</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Efefniord nec aperitra enim lectus pellentesque nunc
                        malesuada enim. Non adipiscing donec justo nostrud. Naturis nunc in pellentesque grondus posuere
                        sagittis enim magna dioae vitae. Efefniord nulla egestas eros eget omore donec condimentum
                        nostris viverra. Lorem ipsum dolor sit amet consectetur. Efefniord nec aperitra enim lectus
                        pellentesque nunc malesuada enim. Non adipiscing donec justo nostrud. Naturis nunc in
                        pellentesque grondus posuere sagittis enim magna dioae vitae. Efefniord nulla egestas eros eget
                        omore donec condimentum nostris viverra. Lorem ipsum dolor sit amet consectetur. Efefniord nec
                        aperitra enim lectus pellentesque nunc malesuada enim. Non adipiscing donec justo nostrud.
                        Naturis nunc in pellentesque grondus posuere sagittis enim magna dioae vitae. Efefniord nulla
                        egestas eros eget omore donec condimentum nostris viverra.</p>
                </div>


            </div>
        </div>
    </div>


    <!-- Trending Section -->
    <div class="trending-section">
        <h2>Trending Right Now</h2>
        <div class="trending-items">
            <span class="trending-item">Green Jackets For Men</span>
            <span class="trending-item">Blue Jackets For Men</span>
            <span class="trending-item">Cotton Jackets For Men</span>
            <span class="trending-item">Men's Biker Jackets</span>
            <span class="trending-item">Men's Contrary Jackets</span>
            <span class="trending-item">Men's White Jackets</span>
            <span class="trending-item">Men's Brown Jackets</span>
        </div>
    </div>
    </div>
<!-- Hot Holiday without heading -->
<section class="halfnew-sec d-flex justify-content-center align-items-center">
  <div class="half-box">
    <div class="half-flex">
      <div class="half-item text-center">
        <img src="images/hotholidayimage.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <a href="{{ url('productdetails') }}" class="btn hf-btn" style="text-decoration: none; display: inline-block;">
        <i class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
        <!-- <div class="btn hf-btn" style="text-decoration: none; display: inline-block;">
        <a href="{{url('productdetails')}}"><i class="fas fa-shopping-bag"></i>Add To Cart</a>
        </div> -->
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

<!-- Hot Holiday without heading -->
<section class="halfnew-sec d-flex justify-content-center align-items-center">
  <div class="half-box">
    <div class="half-flex">
      <div class="half-item text-center">
        <img src="images/hotholidayimage.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <a href="{{ url('productdetails') }}" class="btn hf-btn" style="text-decoration: none; display: inline-block;">
        <i class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
        <!-- <div class="btn hf-btn" style="text-decoration: none; display: inline-block;">
        <a href="{{url('productdetails')}}"><i class="fas fa-shopping-bag"></i>Add To Cart</a>
        </div> -->
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