<!doctype html>
<html>
@include('back.includes.head')
</html>
    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            @include('back.includes.navbar')
            @include('back.includes.sidebar')
            <!-- ============================================================== -->
            <!-- wrapper  -->
            <!-- ============================================================== -->
            <div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content">
                @include('back.includes.notif')
                @yield('main-content')
                </div>
                @include('back.includes.footer')
                <!-- ============================================================== -->
                <!-- end main wrapper -->
                <!-- ============================================================== -->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
        <!-- Optional JavaScript -->
        <script src="/backend/js/jquery/jquery-3.3.1.min.js"></script>
        <script src="/backend/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="/backend/js/slimscroll/jquery.slimscroll.js"></script>
        <script src="/backend/js/main-js.js"></script>
        @stack('scripts')
    </body>
 </html>