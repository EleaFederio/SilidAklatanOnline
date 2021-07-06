<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        .pagenum:before {
            content: counter(page);
        }
        .container,
        .container-fluid,
        .container-sm,
        .container-md,
        .container-lg,
        .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container, .container-sm {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container, .container-sm, .container-md {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container, .container-sm, .container-md, .container-lg {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container, .container-sm, .container-md, .container-lg, .container-xl {
                max-width: 1140px;
            }
        }
        .text-center {
            text-align: center !important;
        }
        .table {
            border-collapse: collapse !important;
        }
        .table td,
        .table th {
            background-color: #fff !important;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6 !important;
        }
        .table-dark {
            color: inherit;
        }
        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #dee2e6;
        }
        .table .thead-dark th {
            color: inherit;
            border-color: #dee2e6;
        }
        .footer {
            width: 100%;
            text-align: center;
            position: fixed;
            bottom: 0px;
        }
    </style>
</head>
<body>


{{--@foreach($books->chunk(30) as $chunk)--}}
<div >
    <div class="docheader">
        <p class="text-center" style="margin:0"><small>Republic of the Philippine</small></p>
        <p class="text-center" style="margin:0">Bicol University Gubat Campus</p>
        <p class="text-center" style="margin:0"><small>Pinotingans, Gubat, Sorsogon</small></p>
        <p class="text-center mt-3"><strong>LIBRARY</strong></p>
        <p class="text-center"><strong>CORE BOOK COLLECTION</strong> <br> {{ \Carbon\Carbon::now()->monthName }} {{ \Carbon\Carbon::now()->isoFormat(' DD, YYYY') }}</p>
    </div>

    <table id="customers" class="table">
        <thead>
        <tr>
            <th class="text-center" scope="col">Title</th>
            <th class="text-center" scope="col">Call No.</th>
            <th class="text-center" scope="col">Author</th>
            <th class="text-center" scope="col">Publisher</th>
            <th class="text-center" scope="col">Year</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
        <tr scope="row">
            <td class="text-center"> {{ $book->title }} </td>
            <td class="text-center"> {{ $book->call_number }} </td>
            <td class="text-center"> {{ $book->author }} </td>
            <td class="text-center"> {{ $book->publisher }} </td>
            <td class="text-center"> {{ $book->year }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="page-break"></div>
</div>
{{--@endforeach--}}
<div class="footer">
    <p>Page <span class="pagenum"></span></p>
</div>

</body>
</html>
