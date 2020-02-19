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

    

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>