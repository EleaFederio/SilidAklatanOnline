<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="//cdn.muicss.com/mui-0.10.1/css/mui.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous"> -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ url('css').'/bootstrap.min.css' }}"> --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <title>Document</title>
    <style>
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
      }
      #customers th {
        background-color: #053742;
        color: white;
      }
    </style>
</head>
<body>

  
    @foreach($students->chunk(30) as $chunk)
      <div class="container">
        <div class="docheader">
          <p class="text-center" style="margin:0"><small>Republic of the Philippine</small></p>
          <p class="text-center" style="margin:0">Bicol University Gubat Campus</p>
          <p class="text-center" style="margin:0"><small>Pinotingans, Gubat, Sorsogon</small></p>
          <p class="text-center mt-5"><strong>LIBRARY STUDENT RECORD</strong></p>
        </div>

        <table id="customers" class="table">
          <thead>
            <tr>
              <th class="text-center" scope="col">Student ID</th>
              <th class="text-center" scope="col">Last Name</th>
              <th class="text-center" scope="col">First Name</th>
              <th class="text-center" scope="col">Middle Name</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($chunk as $student)
              <tr scope="row">
                <td class="text-center"> {{ $student->student_id }} </td>
                <td class="text-center"> {{ $student->lastname }} </td>
                <td class="text-center"> {{ $student->firstname }} </td>
                <td class="text-center"> {{ $student->middlename }} </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="page-break"></div>
      </div>
    @endforeach

    {{-- <p class="text-center" style="margin:0">Republic of the Philippine</p>
    <h5 class="text-center" style="margin:0">Bicol University Gubat Campus</h5>
    <p class="text-center" style="margin:0"><small>Pinotingan, Gubat, Sorsogon</small></p>
    <br>
    <h4 class="text-center"><strong>LIBRARY</strong></h4>
    <br> --}}

  
</body>
</html>