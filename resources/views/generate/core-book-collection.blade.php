<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table-with-border {
            border: 1px solid #888888;
            text-align: left;
        }
        #books th {
            background-color: #053742 !important;
            color: #ffffff;
        }
        .pagenum:before {
            content: counter(page);
            z-index: 2;
            white-space: nowrap;
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
        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
        .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
        .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
        .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
        .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
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
        <p class="text-center"><strong>CORE BOOK COLLECTION</strong> <br> as {{ \Carbon\Carbon::now()->monthName }} {{ \Carbon\Carbon::now()->isoFormat(' DD, YYYY') }}</p>
    </div>

    <table id="books" class="table">
        <thead>
        <tr>
            <th class="text-center table-with-border" scope="col" style="border: 1px solid #888888; text-align: left;">Title</th>
            <th class="text-center table-with-border" scope="col">Call No.</th>
            <th class="text-center table-with-border" scope="col">Author</th>
            <th class="text-center table-with-border" scope="col">Publisher</th>
            <th class="text-center table-with-border" scope="col">Year</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            {{$counter = 0}}
        <tr scope="row">
            <td class="text-center table-with-border"> {{ $book->title }} </td>
            <td class="text-center table-with-border"> {{ $book->call_number }} </td>
            <td class="text-center table-with-border"> {{ $book->author }} </td>
            <td class="text-center table-with-border"> {{ $book->publisher }} </td>
            <td class="text-center table-with-border"> {{ $book->year }} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br><br>
    <table STYLE="">
        <tr><td width="220"> </td><td width="85"> </td><td width="220">Prepared by:</td></tr>
        <tr><td width="220"> </td><td width="85"> </td><td width="220"><br></td></tr>
        <tr><td width="220"> </td><td width="85"> </td><td class="text-center" width="220"><b>LINA E. CELOSA</b></td></tr>
        <tr><td width="220"> </td><td width="85"> </td><td class="text-center" width="220"><small>Librarian 1</small></td></tr>
    </table>
    <div class="page-break"></div>
</div>
{{--@endforeach--}}

<div class="footer">
    <p>Page <span class="pagenum"></span></p>
</div>

</body>
</html>
