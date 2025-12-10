@extends('layouts.app')
@section('title', 'Contact Us')

@section('content')
<style>
*{box-sizing:border-box}
/* DARK BLUE BACKGROUND */
body {
    margin: 0;
    background: #001f3f; /* dark blue */
    font-family: Arial, Helvetica, sans-serif;
    color: #0b2b33;
}
.header{height:72px;display:flex;align-items:center;justify-content:space-between;padding:0 28px;border-bottom:1px solid rgba(255,255,255,0.04);background:linear-gradient(#0f3b4a,#133642)}
.header .brand{display:flex;align-items:center;gap:12px}
.header img{height:30px}
.header .menu{display:flex;gap:18px}
.header .menu a{color:#bfe7ff;text-decoration:none;font-size:14px;opacity:0.95}

.main-area{display:flex;padding:34px 28px 28px 28px}
.left-col{width:700px;margin-right:30px}
.right-col{width:320px}

h1.title{font-family: "Georgia", serif;font-size:42px;margin:6px 0 18px 0;color:#e9fbff}
.form-group{margin-bottom:12px}
input[type="text"], input[type="email"], textarea{
    width:100%;
    padding:12px 12px;
    font-size:14px;
    border:0;
    border-radius:2px;
    background:#ffffff;
    color:#0b3941;
    outline: none;
    box-shadow: inset 0 -2px rgba(0,0,0,0.03);
}
textarea{height:330px; resize:vertical;}
.hint{font-size:13px;color:#bfe7ff;margin-top:6px;font-style:italic}
.checkbox-row{margin-top:12px;color:#d7f1ff;font-size:14px; display:flex;flex-direction:column; gap:8px}
.btn-send{margin-top:12px;background:#2b95d9;border:none;padding:14px 30px;border-radius:3px;color:#fff;font-weight:700;cursor:pointer;box-shadow:inset 0 -3px rgba(0,0,0,0.15); width:100%;}
.right-col .side-img{height: 150px;width:100%;display:block;border:6px solid rgba(255,255,255,0.06);margin-bottom:16px;background:#fff}
.ad-box{background:#0b2a32;padding:14px;border-radius:4px;border:1px solid rgba(255,255,255,0.03);margin-top:8px;text-align:center}
.ad-box h3{font-family:Georgia,serif;margin:6px 0 10px 0;color:#dff6ff;font-size:22px}
.categories{display:flex;gap:18px;padding:28px;background:#eef4f7;color:#0b2b33}
.cat{flex:1;text-align:center;padding:10px}
.cat img{width:100%;height:120px;object-fit:cover;border-radius:4px;margin-bottom:12px}
.footer{background:#07242d;color:#9fd9ef;display:flex;padding:18px 28px;gap:30px;align-items:center}
.footer .newsletter{margin-left:auto;display:flex;align-items:center;gap:10px}
.footer input[type="text"]{padding:8px;border-radius:3px;border:0}
@media (max-width:1100px){.left-col{width:62%}.right-col{width:32%}}
@media (max-width:800px){.main-area{flex-direction:column}.left-col{width:100%;margin-right:0}.right-col{width:100%;margin-top:18px}.categories{flex-direction:column}}
.input-row{display: flex;align-items: center;gap: 10px;}
.input-row input{flex: 1;}
.right-span{white-space: nowrap;color: #f5f1f1ff; font-size: 14px;font-weight: bold;}
</style>
</head>
<body>

<!-- MAIN AREA -->
<div class="main-area">
  <div class="left-col">
    <h1 class="title">Contact Us</h1>

    <form method="post" action="">
      <input type="hidden" name="form_submit" value="1">

      <div class="form-group input-row">
        <input type="text" name="name" placeholder="Full Name">
        <span class="right-span">Enter your fullname here</span>
      </div>

      <div class="form-group input-row">
        <input type="email" name="email" placeholder="Email Address">
        <div class="right-span">Enter your email address here.</div>
      </div>

      <div class="form-group input-row">
        <input type="text" name="subject" placeholder="Subject">
        <div class="right-span">Enter the Subject message here.</div>
      </div>

      <div class="form-group">
        <textarea name="message" placeholder="Message"></textarea>
        <div class="hint">Enter your Message here.</div>
      </div>

    </form>
  </div>

  <div class="right-col">
    <img src="planet.jpg" alt="planet" class="side-img">
    <img src="shuttle.jpg" alt="shuttle" class="side-img">

    <!-- Terms & Conditions + Subscribe -->
    <div class="checkbox-row">
      <label><input type="checkbox" name="agree"> I agree to the Terms and Conditions.</label>
      <label><input type="checkbox" name="subscribe"> Subscribe to newsletter</label>
    </div>

    <!-- SEND NOW button -->
    <button type="button" class="btn-send">SEND NOW</button>

    <div class="ad-box">
      <h3>Lorem Ipsum Dolor!</h3>
      <button style="padding:10px 10px;border-radius:3px;border:0;background:#1b81b6;color:#fff;font-weight:700">CLICK HERE</button>
    </div>
  </div>
</div>

<!-- CATEGORIES -->
<div class="categories">
  <div class="cat">
    <img src="astronaut.jpg" alt="">
    <h4>Category 1</h4>
    <p style="margin:6px 0 0 0;font-size:13px">Lorem ipsum dolor sit amet.</p>
  </div>
  <div class="cat">
    <img src="earth.jpg" alt="">
    <h4>Category 2</h4>
    <p style="margin:6px 0 0 0;font-size:13px">Phasellus commodo semper.</p>
  </div>
  <div class="cat">
    <img src="spacecraft.jpg" alt="">
    <h4>Category 3</h4>
    <p style="margin:6px 0 0 0;font-size:13px">Curabitur nec mi non risus.</p>
  </div>
  <div class="cat">
    <img src="shut.jpg" alt="">
    <h4>Category 4</h4>
    <p style="margin:6px 0 0 0;font-size:13px">Praesent a commodo augue.</p>
  </div>
</div>

</body>
@endsection
