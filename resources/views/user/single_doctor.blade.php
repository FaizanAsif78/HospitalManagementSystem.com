<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vacation Rental - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    
    @include('user/navbar')
    <!-- END nav -->
    <div class="container">
        <div class="row">
            <h1>Room Nmae</h1>
        </div>
        <div class="row ">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="./rooms.php">Room</a></li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-6 p-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    @if (session()->has('logins_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         {{session()->get('logins_message')}}
                        <button type="button" class="close btn btn-danger mx-5" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                    @endif

                    <div class="img">
                        <img src="/storage/doctorimg/{{$getdocs['doctor_image']}}" class="d-block w-70 " alt="..."  height="350px">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-5 ">
                <h3>{{$getdocs['doctor_name']}}</h3>
                <h5 class="text-warning"><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></h5>
                <div class="row">
                   
                            <div class="col-lg-12">
                                <h5 class="text-dark mb-3">Specialize: <span class="p-5px " style="font-weight:400; width:100px; background:#f0f2f0; text-align:center;"> {{$getdocs['doctor_speciallist']}}</span></h5>
                            </div>
                </div>
                <div class="row">
                            <div class="col-lg-12">
                                <h5 class="text-dark">Degree: <span class="p-5px" style=" font-weight:400; background:#f0f2f0; text-align:center;"> {{$getdocs['doctor_Degree']}}</span></h5>
                            </div>                
                </div>
                <div class="col-lg-12 col-md-6 pt-60 pb-60 ">
                    <div class="appointment-right">
                      <form class="form-wrap  p-4 " style="background: #F7F7F9" method="POST">
                        @csrf
                        <h3 class="pb-20 text-center mb-20">Book an Appointment</h3>
                        <input type="text" class="form-control mb-3" name="patient_name" placeholder="Patient Name"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'">
                        <input type="text" class="form-control mb-3" name="patient_phone" placeholder="Phone " onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Phone'">
                        <input type="email" class="form-control mb-3" name="patient_email" placeholder="Email Address"
                          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                        <input id="datepicker1" name="patient_age" class="dates form-control mb-3" placeholder="Age" type="number">
                        <div class="form-group col-md-12">
                          <label class="text-white" for="inputState">Doctor Specialize</label>
                          <select id="inputState" name="D_specialist_id" class="form-control mb-3">                            
                            <option value="{{$getdocs['doctor_id']}}" selected>{{$getdocs['doctor_name']}}......{{$getdocs['doctor_speciallist']}}</option>
                            
                          </select>
                        </div>
                        <input id="datepicker2" class="dates form-control mb-3" name="appointdate" placeholder="appointment Date" type="date">
                        <textarea name=" patient_disease" class="form-control border border-light"  cols="60" rows="5" placeholder="Patient Desease" onfocus="this.placeholder = ''"
                          onblur="this.placeholder = 'Patient Desease'"></textarea>
                        <div class="text-center confirm_btn_box">
                          <button class="main_btn text-uppercase mt-3">Confirm Booking</button>
                        </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
        
        
    </div>


   



    <!-- loader -->
  


    


</body>

</html>
