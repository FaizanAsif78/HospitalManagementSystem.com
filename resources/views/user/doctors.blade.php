<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/hospice/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 16:17:30 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="img/xfavicon.png.pagespeed.ic.OjBFGbwBdr.png" type="image/png">
<title>Doctors</title>
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

<body>

@include('user/navbar');


<section class="banner_area" style="margin-top: -40px;">
<div class="banner_inner d-flex align-items-center">
<div class="container">
<div class="banner_content text-left">
<h2>Consultants</h2>
<div class="page_link">
<a href="index-2.html">Home</a>
<a href="doctors.html">Consultants</a>
</div>
</div>
</div>
</div>
</section>


<section class="team-area section_gap">
<div class="container">
<div class="row justify-content-center section-title-wrap">
<div class="col-lg-12">
<h1>Our Offered Services</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p>
</div>
</div>
<div class="row justify-content-center d-flex align-items-center">

@foreach ($doctorsfet as $doctorsfet)
    

<div class="col-lg-3 col-md-6 single-team">

<div class="thumb">

<img class="img-fluid" src="storage/doctorimg/{{$doctorsfet['doctor_image']}}" alt="" width="200px" height="250px">
<div class="align-items-end justify-content-center d-flex">
<div class="social-links">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
<a href="#">
<i class="fa fa-twitter"></i>
</a>
<a href="#">
<i class="fa fa-dribbble"></i>
</a>
<a href="#">
<i class="fa fa-behance"></i>
</a>
</div>

<a style="margin: 0px auto" href="{{URL('/')}}/singlrdoc/{{$doctorsfet['doctor_id']}}" class=" text-white" >
<p class="text-white mt-5">
  {{$doctorsfet['doctor_name']}}
</p>
<h4 class="text-center">{{$doctorsfet['doctor_speciallist']}}</h4>
</a>
</div>
</div>
</div>

@endforeach
</div>
</div>
</section>
@if (session()->has('ok'))
<script>
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your Appoinment has been done Successfully',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

<footer class="footer-area section_gap">
<div class="container">
<div class="row">
<div class="col-lg-2  col-md-6">
<div class="single-footer-widget">
<h6>Top Products</h6>
<ul class="footer-nav">
<li>
<a href="#">Managed Website</a>
</li>
<li>
<a href="#">Manage Reputation</a>
</li>
<li>
<a href="#">Power Tools</a>
</li>
<li>
<a href="#">Marketing Service</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-4  col-md-6">
<div class="single-footer-widget mail-chimp">
<h6 class="mb-20">Contact Us</h6>
<p>
56/8, Santa bullevard, Rocky beach, San fransisco, Los angeles, USA
</p>
<h3>012-6532-568-9746</h3>
<h3>012-6532-568-97468</h3>
</div>
</div>
<div class="col-lg-6  col-md-12">
<div class="single-footer-widget newsletter">
<h6>Newsletter</h6>
<p>You can trust us. we only send promo offers, not a single spam.</p>
<div id="mc_embed_signup">
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" class="form-inline">
<div class="form-group row">
<div class="col-lg-7 col-md-6 col-sm-12">
<input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required type="email">
</div>
<div class="col-lg-5 col-md-12">
<button class="nw-btn main_btn circle">get started
<span class="lnr lnr-arrow-right"></span>
</button>
</div>
</div>
<div class="info"></div>
</form>
</div>
</div>
</div>
</div>
<div class="row footer-bottom d-flex justify-content-between">
<p class="col-lg-8 col-sm-12 footer-text m-0">
Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

</p>
<div class="col-lg-4 col-sm-12 footer-social">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
<a href="#">
<i class="fa fa-twitter"></i>
</a>
<a href="#">
<i class="fa fa-dribbble"></i>
</a>
<a href="#">
<i class="fa fa-behance"></i>
</a>
</div>
</div>
</div>
</footer>




<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"75cad2652ab1de57","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.10.3","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/hospice/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 16:17:33 GMT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</html>