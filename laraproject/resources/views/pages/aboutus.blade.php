@extends('layout.main')
@section('site_title', 'About_Us')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@endpush

@section('main-container')
    <!-- About Us Section -->
    <div class="heading-border">    
        <h1 class="aboutus-title">About Us</h1>
    </div>
    <div class="about-us-container">
        <img src="images/aboutmainimage.jpg" alt="Lara & Together Logo">
    </div>
        <div class="content">
            <p>LARA, ESTABLISHED IN 2019 BY JULIA BROWN, KATIE HOBBS, AND SASHA MARTIN, IS A BRAND THAT EMBODIES VITALITY AND AMBITION. THE THREE FOUNDERS, EACH WITH REMARKABLE CAREERS IN DIFFERENT DOMAINS – JULIA IN FASHION DESIGN, KATIE IN DIGITAL MEDIA AND E-COMMERCE, AND SASHA IN FINANCE AND MARKETING – CAME TOGETHER WITH A SHARED VISION TO EXPLORE NEW POSSIBILITIES. BY MERGING THEIR DIVERSE PERFECTISE AND SHARED VALUES, THEY CREATED A BRAND THAT REFLECTS ENERGY, CREATIVITY, AND A FRESH PERSPECTIVE ON LIFE.</p>
            
            <p>THE JOURNEY OF LARA SYMBOLIZES A COLLECTIVE EFFORT TO BRING INNOVATION AND PERSONAL PASSION INTO A COLLABORATIVE VENTURE, OFFERING PRODUCTS OR SERVICES (DEPENDING ON THE BRANDS' FOCUS) THAT RESONATE WITH MODERN IDEALS AND LIFESTYLES. IF YOU'D LIKE TO EXPLORE MORE DETAILS ABOUT THEIR INSPIRATIONS, PRODUCT LINES, OR THE CHALLENGES THEY OVERCAME, LET ME KNOW!</p>
        </div>

    <!-- Modern Tradition Section -->
    <div class="mt-gallery">
        <div class="mt-gallery-item">
            <img src="images/aboutimage1.jpg" alt="Modern Design 1">
        </div>
        <div class="mt-gallery-item">
            <img src="images/aboutimage2.jpg" alt="Modern Design 2">
        </div>
        <div class="mt-gallery-item">
            <img src="images/aboutimage3.jpg" alt="Modern Design 3">
        </div>
    </div>
    
    <div class="mt-container">
        <section class="mt-content">
            <div class="mt-text">
                <p class="mt-description">Modernity:While honoring tradition, we also embrace the spirit of innovation and contemporary design.<br>We seamlessly blend classic aesthetics with modern sensibilities.</p>
                <div class="mt-stats">
                    <p class="mt-stat-number">220+</p>
                    <p class="mt-stat-label">Stores in India</p>
                </div>
            </div>
        </section>
    </div>
@endsection