@extends('layouts.app')
@section('title', 'About Us')

@section('content')

<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #02263A;
        color: #d9e7ef;
    }

    #container {
        width: 100%;
        margin: 0;
        padding: 35px 0;
    }

    h1 {
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 30px;
        color: white;
        padding-left: 40px;
    }
 
    #content {
        display: flex;
        justify-content: space-between; 
        align-items: flex-start;
        padding: 0 40px;               
    }

    #left {
        width: 60%;
    }

    #left h3 {
        color: white;
        font-size: 20px;
        margin-bottom: 10px;
        margin-top: 25px;
    }

    #left p {
        font-size: 15px;
        line-height: 22px;
        margin-bottom: 15px;
        max-width: 90%;
    }

    #right {
        width: 260px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #right img {
        width: 260px;
        height: 180px;
        object-fit: cover;
        border: 3px solid #0c425f;
        margin-bottom: 20px;
    }

    #blue-box {
        margin-top: 30px;
        border: 3px solid #0c425f;
        height: 117px;
        width: 230;
        padding: 10px;
        text-align: center;
        background: url(image/spacecraft-dark.jpg);
        background-size: cover;
    }

    #blue-box h2 {
        color: blue;
        margin: 0;
        font-size: 30px;
        color: white;
        font-style: italic;
    }

    #blue-box button {
        margin-top: 18px;
        padding: 10px 20px;
        border: none;
        background: #1a8cff;
        color: white;
        cursor: pointer;
        font-size: 14px;
        font-weight: bold;
        width: 100%;
        margin-bottom: none;
    }

    #white-section {
        width: 100%;
        background: white;
        padding: 40px 20px 60px 20px;
        margin-top: 40px;
        box-sizing: border-box;
    }

    #grid-wrapper {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
    }

    .grid-item {
        flex: 1 1 calc(25% - 20px);
        text-align: center;
        color: #333;
        min-width: 200px;
    }

    .grid-item img {
        width: 100%;
        height: 270px;
        object-fit: cover;
        border: 3px solid #0c425f;
        margin-bottom: 10px;
        border-radius: 15px;
    }

    .grid-title {
        font-weight: bold;
        font-size: 16px;
        margin-bottom: 10px;
    }

    .grid-text {
        font-size: 12px;
        line-height: 18px;
    }

</style>
</head>

<body>

<div id="container">

    <h1>About Us</h1>

    <div id="content">

        <div id="left">

            <h3>We Have Free Templates for Everyone</h3>
            <p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What's more, they're absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <U>Terms of Use</U>. You can even remove all our links if you want to.</p>

            <h3>We Have More Templates for You</h3>
            <p>Looking for more templates? Just browse through all our<u> Free Website Templates</u> and find what you're looking for. But if you don’t find any website template you can use, you can try our <u>Free Web Design</u> service and tell us all about it. Maybe you're looking for something different, something special. And we love the challenge of doing something different and something special.</p>

            <h3>Be Part of Our Community</h3>
            <p>If you're experiencing issues and concerns about this website template, join the discussion <U>on our forum</U> and meet other people in the community who share the same interests with you.</p>

            <h3>Template details</h3>
            <p>
                Design version 3<br>
                Code version 2<br>
                Website Template details, discussion and updates for this <u>Astronomy Website Template</u>.<br>
                Website Template design by <U>Free Website Templates</U>.
            </p>
            <p>Please feel free to remove some or all the text and links of this page and replace it with your own About content.</p>

        </div>

        <div id="right">
            <img src="image/earth-small.jpg">
            <img src="image/spaceshuttle-closeup.jpg">

            <div id="blue-box">
                <h2>Lorem Ipsum Dolor!</h2>
                <button>CLICK HERE!</button>
            </div>
        </div>

    </div>
</div>

<div id="white-section">
    <div id="grid-wrapper">

        <div class="grid-item">
            <img src="image/astronaut.jpg">
            <div class="grid-title">Category 1</div>
            <div class="grid-text">Lorem ipsum dolor sit amet...</div>
        </div>

        <div class="grid-item">
            <img src="image/earth.jpg">
            <div class="grid-title">Category 2</div>
            <div class="grid-text">Lorem ipsum dolor sit amet...</div>
        </div>

        <div class="grid-item">
            <img src="image/spacecraft-small.jpg">
            <div class="grid-title">Category 3</div>
            <div class="grid-text">Lorem ipsum dolor sit amet...</div>
        </div>

        <div class="grid-item">
            <img src="image/space-shuttle.jpg">
            <div class="grid-title">Category 4</div>
            <div class="grid-text">Lorem ipsum dolor sit amet...</div>
        </div>

    </div>
</div>
@endsection
