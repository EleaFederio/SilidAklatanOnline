<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        @include('partials.sidebar')

        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')
        </div>

    </div>

    

    <script src={{ url("js/jquery.min.js") }}></script>
    <script src={{ url("js/popper.js") }}></script>
    <script src={{ url("js/bootstrap.min.js") }}></script>
    <script src={{ url("js/main.js") }}></script>
    <script src={{ url("js/jquery-ui.js") }}></script>
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
        $("#datepicker").datepicker();
    </script>

</body>
</html>