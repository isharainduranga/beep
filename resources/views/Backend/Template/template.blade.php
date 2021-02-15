<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 13:43:16 GMT -->

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--include all header scripts and links--}}
    @include('Backend.Template.header')

</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('Backend.Template.topnav')
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    @include('Backend.Template.bottomnav')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('Backend.Template.sidenav')
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                {{-- content area load --}}
                @include($content)
                {{-- content area load end --}}
            </div>
            {{-- footer section  --}}
            @include('Backend.Template.footer')
            {{-- footer section end --}}

        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('Backend.Template.scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo3/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Mar 2020 13:43:18 GMT -->

</html>