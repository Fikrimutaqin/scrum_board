<!doctype html>
<html lang="en">

<head>

    @include('includes.authentication.header.index')
    <!--Add Style CSS-->
    @stack('add-css')

</head>

<body class="bg-primary">


    @yield('content')

    @include('includes.authentication.footer.index')
    <!--Add Style JS-->
    @stack('add-js')

</body>

</html>
