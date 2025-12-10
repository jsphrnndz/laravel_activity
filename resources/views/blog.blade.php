@extends('layouts.app')
@section('title', 'Blog')

@section('content')
<style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#000b16;
            color:#ffffff;
        }
        a{ color:#9bd6ff; text-decoration:none; }
        a:hover{ text-decoration:underline; }

        /* page wrapper */
        #wrapper{
            width:960px;
            margin:0 auto;
        }

        /* blue blog strip */
        #blog-header{
            background:linear-gradient(#0c4f6e,#095070);
            padding:30px 30px 40px 30px;
        }
        #blog-header h1{
            font-size:34px;
            font-style:italic;
            margin-bottom:15px;
        }
        #blog-content{
            display:flex;
            margin-top:10px;
        }

        /* left column posts */
        #blog-left{
            width:62%;
            padding-right:30px;
        }
        .post{
            padding-bottom:18px;
            margin-bottom:18px;
            border-bottom:1px solid rgba(255,255,255,0.12);
        }
        .post h2{
            font-size:14px;
            margin-bottom:4px;
        }
        .post .date{
            float:right;
            font-size:11px;
            color:#b5cfe3;
            margin-top:-16px;
        }
        .post p{
            font-size:13px;
            line-height:1.6;
            margin-top:6px;
        }
        .readmore{
            display:inline-block;
            margin-top:8px;
            font-size:12px;
        }

        /* pagination */
        .pagination{
            margin-top:8px;
            font-size:11px;
        }
        .pagination span,
        .pagination a{
            margin-right:6px;
            color:#9bd6ff;
        }

        /* right sidebar */
        #blog-right{
            width:38%;
        }
        .side-image{
            height:150px;
            width:100%;
            border:4px solid #ffffff;
            margin-bottom:15px;
        }
        .cta-box{
            background-image: url(back.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding:18px 15px 22px;
            text-align:center;
            margin-top:5px;
            box-shadow:0 0 3px rgba(0,0,0,.6);
        }
        .cta-box h3{
            font-size:26px;
            font-style:italic;
            line-height:1.4;
            margin-bottom:15px;
        }
        .cta-box button{
            background:#0472d6;
            border:none;
            color:#ffffff;
            font-weight:bold;
            padding:10px 40px;
            cursor:pointer;
            box-shadow:0 2px 0 #003865;
        }

        /* grey categories area */
        #categories-strip{
            background:#e2ecf3;
            padding:35px 30px 45px;
        }
        .cats{
            display:flex;
            justify-content:space-between;
        }
        .cat-box{
            width:22%;
            text-align:center;
            color:#333333;
            font-size:12px;
        }
        .cat-box img{
            width:100%;
            height: 200px;
            border:4px solid #ffffff;
            margin-bottom:12px;
        }
        .cat-box .cat-title{
            font-style:italic;
            font-size:15px;
            margin-bottom:8px;
        }
        .cat-box p{
            line-height:1.5;
        }

        

    </style>
</head>
<body>


    <!-- BLUE BLOG AREA -->
    <section id="blog-header">
        <h1>Blog</h1>

        <div id="blog-content">
            <!-- LEFT COLUMN: POSTS -->
            <div id="blog-left">

                <!-- BLOG POST 1 -->
                <div class="post">
                    <h2>BLOG TITLE ONE</h2>
                    <span class="date">05.04.2012</span>
                    <p>
                        This website template has been designed by
                        <a href="#">Free Website Templates</a> for you, for free. You can replace
                        all this text with your own text.This website template has been designed by
                        <a href="#">Free Website Templates</a> for you, for free. You can replace
                        all this text with your own text.
                    </p>
                    <a href="#" class="readmore">Read more>></a>
                </div>

                <!-- BLOG POST 2 -->
                <div class="post">
                    <h2>BLOG TITLE ONE</h2>
                    <span class="date">05.04.2012</span>
                    <p>
                        This website template has been designed by
                        <a href="#">Free Website Templates</a> for you, for free. You can replace
                        all this text with your own text.This website template has been designed by
                        <a href="#">Free Website Templates</a> for you, for free. You can replace
                        all this text with your own text.
                    </p>
                    <a href="#" class="readmore">Read more>></a>
                </div>

                <!-- BLOG POST 3 -->
                <div class="post">
                    <h2>BLOG TITLE ONE</h2>
                    <span class="date">05.04.2012</span>
                    <p>
                        This website template has been designed by
                        <a href="#">Free Website Templates</a> for you, for free. You can replace
                        all this text with your own text.This website template has been designed by
                        <a href="#">Free Website Templates</a> for you, for free. You can replace
                        all this text with your own text.
                    </p>
                    <a href="#" class="readmore">Read more>></a>
                </div>

                <!-- PAGINATION -->
                <div class="pagination">
                    <span>&lt;&lt;</span>
                    <span>First</span>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                    <a href="#">9</a>
                    <a href="#">10</a>
                    <a href="#">11</a>
                    <a href="#">12</a>
                    <a href="#">13</a>
                    <a href="#">14</a>
                    <a href="#">15</a>
                    <a href="#">16</a>
                    <a href="#">17</a>
                    <a href="#">18</a>
                    <a href="#">19</a>
                    <a href="#">20</a>
                    <span>Last</span>
                    <span>&gt;&gt;</span>
                </div>

            </div>

            <!-- RIGHT COLUMN: IMAGES + CTA -->
            <div id="blog-right">
                <img src="/images/earth-small.jpg" alt="Planet" class="side-image">
                <img src="/images/spaceshuttle-closeup.jpg" alt="Space Shuttle" class="side-image">

                <div class="cta-box">
                    <h3>Lorem Ipsum<br>Dolor!</h3>
                    <button>CLICK HERE!</button>
                </div>
            </div>
        </div>
    </section>

    <!-- GREY CATEGORIES STRIP -->
    <section id="categories-strip">
        <div class="cats">
            <div class="cat-box">
                <img src="/images/astronaut.jpg" alt="Category 1">
                <div class="cat-title">Category 1</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Quisque nec mi tortor. Phasellus commodo semper vehicula.
                </p>
            </div>

            <div class="cat-box">
                <img src="/images/earth.jpg" alt="Category 2">
                <div class="cat-title">Category 2</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Quisque nec mi tortor. Phasellus commodo semper vehicula.
                </p>
            </div>

            <div class="cat-box">
                <img src="/images/spacecraft-small.jpg" alt="Category 3">
                <div class="cat-title">Category 3</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Quisque nec mi tortor. Phasellus commodo semper vehicula.
                </p>
            </div>

            <div class="cat-box">
                <img src="/images/space-shuttle.jpg" alt="Category 4">
                <div class="cat-title">Category 4</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Quisque nec mi tortor. Phasellus commodo semper vehicula.
                </p>
            </div>
        </div>
    </section>
@endsection
