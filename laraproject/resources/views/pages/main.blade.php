<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @stack('styles')
</head>
<body>
    @include('includes.header')

    <main>
        @yield('main-container')
    </main>
    
    @include('includes.footer')

    @stack('script')
</body>
</html>
