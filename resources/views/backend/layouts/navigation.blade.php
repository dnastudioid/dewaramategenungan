<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="#" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->name}}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">

          <!-- NAVIGATION ADMIN -->
          @if (Auth::user()->role == 'admin')
          <li><a href="{{Help::url('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a></li>
          <li><a><i class="fa fa-book"></i> Paket <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#">Tambah Paket</a></li>
              <li><a href="#">Paket</a></li>
            </ul>
          </li>
          <li><a href="{{url('')}}"><i class="fa fa-user"></i> Profile </a></li>
          @endif
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->
  </div>
</div>