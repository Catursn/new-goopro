<!DOCTYPE html>
<html>
    @include('front.includes.head')
    <body>
        <div class="content">
            <!-------------------------------
            ------------NAVBAR START---------
            -------------------------------->
            @include('front.includes.navbar')
            <!-------------------------------
            -------------NAVBAR END----------
            -------------------------------->
            <!-- <div class="container-fluid"> -->
                @yield('main-content')
            <!-- </div> -->

            <!-------------------------------
            ------------FOOTER START---------
            -------------------------------->
            @include('front.includes.footer')
            <!-------------------------------
            -------------FOOTER END----------
            -------------------------------->
        </div>
    </body>
</html>