<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Bootstrap CSS -->
    <link href="{{url('all\bootstrap-5.3.7-dist\css\bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('all\fontawesome-free-6.7.2-web\css\all.min.css')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&family=Oswald:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- AOS CSS -->
    <link href="{{url('all\aos-master\dist\aos.css')}}" rel="stylesheet">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('all\slick-1.8.1\slick\slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('all\slick-1.8.1\slick\slick-theme.css')}}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('css\style.css')}}">
</head>
<nav>
        <div class="logo">Lara</div>
        <div class="nav-links">
            <a href="{{url('/home')}}">Home</a>
            <a href="{{url('/newarrival')}}">New Arrival</a>
            <a href="{{url('/shop')}}">Shop</a>
            <a href="{{url('/aboutus')}}">About Us</a>
        </div>
        <div class="nav-icons">
            <a href="{{url('search')}}"><i class="fas fa-search"></i></a>
            <a href="{{url('shoppingcart')}}"><i class="fas fa-shopping-bag"></i></a>
            <a href="{{url('profile')}}"><i class="fas fa-user"></i></a>
        </div>
    </nav>
