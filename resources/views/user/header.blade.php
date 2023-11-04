<header class="header-default">
    <nav class="navbar navbar-expand-lg">
        <div class="container-xl">
            <!-- site logo -->
            <a class="navbar-brand" href="{{ route('user.index') }}"><img src="" alt="logo" /></a> 

            <div class="collapse navbar-collapse">
                <!-- menus -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{ route('user.index') }}">Home</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Magazine</a></li>
                            <li><a class="dropdown-item" href="#">Personal</a></li>
                            <li><a class="dropdown-item" href="#">Personal Alt</a></li>
                            <li><a class="dropdown-item" href="#">Minimal</a></li>
                            <li><a class="dropdown-item" href="#">Classic</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.categories.index') }}">Category</a></li>
                            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                            <li><a class="dropdown-item" href="blog-single-alt.html">Blog Single Alt</a></li>
                            <li><a class="dropdown-item" href="about.html">About</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.contact.index') }}">Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.contact.index') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- header right section -->
            <div class="header-right">
                <!-- social icons -->
                <ul class="social-icons list-unstyled list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <!-- header buttons -->
                <div class="header-buttons">
                    <a href="{{ route('user.login.index') }}" class="icon-button">
                        <i class="fas fa-user"></i>
                    </a>
                    <button class="search icon-button">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="burger-menu icon-button">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>