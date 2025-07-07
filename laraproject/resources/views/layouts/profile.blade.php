@extends('includes.main')
@section('title', 'profile')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('main-container')
<body>
    <div class="heading-border">
        <h1 class="profile-title">Profile</h1>
    </div>
    <div class="user-dashboard-wrapper">
        <div class="user-dashboard-main-container">
            <!-- Left section with two square containers -->
            <div class="user-dashboard-sidepanel-container">
                <!-- Profile card with image -->
                <div class="user-profile-card-container">
                    <img src="images/profile.jpg" alt="Profile background" class="profile-background-image">
                    
                    <div class="user-profile-details-container">
                        <h1 class="user-greeting-text">Hello Maulik Vasani</h1>
                        
                        <!-- Points tracker -->
                        <div class="user-points-tracker-container">
                            <div class="points-tracker-line-style">
                                <div class="points-progress-indicator-style"></div>
                            </div>
                            <div class="points-milestones-display">
                                <span>0</span>
                                <span>200</span>
                            </div>
                        </div>
                        
                        <p class="points-status-text">You're 200 points away from your next voucher!</p>
                        <p class="voucher-info-text">Voucher have a 25-day delay.</p>
                    </div>
                </div>
                
                <!-- Navigation menu -->
                <div class="user-nav-menu-container">
                    <div class="nav-menu-item-style">
                        <div class="nav-item-content-style">
                            <i class="fas fa-shopping-bag nav-icon-style"></i>
                            <span>Order</span>
                        </div>
                        <i class="fas fa-chevron-right nav-arrow-style"></i>
                    </div>
                    <div class="nav-menu-item-style">
                        <div class="nav-item-content-style">
                            <i class="fas fa-cog nav-icon-style"></i>
                            <span>Account Setting</span>
                        </div>
                        <i class="fas fa-chevron-right nav-arrow-style"></i>
                    </div>
                    <div class="nav-menu-item-style">
                        <div class="nav-item-content-style">
                            <i class="fas fa-star nav-icon-style"></i>
                            <span>Points</span>
                        </div>
                        <i class="fas fa-chevron-right nav-arrow-style"></i>
                    </div>
                    <div class="nav-menu-item-style">
                        <div class="nav-item-content-style">
                            <i class="fas fa-phone nav-icon-style"></i>
                            <span>Contact Us</span>
                        </div>
                        <i class="fas fa-chevron-right nav-arrow-style"></i>
                    </div>
                    <div class="nav-menu-item-style">
                        <div class="nav-item-content-style">
                            <i class="fas fa-question-circle nav-icon-style"></i>
                            <span>Help & Improve</span>
                        </div>
                        <i class="fas fa-chevron-right nav-arrow-style"></i>
                    </div>
                    <div class="nav-menu-item-style">
                        <div class="nav-item-content-style">
                            <i class="fas fa-sign-out-alt nav-icon-style"></i>
                            <span>Sign Out</span>
                        </div>
                        <i class="fas fa-chevron-right nav-arrow-style"></i>
                    </div>
                </div>
            </div>
            
            <!-- Right content section -->
            <div class="user-dashboard-content-area">
                <div class="purchase-container-style">
                    <h2 class="purchase-header-text">My Purchase</h2>
                    <h3 class="purchase-subheader-text">We're Sorry</h3>
                    <p class="purchase-message-text">When you have bought something you'll find it here.</p>
                    <button class="primary-action-button">Go to Home Page</button>
                </div>
            </div>
        </div>
    </div>
</body>
                       
@endsection