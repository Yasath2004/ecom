<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ceygenic - Inspiring Humanity')</title>
    
    {{-- Main Stylesheet Link --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    {{-- Stack for custom head elements or meta tags from child views --}}
    @stack('head_extras')
</head>
<body>

    {{-- 1. Header/Navigation --}}
    <header class="header">
        <div class="logo">Ceygenic</div>
        <nav class="navbar">
            <ul>
                <li><a href="#">Industries</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Customers Success</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <a href="#" class="btn-quote">Get a Quote</a>
    </header>

    <main>
        {{-- 2. Hero Section --}}
        {{-- This section is likely static for the home page, but you can make it dynamic if needed --}}
        <section class="hero-section">
            <div class="hero-content">
                <h1>Inspiring <span class="highlight-orange">Humanity</span><br>Through Cutting Edged<br><span class="highlight-orange">Technology</span></h1>
            </div>
            <div class="slider-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </section>

        {{-- 3. Services Bar --}}
        <section class="services-bar">
            <div class="service-item active">SOFTWARE DEVELOPMENT</div>
            <div class="service-item">WEB DEVELOPMENT</div>
            <div class="service-item">VIDEO EDITING</div>
            <div class="service-item">GRAPHIC DESIGNING</div>
            <div class="service-item">MOBILE APP DEVELOPMENT</div>
        </section>

        {{-- 4. Main Content Area (This is where the unique content of your page will be inserted) --}}
        <section class="main-content-area">
            @yield('content') 
        </section>
        
    </main>
    
    {{-- Back to Top Button (You might want to place this in a dedicated partial if you have a Footer) --}}
    <button class="back-to-top" title="Back to Top">↑</button>

    {{-- Stack for custom JavaScript at the end of the body --}}
    @stack('scripts')

</body>
</html>