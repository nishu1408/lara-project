<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @stack('styles')
    @include('includes.header')

    <main>
        @yield('main-container')
    </main>
    
    @include('includes.footer')

    @stack('script')
</body>
</html>
