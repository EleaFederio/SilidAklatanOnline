<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="//cdn.muicss.com/mui-0.10.1/css/mui.min.css" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ url('css').'/bootstrap.min.css' }}"> --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <title>Document</title>
    <style>
      .docheader{
        text-align: center;
      }
      .doctitle{
        text-align: center;
      }
      .page-break {
          page-break-after: always;
      }
      .pure-table{
        margin-left: auto;
        margin-right: auto;
      }
    </style>
</head>
<body>

  
    @foreach($students->chunk(30) as $chunk)
      <div class="container">
        <div class="docheader">
          <p class="text-center" style="margin:0"><small>Republic of the Philippine</small></p>
          <h4 class="text-center" style="margin:0">Bicol University Gubat Campus</h4>
          <p class="text-center" style="margin:0"><small>Pinotingan, Gubat, Sorsogon</small></p>
        </div>
        <div class="doctitle">
          <h2 class="text-center"><strong>LIBRARY STUDENT RECORD</strong></h2>
        </div>

        <table class="pure-table">
          <thead>
            <tr>
              <th>Student ID</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Middle Name</th>
            </tr>
          </thead>

        @foreach ($chunk as $student)
          <tr>
            <td> {{ $student->student_id }} </td>
            <td> {{ $student->lastname }} </td>
            <td> {{ $student->firstname }} </td>
            <td> {{ $student->middlename }} </td>
          </tr>
        @endforeach
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