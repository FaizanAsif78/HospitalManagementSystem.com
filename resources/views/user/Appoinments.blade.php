<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 
  @include('user/navbar')
<div class="container">
    <h1 class="text-center" style="margin-top: 100px"  >My Appointments</h1>
    <table class="table table-dark  " style="margin-top: 100px">

        <thead>
          <tr>
            <th scope="col">Doctor</th>
            <th scope="col">Patient</th>
            <th scope="col">Patient Number</th>
            <th scope="col">Patient Email</th>
            <th scope="col">Patient Age</th>
            <th scope="col">Patient Desease</th>
            <th scope="col">Appointment Date</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>

            @php
                $username = session()->get('user_email');
            @endphp
            @foreach ($Appoints as $appointment)

            @if ($appointment['user_email']==$username)
                
            <tr>
              
              <td>{{$appointment['doctor_name']}}</td>
              <td>{{$appointment['patient_name']}}</td>
              <td>{{$appointment['patient_no']}}</td>
              <td>{{$appointment['patiet_email']}}</td>
              <td>{{$appointment['patiet_age']}}</td>
              <td>{{$appointment['patient_desease']}}</td>
              <td>{{$appointment['appoint_date']}}</td>
              <td>
                @if ($appointment['status']==1)
                    <h2 class="badge bg-info">Awaiting</h2>
                    @else
                    <span class="badge bg-success">Completed</span>
                    
                @endif
                
            </td>
              
            </tr>
            @endif
                
            @endforeach
        </tbody>
      </table>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
