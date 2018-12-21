<div class="nav-icon">		
    <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                <li><a class="active" href="{{url('/')}}">Home</a></li>
                <li><a  href="menu.html">Menus</a></li>
                <li><a  href="blog.html">Packages</a></li>
                <li><a  href="typo.html">Galleries</a></li>
                <li><a  href="{{url('article')}}">Articles</a></li>
                <li><a  href="contact.html">About Us</a></li>
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