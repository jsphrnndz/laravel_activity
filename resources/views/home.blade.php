@extends('layouts.app')
@section('title', 'Home')

@section('content')

<style>
   /* ============================
   GENERAL STYLES
============================ */
body {
    background: #0a0f1a;
    color: #ddd;
    font-family: "Segoe UI", sans-serif;
    margin: 0;
    padding: 0;
}

/* ============================
   HERO SECTION
============================ */
.hero {
    background: url('/images/bg-adbox.jpg') center/cover no-repeat;
    min-height: 420px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 80px;
    margin-top: -30px;
}

.hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.55); 
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero h1 {
    font-size: 3rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.1rem;
    color: #ccc;
    max-width: 600px;
}

/* ============================
   BLUE STRIP
============================ */
.blue-strip {
    background: linear-gradient(to right, #0c2a4c, #155a96);
    padding: 35px 0;
    color: #fff;
    width: 100%;
    display: flex;
    align-items: center;
}

.blue-strip .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.blue-strip h4 {
    font-size: 1.6rem;
    font-weight: 700;
    margin-bottom: 4px;
}

.blue-strip p {
    margin: 0;
    font-size: 1rem;
    opacity: 0.9;
}

.blue-strip .btn-primary {
    background: #1ea0ff;
    border: none;
    padding: 12px 32px;
    font-weight: 700;
    border-radius: 6px;
    transition: 0.2s;
}

.blue-strip .btn-primary:hover {
    background: #56baff;
}

/* ============================
   BIG IMAGE BUTTON
============================ */
.big-image-btn {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 250px;
    cursor: default;
}

.big-image-btn img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    display: block;
    pointer-events: none; 
    transition: none; 
}

.big-image-btn .btn-text {
    position: absolute;  
    color: #fff;
    background: #1ea0ff;
    padding: 12px 28px;
    border-radius: 6px;
    font-weight: 700;
    font-size: 1.4rem;
    text-shadow: 0 0 6px rgba(0,0,0,0.8);
    white-space: nowrap;     
    cursor: pointer;
    transition: 0.2s;
}

.big-image-btn .btn-text:hover {
    background: #56baff;  
}

/* ============================
   CATEGORIES
============================ */
.categories-row {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-top: 40px;
    flex-wrap: wrap;
}

.category-card {
    background: #ffffff; /* changed from dark to white */
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 0 12px rgba(0,0,0,0.15); /* lighter shadow for white background */
    transition: 0.2s ease-in-out;
    flex: 1 1 220px;
    text-align: center;
    min-width: 220px;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0 18px rgba(0,0,0,0.25); /* slightly darker on hover */
}

.category-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.category-card h5 {
    margin-top: 12px;
    font-size: 1.2rem;
    font-weight: 500;
    color: #000; /* change text color to black for contrast */
    letter-spacing: 0.5px;
}

.category-card p {
    margin: 6px 15px 15px;
    color: #333; /* darker text for readability */
    font-size: 1rem;
    font-weight: 600;
}


/* ============================
   MEDIA QUERIES
============================ */

/* Large screens */
@media (max-width: 1200px) {
    .hero {
        padding: 60px;
        min-height: 360px;
    }
    .hero h1 {
        font-size: 2.5rem;
    }
}

/* Medium screens */
@media (max-width: 992px) {
    .hero {
        padding: 40px;
        min-height: 300px;
    }
    .hero h1 {
        font-size: 2.2rem;
    }
    .hero p {
        max-width: 100%;
    }
    .blue-strip .container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .big-image-btn {
        width: 100%;
        max-width: 300px;
        margin-top: 15px;
    }
}

/* Tablets */
@media (max-width: 768px) {
    .hero {
        padding: 30px;
        min-height: auto;
        text-align: center;
        align-items: center;
    }
    .hero h1 {
        font-size: 1.8rem;
    }
    .hero p {
        font-size: 1rem;
    }
    .categories-row {
        flex-direction: column;
        gap: 25px;
    }
}

/* Mobile phones */
@media (max-width: 480px) {
    .blue-strip {
        padding: 25px 10px;
    }
    .big-image-btn .btn-text {
        font-size: 1.1rem;
        padding: 10px 20px;
    }
    .category-card img {
        height: 220px;
    }
    .category-card h5 {
        font-size: 1.1rem;
    }
    .category-card p {
        font-size: 0.95rem;
    }
    .hero h1 {
        font-size: 1.5rem;
    }
    .hero p {
        font-size: 0.95rem;
    }
}

</style>

<!-- HERO SECTION -->
<div class="hero">
    <div class="hero-content">
        <h1>Sonsectetur adipiscing elit.</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae 
            quam sit amet tortor consequat porta. Sed faucibus ligula quis mollis lobortis.
        </p>
    </div>
</div>


<div class="blue-strip">
    <div class="container d-flex justify-content-between align-items-center">

        <div>
            <h4 class="fw-bold">Lorem ipsum dolor sit amet</h4>
            <p class="mb-0">Consectetur adipiscing elit. Suspendisse dapibus blandit libero.</p>
        </div>

        <!-- BIG IMAGE BUTTON -->
        <div class="big-image-btn">
            <img src="/images/spacecraft-dark.jpg" alt="button image">
            <span class="btn-text">CLICK HERE!</span>
            
        </div>

    </div>
</div>



 
<!-- CATEGORIES -->
<div class="container py-5" style="background-color: #ffffff; padding: 40px;">
    <div class="categories-row">

        <!-- Category 1 -->
        <div class="category-card">
            <img src="/images/astronaut.jpg" alt="Category 1">
            <div class="p-3">
                <h5 style="color: #000;">Category 1</h5>
                <p style="color: #333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Category 2 -->
        <div class="category-card">
            <img src="/images/earth.jpg" alt="Category 2">
            <div class="p-3">
                <h5 style="color: #000;">Category 2</h5>
                <p style="color: #333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Category 3 -->
        <div class="category-card">
            <img src="/images/spacecraft-small.jpg" alt="Category 3">
            <div class="p-3">
                <h5 style="color: #000;">Category 3</h5>
                <p style="color: #333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Category 4 -->
        <div class="category-card">
            <img src="/images/space-shuttle.jpg" alt="Category 4">
            <div class="p-3">
                <h5 style="color: #000;">Category 4</h5>
                <p style="color: #333;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

    </div>
</div>


@endsection

