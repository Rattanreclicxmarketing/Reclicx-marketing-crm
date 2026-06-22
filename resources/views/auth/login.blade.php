<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RECLICX CRM</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

html{
scroll-behavior:smooth;
}

body{
background:#020817;
min-height:100vh;
overflow-x:hidden;
position:relative;

background:
radial-gradient(circle at top left,#143B6E 0%,transparent 35%),
radial-gradient(circle at bottom left,#FF2B45 0%,transparent 20%),
#020817;
}

body::before{
content:'';
position:absolute;
width:700px;
height:700px;
left:-250px;
top:-250px;
background:#143B6E;
border-radius:50%;
filter:blur(180px);
opacity:.25;
}

body::after{
content:'';
position:absolute;
width:500px;
height:500px;
right:-150px;
bottom:-150px;
background:#FF2B45;
border-radius:50%;
filter:blur(150px);
opacity:.15;
}

.container{
position:relative;
z-index:2;
width:100%;
max-width:1200px;
margin:auto;
padding:20px 30px;
min-height:100vh;

display:flex;
align-items:center;
justify-content:space-between;
gap:25px;
}


.left{
flex:0 0 55%;
max-width:55%;
}

.welcome{
color:#ff465d;
font-size:18px;
font-weight:600;
margin-bottom:15px;
}

.main-title{
font-size:46px;
font-weight:800;
line-height:1;
letter-spacing:-1px;
color:#fff;
}

.main-title span{
color:#FF2B45;
}

.subtitle{
margin-top:10px;
font-size:18px;
font-weight:500;
color:#94a3b8;
}

.line{
width:60px;
height:3px;
background:#FF2B45;
border-radius:20px;
margin:18px 0;
}

.desc{
font-size:16px;
line-height:1.7;
color:#cbd5e1;
max-width:500px;
margin-bottom:25px;
}

.desc span{
color:#FF2B45;
font-weight:700;
}

.feature-grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:18px;
}

.feature{
display:flex;
align-items:flex-start;
gap:12px;

padding:16px;
min-height:90px;

background:rgba(255,255,255,.05);
border:1px solid rgba(255,255,255,.08);

backdrop-filter:blur(15px);

border-radius:18px;
transition:.3s;
}

.feature:hover{
transform:translateY(-3px);
border-color:#2563eb;
}

.icon{
width:48px;
height:48px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:18px;
color:#fff;
flex-shrink:0;
}

.red{
background:linear-gradient(135deg,#FF2B45,#ff6074);
}

.blue{
background:linear-gradient(135deg,#2563eb,#143B6E);
}

.feature h4{
color:#fff;
font-size:15px;
margin-bottom:5px;
}

.feature p{
color:#94a3b8;
font-size:12px;
line-height:1.5;
}

.stats{
margin-top:30px;

display:grid;
grid-template-columns:repeat(4,1fr);

background:rgba(255,255,255,.05);
border:1px solid rgba(255,255,255,.08);

border-radius:25px;
padding:25px;
}

.stat{
text-align:center;
border-right:1px solid rgba(255,255,255,.08);
}

.stat:last-child{
border-right:none;
}

.stat i{
font-size:28px;
margin-bottom:10px;
}

.stat h2{
color:#fff;
font-size:24px;
font-weight:700;
}

.stat p{
color:#94a3b8;
font-size:14px;
}

.login-box{
width:100%;
max-width:420px;

background:rgba(255,255,255,.05);
border:1px solid rgba(255,255,255,.08);

backdrop-filter:blur(25px);

border-radius:35px;

padding:25px;

box-shadow:
0 25px 60px rgba(0,0,0,.45);
}

.logo{
text-align:center;
margin-bottom:6px;
}

.logo img{
width:140px;
max-width:100%;
}

.login-title{
text-align:center;
font-size:32px;
font-weight:700;
color:#fff;
line-height:1.4;
margin-bottom:8px;
}

.login-title span{
color:#FF2B45;
}

.login-sub{
text-align:center;
font-size:16px;
color:#94a3b8;
margin-bottom:30px;
}

.input-group{
position:relative;
margin-bottom:20px;
}

.input-group i{
position:absolute;
left:18px;
top:50%;
transform:translateY(-50%);
color:#64748b;
font-size:18px;
}

.input-group input{
width:100%;
height:62px;

padding-left:52px;
padding-right:15px;

border:none;
outline:none;

border-radius:15px;

background:#f1f5f9;
color:#111827;

font-size:15px;
}

.input-group input:focus{
box-shadow:0 0 20px rgba(37,99,235,.25);
}

.options{
display:flex;
justify-content:space-between;
align-items:center;
margin:15px 0 25px;
font-size:14px;
}

.options label{
color:#e2e8f0;
}

.options a{
text-decoration:none;
color:#FF2B45;
font-weight:600;
}

.btn{
width:100%;
height:62px;

border:none;
cursor:pointer;

border-radius:15px;

font-size:18px;
font-weight:700;
color:#fff;

background:
linear-gradient(
90deg,
#2563eb,
#8b5cf6,
#FF2B45
);

transition:.3s;
}

.btn:hover{
transform:translateY(-2px);
box-shadow:0 15px 35px rgba(37,99,235,.30);
}

.divider{
display:flex;
align-items:center;
gap:10px;
margin:25px 0;
}

.divider::before,
.divider::after{
content:'';
flex:1;
height:1px;
background:rgba(255,255,255,.08);
}

.divider span{
width:35px;
height:35px;

display:flex;
align-items:center;
justify-content:center;

border-radius:50%;

background:rgba(255,255,255,.05);
border:1px solid rgba(255,255,255,.08);

color:#fff;
font-size:13px;
}

.otp-btn{
width:100%;
height:60px;

border-radius:15px;
cursor:pointer;

background:transparent;
color:#fff;

font-size:17px;
font-weight:600;

border:1px solid rgba(255,255,255,.12);

transition:.3s;
}

.otp-btn:hover{
background:rgba(255,255,255,.05);
}

.footer{
margin-top:25px;
text-align:center;
font-size:14px;
color:#94a3b8;
}

.error{
margin-top:5px;
font-size:13px;
color:#f87171;
}
@media(max-width:1200px){

.container{
flex-direction:column;
padding:30px 20px;
}

.left{
max-width:100%;
}

.login-box{
max-width:550px;
}

.main-title{
font-size:40px;
}

.stats{
grid-template-columns:repeat(2,1fr);
gap:15px;
}

.stat{
border:none;
}

}

@media(max-width:768px){

.container{
padding:20px 15px;
}

.left{
display:none;
}

.login-box{
max-width:100%;
padding:25px;
border-radius:25px;
}

.login-title{
font-size:28px;
}

.stats{
grid-template-columns:repeat(2,1fr);
padding:20px;
}

}

@media(max-width:480px){

.login-box{
padding:20px;
}

.login-title{
font-size:24px;
}

.stats{
grid-template-columns:1fr 1fr;
}

}
@media(max-width:768px){

.main-title{
font-size:34px;
}

.subtitle{
font-size:16px;
}

.desc{
font-size:14px;
}
}


</style>
</head>

<body>

<div class="container">

<div class="left">

<div class="welcome">Welcome to</div>

<h1 class="main-title">
RECLIC<span>X</span> CRM
</h1>

<div class="subtitle">
Lead Management & Sales Automation Platform
</div>

<div class="line"></div>

<div class="desc">
Manage leads, track performance and grow your business smarter with
<span>Reclicx CRM.</span>
</div>

<div class="feature-grid">

<div class="feature">
<div class="icon red">
<i class="fas fa-users"></i>
</div>
<div>
<h4>Lead Management</h4>
<p>Capture, organize & manage leads</p>
</div>
</div>

<div class="feature">
<div class="icon blue">
<i class="fas fa-chart-line"></i>
</div>
<div>
<h4>Agent Performance</h4>
<p>Track agent activities & performance</p>
</div>
</div>

<div class="feature">
<div class="icon blue">
<i class="fas fa-chart-pie"></i>
</div>
<div>
<h4>Sales Analytics</h4>
<p>Data-driven insights & reports</p>
</div>
</div>

<div class="feature">
<div class="icon red">
<i class="fab fa-whatsapp"></i>
</div>
<div>
<h4>WhatsApp Integration</h4>
<p>Connect & engage instantly</p>
</div>
</div>

<div class="feature">
<div class="icon red">
<i class="fab fa-facebook-f"></i>
</div>
<div>
<h4>Facebook Lead Sync</h4>
<p>Auto sync leads from Facebook Ads</p>
</div>
</div>

<div class="feature">
<div class="icon blue">
<i class="fas fa-border-all"></i>
</div>
<div>
<h4>Real-Time Dashboard</h4>
<p>Monitor your business in real-time</p>
</div>
</div>

</div>

<div class="stats">

<div class="stat">
<i class="fas fa-users" style="color:#2563eb"></i>
<h2>12K+</h2>
<p>Total Leads</p>
</div>

<div class="stat">
<i class="fas fa-user-tie" style="color:#FF2B45"></i>
<h2>250+</h2>
<p>Active Agents</p>
</div>

<div class="stat">
<i class="fas fa-chart-line" style="color:#2563eb"></i>
<h2>98%</h2>
<p>Conversion Rate</p>
</div>

<div class="stat">
<i class="fas fa-bullseye" style="color:#FF2B45"></i>
<h2>25+</h2>
<p>Active Campaigns</p>
</div>

</div>

</div>

<div class="login-box">

<div class="logo">
<img src="{{ asset('images/reclicx-logo.png') }}" alt="Reclicx CRM">
</div>

<div class="login-title">
<span>Sign in</span> to your account
</div>

<div class="login-sub">
Access your CRM dashboard
</div>

<form method="POST" action="{{ route('login') }}">
@csrf

<div class="input-group">
<i class="fas fa-envelope"></i>
<input type="email"
name="email"
placeholder="Enter Email Address"
required>

@error('email')
<div class="error">{{ $message }}</div>
@enderror
</div>

<div class="input-group">
<i class="fas fa-lock"></i>
<input type="password"
name="password"
placeholder="Enter Password"
required>

@error('password')
<div class="error">{{ $message }}</div>
@enderror
</div>

<div class="options">

<label>
<input type="checkbox" name="remember">
 Remember me
</label>

@if(Route::has('password.request'))
<a href="{{ route('password.request') }}">
Forgot Password?
</a>
@endif

</div>

<button type="submit" class="btn">
<i class="fas fa-right-to-bracket"></i>
&nbsp; ACCESS CRM
</button>

</form>

<div class="divider">
<span>OR</span>
</div>

<button class="otp-btn">
<i class="fas fa-shield-halved"></i>
&nbsp; Login with OTP
</button>

<div class="footer">
🔒 Secure CRM Environment • RECLICX MARKETING
</div>

</div>

</div>

</body>
</html>