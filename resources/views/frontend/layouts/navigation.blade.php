<div class="nav-icon">		
    <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                <li><a class="{{$activeMenu == 'home' ? 'active' : ''}}" href="{{url('/')}}">Home</a></li>
                <li><a class="{{$activeMenu == 'menus' ? 'active' : ''}}" href="menu.html">Menus</a></li>
                <li><a class="{{$activeMenu == 'packages' ? 'active' : ''}}" href="{{ url('packages') }}">Packages</a></li>
                <li><a class="{{$activeMenu == 'galleries' ? 'active' : ''}}" href="typo.html">Galleries</a></li>
                <li><a class="{{$activeMenu == 'articles' ? 'active' : ''}}" href="{{url('article')}}">Articles</a></li>
                <li><a href="contact.html">About Us</a></li>
            </ul>
        </div>
    <script>
    $('.navicon').on('click', function (e) {
      e.preventDefault();
      $(this).toggleClass('navicon--active');
      $('.toggle').toggleClass('toggle--active');
    });
    </script>
</div>