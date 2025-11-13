<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Froncheer - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<canvas id="bgCanvas"></canvas>
<script>
const canvas = document.getElementById("bgCanvas");
const ctx = canvas.getContext("2d");
canvas.width = innerWidth;
canvas.height = innerHeight;

let dots = Array(80).fill().map(() => ({
  x: Math.random() * canvas.width,
  y: Math.random() * canvas.height,
  r: Math.random() * 2,
  dx: (Math.random() - 0.5) * 0.5,
  dy: (Math.random() - 0.5) * 0.5
}));

function animate() {
  ctx.clearRect(0,0,canvas.width,canvas.height);
  dots.forEach(d => {
    ctx.beginPath();
    ctx.arc(d.x,d.y,d.r,0,Math.PI*2);
    ctx.fillStyle="rgba(59,130,246,0.3)";
    ctx.fill();
    d.x+=d.dx; d.y+=d.dy;
    if(d.x<0||d.x>canvas.width) d.dx*=-1;
    if(d.y<0||d.y>canvas.height) d.dy*=-1;
  });
  requestAnimationFrame(animate);
}
animate();
</script>

<style>
#bgCanvas {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  z-index: -1;
}
</style>

<body>

<header class="header">
    <div class="container nav-wrapper">
        <h1 class="logo">Froncheer</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('blog') }}" class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ route('gallery') }}" class="{{ Request::is('gallery') ? 'active' : '' }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="content">
    @yield('content')
</main>

<footer class="footer">
    <div class="container footer-columns">
        <div>
            <h4>Social</h4>
            <p>Twitter<br>Facebook<br>YouTube</p>
        </div>
        <div>
            <h4>Links</h4>
            <p>Link 1<br>Link 2<br>Link 3</p>
        </div>
        <div>
            <h4>Newsletter</h4>
            <input type="text" placeholder="Sign up for our Newsletter">
            <button>Sign Up</button>
        </div>
    </div>
</footer>

</body>
</html>
