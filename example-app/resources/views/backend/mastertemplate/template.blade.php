
<!DOCTYPE html>
<html lang="en">
  <head>
   <!--head-->
  @include('backend.includes.head')
     <!--css-->
      @include('backend.includes.css')
  </head>
  
  <body>
<!--sidebar--->
    @include('backend.includes.sidebar')

    <!--topbar-->
     @include('backend.includes.topbar')
    <!---rightbar-->
     @include('backend.includes.rightbar')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
     @yield('content')
     

      <!--footer-->
       @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!---script--->
     @include('backend.includes.script')
  </body>
</html>
