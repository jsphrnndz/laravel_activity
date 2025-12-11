@extends('layouts.app')
@section('title', 'Gallery')

@section('content')
<style>
    body {
        background: #06183b;
        color: #fff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .gallery-title {
        font-size: 2.5rem;
        font-weight: 300;
        font-style: italic;
        margin: 30px 0 20px;
        margin-top: -40px;
    }


    .gallery-main {
        display: flex;
        gap: 30px;
        margin-bottom: 40px;
        align-items: flex-start;
       
    }

    .main-image-container {
        flex: 3;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    }

    .main-image-container img {
        width: 100%;
        height: 580px;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }

    .right-preview {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .right-preview img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    }

    .side-box {
        background: #0b4e8a;
        padding: 30px 20px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    }

    .side-box h4 {
        font-size: 1.4rem;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .side-box button {
        width: 100%;
        padding: 14px;
        background: #1ea0ff;
        border: none;
        border-radius: 6px;
        color: #fff;
        font-weight: bold;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background 0.3s;
    }

    .side-box button:hover {
        background: #56baff;
    }

    /* Thumbnails */
    .thumbnail-row {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin: 30px 0;
    }

    .thumbnail-row img {
        width: 239px;
        height: 150px;
        object-fit: cover;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        margin-top: -100px;
    }

    .thumbnail-row img:hover {
        transform: scale(1.08);
        box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    }

    /* Pagination */
    .pagination {
        text-align: center;
        margin: 40px 0;
        font-size: 1.1rem;
    }

    .pagination a, .pagination span {
        color: #a0d8ff;
        margin: 0 8px;
        text-decoration: none;
    }

    .pagination a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .categories-row {
        display: flex;
        gap: 25px;
        flex-wrap: wrap;
        margin-top: 50px;
    }

    .category-card {
        flex: 1;
        min-width: 260px;
        background: #ffffff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        transition: transform 0.3s ease;
        text-align: center;
    }

    .category-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    .category-card h5 {
        margin: 18px 0 8px;
        font-size: 1.3rem;
        color: #222;
    }

    .category-card p {
        padding: 0 20px 20px;
        color: #444;
        font-weight: 500;
    }

    .category-card:hover {
        transform: translateY(-10px);
    }

   
    @media (max-width: 992px) {
        .gallery-main {
            flex-direction: column;
        }
        .right-preview img {
            height: 280px;
        }
        .thumbnail-row {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .thumbnail-row img {
            width: 100%;
            max-width: 300px;
        }
    }
</style>

<div class="container py-5">
    <h2 class="gallery-title">Gallery</h2>

   
    <div class="gallery-main">
        <div class="main-image-container">
            <img id="mainImage" src="/images/astronaut-large.jpg" alt="Main Gallery Image">
        </div>

        <div class="right-preview">
            <img src="/images/earth-small.jpg" alt="Earth from space">
            <img src="/images/spaceshuttle-closeup.jpg" alt="Space Shuttle">

            <div class="side-box">
                <h4>Lorem Ipsum Dolor!</h4>
                <button>CLICK HERE!</button>
            </div>
        </div>
    </div>

    
    <div class="thumbnail-row">
        <img src="/images/astronaut.jpg" onclick="changeImage(this.src)" alt="Astronaut">
        <img src="/images/spacecraft-small.jpg" onclick="changeImage(this.src)" alt="Spacecraft">
        <img src="/images/earth-small.jpg" onclick="changeImage(this.src)" alt="Earth">
        <img src="/images/space-shuttle.jpg" onclick="changeImage(this.src)" alt="Space Shuttle">
    </div>

    <div class="pagination">
        <a href="#">« First</a>
        @for ($i = 1; $i <= 18; $i++)
            <a href="#" {{ $i == 1 ? 'style=color:#fff;' : '' }}>{{ $i }}</a>
        @endfor
        <a href="#">Last »</a>
    </div>

    <div class="categories-row">
        <div class="category-card">
            <img src="/images/astronaut.jpg" alt="Category 1">
            <div class="p-3">
                <h5>Category 1</h5>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>
        <div class="category-card">
            <img src="/images/earth.jpg" alt="Category 2">
            <div class="p-3">
                <h5>Category 2</h5>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>
        <div class="category-card">
            <img src="/images/spacecraft-small.jpg" alt="Category 3">
            <div class="p-3">
                <h5>Category 3</h5>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>
        <div class="category-card">
            <img src="/images/space-shuttle.jpg" alt="Category 4">
            <div class="p-3">
                <h5>Category 4</h5>
                <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function changeImage(src) {
        const mainImg = document.getElementById("mainImage");
        mainImg.src = src;
        mainImg.style.transform = "scale(1.03)";
        setTimeout(() => mainImg.style.transform = "scale(1)", 300);
    }
</script>
@endsection
