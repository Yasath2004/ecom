<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ceygenic - Inspiring Humanity')</title>
    
    {{-- Main Stylesheet Link --}}
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    {{-- js --}}
    <script src="{{ asset('script.js') }}" defer></script>

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
            <div class="logo">  
            </div>
            <!-- Added ID for easier selection if needed, but class works too -->
            <ul class="nav-links">
                <!-- 'Industries' starts as active -->
                <li><a href="#" class="active">Industries</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Customers Success</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
        <a href="#" class="btn-quote">Get a Quote</a>
    </header>
    

     {{-- Main Content Area --}

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
    @stack('scripts'))
    
<style>
    .hero-section {
    padding: 0 5%;
}

/* .hero-card {
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                url('https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?auto=format&fit=crop&q=80&w=1200'); /* VR placeholder */
    background-size: cover;
    background-position: center;
    height: 500px;
    border-radius: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
} */

.hero-content h1 {
    font-size: 3.5rem;
    max-width: 800px;
    font-weight: 700;
}

.slider-dots {
    position: absolute;
    bottom: 20px;
    display: flex;
    gap: 10px;
}

.slider-dots span {
    width: 8px;
    height: 8px;
    background: #555;
    border-radius: 50%;
}

.slider-dots span.active {
    background: #fff;
    width: 20px;
    border-radius: 10px;
}
</style>
</body>
</html>