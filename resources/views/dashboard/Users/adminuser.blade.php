@if (!(session()->has('user_email')))
    <script>
      window.location.href = "/Userlogin"
    </script>
@endif
<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
 
</head>

<body >
@include('dashboard/sidebar')
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control text-dark" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="\Dasboard//assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-blue pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="conta">
              <nav aria-label="breadcrumb">
                <h2 class="mx-3 text-white">ADMIN USER</h2>
                <ol class="breadcrumb bg-gradient-blue">
                  <li class="breadcrumb-item "><a href="#" class="text-info">User</a></li>
                  <li class="breadcrumb-item active text-white" aria-current="page">Add Admin User</li>
                  <li class="breadcrumb-item  text-white" aria-current="page"><a href="{{route('view.adminuser')}}"><Button class="btn btn-success mt--2">View</Button></a></li>
                </ol>
              </nav>
              
              <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="text-white" for="inputZip">Username</label>
                        <input type="text" name="adminuser_name" class="form-control" placeholder="Enter Username" id="inputZip">
                      </div>
                  <div class="form-group col-md-6">
                    <label class="text-white" for="inputEmail4">User Email</label>
                    <input type="text" name="adminuser_email" class="form-control" id="inputEmail4" placeholder="Enter Email">
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                      <label class="text-white" for="inputPassword4">User Password</label>
                      <input type="text" name="adminuser_password" class="form-control" id="inputPassword4" placeholder="Enter Password">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="text-white" for="inputAddress">User Address</label>
                      <input type="text" name="adminuser_address" class="form-control" id="inputAddress" placeholder="Address">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="text-white" for="inputAddress2">User Phone #</label>
                      <input type="text" name="adminuser_number" class="form-control" id="inputAddress2" placeholder="Enter phone no">
                    </div>
                  
                  <div class="form-group col-md-6">
                    <label class="text-white" for="inputState">Admin Role</label>
                    <select id="inputState" name="role" class="form-control">
                      <option selected>Choose...</option>
                      <option value="admin">Admin</option>
                      <option value="doctor">Doctor</option>
                     
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label class="text-white" for="inputZip">User Image</label>
                    <input type="file" name="adminuser_img" class="form-control" id="inputZip">
                  </div>
                  
                </div>
               
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label  class="form-check-label text-white" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      
      <!-- Dark table -->
      
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
</body>

</html>