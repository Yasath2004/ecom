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
        {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

        :root {
    --color-dark-bg: #111111;
    --color-medium-bg: #212121;
    --color-light-text: #ffffff;
    --color-orange: #ff9900;
    --color-link-hover: #ffffff;
    --color-link-default: #b4b4b4;
    --color-service-active: #000000ff; /* Used blue to represent the active line in the image */
}
body {
    background-color: var(--color-dark-bg);
    color: var(--color-light-text);
    line-height: 1.6;
}

.highlight-orange {
    color: var(--color-orange);
}

/* --- 1. Header/Navigation --- */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 50px;
    background-color: #000000ff;
    position: sticky;
    top: 0;
    z-index: 100;
}

.logo {
    font-size: 24px;
    font-weight: 700;
}

.navbar ul {
    list-style: none;
    display: flex;
}

.navbar ul li a {
    text-decoration: none;
    color: var(--color-light-text);
    padding: 10px 15px;
    font-weight: 400;
    transition: color 0.3s;
}

.navbar ul li a.active,
.navbar ul li a:hover { 
    color: var(--color-orange);
}

.btn-quote {
    text-decoration: none;
    color: var(--color-light-text);
    border: 1px solid var(--color-light-text);
    padding: 8px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

/* --- 2. Hero Section --- */
.hero-section {
    position: relative;
    height: 70vh; /* Adjust height as needed */
    display: flex;
    align-items: center;
    padding: 0 50px;
    
    /* Background Image setup (simulating the VR headset image) */
    background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url('your-vr-image.jpg'); /* REPLACE with actual image path */
    background-size: cover;
    background-position: center;
}
var(--color-orange)
.hero-content h1 {
    font-size: 60px;
    font-weight: 800;
    line-height: 1.1;
    max-width: 600px;
}

.slider-dots {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}

.dot {
    height: 10px;
    width: 10px;
    margin: 0 5px;
    background-color: #555;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
}

.dot.active {
    background-color: var(--color-light-text);
}


/* --- 3. Services Bar --- */
.services-bar {
    display: flex;
    justify-content: space-around;
    border-bottom: 2px solid var(--color-service-active);
    /* Push the bar to the bottom edge of the hero section visually */
    margin-top: -2px; 
    padding-top: 5px; 
    background-color: var(--color-dark-bg);
}

.service-item {
    padding: 15px 0;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    position: relative;
    text-align: center;
    color: var(--color-light-text);
    opacity: 0.6;
    flex-grow: 1; /* Makes them take equal space */
}

.service-item.active {
    color: var(--color-orange); /* Active text color */
    opacity: 1;
}

.service-item.active::after {
    content: '';
    position: absolute;
    bottom: -2px; /* Pulls the line down to sit on top of the border */
    left: 0;
    width: 100%;
    height: 3px;
    background-color: var(--color-service-active); 
}

/* --- 4. Main Content Section (Grid Layout) --- */
.main-content-area {
    display: grid;
    grid-template-columns: 1fr 1.2fr; /* Left column slightly smaller */
    gap: 30px;
    padding: 50px;
    max-width: 1400px;
    margin: 0 auto;
}

/* Left Column Styling */
.left-column {
    padding-right: 50px; /* Separator space */
    position: relative;
}

.about-us-card {
    background-color: transparent;
}

.small-label {
    color: var(--color-orange);
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 10px;
}

.profile-area {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.profile-placeholder {
    width: 50px;
    height: 50px;
    background-color: var(--color-orange); /* Placeholder for the circular image */
    border-radius: 50%;
    margin-right: 15px;
    border: 3px solid var(--color-dark-bg);
    box-shadow: 0 0 0 4px var(--color-orange); /* Halo effect */
}

.about-us-card h2 {
    font-size: 40px;
    font-weight: 700;
    line-height: 1.1;
}

/* Right Column Styling */
.right-column {
    background-color: var(--color-medium-bg);
    padding: 30px;
    border-radius: 5px;
}

.industry-expertise-card {
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #333;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.card-header h3 {
    font-size: 20px;
    font-weight: 600;
}

.toggle-icon {
    font-size: 20px;
    cursor: pointer;
    font-weight: 800;
}

.industry-expertise-card p {
    color: var(--color-link-default);
    font-size: 14px;
}

.feature-list .feature-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    cursor: pointer;
    border-bottom: 1px solid #333;
    font-weight: 400;
    font-size: 16px;
    transition: color 0.2s;
}

.feature-list .feature-item:hover {
    color: var(--color-orange);
}

.arrow-icon {
    font-weight: 700;
    font-size: 18px;
    color: var(--color-orange);
}


/* Back to Top Button Styling */
.back-to-top {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background-color: #333;
    color: var(--color-light-text);
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    font-size: 24px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0.7;
    transition: opacity 0.3s;
}
    </style>



@endsection
