@extends('layout.main')
@section('title', 'Search')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('main-container')
<body>
<!-- Search Header -->
<div class="search-header">
    <input type="text" class="search-title" placeholder="The Search...">
    <div class="search-actions">
        <button class="show-results">Show results</button>
        <button class="search-close">&times;</button>
    </div>
</div>

<!-- Search Content -->
<div class="search-content">
    <!-- Suggested Results -->
    <div class="suggested-results">
        <div class="section-title">Suggested Results</div>
        <ul>
            <li>Shirts</li>
            <li>Shirts Men</li>
            <li>Shirts Women</li>
            <li>Shirts Dress</li>
            <li>Shirts Jackets</li>
        </ul>
    </div>
    
    <!-- Products -->
    <div class="products-section">
        <div class="section-title">Products</div>
        <div class="products-container">
            <!-- Product items -->
            <div class="product-item">
                <img src="images/productimage1.jpg" class="product-image">
                <div class="product-name">Chilli Shirt</div>
            </div>
            <div class="product-item">
                <img src="images/productimage2.jpg" class="product-image">
                <div class="product-name">Block Cascade</div>
            </div>
            <!-- More products... -->
            <div class="product-item">
                <img src="images/productimage3.jpg" class="product-image">
                <div class="product-name">Chilli Shirt</div>
            </div>
            <div class="product-item">
                <img src="images/productimage4.jpg" class="product-image">
                <div class="product-name">Block Cascade</div>
            </div>
            <div class="product-item">
                <img src="images/productimage5.jpg" class="product-image">
                <div class="product-name">Chilli Shirt</div>
            </div>
            <div class="product-item">
                <img src="images/productimage6.jpg" class="product-image">
                <div class="product-name">Block Cascade</div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
