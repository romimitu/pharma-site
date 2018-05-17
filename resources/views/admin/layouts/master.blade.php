<!DOCTYPE html>
<html lang="en">    
    @include('admin.layouts.header')
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">    
        @include('admin.layouts.head')        
        <div class="page-container">
            @include('admin.layouts.sidebar')
            @yield('content')
        </div>
        <!-- END CONTAINER -->
       @include('admin.layouts.footer')
       @yield('script')
    </body>
</html>