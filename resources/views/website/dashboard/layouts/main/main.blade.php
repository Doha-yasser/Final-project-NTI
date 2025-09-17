@include("website.dashboard.layouts.main.head")

<body>


    <!--======================================
        START HEADER AREA
    ======================================-->
    @include("website.dashboard.layouts.main.header")
    <!-- end header-menu-area -->
    <!--======================================
        END HEADER AREA
======================================-->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
    <section class="dashboard-area">
        @include("website.dashboard.layouts.main.sidebar")
        <!-- end off-canvas-menu -->
        <div class="dashboard-content-wrap">
            <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3">
                <i class="la la-bars mr-1"></i> Dashboard Nav
            </div>
            <div class="container-fluid">
                @yield("content")
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
    END DASHBOARD AREA
================================= -->

@include("website.dashboard.layouts.main.footer")

@include("website.dashboard.layouts.main.scripts")
</body>

</html>