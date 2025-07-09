@extends('layout.main')
@section('site_title', 'Home')
@section('main-container')
<!-- Hero Slider -->
    <section class="hero">
        <img class="bg-image" src="images\frame.png" alt="Background">
        <div class="content-container">
            <div class="image-border">
                <div class="text-content">
                    <h2 class="logo">Lara</h2>
                    <h1>Black Friday Collection</h1>
                    <p>Lorem ipsum dolor sit amet consectetur.Nibh morbi elit pretium in ultrices morbi ornare.</p>
                    <a href="{{url('shop')}}"><button class="shop-button">Shop The Limited Collection</button></a>
                </div>
            </div>
            <div class="image-content">
                <img src="images\frame.png" alt="lara sample">
            </div>
        </div>
    </section>
<!-- Black Friday Collections -->
    <section class="bf-sec py-5">
        <h2 class="text-center mb-4">Black Friday Collections</h2>
        <div class="container-fluid px-4 overflow-hidden">
            <div class="d-flex gap-3 bf-row">
                <div class="bf-box text-center">
                    <img src="images/dress1.png" class="bf-img mb-2" alt="Dress">
                    <p class="mb-1">Tulle Midi Dress</p>
                    <p class="fw-bold mb-2">Rs. 74,999</p>
                    <button class="btn bf-btn">
                        <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                    </button>
                </div>
                <div class="bf-box text-center">
                    <img src="images/dress2.png" class="bf-img mb-2" alt="Dress">
                    <p class="mb-1">Tulle Midi Dress</p>
                    <p class="fw-bold mb-2">Rs. 74,999</p>
                    <button class="btn bf-btn">
                        <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                    </button>
                </div>
                <div class="bf-box text-center">
                    <img src="images/dress3.png" class="bf-img mb-2" alt="Dress">
                    <p class="mb-1">Tulle Midi Dress</p>
                    <p class="fw-bold mb-2">Rs. 74,999</p>
                    <button class="btn bf-btn">
                        <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                    </button>
                </div>
                <div class="bf-box text-center">
                    <img src="images/dress4.png" class="bf-img mb-2" alt="Dress">
                    <p class="mb-1">Tulle Midi Dress</p>
                    <p class="fw-bold mb-2">Rs. 74,999</p>
                    <button class="btn bf-btn">
                        <i class="fas fa-shopping-cart me-2"></i> Add To Cart
                    </button>
                </div>
                <!-- Add more if needed -->
            </div>
        </div>
    </section>
<!-- Category Section -->
    <section class="cat-sec d-flex justify-content-center align-items-center">
        <div class="cat-box">
            <h2 class="text-center cat-head">Categories</h2>
            <div class="cat-flex">
                <button class="cat-btn">Premium Selection</button>
                <button class="cat-btn">Hoodies & Sweatshirts</button>
                <button class="cat-btn">Shirts</button>
                <button class="cat-btn">T - Shirts & Tops</button>
                <button class="cat-btn">Jackets & Coats</button>
                <button class="cat-btn">Trousers</button>
                <button class="cat-btn">Sweaters & Cardigans</button>
                <button class="cat-btn">Shorts</button>
                <button class="cat-btn">Basics</button>
                <button class="cat-btn">Polos</button>
                <button class="cat-btn">Jeans</button>
                <button class="cat-btn">Blazers & Suits</button>
                <button class="cat-btn">Sleepwear & Loungewear</button>
            </div>
        </div>
    </section>
<!-- Trendy Collection section -->
    <section class="trendy-collections">
        <h2>Trendy Collections</h2>
        <div class="collection-row">
            <div class="collection-item">
                <img src="images/trendyimage1.png" alt="Knits">
                <p>Knits</p>
            </div>
            <div class="collection-item">
                <img src="images/trendyimage2.png" alt="Best Guest Dress">
                <p>Best Guest Dress</p>
            </div>
            <div class="collection-item">
                <img src="images/trendyimage3.png" alt="Sets">
                <p>Sets</p>
            </div>
            <div class="collection-item">
                <img src="images/trendyimage4.png" alt="Dresses">
                <p>Dresses</p>
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
<!-- LARA CRUSH SECTION -->
<div class="lara-crush-container">
        <div class="double-border">
            <div class="title-overlay">
                LARA<br>
                <span>Crush</span>
            </div>
            
            <div class="crushimage-grid">
                <div class="crushimage-box">
                    <img src="images/crush1.png" alt="Product 1">
                </div>
                <div class="crushimage-box">
                    <img src="images/crush2.png" alt="Product 2">
                </div>
                <div class="crushimage-box">
                    <img src="images/crush3.png" alt="Product 3">
                </div>
            </div>
            
            <div class="product-info">
                <div class="as-seen-on">As Seen On</div>
                <div class="description">Lorem ipsum dolor sit amet consectetur.</div>
                <button class="action-button">Meet The Crushes</button>
            </div>
        </div>
    </div>
<!-- Hot Holiday Collection -->
<section class="halfnew-sec d-flex justify-content-center align-items-center">
  <div class="half-box">
    <h2 class="text-center mb-4">Hot Holiday</h2>
    <div class="half-flex">
      <div class="half-item text-center">
        <img src="images/hotholidayimage5.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <!-- Repeat for 8 items -->
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
        <img src="images/productimage6.jpg" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn hf-btn">
          <i class="fas fa-shopping-cart me-2"></i> Add To Cart
        </button>
      </div>
      <div class="half-item text-center">
        <img src="images\hotholidayimage2.png" class="half-img mb-2" alt="Item">
        <p class="mb-1">Tulle Midi Dress</p>
        <p class="fw-bold mb-2">Rs. 74,999</p>
        <button class="btn bf-btn">
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


<!-- Testimonial-section -->
    <section class="testimonial-section">
        <div class="testimonial-content">
            <h2>What Our People Says</h2>
            <p>
                At Lara Clothing, our customers consistently share their love for our stylish and high-quality designs
                that effortlessly blend fashion with comfort. They admire our attention to detail and the versatility of
                our collections, perfect for any occasion. Many highlight our seamless shopping experience and excellent
                customer service. Their positive feedback drives our commitment to delivering even better styles and
                experiences. Discover why our customers trust Lara Clothing to elevate their wardrobe!
            </p>
            <div class="testimonial-person">
                <img src="images/user.jpg" alt="Lana Dey" />
                <h3>Lana Dey</h3>
                <span>From London</span>
            </div>
        </div>
        <div class="arrow">
            <span>&#8594;</span>
        </div>
    </section>
    
 <!-- <title>The Life & The Times</title> -->
        <div class="container">
            <h1 class="title">The life & The Times</h1>
            <div class="image-grid">
                <img src="images/galleryimage1.jpg" alt="Image 1">
                <img src="images/galleryimage2.jpg" alt="Image 2">
                <img src="images/galleryimage3.jpg" alt="Image 3">
                <img src="images/galleryimage4.jpg" alt="Image 4">
                <img src="images/galleryimage5.jpg" alt="Image 5">
                <img src="images/galleryimage6.jpg" alt="Image 6">
                <img src="images/galleryimage7.jpg" alt="Image 7">
                <img src="images/galleryimage8.jpg" alt="Image 8">
                <img src="images/galleryimage9.jpg" alt="Image 9">
                <img src="images/galleryimage10.jpg" alt="Image 10">
            </div>
        </div>
@endsection
    
