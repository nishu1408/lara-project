@extends('pages.main')
@section('title', 'contact')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('main-container')
<body>
    <div class="outer-border">
        <div class="contact-container">
            <h1>How to contact Lara Client Services</h1>
            <p class="intro-text">We're here to help with any questions, concerns, or feedback you may have! Feel free
                to reach out to Lara Client Services through any of the following channels:</p>
            <div class="contact-grid">
                <div class="contact-section">
                    <h2>PHONE</h2>
                    <p>Monday - Saturday from 9 AM to 11 PM (EST).<br>
                        Sunday from 10 AM to 9 PM (EST).</p>

                    <span class="icon">📍</span>
                    <span class="method">Call Us - 91 92514 65236</span>
                    </a>
                </div>

                <div class="contact-section">
                    <h2>EMAIL</h2>
                    <p>Your inquiry will receive a response from a<br>
                        Client Advisor</p>

                    <span class="icon">📎</span>
                    <span class="method">Write Us</span>
                    </a>
                </div>

                <div class="contact-section">
                    <h2>LIVE CHAT</h2>
                    <p>Monday - Saturday from 9 AM to 11 PM (EST).<br>
                        Sunday from 10AM to 9PM (EST).</p>

                    <span class="icon">📎</span>
                    <span class="method">Message Us</span>
                    </a>
                </div>

                <div class="contact-section">
                    <h2>WHATSAPP</h2>
                    <p>Monday - Saturday from 9 AM to 8 PM (EST).<br>
                        Sunday from 10 AM to 7 PM (EST).</p>

                    <span class="icon">🔗</span>
                    <span class="method">WhatsApp Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
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

    <script>
        function openChat() {
            // Add your live chat functionality here
            alert("Live chat would open here");
        }
    </script>
</body>
@endsection