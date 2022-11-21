
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="\UserFrontend/css/A.style.css%2bresponsive.css%2cMcc.LIJsrza3B-.css.pagespeed.cf.pH71K67LFL.css" />

  </head>
  <body>
    <header class="header_area">

        <div class="main_menu">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
    
              <a class="navbar-brand logo_h" href="index-2.html">
                <img src="\UserFrontend/img/xlogo.png.pagespeed.ic.fTqN_WhrHT.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
    
              <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <div class="row ml-0 w-100">
                  <div class="col-lg-12 pr-0" style="justify-content: space-between">
                    <ul class="nav navbar-nav center_nav pull-right">
                      <li class="nav-item {{Request::is('/')?'active':'';}} ">
                        <a class="nav-link " href="{{route('home.page')}}">Home</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link " href="departments.html">Departments</a>
                      </li>
                      <li class="nav-item {{Request::is('userdoctors')?'active':'';}} ">
                        <a class="nav-link " href="{{route('doctor.page')}}">Doctors</a>
                      </li>
                      <li class="nav-item  submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" role="button"
                          aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link " href="blog.html">Blog</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="single-blog.html">Blog Details</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link " href="contact.html">Contact</a>
                      </li>
                      @if (session()->has('user_email'))
                          
                      <li>
                        <div class="dropdown mt-3">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Profile
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <a href="{{route('user.profile')}}"><button class="dropdown-item" type="button">Profile</button></a>
                          <a href="{{route('user.logout')}}"><button class="dropdown-item" type="button">logout</button></a>
                          <a href="{{route('user.appointment')}}"><button class="dropdown-item" type="button">Appointments</button></a>
                        </div>
                      </div>
                    </li>
                      @else
                          
                      <li>
                        <a href="{{route('user.login')}}"><button class="btn btn-outline-info mt-3" >login</button>
                        </li>
                      </a>
                      @endif

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <script src="\UserFrontend/js/jquery-3.2.1.min.js"></script>
      <script src="\UserFrontend/js/popper.js"></script>
      <script src="\UserFrontend/js/bootstrap.min.js"></script>
      <script src="\UserFrontend/js/stellar.js"></script>
      <script src="\UserFrontend/vendors/lightbox/simpleLightbox.min.js"></script>
      <script src="\UserFrontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
      <script src="\UserFrontend/vendors/isotope/imagesloaded.pkgd.min.js"></script>
      <script src="\UserFrontend/vendors/isotope/isotope-min.js"></script>
      <script src="\UserFrontend/vendors/owl-carousel/owl.carousel.min.js"></script>
      <script src="\UserFrontend/vendors/jquery-ui/jquery-ui.js"></script>
      <script src="\UserFrontend/js/jquery.ajaxchimp.min.js"></script>
      <script src="../../../cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
      <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="\UserFrontend/js/mail-script.js"></script>
    
      <script src="\UserFrontend/js/custom.js"></script>
    
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
    
        gtag('config', 'UA-23581568-13');
      </script>
      <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"75cad2703b89d1e8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.10.3","si":100}'
        crossorigin="anonymous"></script>
  </body>
  </html>