<nav class="main-menu">
    <div class="navbar-header">
        <!-- Toggle Button -->    	
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    </div>
    
    <div class="navbar-collapse collapse clearfix">
        <ul class="navigation clearfix">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('menus') }}">Menu</a></li>
            <li><a href="{{ url('packages') }}">Packages</a></li>
            <li><a href="{{ url('galleries') }}">Gallery</a></li>
            <li><a href="{{ url('articles') }}">Articles</a></li>
            <li><a href="{{ url('about-us') }}">About us</a></li>
        </ul>
    </div>
</nav>