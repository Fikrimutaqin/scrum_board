<!doctype html>
<html lang="en">

<head>
    @include('includes.dashboard.header.index')
    <!--Add Style CSS-->
    @stack('add-css')
</head>

<body>
    <section class="main-dashboard container-fluid">
        <div class="row">
            @include('includes.dashboard.sidebar.index')
            @yield('content')
        </div>
    </section>

    @include('includes.dashboard.footer.index')
    @stack('add-js')
</body>

</html>
