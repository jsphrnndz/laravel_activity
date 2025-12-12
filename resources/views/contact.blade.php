@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<style>
  
    body {
        background: #0a0f1a;
        color: #ddd;
        font-family: "Segoe UI", sans-serif;
    }

    .contact-wrapper {
        min-height: 100vh;
        background: linear-gradient(rgba(10, 15, 26, 0.9), rgba(10, 15, 26, 0.95)),
                    url('/images/contact-bg.jpg') center/cover no-repeat fixed;
        padding: 60px 20px;
    }

    .contact-container {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: start;
        margin-left: 200px;
    }

    .contact-form-card {
        background: rgba(255, 255, 255, 0.98);
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    .contact-form-card h2 {
        color: #0c2a4c;
        font-weight: 700;
        font-size: 2.2rem;
        margin-bottom: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: 0.3s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #1ea0ff;
        box-shadow: 0 0 0 3px rgba(30, 160, 255, 0.2);
    }

    .form-group textarea {
        min-height: 150px;
        resize: vertical;
    }

    .checkbox-label {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 25px;
    }

    .btn-send {
        background: linear-gradient(to right, #0c2a4c, #155a96);
        color: white;
        border: none;
        padding: 16px 40px;
        font-size: 1.3rem;
        font-weight: 700;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 8px 20px rgba(12, 42, 76, 0.4);
    }

    .btn-send:hover {
        background: linear-gradient(to right, #155a96, #1ea0ff);
        transform: translateY(-3px);
    }

   
    .contact-right {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .space-images {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .space-images img {
        width: 70%;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.6);
        transition: transform 0.4s ease;
    }

    .space-images img:hover {
        transform: translateY(-8px);
    }

    .big-cta {
        height: 180px;
        width: 350px;
        text-align: center;
        background: linear-gradient(135deg, #1ea0ff, #56baff);
        padding: 40px 20px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(30, 160, 255, 0.3);
        margin-left: 20px;
        margin-bottom: -125px;
    }

    .big-cta h3 {
        font-size: 1rem;
        color: white;
        margin-bottom: 15px;
        text-shadow: 0 0 10px rgba(0,0,0,0.6);
    }

    .big-cta p {
        color: #fff;
        opacity: 0.95;
        margin-bottom: 25px;
        font-size: 0.7rem;
    }

    .big-cta .btn-cta {
        background: #0a0f1a;
        color: white;
        padding: 16px 40px;
        font-size: 1rem;
        font-weight: 700;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        transition: 0.3s;
    }

    .big-cta .btn-cta:hover {
        background: #000;
        transform: scale(1.05);
    }

    .categories-section {
        padding: 80px 20px 60px;
        background: rgba(10, 15, 26, 0.95);
    }

    .categories-row {
        display: flex;
        flex-wrap: nowrap;
        gap: 30px;
        overflow-x: auto;
        padding: 20px 0;
        scrollbar-width: thin;
        max-width: 1400px;
        margin: 0 auto;
    }

    .categories-row::-webkit-scrollbar {
        height: 8px;
    }

    .categories-row::-webkit-scrollbar-track {
        background: rgba(255,255,255,0.1);
        border-radius: 4px;
    }

    .categories-row::-webkit-scrollbar-thumb {
        background: #1ea0ff;
        border-radius: 4px;
    }

    .category-card {
        flex: 0 0 320px;
        min-width: 290px;
        background: #ffffff;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 12px 35px rgba(0,0,0,0.3);
        transition: transform 0.4s ease;
        text-align: center;
        
    }

    .category-card img {
        width: 100%;
        height: 210px;
        object-fit: cover;
    }

    .category-card h5 {
        margin: 22px 0 10px;
        font-size: 1.4rem;
        color: #0c2a4c;
        font-weight: 700;
    }

    .category-card p {
        padding: 0 24px 28px;
        color: #555;
        font-size: 0.95rem;
        line-height: 1.5;
    }

    .category-card:hover {
        transform: translateY(-15px);
    }

  
    @media (max-width: 992px) {
        .contact-container {
            grid-template-columns: 1fr;
            margin-left: 0;
        }
        .contact-right {
            order: -1;
        }
        .big-cta, .space-images img {
            margin-left: 0;
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .contact-form-card {
            padding: 25px;
        }
        .contact-form-card h2 {
            font-size: 1.8rem;
        }
        .big-cta {
            height: auto;
            padding: 30px 20px;
        }
    }
</style>

<div class="contact-wrapper">
    <div class="contact-container">

        <div class="contact-form-card">
            <h2>Contact Us</h2>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" required placeholder="Enter your full name here...">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" required placeholder="Enter your email address here...">
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" required placeholder="Enter the subject message here...">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" required placeholder="Enter your message here..."></textarea>
                </div>

                <div class="checkbox-label">
                    <input type="checkbox" required>
                    <span>I agree to the Terms and Conditions</span>
                </div>

                <button type="submit" class="btn-send">SEND NOW</button>
            </form>
        </div>

        <div class="contact-right">
            <div class="space-images">
                <img src="/images/earth.jpg" alt="Earth">
                <img src="/images/space-shuttle.jpg" alt="Shuttle">
            </div>

            <div class="big-cta">
                <h3>Lorem Ipsum Dolor!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo semper vehicula.</p>
                <button class="btn-cta">CLICK HERE!</button>
            </div>
        </div>

    </div> 
</div> 


<div class="categories-section">
    <div class="categories-row">
        <div class="category-card">
            <img src="/images/astronaut.jpg" alt="Category 1">
            <div class="p-4">
                <h5>Category 1</h5>
                <p>Explore the wonders of space and human achievement beyond Earth.</p>
            </div>
        </div>
        <div class="category-card">
            <img src="/images/earth.jpg" alt="Category 2">
            <div class="p-4">
                <h5>Category 2</h5>
                <p>Discover our beautiful planet from a whole new perspective.</p>
            </div>
        </div>
        <div class="category-card">
            <img src="/images/spacecraft-small.jpg" alt="Category 3">
            <div class="p-4">
                <h5>Category 3</h5>
                <p>Advanced spacecraft pushing the boundaries of exploration.</p>
            </div>
        </div>
        <div class="category-card">
            <img src="/images/space-shuttle.jpg" alt="Category 4">
            <div class="p-4">
                <h5>Category 4</h5>
                <p>Iconic space shuttles that changed space travel forever.</p>
            </div>
        </div>
     
    </div>
</div>

@endsection
