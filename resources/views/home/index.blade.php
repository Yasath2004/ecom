@extends('layouts.default') {{-- Assuming default.blade.php is in the 'views/layouts' directory --}}

@section('content')
    
    <div class="left-column">
        <div class="about-us-card">
            <p class="small-label">ABOUT CEYGENIC GUIDE</p>
            <div class="profile-area">
                <div class="profile-placeholder"></div>
            </div>
            <h2>What Makes Us<br><span class="highlight-orange">Different</span></h2>
        </div>
    </div>

    <div class="right-column">
        <div class="industry-expertise-card">
            <div class="card-header">
                <h3>Industry Expertise</h3>
                <span class="toggle-icon">^</span> 
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
        </div>

        <div class="feature-list">
            <div class="feature-item"><span>Complete Digital Solutions</span><span class="arrow-icon">></span></div>
            <div class="feature-item"><span>Built for Growth</span><span class="arrow-icon">></span></div>
            <div class="feature-item"><span>Your Goals , Our Priority</span><span class="arrow-icon">></span></div>
            <div class="feature-item"><span>Trust Partner</span><span class="arrow-icon">></span></div>
        </div>
    </div>

    <style>
        /* --- CUSTOM STYLES PROVIDED BY USER --- */
        body {
            background-color: #f4f6f9;
            font-family: 'Poppins', sans-serif;
        }

        .hero-section {
            background: linear-gradient(135deg, #eaf1ff, #ffffff);
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .hero-section:hover {
            transform: scale(1.01);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .hero-image {
            max-width: 80%;
            border-radius: 20px;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0); }
        }

        .btn {
            border-radius: 10px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .feature-card {
            border-radius: 16px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%; /* Ensures all cards are the same height */
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        
        <section class="hero-section p-5 mb-5 shadow-sm">
            <div class="row align-items-center">
                
                {{-- Left Side: Text Content --}}
                <div class="col-md-6 text-center text-md-start">
                    <h1 class="display-4 fw-bold text-dark mb-4">
                        Unlock Your Potential <span class="text-primary">with Cutting-Edge Tools</span>
                    </h1>
                    <p class="lead text-muted mb-4">
                        Our platform provides innovative solutions designed for rapid growth and seamless integration into your workflow.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg me-3">Get Started Now</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg">Learn More</a>
                </div>

                {{-- Right Side: Floating Image --}}
                <div class="col-md-6 text-center mt-4 mt-md-0">
                    <img src="{{ asset('images/mockup-screen.png') }}" alt="App Mockup" class="hero-image shadow-lg">
                </div>
            </div>
        </section>

        <section class="features-section py-5">
            <h2 class="text-center mb-5 fw-bold text-dark">Why Choose Us?</h2>
            
            <div class="row g-4">
                
                {{-- Feature Card 1 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card bg-white p-4 shadow-sm">
                        <img src="{{ asset('icons/rocket.svg') }}" alt="Speed Icon" class="feature-icon mb-3">
                        <h3 class="fw-semibold text-dark">Blazing Fast Performance</h3>
                        <p class="text-muted">Experience minimal latency with our optimized cloud infrastructure. Deploy instantly.</p>
                    </div>
                </div>

                {{-- Feature Card 2 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card bg-white p-4 shadow-sm">
                        <img src="{{ asset('icons/security.svg') }}" alt="Security Icon" class="feature-icon mb-3">
                        <h3 class="fw-semibold text-dark">Enterprise-Grade Security</h3>
                        <p class="text-muted">Your data is protected with 256-bit encryption and continuous threat monitoring.</p>
                    </div>
                </div>

                {{-- Feature Card 3 --}}
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card bg-white p-4 shadow-sm">
                        <img src="{{ asset('icons/support.svg') }}" alt="Support Icon" class="feature-icon mb-3">
                        <h3 class="fw-semibold text-dark">24/7 Dedicated Support</h3>
                        <p class="text-muted">Our expert team is always available to help you succeed, any time, any day.</p>
                    </div>
                </div>

            </div>
        </section>
@endsection
