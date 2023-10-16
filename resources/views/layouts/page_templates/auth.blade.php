<div class="wrapper">
    <div class="stiky-top">
      @include('layouts.header.auth')
      @include('layouts.sidebar.auth')
    </div>
    <div class="container-fluid" style="background-color:#eff7ff5e;height:91vh;overflow-x:auto;box-shadow: inset 1px 5px 10px 1px rgba(0,0,0,0.05);">
      <div class='p-2 col row'>
        <div class="panel panel-default">
          @yield('content')
        </div>
      </div>
    </div>
    @include('layouts.footer.auth')
  </div>
</div>
