<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Masjid Istiqlal</title>
<link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('template/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('template/css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{asset('template/css/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('template/css/main.css')}}" rel="stylesheet">
<link href="{{asset('template/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="{{asset('template/images/ico/favicon.ico')}}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('template/images/ico/apple-touch-icon-144-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('template/images/ico/apple-touch-icon-114-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('template/images/ico/apple-touch-icon-72-precomposed.png')}}">
<link rel="apple-touch-icon-precomposed" href="{{asset('template/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head>
<body>
<header id="header">
<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-sm-6 col-xs-4">

</div>

</div>
</div>
</div>
<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.html"><img src="{{asset('template/images/logo.png')}}" alt="logo"></a>
</div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
<li><a href="{{ url('index') }}">Home</a></li>
<li><a href="{{ url('about') }}"> Tentang Masjid</a></li>
<li class="active"><a href="{{ url('contact') }}">Kontak/Lokasi</a></li>
<li><a href="{{ url('login') }}">Login</a></li>
</ul>
</div>
</div>
</nav>
</header>
<section id="contact-info">
<div class="center">
<h2>How to Reach Us?</h2>
<!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->
</div>
<div class="gmap-area">
<div class="container">
<div class="row">
<div class="col-sm-5 text-center">
<div class="gmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.822122905909!2d106.83139!3d-6.17017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcafaf042d5840c6c!2sMasjid%20Istiqlal!5e0!3m2!1sid!2sid!4v1607854517451!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
<div class="col-sm-7 map-content">
<ul class="row">
<li class="col-sm-6">
<address>
<h5>Masjid</h5>
<p>Jl. Taman Wijaya Kusuma, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710<br>
Tumon, MP 96911<br><br>
RRHJ+WH Ps. Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</p>
<p>Phone:+62213811708 <br>
Email Address:Istiqlal@domain.com</p>
</address>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>
<!-- <section id="contact-page">
<div class="container">
<div class="center">
<h2>Drop Your Message</h2>
<p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<div class="row contact-wrap">
<div class="status alert alert-success" style="display:none"></div>
<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
<div class="col-sm-5 col-sm-offset-1">
<div class="form-group">
<label>Name *</label>
<input type="text" name="name" class="form-control" required="required">
</div>
<div class="form-group">
<label>Email *</label>
<input type="email" name="email" class="form-control" required="required">
</div>
<div class="form-group">
<label>Phone</label>
<input type="number" class="form-control">
</div>
<div class="form-group">
<label>Company Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-5">
<div class="form-group">
<label>Subject *</label>
<input type="text" name="subject" class="form-control" required="required">
</div>
<div class="form-group">
<label>Message *</label>
<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
</div>
</div>
</form>
</div>
</div>
</section>
<section id="bottom">
<div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Information</h3>
<ul>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Events</h3>
<ul>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Volunteer</h3>
<ul>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Recommended Links</h3>
<ul>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
</ul>
</div>
</div>
</div>
</div>
</section> -->
<footer id="footer" class="midnight-blue">
<div class="container">
<div class="row">
<div class="col-sm-6">
&copy; 2020 <a>Design and Developed by IT UMY</a>
</div>
<!-- <div class="col-sm-6">
<ul class="pull-right">
<li><a href="{{ url('index') }}">Home</a></li>
<li><a href="{{ url('about') }}">Tentang Masjid</a></li>
<li><a href="{{ url('contact') }}">Kontak/Lokasi</a></li>
<li><a href="{{ url('login') }}">Login</a></li>
</ul> -->
</div>
</div>
</div>
</footer>
<script src="{{asset('template/js/jquery.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('template/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('template/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('template/js/main.js')}}"></script>
<script src="{{asset('template/js/wow.min.js')}}"></script>
</body>
</html>