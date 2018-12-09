<div class="nav-icon">		
    <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a  href="menu.html">Menu</a></li>
                <li><a  href="blog.html">Blog</a></li>
                <li><a  href="typo.html">Codes</a></li>
                <li><a  href="events.html">Events</a></li>
                <li><a  href="contact.html">Contact</a></li>
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