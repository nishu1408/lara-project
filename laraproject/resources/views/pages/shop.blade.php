@extends('pages.main')
@section('title', 'shop')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('main-container')
<body>
    <!--Shop Section -->
    <div class="heading-border">
        <h1 class="shop-title">Shop</h1>
      </div>
      <div class="top-container">
  <h2>Bestseller Running Out Fast</h2>
  <p>Lorem ipsum dolor sit amet consectetur.</p>
  <div class="top-buttons">
    <button class="active">Men</button>
    <button>Ladies</button>
    <button>Baby</button>
    <button>Kids</button>
    <button>Sport</button>
  </div>
</div>

<!-- ⭐ MAIN FLEX SECTION -->
<div class="main-container">
  <!-- Sidebar -->
  <div class="sidebar">
    <h3>Offers</h3>
    <ul>
      <li>Member Exclusive Prices</li>
      <li>Sweat & Hoodies: From ₹899</li>
    </ul>
    <h3>New In</h3>
    <ul>
      <li>View All</li>
      <li>Accessories</li>
      <li>Shoes</li>
      <li>Clothes</li>
    </ul>
    <h3>Trending Now</h3>
    <ul>
      <li>Outdoor Apparel</li>
      <li>Trending Now</li>
    </ul>
    <h3>Clothing</h3>
    <ul>
      <li>View All</li>
      <li>Hoodies & Sweatshirts</li>
      <li>Shirts</li>
      <li>T-Shirts & Tops</li>
      <li>Jackets & Coats</li>
      <li>Trousers</li>
      <li>Jeans</li>
      <li>Sweaters & Cardigans</li>
      <li>Polos</li>
      <li>Basics</li>
      <li>Blazers & Suits</li>
      <li>Shorts</li>
      <li>Underwear</li>
      <li>Premium Selection</li>
      <li>Sleepwear & Loungewear</li>
      <li>Swimwear</li>
      <li>Socks</li>
      <li>Sports</li>
      <li>Care Products</li>
      <li>Sale</li>
      <li>Sports</li>
    </ul>
  </div>

  <!-- Right Content Area -->
  <div class="content-area">
    <!-- Top View Row -->
    <h3><b>View All</b></h3>
    <div class="content-header">
        <div class="actions">
        <span class="sort by">Sort By <b>+</b> </span>
        <span class="filter"> Filter  <i class="fa-solid fa-filter"></i></span>
        </div>
    </div>

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
</div>
  </div>
</section>

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
</div>
  </div>
</section>



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
</div>
  </div>
</section>



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
</div>
  </div>
</section>



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
</div>
  </div>
</section>



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
</div>
  </div>
</section>




  </div>
</div>
</body>
@endsection